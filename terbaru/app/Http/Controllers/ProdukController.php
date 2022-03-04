<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $loggedIn = Auth::user();
        $produk = Produk::all();
        return view('produk.index', compact('loggedIn', 'produk'));
    }

    public function create(Request $request)
    {
        $rules = [
            'foto' => ['mimes:jpeg,png,jpg,gif,svg', 'required', 'max:2048'],
        ];
        $request->validate($rules);

        $produk = new \App\Produk;
        $produk->nama = $request->nama;
        // $catat_produk->foto = ($request->foto);'mimes:jpeg,png,jpg,gif,svg|max:2048';
        $produk->foto = $produk->setPhoto($request->foto);
        $produk->deskripsi = $request->deskripsi;
        $produk->save();
        return redirect('/produk')->with('sukses', 'Data berhasil di input');
    }

}
