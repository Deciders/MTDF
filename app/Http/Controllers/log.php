<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
class log extends Controller
{
    public function login( Request $request )
    {


        $item = DB::table('users')->where('email',$request->email)->first();

        if($item==null){

            return response()->json(['message' => 'fail'], 201);
        }

        if (Hash::check($request->password, $item->password) &&  $item->email==$request->email ) {
            return response()->json(['message' => 'success'], 201);
        }
        return response()->json(['message' => 'fail'], 201);


    }



}
