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
                <h5>Tambah Kelas</h5>

            </div>
                <form action="{{route('kela.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Id_kelas</label>
                                    <input type="text" name="id_kelas" class="form-control" placeholder="Id_kelas" required ><br>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Nama_kelas</label>
                                    <input type="text" name="nama_kelas" class="form-control" placeholder="Nama_kelas" required><br>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Tambah/Create</button>
                            <a class="btn btn-danger" href="{{route('kela.index')}}">Kembali/Back</a>
                        </div>
                    </div>
                </form>
        </div>

    </div>
</body>
</html>
@endsection