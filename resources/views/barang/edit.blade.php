@extends('layouts.master')
@section('content')
        <h2>Edit Info Barang</h2>
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
          </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
            <form action="/barang/{{$infobarang->id}}/update" method="POST">
                {{csrf_field()}}
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Kategori Barang</label>
                  <input name ="kategori" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$infobarang->kategori}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                    <input name ="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$infobarang->nama}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Harga Barang</label>
                    <input name ="harga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$infobarang->harga}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jumlah Barang</label>
                    <input name ="jumlah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$infobarang->jumlah}}">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Foto Barang</label>
                    <input name ="foto" class="form-control" type="file" id="formFile">
                </div>
                <button type="submit" class="btn btn-warning">Update</button>
            </form>
            </div>
        </div>
@endsection