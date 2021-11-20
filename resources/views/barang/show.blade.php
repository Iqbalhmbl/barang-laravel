@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header">Detail Barang</div>

                <div class="card-body">
                <table class="table table-dark table-striped">
                <thead>
                    <tr>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">{{ $barang->kode_barang }}</th>
                    </tr>
                     <tr>
                    <th scope="col">Jenis Barang</th>
                    <th scope="col">{{ $barang->jenis->nama_jenis }}</th>
                    </tr>
                    <tr>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">{{ $barang->nama_barang }}</th>
                    </tr>
                    <tr>
                    <th scope="col">Harga Barang</th>
                    <th scope="col">{{ $barang->harga_barang }}</th>
                    </tr>
                    <tr>
                    <th scope="col">Stock Barang</th>
                    <th scope="col">{{ $barang->stock_barang }}</th>
                    </tr>
                    <tr>
                    <th scope="col">Keterangan</th>
                    <th scope="col">{{ $barang->keterangan }}</th>
                    </tr>
                    <div class="p-2">
                    <button class="btn btn-secondary btn-sm" onclick="goBack()">Kembali</button>
                      <script>
                          function goBack() {
                              window.history.back();
                          }
                      </script>
                      </div>
                </thead>   
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection