<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\CatatProduk;
use App\Kategori;
use App\Satuan;
use App\ProdukVarian;

class CatatProdukController extends Controller
{
    public function index()
    {
        $loggedIn = Auth::user();
        $catat_produk = CatatProduk::all();
        $kategori = Kategori::all();
        $satuan = Satuan::all();
        $produkvar_table = ProdukVarian::all();
        return view('catat_produk.index', compact('loggedIn', 'catat_produk','kategori','satuan','produkvar_table'));
    }

    public function create(Request $request)
    {
        $rules = [
            'foto' => ['mimes:jpeg,png,jpg,gif,svg', 'required', 'max:2048'],
        ];
        $request->validate($rules);

        $catat_produk = new \App\CatatProduk;
        $kategori = new \App\Kategori;
        $satuan = new \App\Satuan;
        $produkvar_table = new \App\ProdukVarian;
        $catat_produk->nama_produk = $request->nama_produk;
        $catat_produk->harga = $request->harga;
        // $catat_produk->foto = ($request->foto);'mimes:jpeg,png,jpg,gif,svg|max:2048';
        $catat_produk->foto = $catat_produk->setPhoto($request->foto);
        $catat_produk->nama_kategori = $request->nama_kategori;
        $catat_produk->deskripsi = $request->deskripsi;
        $catat_produk->nama_satuan = $request->nama_satuan;
        $catat_produk->harga_jual = $request->harga_jual;
        $catat_produk->sku = $request->sku;
        $catat_produk->nama_produkvar = $request->nama_produkvar;
        $catat_produk->nama_group = $request->nama_group;
        $catat_produk->save();
        return redirect('/catatproduk')->with('sukses', 'Data berhasil di input');
    }

    public function edit($id)
    {
        $loggedIn = Auth::user();
        if ($loggedIn->role_id == 1 || $loggedIn->role_id == 2) {
            // kalo role nya 1 atau 2 maka bisa buka edit
            $catat_produk = \App\CatatProduk::find($id);
            $kategori = \App\Kategori::all();
            $satuan = \App\Satuan::all();
            $produkvar_table = \App\ProdukVarian::all();
            return view('catat_produk/edit', compact('loggedIn', 'catat_produk','kategori','satuan','produkvar_table'));
        } else {
            // kalo role nya selain 1 atau 2, gabisa buka edit
            abort(403);
        }
    }
    public function update(Request $request, $id)
    {
        $catat_produk = \App\CatatProduk::find($id);
        $kategori = \App\Kategori::find($id);
        $satuan = \App\Satuan::find($id);
        $produkvar_table = \App\ProdukVarian::find($id);
        $data = $request->all();
        $data['foto'] = $catat_produk->foto;

        if (!empty($request->foto)) {
            $rules = [
                'foto' => ['mimes:jpeg,png,jpg,gif,svg', 'required', 'max:2048'],
            ];
            $request->validate($rules);

            if (!empty($catat_produk->foto)) {
                $catat_produk->removePhoto($catat_produk->foto);
            }

            $data['foto'] = $catat_produk->setPhoto($request->foto);
        }
        $catat_produk->update($data);
        return redirect('/catatproduk')->with('sukses', 'Data berhasil di update.');
    }

    public function delete($id)
    {
        $catat_produk = \App\CatatProduk::find($id);

        if (!empty($catat_produk->foto)) {
            $catat_produk->removePhoto($catat_produk->foto);
        }

        $catat_produk->delete($catat_produk);
        return redirect('/catatproduk')->with('sukses', 'Data berhasil di delete.');
    }
}
