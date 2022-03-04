<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Group;
use App\Status;
use App\Pelanggan;
use App\Harga;
use Illuminate\Support\Facades\Hash;


class GroupController extends Controller
{
    public function index(Request $request)
    {
        
    $loggedIn = Auth::user();
        $data_group = Group::all();
        $status = Status::all();
        $data_pelanggan = Pelanggan::all();
        $harga = Harga::all();
        return view('group.index', compact('loggedIn', 'data_group', 'status','data_pelanggan', 'harga'));
    }
    public function create(Request $request)
   {
        $data_group = new \App\Group;
        $data_group->nama_group = $request->nama_group;
        $data_group->nama_status = $request->nama_status;
        $data_group->deskripsi = $request->deskripsi;
        $data_group->urutan = $request->urutan;
        $data_group->pelanggan_id = $request->pelanggan_id;
        $data_group->harga_id  = $request->harga_id;
        $data_group->save();
        return redirect('/group')->with('sukses', 'Data berhasil di input');
   }
   public function edit($id)
    {
        $data_group = \App\Group::all();
        $status = \App\Status::all();
        $data_pelanggan = \App\Pelanggan::all();
        $harga = \App\Harga::all();
        $loggedIn = Auth::user();
        if ($loggedIn->role_id == 1 || $loggedIn->role_id == 2) {
            // kalo role nya 1 atau 2 maka bisa buka edit
            $data_group = \App\Group::find($id);
            return view('group/edit', compact('loggedIn', 'data_group', 'status','data_pelanggan', 'harga'));
        } else {
            // kalo role nya selain 1 atau 2, gabisa buka edit
            abort(403);
        }
    }
    public function update(Request $request, $id)
    {
        $data_group = \App\Group::find($id);
        $status = \App\Status::find($id);
        $data_pelanggan = \App\Pelanggan::find($id);
        $harga = \App\Harga::find($id);

        $data_group->update($request->all());
        return redirect('/group')->with('sukses', 'Data berhasil di update.');
    }
   public function delete($id)
    {
        $data_group = \App\Group::find($id);
        $data_group->delete($data_group);
        return redirect('/group')->with('sukses', 'Data berhasil di delete.');
    }
}