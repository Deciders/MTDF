<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;

class AccountController extends Controller
{
    public function _construct()
    {
      $this->middleware('JWT.auth');
    }


    public function index()
    {
       $user =JWTAuth::toUser();
       return response()->json($user);
    }
}
