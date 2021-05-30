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
                    <th>Kategori Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Foto Barang</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($info_barang as $infobarang)
                <tr>
                    <td>{{$infobarang->kategori}}</td>
                    <td>{{$infobarang->nama}}</td>
                    <td>Rp.{{$infobarang->harga}}</td>
                    <td>{{$infobarang->jumlah}}</td>
                    <td>{{$infobarang->foto}}</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm">Tambahkan ke keranjang</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection