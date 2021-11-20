@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header">Input Data Barang</div>

                <div class="card-body">
                <form method="POST" action="{{route('barang.store')}}">
                @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode Barang</label>
                        <input type="text" name="kode_barang" class="form-control"  aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Jenis Barang</label>
                        <select name="jenis_id" class="form-control">
                            @foreach ($barang as $barang)
                            <option value="{{ $barang->id }}" {!! (old('jenis_id') == $barang->id ? "selected=\"selected\"" : "") !!}>{{ $barang->nama_jenis }}</option>
                            @endforeach
                          </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Harga Barang</label>
                        <input type="text" name="harga_barang" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Stock Barang</label>
                        <input type="text" name="stock_barang" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Keterangan</label>
                        <textarea name="keterangan" class="form-control">{!! old('keterangan') !!}</textarea>
                    </div>
                    <button type="submit" class="btn btn-secondary btn-sm">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection