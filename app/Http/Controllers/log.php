<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
class log extends Controller
{
    public function login( $email,$password )
    {

        $item = DB::table('users')->where('email', $email)->first();
        if($item==null){

            return response()->json(['message' => 'fail'], 201);
        }

        if (Hash::check($password, $item->password) &&  $item->email==$email ) {
            return response()->json(['message' => 'success'], 201);
        }
        return response()->json(['message' => 'fail'], 201);


    }



}
