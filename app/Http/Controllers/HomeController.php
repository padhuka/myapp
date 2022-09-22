<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    // public function index() {
    //     return view('home');
    // }

    //INVOCABLE

    public function __invoke()
    {
        return view('home');
    }

}
