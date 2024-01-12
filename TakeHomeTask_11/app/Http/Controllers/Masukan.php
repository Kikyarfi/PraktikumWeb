<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masukkan;
class Masukan extends Controller
{
    public function kirim(Request $req){
        $req->validate([
            'email' => 'required|email',
            'message' => 'required',
        ]);


        $req = Masukkan::create([
            'email' => $req->input('email'),
            'pesan' => $req->input('message'),
        ]);
        return redirect('/');
    }
}
