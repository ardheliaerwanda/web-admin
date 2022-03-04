<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Invoice;
use App\Product;
use App\Invoice_detail;
use PDF;
use Auth;

class PengirimanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loggedIn = Auth::user();
        return view('pengiriman.index', compact('loggedIn'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $invoices = Invoice::with(['customer'])->get();
        return view('pengiriman.create', compact('invoices'));
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'id_pesanan' => 'required|exists:invoices,id'
        ]);

        try {
            $pengiriman = Pengiriman::create([
                'id_pesanan' => $request->id_pesanan,
                'tanggal_pengiriman' => $request->tanggal_pengiriman,
                'catatan' => $request->catatan
            ]);

            return redirect(route('pengiriman.edit', ['id' => $pengiriman->id]));
        } catch(\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $pengiriman = Pengiriman::with(['customer', 'invoice'])->find($id);
        return view('pengiriman.edit', compact('pengiriman'));
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengiriman  $pengiriman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengiriman $pengiriman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengiriman  $pengiriman
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengiriman  $pengiriman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengiriman $pengiriman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengiriman  $pengiriman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengiriman $pengiriman)
    {
        //
    }
}
