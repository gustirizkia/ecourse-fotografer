<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    public function image(Request $request){
            $request->validate([
                'image' => 'required|image'
            ]);

            $image = $request->file('image')->store('hasil-prakter', 'public');
            $insert = DB::table('hasil_prakteks')->insertGetId([
                'image' => $image,
                'created_at' => now(),
                'user_id' => auth()->user()->id
            ]);

            return redirect()->back()->with('msgSuccess', 'Berhasil upload hasil praktek anda');
    }
}
