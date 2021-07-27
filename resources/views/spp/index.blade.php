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
        <h5>Halaman Spp</h5>

        <a class="btn btn-success my-3" href="{{route('spp.create')}}">Create Spp

        </a>
        
        <table class="table table-striped" id="search">
            <thead>
                <tr>
                    <td>Id_Spp</td>
                    <td>Tahun</td>
                    <td>Nominal</td>
                    <td width="180px">Action</td>
                </tr>

                <tbody>
                    @foreach ($spps as $spp)
                        <tr>
                            <td>{{$spp->id_spp}}</td>
                            <td>{{$spp->tahun}}</td>
                            <td>{{$spp->nominal}}</td>
                            <td>
                                <form action="{{ url('spp/destroy/'.$spp->id_spp)}}" method="POST">
                                    
                                    <a class="btn btn-primary" href="{{url('spp/'.$spp->id_spp)}}" >Edit</a>

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