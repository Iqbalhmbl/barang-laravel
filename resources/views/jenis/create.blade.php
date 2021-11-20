@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header">Input Data Jenis Barang</div>

                <div class="card-body">
                <form method="POST" action="{{route('jenis.store')}}">
                @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode Jenis Barang</label>
                        <input type="text" name="kode_jenis" class="form-control"  aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Jenis Barang</label>
                        <input type="text" name="nama_jenis" class="form-control" >
                    </div>
                    <button type="submit" class="btn btn-secondary btn-sm">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection