<?php

class UsersController extends BaseController
{
    public function __construct()
    {
        $this->beforeFilter('csrf', ['on' => 'post']);
    }

    public function showSignUp()
    {
        return View::make('signup');
    }

    public function signUp()
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

            return Redirect::to('signin')
                ->with('class', 'alert alert-success')
                ->with('message', 'You successfully created an account.');
        }

        return Redirect::to('signup')
            ->with('message', 'The following errors occurred')
            ->with('class', 'alert alert-danger')
            ->withErrors($validator)
            ->withInput();
    }

    public function showSignIn()
    {
        return View::make('signin');
    }

    public function signIn()
    {
        if(Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')]))
        {
            //redirect to intended page (eg checkout), or if none intended redirect to home
            return Redirect::intended('/');
        }

        return Redirect::to('signin')
            ->with('class', 'alert alert-danger')
            ->with('message', 'There was a problem with your email/password');
    }

    public function signOut()
    {
        Auth::logout();
        return Redirect::to('signin')
            ->with('class', 'alert alert-success')
            ->with('message', 'Sign out Succussful');
    }

}

