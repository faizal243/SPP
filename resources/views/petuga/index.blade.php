@extends('layouts.app')

@section('content')
    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h5>Halama Petugas</h5>

    <a class="btn btn-success my-3" href="{{route('petuga.create')}}">Create Petugas</a>

    <table class="table table-striped" id="search">
        <thead>
            <tr>
                <td>Id_petugas</td>
                <td>Username</td>
                <td>Password</td>
                <td>Nama_petugas</td>
                <td>Level</td>
                <td width="180px">Action</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($petugas as $petuga)
                <tr>
                    <td>{{$petuga->id_petugas}}</td>
                    <td>{{$petuga->username}}</td>
                    <td>{{$petuga->password}}</td>
                    <td>{{$petuga->nama_petugas}}</td>
                    <td>{{$petuga->level}}</td>
                    <td>
                        <form action="{{ url('petuga/destroy/'.$petuga->id_petugas)}}" method="POST">

                            <a class="btn btn-primary" href="{{url('petuga/'.$petuga->id_petugas)}}" >Edit</a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </center>
    
</body>
</html>
@endsection