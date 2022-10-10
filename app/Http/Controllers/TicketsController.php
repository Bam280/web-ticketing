<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function index()
    {
        $tickets = tickets::all();
        return view('admin.tickets.index', compact('tickets'));
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        $tickets = new \App\tickets;
        $tickets->kode = $request->kode;
        $tickets->judul = $request->judul;
        $tickets->desc = $request->desc;
        $tickets->lokasi = $request->lokasi;
        $tickets->pelapor = $request->pelapor;
        $tickets->status = $request->status;
        $tickets->save();
        return redirect('/tickets')->with('sukses', 'Data berhasil diinput');
    }

    public function edit($id)
    {
        $tickets = \App\tickets::find($id);
        return view('tickets.edit', compact('tickets'));
    }

    public function update(Request $request, $id)
    {
        $tickets = \App\tickets::find($id);
        $tickets->update($request->all());
        return redirect('/tickets')->with('sukses', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $tickets = \App\tickets::find($id);
        $tickets->delete($tickets);
        return redirect('/tickets')->with('sukses', 'Data berhasil dihapus');
    }


}
