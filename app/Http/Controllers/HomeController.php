<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    
    public function tambah()
    {
        return view('input');
    }
    
    public function simpan(Request $request)
    {
       $nama = $request->input('nama');
       $kategori = $request->input('kategori');
       $harga = $request->input('harga');
       $ket = $request->input('ket');
       return view ('result',[
        'nama'=> $nama,
        'kategori'=> $kategori,
        'harga'=> $harga,
        'keterangan'=> $keterangan,



       ]);

    }
}
