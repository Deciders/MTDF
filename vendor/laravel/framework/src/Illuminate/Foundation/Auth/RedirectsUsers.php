<?php

namespace Illuminate\Foundation\Auth;
use Illuminate\Support\Facades\Auth;


trait RedirectsUsers
{
    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }
   // check wather user is admin or not

        if(Auth::user()->Isadmin==0){
            return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
        }else{
            return property_exists($this, 'redirectTo') ? $this->redirectTo : 'admin';
        }


    }
}
