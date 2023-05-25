<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('form');
    }

// buat function yang didalamnya mengambil inputan form 
// dengan menggunakan parameter $request
// dan lakukan pengecekan apakah nama dll sudah di isi atau belum

    public function hasil(Request $request) {
        $this->validate($request, [
            "nama" => 'required',
            "TTL" => 'required',
            "jenis_kelamin" => 'required',
            "hobi" => 'required',
             ]);
        return view('hasil', ['data' => $request]);
    }
}