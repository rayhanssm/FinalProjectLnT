@extends('layouts.master')
@section('content')
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
          </div>
        @endif
        <div class="row">
            <div class="col-6">
                <h2>Data Barang</h2>
            <table class="table table-hover">
                
                <tr>
                    <th>Invoice</th>
                    <th>Kategori Barang</th>
                    <th>Nama Barang dan Kuantitas</th>
                    <th>Alamat Pengiriman</th>
                    <th>Kode Pos</th>
                    <th>Total Harga</th>
                    <th>Aksi</th>
                </tr>
            </table>
        </div>
    </div>
@endsection