<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function getSignup()
    {
        // enable or disable registration
        if(ENV('ENABLE_REGISTRATION') === false)
        {
            return redirect()->action('AuthController@getSignin')->with('error', 'Registration is disabled.');
        }

        return View('pages.auth.sign-up');
    }

    public function postSignup(Request $request)
    {
        // enable or disable registration
        if(ENV('ENABLE_REGISTRATION') === false)
        {
            return redirect()->action('AuthController@getSignin')->with('error', 'Registration is disabled.');
        }

        $this->validate($request, [
            "username" => "required|unique:users",
            "email" => "email|unique:users|required",
            "password" => "required"
        ]);

        // create the user
        $user = new User();
        $user->CreateUser($request);

        return redirect()->action('AdminController@getKeys')->with('success', 'You have registered. Please login');
    }

    public function getSignin()
    {
        return View('pages.auth.sign-in');
    }


    public function postSignin(Request $request)
    {

        $this->validate($request, [
            "email" => "required",
            "password" => "required"
        ]);

        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
            return redirect()->action('AdminController@getKeys');
        }

        //failed login
        return redirect()->back()->with('error', 'You have entered the wrong information.')->withInput();
    }

    public function getLogout()
    {
        Auth::logout();

        return redirect()->action('AuthController@getSignin')->with('success', 'You have logged out');
    }
}
