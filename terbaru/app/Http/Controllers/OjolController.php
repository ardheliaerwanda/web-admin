<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Ojol;
use App\Outlet;
use App\CatatProduk;
use DB;

class OjolController extends Controller
{
    public function index()
    {
        $loggedIn = Auth::user();
        $ojol = Ojol::with('catatProduks')->get();
        $outlet = Outlet::all();
        $catat_produk = CatatProduk::all();
        return view('ojol.index', compact('loggedIn', 'ojol', 'outlet', 'catat_produk'));
    }
    public function create(Request $request)
    {
        // dd($request->nama_produk);
        $ojol = new \App\Ojol;
        $outlet = new \App\Outlet;
        $catat_produk = new \App\CatatProduk;
        $ojol->nama_outlet = $request->nama_outlet;
        $ojol->status = $request->status;
        $ojol->nama = $request->nama;
        $ojol->deskripsi = $request->deskripsi;
        // $ojol->nama_produk = $request->nama_produk;

        $ojol->save();
        $ojol->catatProduks()->sync($request->nama_produk);

        return redirect('/ojol')->with('sukses', 'Data berhasil di input');
    }

    public function edit($id)
    {
        $ojol = \App\Ojol::with('catatProduks')->find($id);
        // dd($ojol);
        $outlet = \App\Outlet::all();
        $catat_produk = \App\CatatProduk::all();
        $loggedIn = Auth::user();
        if ($loggedIn->role_id == 1 || $loggedIn->role_id == 2) {
            // kalo role nya 1 atau 2 maka bisa buka edit
            $ojol = \App\Ojol::find($id);
            return view('ojol/edit', compact('loggedIn', 'ojol', 'outlet', 'catat_produk'));
        } else {
            // kalo role nya selain 1 atau 2, gabisa buka edit
            abort(403);
        }
    }

    public function update(Request $request, $id)
    {
        $ojol = \App\Ojol::find($id);
        $outlet = \App\Outlet::find($id);
        $catat_produk = \App\CatatProduk::all();
        $ojol->update($request->all());
        $ojol->catatProduks()->sync($request->nama_produk);

        return redirect('/ojol')->with('sukses', 'Data berhasil di update.');
    }

    public function delete($id)
    {
        $ojol = \App\Ojol::find($id);
        $ojol->catatProduks()->detach();
        $ojol->delete($ojol);
        return redirect('/ojol')->with('sukses', 'Data berhasil di delete.');
    }
}
