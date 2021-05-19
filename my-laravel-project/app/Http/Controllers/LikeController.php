<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Like;

class LikeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $user = \Auth::user();
        $likes = Like::where('user_id', $user->id)
                     ->orderBy('id', 'desc')
                     ->paginate(5);

        return view('like.index',[
            'likes' => $likes
        ]);
    }
    public function like($image_id){
        // #1 get data
        $user = \Auth::user();

        // #2 check if like already exists
        $isset_like = Like::where('user_id', $user->id)
                            ->where('image_id', $image_id)
                            ->count();
        // #3 set data
        if($isset_like == 0){
            $like = new Like();
            $like->user_id = (int) $user->id;
            $like->image_id = (int) $image_id;
            // #4 save
            $like->save();

            return response()->json([
                'like' => $like
            ]);
        }else{
            return response()->json([
                'msg' => 'like already exists'
            ]);
        }
    }
    public function dislike($image_id){
        // #1 get data
        $user = \Auth::user();

        // #2 check first match ELOQUENT
        $like = Like::where('user_id', $user->id)
                            ->where('image_id', $image_id)
                            ->first();
        // #3 set data
        if($like){
            // #4 DELETE
            $like->delete();

            return response()->json([
                'like' => $like,
                'msg' => 'you disliked'
            ]);
        }else{
            return response()->json([
                'msg' => 'like doesn\'t exist'
            ]);
        }
    }    
}
