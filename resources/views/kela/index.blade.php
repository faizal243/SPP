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
                <h5>Halaman Kelas</h5>

                <a class="btn btn-success my-3" href="{{route('kela.create')}}">Create Kelas</a>
                
                <table class="table table-striped" id="search">
                    <thead>
                        <tr>
                            <td>Id_kelas</td>
                            <td>Nama_kelas</td>
                            <td width="180px">Action</td>
                        </tr>

                        <tbody>
                            @foreach ($kelas as $kela)
                                <tr>
                                    <td>{{$kela->id_kelas}}</td>
                                    <td>{{$kela->nama_kelas}}</td>
                                    <td>
                                        <form action="{{ url('kela/destroy/'.$kela->id_kelas)}}" method="POST">
                                            
                                            <a class="btn btn-primary" href="{{url('kela/'.$kela->id_kelas)}}" >Edit</a>

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
