<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\Facades\DB;
use App\Models\Kategori;

class KategoriController extends Controller
{
    
    public function index()
    {
        // $kategoris = DB::table('kategoris')->get();
        $kategoris = Kategori::all();

        return view ('kategori', [
            'data'=> $kategoris,
        ]);
    }


    public function add(){
        return view('form_kategori');
    }


    public function edit($id){
        $kategori = kategori::find($id);

        return view ('form_kategori', [
            'data'=> $kategori,
        ]);
    }

    public function save(Request $req)
    {
        // dd($req);

        $old_kode = @$req->old_kode;

        if($old_kode) {
            kategori::where('kode_kategori', $old_kode)->update([
                'kode_kategori'=> $req->kode,
                'nama'=> $req->nama,
                'ket'=> $req->ket,
            ]);
        } else{
            kategori::create([
                
                'kode_kategori'=>$req->kode,
                'nama'=>$req->nama,
                'ket'=>$req->ket,
            ]);
        }
        return redirect('/kategori');
    }


    public function delete($id){
        kategori::find($id)->delete();
        return redirect('/kategori');
    }

}
