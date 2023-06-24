@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Ubah Data Siswa
        </div>
        <div class="card-body">
            <a href="{{route('siswa.index')}}" class="btn btn-warning">Kembali</a>
            <form action="{{route('siswa.update', $datasiswa->id)}}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Nama <input type="text" name="inputName" required value="{{$datasiswa->name}}">
                    Nim <input type="text" name="inputNim" required value="{{$datasiswa->nim}}">
                    Email <input type="text" name="inputEmail" required value="{{$datasiswa->email}}">
                </ul>
                <input type="Submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection