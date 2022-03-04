<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Kategori;
use App\Departemen;
use App\Outlet;
use App\CatatProduk;


class KategoriController extends Controller
{
    public function index()
    {
        $loggedIn = Auth::user();
        $kategori = Kategori::with('catatProduks')->get();
        $departemen = Departemen::all();
        $outlet = Outlet::all();
        $catat_produk = CatatProduk::all();
        return view('kategori.index', compact('loggedIn','kategori','departemen','outlet','catat_produk'));
    }
    public function create(Request $request)
    {
       
        $kategori = new \App\Kategori;
        $departemen = new \App\Departemen;
        $outlet = new \App\Outlet;
        $catat_produk = new \App\CatatProduk;
        $kategori->nama_outlet = $request->nama_outlet;
        $kategori->status = $request->status;
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->urutan = $request->urutan;
        $kategori->nama_departemen = $request->nama_departemen;
        // $catat_produk->foto = ($request->foto);'mimes:jpeg,png,jpg,gif,svg|max:2048';
        
        $kategori->save();
        $kategori->catatProduks()->sync($request->nama_produk);
        return redirect('/kategori')->with('sukses', 'Data berhasil di input');
    }
    public function edit($id)
    {
        $kategori = \App\Kategori::with('catatProduks')->find($id);
        $departemen = \App\Kategori::all();
        $outlet = \App\Outlet::all();
        $catat_produk = \App\CatatProduk::all();
        $loggedIn = Auth::user();
        if ($loggedIn->role_id == 1 || $loggedIn->role_id == 2) {
            // kalo role nya 1 atau 2 maka bisa buka edit
            $kategori = \App\Kategori::find($id);
            return view('kategori/edit', compact('loggedIn', 'kategori', 'departemen','outlet','catat_produk'));
        } else {
            // kalo role nya selain 1 atau 2, gabisa buka edit
            abort(403);
        }
    }

    public function update(Request $request, $id)
    {
        $kategori = \App\Kategori::find($id);
        $departemen = \App\Departemen::find($id);
        $outlet = \App\Outlet::find($id);
        $kategori->update($request->all());
        $kategori->catatProduks()->sync($request->nama_produk);
        return redirect('/kategori')->with('sukses', 'Data berhasil di update.');
    }

    public function delete($id)
    {
        $kategori = \App\Kategori::find($id);
        $kategori->catatProduks()->detach();
        $kategori->delete($kategori);
        return redirect('/kategori')->with('sukses', 'Data berhasil di delete.');
    }



}
