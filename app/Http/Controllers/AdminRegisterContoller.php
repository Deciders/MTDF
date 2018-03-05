<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;

use App\Models\Leader;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Mail;
use App\Mail\verifyeEmail;
use Session;

class AdminRegisterContoller extends Controller
{
    public function register(Request $request){

       // $this->validation($request);
        $user =User::create([
            'name' => $request['name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'remember_token'=>Str::random(40),
            'Isadmin' =>'1',
            'state'=>'0',

        ]);

        $thisUser = User::findOrFail($user->id);
        $this->sendEmail($thisUser);

        return view ('emails.verifyEmialFirst');
    }

    public function sendEmail($thisUser){

        Mail::to($thisUser['email'])->send(new verifyeEmail($thisUser));

    }







    public function validation($request)

    { return $this->validate($request,[
        'name' => 'required|max:255',
        'last_name' =>'required|max:255',
        'email' => 'required|max:255|unique:users',
        'password' => 'required|max:255|confirmed',
    ]);

    }
}



