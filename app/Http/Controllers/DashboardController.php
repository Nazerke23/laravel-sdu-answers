<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

use App\Mail\PostLiked;
use App\Models\Post;
use Illuminate\Http\Request;


class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

        
    public function languageDemo(){
        return view('languageDemo');

    }
    

    public function index(){

        $user = auth()->user();

        

        return view('dashboard');
    }
}
