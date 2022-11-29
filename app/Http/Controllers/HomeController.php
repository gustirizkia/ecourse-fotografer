<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.home');
    }

    public function profile(Request $request)
    {
        $karya = DB::table('hasil_praktek')->where('user_id', auth()->user()->id)->orderBy('id', 'desc')->get();

        return view('pages.profile', [
            'items' => $karya
        ]);
    }
}
