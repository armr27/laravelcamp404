@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Siswa</h3>
        </div>
        <div class="card-body">
            <a href="{{route('siswa.index')}}" class="btn btn-warning m-3">Kembali</a>
            <form action="{{route('siswa.store')}}" method="POST">
                @csrf   
                <ul class="list-group">
                    Nama <input type="text" name="inputName" required>
                    Nim <input type="text" name="inputNim" required>
                    Email <input type="text" name="inputEmail" required>
                </ul>
                <input type="submit" value="Simpan" class="btn btn-success m-3">
            </form>
        </div>
    </div>
</div>
@endsection