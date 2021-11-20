@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header">Daftar Barang</div>

                <div class="card-body">

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
                                <a href="{{ route('showguest',$b->id) }}" class="badge badge-info">Detail</a>
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