<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.home');
    }

    public function profile(Request $request)
    {
        return view('pages.profile');
    }
}
