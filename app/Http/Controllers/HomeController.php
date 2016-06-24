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
            'serialNumber'  => "admin",
            'isFbLogin'  => Input::get('isFbLogin'),
            'FbEmail'  => Input::get('FbEmail'),
            'FbName'  => 'admin',
            'FbserialNumber'  => Input::get('FbserialNumber')
        );

        $isFbLogin = $userdata['isFbLogin'];
        $FbEmail = $userdata['FbEmail'];
        $FbName = $userdata['FbName'];
        $FbserialNumber = (string)$userdata['FbserialNumber'];
        $userWithFaceBook = false;
        $userWithEmail = false;
        $userWithSerialNumber = false;


        // return compact('FbserialNumber');

        if($isFbLogin){
            $createUser = array(
                'name'     => $FbName,
                'email'     => $FbEmail,
                'serialNumber' => 'admin',
            );

            if( !$createUser['email'] )
                return Redirect::to('/')->with('message', '登入失敗，請輸入正確資料！');
            $user = $userWithFaceBook = User::firstOrCreate($createUser);
        }

        else{

            $userWithSerialNumber = User::where('serialNumber', $userdata['serialNumber'])->first();
            $user = $userWithSerialNumber;
            $userWithEmail = User::where('email', $userdata['email'])->first();

            $userWithEmail = isset($userWithEmail);
            $userWithSerialNumber = isset($userWithSerialNumber);

            if( $userdata['email'] != '')
                $user = User::where('email', $userdata['email'])->first();
        }

        $isLogin = $userWithEmail || $userWithSerialNumber || $userWithFaceBook;

        // attempt to do the login
        if ($isLogin && $user && Auth::loginUsingId($user['id'])) {

            // validation successful!
            // redirect them to the secure section or whatever
            // return Redirect::to('secure');
            // for now we'll just echo success (even though echoing in a controller is bad)
            //echo $user;
            return Redirect::to('speakers');
        } else {

            // validation not successful, send back to form
            return Redirect::to('/')->with('message', '登入失敗，請輸入正確資料！');

        }
    }
    public function doLogout()
    {
        Auth::logout(); // log the user out of our application
        return Redirect::to('/'); // redirect the user to the login screen
    }
}
