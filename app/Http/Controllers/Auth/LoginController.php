<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\JWTAuth;
use Socialite;
use Illuminate\Support\Facades\Auth;

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
   // protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function credentials(Request $request)
    {
       // return $request->only($this->username(), 'password');
        return ['email'=>$request{$this->username()},'password'=>$request->password,'state'=>'1'];
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $fbuser = Socialite::driver('facebook')->user();
        $findUser =User::where('email',$fbuser->email)->first();
        if($findUser){
            Auth::login( $findUser);
            return redirect()->route('home');
        }else{
            //return $user->name;
            $user = new User;
            $user->name=$fbuser->name;
            $user->email=$fbuser->email;
            $user->last_name='FB user';
            $user->password=bcrypt('123456');
            $user->Isadmin=0;
            $user->state=1;
            $user->save();
            Auth::login($user);
            return redirect()->route('home');
        }
    }



}
