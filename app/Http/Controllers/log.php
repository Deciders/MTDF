<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class log extends Controller
{
    public function login(Request $request )
    {
        //$item = User::find($email);
        $item = DB::table('users')->where('email',$request->email)->first();

       if($item==null){

          return response()->json(['message'=>'fail'],201);
       }

        if ($item->email==$request->email && $item->password==$request->password ){
            return response()->json(['message'=>'success' ],201);
        }else{
            return response()->json(['message'=>'fail'],201);
        }
        //return response()->json(['message'=>$item],201);
    }
}
