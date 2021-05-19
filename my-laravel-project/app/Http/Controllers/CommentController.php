<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function save(Request $req){
        // #1 validar
        $validate = $this->validate($req, array(
            'image_id' => 'integer|required',
            'content' => 'string|required'
        ));
        // #2 recoger
        $user = \Auth::user();
        $image_id = $req->input('image_id');
        $content = $req->input('content');
        // #3 asignar
        $comment = new Comment();
        $comment->user_id = $user->id;
        $comment->image_id = $image_id;
        $comment->content = $content;
        // #4 guardar
        $comment->save();
        // #5 redireccionar
        return redirect()->route('image.detail', ['id' => $image_id])
                         ->with(['msg' => 'comment successfully published!']);
    }
    public function delete($id){
        // #1 get logged data-user
        $user = \Auth::user();
        // #2 get comment obj
        $comment = Comment::find($id);
        // #3 check if I'm the owner
        if($user && ($comment->user_id == $user->id || $comment->image->user_id == $user->id)){
            // #4 delete
            $comment->delete();
            // #5 redirect
            return redirect()->route('image.detail', ['id' => $comment->image->id])
                         ->with(['msg' => 'comment deleted!']);
        } else{
            // #5 redirect
            return redirect()->route('image.detail', ['id' => $comment->image->id])
                         ->with(['msg' => 'could not delete!']);
        }
    }
}