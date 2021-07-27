@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>  --}}

    <title></title>
</head>
<body>
    <center>
        <div class="card col-md-6 p-4 mx-auto">
            <div class="card-header text-center bg-info text-light">
                <h5>Pembuktian Transaksi</h5>
            </div> 
                <div onclick="window.print()">
                    <div class="form-group">
                        <strong>ID Pembayaran</strong>
                            {{ $pembayaran->id_pembayaran}}
                    </div>
                    <div class="form-group">
                        <strong>ID Petugas</strong>
                            {{ $pembayaran->id_petugas }}
                    </div>
                    <div class="form-group">
                        <strong>Nisn</strong>
                            {{ $pembayaran->nisn }}
                    </div>
                    <div class="form-group">
                        <strong>Nama</strong>
                            {{ $pembayaran->nama }}
                    </div>
                    <div class="form-group">
                        <strong>Tgl Bayar</strong>
                            {{ $pembayaran->tgl_bayar}}
                    </div>
                    <div class="form-group">
                        <strong>Bulan DIbayar</strong>
                            {{ $pembayaran->bulan_dibayar}}
                    </div>
                    <div class="form-group">
                        <strong>Tahun Dibayar</strong>
                            {{ $pembayaran->tahun_dibayar}}
                    </div>
                    <div class="form-group">
                        <strong>ID spp</strong>
                            {{ $pembayaran->id_spp}}
                    </div>
                    <div class="form-group">
                        <strong>Jumlah Bayar</strong>
                            {{ $pembayaran->jumlah_bayar}}
                    </div>
                </div>
           
        </div>
    </center>
    <a class="btn btn-danger" href="{{route('pembayaran.index')}}">Back/Kembali</a>
</body>
</html>
@endsection