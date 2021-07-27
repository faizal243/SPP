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
    <div class="container">
        <div class="card col-md-11 p-11 mx-auto">
            <div class="card-header text-center bg-info text-light">
                <h5>Edit Petugas</h5>

            </div>
            <form action="{{url('petuga/'.$petuga->id_petugas)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                        <div class="form-group">
                            <strong>Username</strong>
                                <input type="text" name="username" class="form-control" value="{{$petuga->username}}" placeholder="Username"><br>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                        <div class="form-group">
                            <strong>Password</strong>
                                <input type="text" name="password" class="form-control" value="{{$petuga->password}}" placeholder="Password"><br>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                        <div class="form-group">
                            <strong>Nama_petugas</strong>
                                <input type="text" name="nama_petugas" class="form-control" value="{{$petuga->nama_petugas}}" placeholder="Nama_petugas"><br>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                        <div class="form-group">
                            <strong>Email</strong>
                                <input type="text" name="email" class="form-control" value="{{$petuga->email}}" placeholder="Email"><br>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                        <div class="form-group">
                            <strong>Level</strong>
                                <input type="text" name="level" class="form-control" value="{{$petuga->level}}" placeholder="level"><br>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-success">Ubah/Update</button>
                        <a class="btn btn-danger" href="{{route('petuga.index')}}">Kembali/Back</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
</body>
</html>
@endsection