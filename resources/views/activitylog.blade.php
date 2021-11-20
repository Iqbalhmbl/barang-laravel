@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header">Log Aktivitas</div>

                <div class="card-body">

                <br></br>
                   <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Aktor</th>
                            <th scope="col">Aktivitas</th>
                            <th scope="col">Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; ?>
                        @foreach ($activity as $b)
                            <tr>
                            <th scope="row">{{$no}}</th>
                            <td>{{$b->user->name}}</td>
                            <td>{{$b->description}}</td>
                            <td>{{Carbon\Carbon::parse($b->created_at)->diffForHumans()}}</td>
                            
                            
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