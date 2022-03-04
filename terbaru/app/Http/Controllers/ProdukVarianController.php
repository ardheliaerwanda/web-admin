<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\ProdukVarian;

class ProdukVarianController extends Controller
{
    public function index()
    {
        $loggedIn = Auth::user();
        $produkvar_table = ProdukVarian::all();
        return view('produkvar.index', compact('loggedIn','produkvar_table'));
    }
    public function create(Request $request)
    {
       
        $produkvar_table = new \App\ProdukVarian;
        $produkvar_table->nama_produkvar = $request->nama_produkvar;
        $produkvar_table->pilihanvar = $request->pilihanvar;
        $produkvar_table->harga_modal = $request->harga_modal;
        $produkvar_table->harga_jual = $request->harga_jual;
        $produkvar_table->carapilih = $request->carapilih;
        $produkvar_table->save();
        return redirect('/produkvar')->with('sukses', 'Data berhasil di input');
    }
    public function edit($id)
    {
        $loggedIn = Auth::user();
        if ($loggedIn->role_id == 1 || $loggedIn->role_id == 2) {
            // kalo role nya 1 atau 2 maka bisa buka edit
            $produkvar_table = \App\ProdukVarian::find($id);
            return view('produkvar/edit', compact('loggedIn', 'produkvar_table'));
        } else {
            // kalo role nya selain 1 atau 2, gabisa buka edit
            abort(403);
        }
    }
    public function update(Request $request, $id)
    {
        $produkvar_table = \App\ProdukVarian::find($id);
        $produkvar_table->update($request->all());

        return redirect('/produkvar')->with('sukses', 'Data berhasil di update.');
    }

    public function delete($id)
    {
        $produkvar_table = \App\ProdukVarian::find($id);
        $produkvar_table->delete($produkvar_table);
        return redirect('/produkvar')->with('sukses', 'Data berhasil di delete.');
    }


}
