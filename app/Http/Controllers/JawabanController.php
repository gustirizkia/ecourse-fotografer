<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function create($diskusi_id)
    {
        return view('pages.diskusi.create_coment',[
            'diskusi_id' => $diskusi_id
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        $data = Jawaban::create($data);

        return redirect()->route('diskusi.show', $request->diskusi_id)->with('msgSuccess', 'Buat jawaban berhasil');
    }

}
