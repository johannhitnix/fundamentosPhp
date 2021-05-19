<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Image;
use App\Comment;
use App\Like;

class ImageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function create(){
        return view('image.create');
    }
    public function save(Request $req){
        // validacion
        $validate = $this->validate($req, array(
            'description' => 'required',
            'image_path' => 'required|mimes:jpg,jpeg,png,gif'
        ));
        // get data
        $img = $req->file('image_path');
        $desc = $req->input('description');
        // set values to obj
        $user = \Auth::user();
        $image = new Image();
        $image->user_id = $user->id;
        $image->description = $desc;
        
        // upload file via Storage
        if($img){
            $path = time() . $img->getClientOriginalName();
            Storage::disk('images')->put($path, File::get($img));
            $image->image_path = $path;
        }
        $image->save();

        return redirect()->route('home')->with([
            'msg' => 'photo successfully uploaded!'
        ]);
    }
    public function getImage($filename){
        $file = Storage::disk('images')->get($filename);
        return new Response($file, 200);
    }
    public function detail($id){
        $image = Image::find($id);

        return view('image.detail', array(
            'img' => $image
        ));
    }
    public function delete($id){
        // #1 get data via objects
        $user = \Auth::user();
        $image = Image::find($id);
        $comments = Comment::where('image_id', $id)->get();
        $likes = Like::where('image_id', $id)->get();

        // #2 check if owner
        if($user && $image && $user->id == $image->user_id){
            // delete comments via ORM
            if($comments && count($comments) > 0){
                foreach ($comments as $comment) {
                    $comment->delete();
                }
            }
            // delete likes via ORM
            if($likes && count($likes) > 0){
                foreach ($likes as $like) {
                    $like->delete();
                }
            }
            // delete file via Storage
            Storage::disk('images')->delete($image->image_path);

            // delete image in db
            $image->delete();

            $msg = array('msg' => 'image deleted successfully');
        }else{
            $msg = array('msg' => 'could not delete image');
        }
        return redirect()->route('home')->with($msg);
    }
    public function edit($id){
        // get data
        $user = \Auth::user();
        $image = Image::find($id);

        // check if owner
        if($user && $image && $image->user_id == $user->id){
            return view('image.edit', array(
                'img' => $image
            ));
        }else{
            return redirect()->route('home');
        }
    }
    public function update(Request $req){
        
        // validate
        $validate = $this->validate($req, array(
            'description' => 'required',
            'image_path' => 'mimes:jpg,jpeg,png,gif'
        ));
        // get data
        $img_id = $req->input('image_id');
        $desc = $req->input('description');
        $img = $req->file('image_path');
        // get Image obj
        $image = Image::find($img_id);
        $image->description = $desc;
        // upload file via Storage
        if($img){
            $path = time() . $img->getClientOriginalName();
            Storage::disk('images')->put($path, File::get($img));
            $image->image_path = $path;
        }
        // Update
        $image->update();

        // redirect
        return redirect()->route('image.detail', ['id' => $img_id])
                         ->with(['msg' => 'image successfully updated!']);
    }
}
