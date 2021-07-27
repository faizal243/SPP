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
                <h5>Edit Spp</h5>

            </div>
            <form action="{{url('spp/'.$spp->id_spp)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                        <div class="form-group">
                            <strong>Tahun</strong>
                                <input type="text" name="tahun" class="form-control" value="{{$spp->tahun}}" placeholder="Tahun"><br>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                        <div class="form-group">
                            <strong>Nominal</strong>
                                <input type="text" name="nominal" class="form-control" value="{{$spp->nominal}}" placeholder="Nominal"><br>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-success">Ubah/Update</button>
                        <a class="btn btn-danger" href="{{route('spp.index')}}">Kembali/Back</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
</body>
</html>
@endsection