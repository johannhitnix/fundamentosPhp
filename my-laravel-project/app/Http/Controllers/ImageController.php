<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Image;

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
}
