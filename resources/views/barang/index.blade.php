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
            </div>
            <div class="col-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Barang
                </button>
            </div>
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
                        <a href="/barang/{{$infobarang->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/barang/{{$infobarang->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/infobarang/create" method="POST">
                            {{csrf_field()}}
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Kategori Barang</label>
                              <input name ="kategori" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                                <input name ="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Harga Barang</label>
                                <input name ="harga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jumlah Barang</label>
                                <input name ="jumlah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Foto Barang</label>
                                <input name ="foto" class="form-control" type="file" id="formFile">
                            </div> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
@endsection