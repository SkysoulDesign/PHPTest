<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class AuthController
 *
 * @package App\Http\Controllers
 */
class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    /**
     * @todo Validation
     */
    public function logging(Request $request)
    {
        /**
         * Messy...and improper.. but works
         */
        $user = User::whereEmail($request->input('email'))->where('password', $request->input('password'))->first();

        if ($user) {
            auth()->login($user);
            return redirect()->route('home');
        }

        return redirect()->back()->withInput()->withErrors('Invalid Email or Password');
    }

    /**
     * @todo encrypt password...
     */
    public function registering(Request $request)
    {
        $user = User::create($request->all());
        Auth::login($user);

        return redirect()->route('home');
    }

}
