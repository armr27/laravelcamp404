@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-reader">
            <h3>Data Siswa</h3>
        </div>
        <div class="card-body">
            <a href="{{route('siswa.create')}}">Tambah Data Siswa</a>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Nama</th>
                    <th>Nis</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($datasiswa as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->nim}}</td>
                    <td>{{$data->email}}</td>
                    <td>
                        <ul class="nav ">
                            <a href="{{route('siswa.show', $data->id)}}" class="btn btn-success m-2">Show</a>
                            <a href="{{route('siswa.edit', $data->id)}}" class="btn btn-warning m-2">Edit</a>
                            <form action="{{route('siswa.destroy',  $data->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger m-2">Delete</button>
                        </form>
                    </ul>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection