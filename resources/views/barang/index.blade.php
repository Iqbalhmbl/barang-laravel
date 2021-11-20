@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header">Daftar Barang</div>

                <div class="card-body">
                @if (session('status'))
                        <div class="alert alert-success">
                        {{ session('status') }}
                        </div>
                        
                    @endif
                    
                @if(Auth::user()->name && Auth::user()->role_name ==  'admin'|| Auth::user()->role_name ==  'staff')
                <a href="{{ route('barang.create') }}" class="btn btn-secondary btn-sm">Tambah Barang</a>
                @endif
                <br></br>
                   <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode Barang</th>
                            <th scope="col">Jenis Barang</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; ?>
                        @foreach ($barang as $b)
                            <tr>
                            <th scope="row">{{$no}}</th>
                            <td>{{$b->kode_barang}}</td>
                            <td>{{$b->nama_jenis}}</td>
                            <td>{{$b->nama_barang}}</td>
                            <td>  
                                <a href="{{ route('barang.show',$b->id) }}" class="badge badge-info">Detail</a>
                                @if(Auth::user()->name && Auth::user()->role_name ==  'admin'|| Auth::user()->role_name ==  'staff')
                                <a href="{{ route('barang.edit',$b->id) }}" class="badge badge-warning">Edit</a>
                                @endif
                                @if(Auth::user()->name && Auth::user()->role_name ==  'admin')
                                <a href="{{ route('barang.destroy',$b->id) }}" class="badge badge-danger"  onclick="return confirm('Apakah Anda Yakin Menghapus Data?');">Hapus</a>
                                @endif
                                </td>
                            
                            </tr>
                            <?php $no++ ; ?>
                        @endforeach
                        
                        </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection