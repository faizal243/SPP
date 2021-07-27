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
                <h5>Tambah Petugas</h5>

            </div>
                <form action="{{route('petuga.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Id_petugas</label>
                                <input type="text" name="id_petugas" class="form-control"  placeholder="Id_petugas" required ><br>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control"  placeholder="Username" required><br>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" class="form-control"  placeholder="Password" required><br>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Nama_petugas</label>
                                <input type="text" name="nama_petugas" class="form-control"  placeholder="Nama_petugas" required><br>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control"  placeholder="Email" required><br>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Level</label>
                                <input type="text" name="level" class="form-control"  placeholder="Level" required><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Create/Tamabah</button>
                        <a class="btn btn-danger" href="{{route('petuga.index')}}"> Back/Kembali</a>
                    </div>
                
                </div>    
            </div>
         
        </form>
</body>
</html>
@endsection