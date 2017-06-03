<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{

    public function index($name='World')
    {
        return view('hello', ['name' => $name]);
    }

    public function render(Request $request)
    {
        return 'Hello '.$request->input('name');
    }

}