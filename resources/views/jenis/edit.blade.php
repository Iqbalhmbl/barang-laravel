@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header">Edit Data Jenis Barang</div>

                <div class="card-body">
                <form method="POST" action="{{ route('jenis.update',$jenis->id) }}">
                @method('put')
                @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode Jenis Barang</label>
                        <input type="text" name="kode_jenis" class="form-control"  aria-describedby="emailHelp" value="{{$jenis->kode_jenis}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Jenis Barang</label>
                        <input type="text" name="nama_jenis" class="form-control" value="{{$jenis->nama_jenis}}" required>
                    </div>
                    
                    <button type="submit" class="btn btn btn-secondary btn-sm">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection