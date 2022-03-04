<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Deposit;
use App\Outlet;
use App\CatatProduk;


class DepositController extends Controller
{
    public function index()
    {
        $loggedIn = Auth::user();
        $deposit = Deposit::all();
        $outlet = Outlet::all();
        $catat_produk = CatatProduk::all();
     
        return view('deposit.index', compact('loggedIn','deposit','outlet','catat_produk'));
    }
    public function create(Request $request)
    {
        $rules = [
            'foto' => ['mimes:jpeg,png,jpg,gif,svg', 'required', 'max:2048'],
        ];
        $request->validate($rules);

        $deposit = new \App\Deposit;
        $outlet = new \App\Outlet;
        $catat_produk = new \App\CatatProduk;

        $deposit->nama_outlet = $request->nama_outlet;
        $deposit->foto = $deposit->setPhoto($request->foto);
        $deposit->nama = $request->nama;
        $deposit->harga_jual = $request->harga_jual;
        $deposit->status = $request->status;
        $deposit->masa_berlaku = $request->masa_berlaku;
        $deposit->nominal_deposit = $request->nominal_deposit;
        $deposit->nama_produk = $request->nama_produk;

        $deposit->save();
        return redirect('/deposit')->with('sukses', 'Data berhasil di input');
    }
    public function edit($id)
    {
        $loggedIn = Auth::user();
        if ($loggedIn->role_id == 1 || $loggedIn->role_id == 2) {
            // kalo role nya 1 atau 2 maka bisa buka edit
            $deposit = \App\Deposit::find($id);
            $outlet = \App\Outlet::find($id);
            $catat_produk = \App\CatatProduk::all();
            return view('deposit/edit', compact('loggedIn', 'deposit','outlet','catat_produk'));
        } else {
            // kalo role nya selain 1 atau 2, gabisa buka edit
            abort(403);
        }
    }
    public function update(Request $request, $id)
    {
        $deposit = \App\Deposit::find($id);
        $outlet = \App\Outlet::find($id);
        $catat_produk = \App\CatatProduk::all();
        $data = $request->all();
        $data['foto'] = $deposit->foto;

        if (!empty($request->foto)) {
            $rules = [
                'foto' => ['mimes:jpeg,png,jpg,gif,svg', 'required', 'max:2048'],
            ];
            $request->validate($rules);

            if (!empty($deposit->foto)) {
                $deposit->removePhoto($deposit->foto);
            }

            $data['foto'] = $deposit->setPhoto($request->foto);
        }
        $deposit->update($data);
        return redirect('/deposit')->with('sukses', 'Data berhasil di update.');
    }

    public function delete($id)
    {
        $deposit = \App\Deposit::find($id);
        $outlet = \App\Outlet::find($id);

        if (!empty($deposit->foto)) {
            $deposit->removePhoto($deposit->foto);
        }

        $deposit->delete($deposit);
        return redirect('/deposit')->with('sukses', 'Data berhasil di delete.');
    }
}

