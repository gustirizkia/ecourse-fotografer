<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index(Request $request){
        $data = DB::table('course')->get()->groupBy('kategori');

        $item = null;
        if($request->id)
        {
            $item = DB::table('course')->where('id', $request->id)->first();
        }

        // dd($data);
        return view('pages.course', [
            'items' => $data,
            'detail_item' => $item
        ]);
    }
}




