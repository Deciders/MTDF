<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\JWTAuth;

class LoginController extends Controller
{




    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

//    public function Authenticate(Request $request)
//    {
//        $credentials = $request->only('email','password');
//
//        try{
//            if (! $token= JWTAuth::attempt($credentials)){
//                return $this->response->json(['erro' =>'User crentials are not correct'],401);
//            }
//        }catch (JWTException $ex){
//            return $this->response->json(['erro' =>'something went wrong'],500);
//        }
//        return $this->response->json(compact('token'));
//    }

}
