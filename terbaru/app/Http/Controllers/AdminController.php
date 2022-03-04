<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $loggedIn = Auth::user();
        $data_admin = Admin::all();
        return view('admin.index', compact('loggedIn', 'data_admin'));
    }

    public function create(Request $request)
    {


        //Insert ke table Users
        $user = new \App\User;
        $user->role_id = $request->role;
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = str_random(60);
        $user->save();

        //insert ke table Admin
        $request->request->add(['user_id' => $user->id]);
        $admin = \App\Admin::create($request->all());
        return redirect('/adminn')->with('sukses', 'Data berhasil di input');
    }

    public function edit($id)
    {
        $loggedIn = Auth::user();
        $roles = \App\Roles::all();

        if ($loggedIn->role_id == 1 || $loggedIn->role_id == 2) {
            // kalo role nya 1 atau 2 maka bisa buka edit
            $admin = \App\Admin::find($id);
            return view('admin/edit', compact('loggedIn', 'admin', 'roles'));
        } else {
            // kalo role nya selain 1 atau 2, gabisa buka edit
            abort(403);
        }
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $admin = \App\Admin::find($id);
        $user = \App\User::find($admin->user_id);

        $user->role_id = $request->role;
        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        $admin->update($request->all());

        return redirect('/adminn')->with('sukses', 'Data berhasil di update.');
    }
    public function delete($id)
    {
        $admin = \App\Admin::find($id);
        $admin->delete($admin);
        return redirect('/adminn')->with('sukses', 'Data berhasil di delete.');
    }
}
