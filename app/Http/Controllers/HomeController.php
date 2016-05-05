<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Redirect;
use App\User;

class HomeController extends Controller
{
    public function showLogin()
    {
        // show the form
        return view('auth/login');
    }

    public function doLogin()
    {
        // validate the info, create rules for the inputs
        // create our user data for the authentication
        $userdata = array(
            'email'     => Input::get('email'),
            'password'  => Input::get('password'),
        );

        $user = User::where('email', $userdata['email'])->first();

        // attempt to do the login
        if ($user && Auth::loginUsingId($user['id'])) {

            // validation successful!
            // redirect them to the secure section or whatever
            // return Redirect::to('secure');
            // for now we'll just echo success (even though echoing in a controller is bad)
            //echo $user;
            return Redirect::to('speaker');
        } else {

            // validation not successful, send back to form
            return Redirect::to('login');

        }
    }
    public function doLogout()
    {
        Auth::logout(); // log the user out of our application
        return Redirect::to('login'); // redirect the user to the login screen
    }
}
