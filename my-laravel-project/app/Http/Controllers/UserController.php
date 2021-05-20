<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\User;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index($search = null){
        if(!empty($search)){
            $users = User::where('nick', 'LIKE', '%'.$search.'%')
                            ->orWhere('name', 'LIKE', '%'.$search.'%')
                            ->orWhere('surname', 'LIKE', '%'.$search.'%')
                            ->orderBy('id', 'desc')
                            ->paginate(5);
        }else{
            // usuarios con paginacion
            $users = User::orderBy('id', 'desc')->paginate(5);
        }

        return view('user.index', array(
            'users' => $users
        ));
    }
    public function config(){
        return view('user.config');
    }
    public function update(Request $request){
        // Conseguir usuario identificado
        $user = \Auth::user();
        $id = $user->id;
        // form validation
        $validate = $this->validate($request, array(
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'nick' => ['required', 'string', 'max:255', 'unique:users,nick,'.$id],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id]
        ));
        // get form data
        $name = $request->input('name');
        $surname = $request->input('surname');
        $nick = $request->input('nick');
        $email = $request->input('email');

        // Asignar nuevos valores al objeto del usuario
        $user->name = $name;
        $user->surname = $surname;
        $user->nick = $nick;
        $user->email = $email;
        
        // subir la imagen se usa propiedad file
        $image = $request->file('image');
        if($image){
            // poner nombre unico
            $path = time() . $image->getClientOriginalName();
            // uso de storage, guarda en (storage/app/users)
            Storage::disk('users')->put($path, File::get($image));

            $user->image = $path;
        }

        // Query exe
        $user->update();
        // el valor en with se llama como {{ session('msg') }} en la vista
        return redirect()->route('config')->with(['msg' => 'User successfully updated!']);
    }
    public function getImage($filename){
        $file = Storage::disk('users')->get($filename);
        return new Response($file, 200);
    }
    public function profile($id){
        $user = User::find($id);

        return view('user.profile', ['user' => $user]);
    }    
}
