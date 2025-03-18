<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    //
    public function views(Request $request){
        return view("dashboard");
    }
}