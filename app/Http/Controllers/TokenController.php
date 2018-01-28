<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Mockery\Exception;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;

class TokenController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function auth(Request $request)
    {
        $credentials = $request->only('email','password');

        $validator = Validator::make($credentials , [

            'email' => 'required|email',
            'password' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(['coad' =>1,'message'=>'validation faild','errors'=>$validator->errors()],422);

        }

        $token =JWTAuth::attempt($credentials);


            if($token){
                return response()->json(['token'=>$token]);
            }else{
                return response()->json(['coad'=>2,'message'=>'invalid']);
            }


    }

    public function refresh()
    {
        $token = JWTAuth::getToken();
        try{
            $token =JWTAuth::refresh($token);
            return response()->json(['token'=>$token]);

        }catch (TokenExpiredException $exception){
           throw new HttpResponseException( Response::josn(['msg'=>"Need to Login Again"]));
        }
    }
   //when try to log out from the application we have unvalidate
    public function invalidate()
    {
        $token =JWTAuth::getToken();

        try{
         $token =JWTAuth::invalidate($token);
         return response() ->json(['token'=>$token]);
        }catch (Exception $exception){

        }

    }

}
