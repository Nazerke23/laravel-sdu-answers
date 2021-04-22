<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function profile(){
        return view('profile', array('user' => Auth::user()));
    }

    public function update_avatar(Request $request){


        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $extension = $avatar->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename));
            

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();

           
        }

        return view('profile', array('user' => Auth::user()));
      
        
       










    }
}
