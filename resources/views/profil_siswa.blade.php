@extends('layouts.app')
@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Profil Siswa</h3>
        </div>
        <div class="card-body">
            <a href="{{route('siswa.index')}}">Kembali</a>
            <div class="row m-2">
                <h4 class="col-4">Name</h4>
                <h4 class="col">: {{$datasiswa->name}}</h4  >
            </div>    
            <div class="row m-2">
                <h4 class="col-4">Nim</h4>
                <h4 class="col">: {{$datasiswa->nis}}</h4  >
            </div>    
            <div class="row m-2">
                <h4 class="col-4">Email</h4>
                <h4 class="col">: {{$datasiswa->email}}</h4  >
            </div>    
        </div>
    </div>
</div>
@endsection