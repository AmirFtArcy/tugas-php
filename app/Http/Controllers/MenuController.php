<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Makanan;


class MenuController extends Controller
{
    public function index()
    {
        $makanans = Makanan::all();

        return view ('menu', [
            'data'=> $makanans,
        ]);
    }


    public function add(){
        return view('form_menu');
    }


    public function edit($id){
        $makanans = Makanans::find($id);

        return view ('form_menu', [
            'data'=> $makanans,
        ]);
    }

    public function save(Request $req)
    {
        // dd($req);

        $old_kode = @$req->old_kode;

        if($old_kode) {
            Makanans::where('kode_makanan', $old_kode)->update([
                'kode_makanan'=> $req->kode,
                'nama'=> $req->nama,
                'harga'=> $req->harga,
                'kategori'=> $req->kategori,
                'ket'=> $req->ket,
            ]);
        } else{
            Makanans::create([
                'kode_makanan'=> $req->kode,
                'nama'=> $req->nama,
                'harga'=> $req->harga,
                'kategori'=> $req->kategori,
                'ket'=> $req->ket,
            ]);
        }
        return redirect('/menu');
    }


    public function delete($id){
        menu::find($id)->delete();
        return redirect('/menu');
    }

}
