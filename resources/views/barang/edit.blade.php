@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header">Edit Data Barang</div>

                <div class="card-body">
                <form method="POST" action="{{ route('barang.update',$barang->id) }}">
                @method('put')
                @csrf

                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode Barang</label>
                        <input type="text" name="kode_barang" class="form-control"  aria-describedby="emailHelp" value="{{$barang->kode_barang}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Jenis Barang</label>
                        <select name="jenis_id" class="form-control">
                            @foreach ($jenis as $jenis)
                            <option value="{{ $jenis->id }}" {!! (old('jenis_id') == $jenis->id ? "selected=\"selected\"" : "") !!}>{{ $jenis->nama_jenis }}</option>
                            @endforeach
                          </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" value="{{$barang->nama_barang}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Harga Barang</label>
                        <input type="text" name="harga_barang" class="form-control" value="{{$barang->harga_barang}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Stock Barang</label>
                        <input type="text" name="stock_barang" class="form-control" value="{{$barang->stock_barang}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Keterangan</label>
                        <textarea name="keterangan" class="form-control">{{$barang->keterangan}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-secondary btn-sm">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection