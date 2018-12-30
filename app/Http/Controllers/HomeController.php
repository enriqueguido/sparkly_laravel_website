<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller {

    public function create()
    {
        return view('home.create');
    }

    public function store()
    {
	    $home = [];

	    $home['name'] = $request->get('name');
	    $home['email'] = $request->get('email');
	    $home['msg'] = $request->get('msg');

	    // Mail delivery logic goes here

	    flash('Your message has been sent!')->success();

	    return redirect()->route('home.create');
    }

}