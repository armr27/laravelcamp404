@extends('layouts.app')

@section('content')
<div class="container"> 
    <table class="table table-dark table-striped">
        <thead>
            <tr>
            <th>#</th>
            <th>First</th>
            <th>Last</th>
            <th>Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            </tr>
        </tbody>
    </table>
</div>



@endsection