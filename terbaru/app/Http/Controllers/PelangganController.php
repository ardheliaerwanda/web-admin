<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Pelanggan;
use App\Cities;
use App\Group;
use Illuminate\Support\Facades\Hash;

class PelangganController extends Controller
{
    public function index()
    {
    $loggedIn = Auth::user();
        $data_pelanggan = Pelanggan::all();
        $cities = Cities::all();
        $group = Group::all();
        return view('pelanggan.index', compact('loggedIn', 'data_pelanggan', 'cities','group'));
    }
    public function create(Request $request)
   {
        $data_pelanggan = new \App\Pelanggan;
        $data_pelanggan->kode_pelanggan = $request->kode_pelanggan;
        $data_pelanggan->nama = $request->nama;
        $data_pelanggan->tanggal = $request->tanggal;
        $data_pelanggan->email = $request->email;
        $data_pelanggan->no_tlp = $request->no_tlp;
        $data_pelanggan->kota_id = $request->kota_id;
        $data_pelanggan->group_id  = $request->group_id;
        $data_pelanggan->Alamat = $request->Alamat;
        $data_pelanggan->jenis_kelamin= $request->jenis_kelamin;
        $data_pelanggan->save();
        return redirect('/pelanggan')->with('sukses', 'Data berhasil di input');
    }
    public function edit($id)
    {
        $data_pelanggan = \App\Pelanggan::all();
        $cities = \App\Cities::all();
        $group = \App\Group::all();
        $loggedIn = Auth::user();
        if ($loggedIn->role_id == 1 || $loggedIn->role_id == 2) {
            // kalo role nya 1 atau 2 maka bisa buka edit
            $data_pelanggan = \App\Pelanggan::find($id);
            return view('pelanggan/edit', compact('loggedIn', 'data_pelanggan', 'cities','group'));
        } else {
            // kalo role nya selain 1 atau 2, gabisa buka edit
            abort(403);
        }
    }
    public function update(Request $request, $id)
    {
        $data_pelanggan = \App\Pelanggan::find($id);
        $cities = \App\Cities::find($id);
        $data_group = \App\Group::all();
        $data_pelanggan->update($request->all());

        return redirect('/pelanggan')->with('sukses', 'Data berhasil di update.');
    }
    public function delete($id)
    {
        $data_pelanggan = \App\Pelanggan::find($id);
        $data_pelanggan->delete($data_pelanggan);
        return redirect('/pelanggan')->with('sukses', 'Data berhasil di delete.');
    }
}