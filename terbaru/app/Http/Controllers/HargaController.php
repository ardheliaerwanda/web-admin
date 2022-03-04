<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Harga;
use App\Group;
use App\Status;
use App\Produk;
use DB;
use Illuminate\Support\Facades\Hash;
class HargaController extends Controller
{
    public function index(Request $request)
    {
        $loggedIn = Auth::user();
        $harga = Harga::all();
        $data_group = Group::all();
        $status = Status::all();
        $produk = Produk::all();
        return view('harga.index', compact('loggedIn', 'harga', 'data_group','status', 'produk'));
}
    public function create(Request $request)
   {
        $harga = new \App\Harga;
        $harga->nama_status = $request->nama_status;
        $harga->nama = $request->nama;
        $harga->deskripsi = $request->deskripsi;
        $harga->group_id = $request->group_id;
        $harga->produk_id = $request->produk_id;
        $harga->save();
        return redirect('/harga')->with('sukses', 'Data berhasil di input');
    }
    public function edit($id)
    {
        $harga = \App\Harga::all();
        $data_group = \App\Group::all();
        $status = \App\Status::all();
        $produk = \App\Produk::all();
         
        $loggedIn = Auth::user();
        if ($loggedIn->role_id == 1 || $loggedIn->role_id == 2) {
            // kalo role nya 1 atau 2 maka bisa buka edit
            $harga = \App\Harga::find($id);
            return view('harga/edit', compact('loggedIn', 'harga', 'data_group','status', 'produk'));
        } else {
            // kalo role nya selain 1 atau 2, gabisa buka edit
            abort(403);
        }
    }
    public function update(Request $request, $id)
    {
        $harga = \App\Harga::find($id);
        $data_group = \App\Group::find($id);
        $status = \App\Status::find($id);
        $produk = \App\Produk::find($id);

        $harga->update($request->all());
        return redirect('/harga')->with('sukses', 'Data berhasil di update.');
    }

    public function delete($id)
    {
        $harga = \App\Harga::find($id);
        $harga->delete($harga);
        return redirect('/harga')->with('sukses', 'Data berhasil di delete.');
    }

}   