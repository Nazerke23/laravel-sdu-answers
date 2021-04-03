<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){

       $this->validate($request, [
           'name' => 'required|max:255',
           'username' => 'required|max:255',
           'email' => 'required|email|max:255',
           'password' => 'required|confirmed',
       ]);

       $user = User::create([
           'name' => $request->name,
           'username' => $request->username,
           'email' => $request->email,
           'password' =>Hash::make($request->password),
       ]);

       //auth()->attempt($request->only('email', 'password'));

       Auth::attempt($request->only('email', 'password'));

       Mail::to($request['email'])->send(new WelcomeMail($user));

       return redirect()->route('dashboard');
    }



    // protected function create(array $data)
    // {
    //     $user =  User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => bcrypt($data['password']),
    //     ]);

    //     Mail::to($data['email'])->send(new WelcomeMail($user));

    //     return $user;
    // }
}
