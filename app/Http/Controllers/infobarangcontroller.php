<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class infobarangcontroller extends Controller
{
    public function index(){
        $info_barang = \App\barang::all();
        return view('barang.index', ['info_barang' => $info_barang]);
    }

    public function create(Request $request){
        \App\barang::create($request->all());
        return redirect('/')->with('sukses', 'Data berhasil ditambahkan');
    }

    public function edit($id){
        $infobarang = \App\barang::find($id);
        return view('barang/edit', ['infobarang' => $infobarang]);
    }

    public function update(Request $request, $id){
        $infobarang = \App\barang::find($id);
        $infobarang->update($request->all());
        return redirect('/')->with('sukses', 'Data berhasil diupdate');
    }

    public function delete($id){
        $infobarang = \App\barang::find($id);
        $infobarang->delete($infobarang);
        return redirect('/')->with('sukses', 'Data berhasil dihapus');
    }
}
