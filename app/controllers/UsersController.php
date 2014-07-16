<?php

class UsersController extends BaseController
{

    public function __construct()
    {
        $this->beforeFilter('csrf', ['on' => 'post']);
    }

    public function create()
    {
        return View::make('signup');
    }

    public function store()
    {
        $validator = Validator::make(Input::all(), User::$rules);

        if($validator->passes())
        {
            $user = new User;
            $user->firstname = Input::get('firstname');
            $user->lastname = Input::get('lastname');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->save();

            return Redirect::to('users/signin')
                ->with('message', 'You successfully created an account.');
        }

        return Redirect::to('users/signup')
            ->withErrors($validator)
            ->withInput();
    }

    public function getSignin()
    {
        return View::make('signin');
    }

    public function postSignin()
    {
        if(Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')]))
        {
            return Redirect::to('/')->with('message', 'Sign in Succussful');
        }

        return Redirect::to('users/signin')
            ->with('message', 'There was a problem with your email/password');
    }

    public function getSignout()
    {
        Auth::logout();
        return Redirect::to('users/signin')->with('message', 'You just signed out.');
    }


}

