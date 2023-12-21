<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Menampilkan form data dengan daftar menuItems
   

    // Menghandle pengiriman data dari form
    public function submitData(Request $request)
    {

        // Mengambil data dari form data
        $data = [
            'nik' => $request->input('nik'),
            'name' => $request->input('name'),
            'provinsi' => $request->input('provinsi'),
            'kota' => $request->input('kota'),
            'notelp' => $request->input('notelp'),
        ];

        // Menampilkan view 'dashboardKasir' dan menyertakan data dan menuItems ke dalamnya
        return view('dashboardKasir', compact('data'));
    }
}
