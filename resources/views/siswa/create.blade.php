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
                <h5>Tambah Siswa</h5>

            </div>
                <form action="{{route('siswa.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Nisn</label>
                                    <input type="text" name="nisn" class="form-control" placeholder="Nisn" required ><br>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Nis</label>
                                    <input type="text" name="nis" class="form-control" placeholder="Nis" required><br>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama" required><br>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Email" required><br>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>kelas:</strong>
                                    <select type="text" name="id_kelas" class="form-control" placeholder="Id_kelas" required>
                                        <option>-- pilih ---</option>
                                            @foreach ($kela as $k)
                                                <option value="{{$k->id_kelas}}">
                                                    <small>Id_kelas : </small> {{$k->id_kelas}} <br>
                                                    <small>Nama_kelas : </small> {{$k->nama_kelas}}
                                                </option>
                                            @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" style="height:150px" name="alamat" placeholder="Alamat" required></textarea><br>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>No_telp</label>
                                    <input type="number" name="no_telp" class="form-control" placeholder="No_telp" required><br>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Spp:</strong>
                                    <select type="text" name="id_spp" class="form-control" placeholder="Spp" required>
                                        <option>-- pilih ---</option>
                                            @foreach ($spp as $s)
                                                <option value="{{$s->id_spp}}">
                                                    <small>Tahun : </small> {{$s->tahun}} <br>
                                                    <small>Nominal : </small> {{$s->nominal}}
                                                </option>
                                            @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Tambah/Create</button>
                            <a class="btn btn-danger" href="{{route('siswa.index')}}">Kembali/Back</a>
                        </div>
                    </div>
                </form>
        </div>

    </div>
</body>
</html>
@endsection