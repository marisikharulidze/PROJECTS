<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function signin(){
        return view('signin');
    }

    public function register(){
        return view('register');
}

    public function profile(){
        return view('profile');
    }
    
    public function dresses(){
        return view('dresses');
    }
    
}
