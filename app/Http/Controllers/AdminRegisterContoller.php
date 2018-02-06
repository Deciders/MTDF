<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminRegisterContoller extends Controller
{
    public function register(Request $request){

        return $request->all();

    }
}
