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
                <h5>Halaman Siswa</h5>

                <a class="btn btn-success my-3" href="{{route('siswa.create')}}">Create Siswa</a>
                
                <table class="table table-striped" id="search">
                    <thead>
                        <tr>
                            <td>Nisn</td>
                            <td>Nis</td>
                            <td>Nama</td>
                            <td>Id_kelas</td>
                            <td>Alamat</td>
                            <td>No_telp</td>
                            <td>Id_spp</td>
                            <td width="180px">Action</td>
                        </tr>

                        <tbody>
                            @foreach ($siswas as $siswa)
                                <tr>
                                    <td>{{$siswa->nisn}}</td>
                                    <td>{{$siswa->nis}}</td>
                                    <td>{{$siswa->nama}}</td>
                                    <td>{{$siswa->id_kelas}}</td>
                                    <td>{{$siswa->alamat}}</td>
                                    <td>{{$siswa->no_telp}}</td>
                                    <td>{{$siswa->id_spp}}</td>
                                    <td>
                                        <form action="{{ url('siswa/destroy/'.$siswa->nisn)}}" method="POST">
                                            
                                            <a class="btn btn-primary" href="{{url('siswa/'.$siswa->nisn)}}" >Edit</a>

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </thead>
                </table>

        </center>
</body>
</html>
@endsection
