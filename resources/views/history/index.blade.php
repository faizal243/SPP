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
    @if (auth()->user()->level==1 or auth()->user()->level==2)
        <a href="{{route('export_excel')}}" class="btn btn-info my-3" target="_blank" >Export</a>
    @endif
    
    
    {{--  <div class="m-3">
        <form action="{{route('history.index')}}" method="GET">
            <input type="text" name="search" placeholder="Masukan Nis siswa ......." class="form-control bg-light">
        </form>
    </div>  --}}

    <table class="table" id="search">
        <thead>
            <tr>
                <td>Id_pembayaran</td>
                <td>Id_petugas</td>
                <td>Nisn</td>
                <td>Tgl_bayar</td>
                <td>Bulan_dibayar</td>
                <td>Tahun_dibayar</td>
                <td>Id_spp</td>
                <td>Jumlah_bayar</td>
                <td>Nama_petugas</td>
                <td>Nis</td>
                <td>Nama</td>
                <td>Nama_kelas</td>
                <td>Alamat</td>
                <td>No_telp</td>
                <td>Tahun</td>
                <td>Nominal</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($viewbayar as $a)
                <tr>
                    <td>{{$a->id_pembayaran}}</td>
                    <td>{{$a->id_petugas}}</td>
                    <td>{{$a->nisn}}</td>
                    <td>{{$a->tgl_bayar}}</td>
                    <td>{{$a->bulan_dibayar}}</td>
                    <td>{{$a->tahun_dibayar}}</td>
                    <td>{{$a->id_spp}}</td>
                    <td>{{$a->jumlah_bayar}}</td>
                    <td>{{$a->name}}</td>
                    <td>{{$a->nis}}</td>
                    <td>{{$a->nama}}</td>
                    <td>{{$a->nama_kelas}}</td>
                    <td>{{$a->alamat}}</td>
                    <td>{{$a->no_telp}}</td>
                    <td>{{$a->tahun}}</td>
                    <td>{{$a->nominal}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</center>
</body>
</html>
@endsection
