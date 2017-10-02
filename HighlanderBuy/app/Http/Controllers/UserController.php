<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
	//The index function that retruns the index view from the index.blade.php
    public function index()
    {
    	return view('users.login');
    }
    //The createAccount function that retruns the creates-account view from the create-account.blade.php
    public function create()
    {
    	return view('users.create');
    }
    //The profile function that retruns the profile view from the profile.blade.php
    public function profile()
    {
        return view('users.profile');
    }
    //The store function updates the database using a post request
    public function store()
    {
        $post = new User;
        $post->fName = request('fName');
        $post->lName = request('lName');
        $post->email = request('email');
        $post->password = request('password');
        $post->save();
        return redirect('/listings/showall');
    }
}
