<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class auto extends Controller
{
    public function edit(){
        return view('edit');
    }
    public function delete(){
        return view('delete');
    }
}
