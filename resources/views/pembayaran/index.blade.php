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
                <h5>Halaman pembayaran</h5>

                <a class="btn btn-success my-3" href="{{route('pembayaran.create')}}">Create pembayaran</a>
                
                <table class="table table-striped" id="search">
                    <thead>
                        <tr>
                            <td>Id_pembayaran</td>
                            <td>Id_petugas</td>
                            <td>Nisn</td>
                            <td>nama</td>
                            <td>Tgl_bayar</td>
                            <td>Bulan_dibayar</td>
                            <td>Tahun_dibayar</td>
                            <td>Id_spp</td>
                            <td>Jumlah_bayar</td>;
                            <td width="180px">Action</td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($pembayarans as $pembayaran)
                            <tr>
                                <td>{{$pembayaran->id_pembayaran}}</td>
                                <td>{{$pembayaran->id_petugas}}</td>
                                <td>{{$pembayaran->nisn}}</td>
                                <td>{{$pembayaran->nama}}</td>
                                <td>{{$pembayaran->tgl_bayar}}</td>
                                <td>{{$pembayaran->bulan_dibayar}}</td>
                                <td>{{$pembayaran->tahun_dibayar}}</td>
                                <td>{{$pembayaran->id_spp}}</td>
                                <td>{{$pembayaran->jumlah_bayar}}</td>
                                <td>
                                    <form action="{{ url('pembayaran/destroy/'.$pembayaran->id_pembayaran)}}" method="POST">
                                        <a class="btn btn-info" href="{{ url('pembayaran/show/'.$pembayaran->id_pembayaran) }}" target="_blank">Show</a>

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
