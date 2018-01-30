<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Models\Leader;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Mail;
use App\Mail\verifyeEmail;
use Session;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // $dtype = Leader::create([
        //     'gname'=>'kaml',
        //     'users_id'=>'2'



        //]);


        $user =User::create([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'remember_token'=>Str::random(40),
            'Isadmin' =>'0',
            'state'=>'0',

        ]);

        $thisUser = User::findOrFail($user->id);
        $this->sendEmail($thisUser);
         return $user;
    }

    public function sendEmail($thisUser){

        Mail::to($thisUser['email'])->send(new verifyeEmail($thisUser));

    }

    public function verifyEmialFirst()
    {
        return view('emails.verifyEmialFirst');
    }

    public function sendEmailDone($email,$remember_token){

        $user =User::Where(['email'=>$email,'remember_token'=>$remember_token])->first();
        if($user){
            user::where(['email'=>$email,'remember_token'=>$remember_token])->update(['state'=>'1','remember_token'=>NULL]);
            Session::flash('Success','Registation Success');

            return redirect('login');
        }else{
            return "user not found";
        }

    }


}
