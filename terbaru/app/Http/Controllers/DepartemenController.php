<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Departemen;
use App\Kategori;

class DepartemenController extends Controller
{
    public function index()
    {
        $loggedIn = Auth::user();
        $departemen = Departemen::all();
        $kategori = Kategori::all();
        return view('departemen.index', compact('loggedIn','departemen','kategori'));
    }

    public function create(Request $request)
    {
       
        $departemen = new \App\Departemen;
        $kategori = new \App\Kategori;
        $departemen->nama_departemen = $request->nama_departemen;
        $departemen->urutan = $request->urutan;
        $departemen->save();
        $departemen->kategoris()->sync($request->nama_kategori);
        return redirect('/departemen')->with('sukses', 'Data berhasil di input');
    }
    public function edit($id)
    {
        $departemen = \App\Departemen::with('kategoris')->find($id);
        $kategori = \App\Kategori::all();
        $loggedIn = Auth::user();
        if ($loggedIn->role_id == 1 || $loggedIn->role_id == 2) {
            // kalo role nya 1 atau 2 maka bisa buka edit
            $departemen = \App\Departemen::find($id);
            return view('departemen/edit', compact('loggedIn', 'departemen','kategori'));
        } else {
            // kalo role nya selain 1 atau 2, gabisa buka edit
            abort(403);
        }
    }

    public function update(Request $request, $id)
    {
        $departemen = \App\Departemen::find($id);
        $kategori = \App\Kategori::all();

        $departemen->update($request->all());
        $departemen->kategoris()->sync($request->nama_kategori);

        return redirect('/departemen')->with('sukses', 'Data berhasil di update.');
    }

    public function delete($id)
    {
        $departemen = \App\Departemen::find($id);
        $departemen->kategoris()->detach();
        $departemen->delete($departemen);
        return redirect('/departemen')->with('sukses', 'Data berhasil di delete.');
    }


}
