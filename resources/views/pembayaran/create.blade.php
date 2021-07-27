


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
  
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>


    <title>Document</title>
</head>
<body>  
    <div class="card col-md-6 p-4 mx-auto">
        <div class="card-header text-center bg-info text-light">
            <h5>Tambah Pembayaran</h5>
        </div>
            <form action="{{route('pembayaran.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="nisn">Nama</label>
                            <select name="nisn" id="nisn" class="form-control pkpk" onchange="dataSiswa()"> 
                                <option >-- Cari --</option>
                                    @foreach ($siswa as $data)
                                        <option value="{{ $data->nisn}}" >
                                            <small>Nama : </small> {{$data->nama}}
                                            <small>Nis : </small> {{$data->nis}}
                                        </option>
                                    @endforeach
                            </select><br>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="">Terakhir dibayar</label>
                                <input type="text" readonly id="ket" class="form-control"></br>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label>jumlah_bayar</label>
                                <input type="number" name="jumlah_bayar" placeholder="jumlah_bayar" class="form-control"></br>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Create/Tambah</button>
                        <a class="btn btn-danger" href="{{route('pembayaran.index')}}"> Back/Kembali</a>
                    </div> 
                </div>
            </form>
        </div>
    
   
    <script>
        $(document).ready( function () {
        $('#table').DataTable();
        $('#nisn').select2();
    } );
    </script>

       
    
</body>
</html>
<script>
    function dataSiswa(){
        var nisn = $('#nisn').val();
            {{-- alert(nisn); --}}
           $.ajax({
                url:"{{url('get-data/')}}"+ '/' + nisn,
                type:'GET',
                success: function(data){
                    console.log(data);
                    $('#ket').val("Rp." + data['siswa']['jumlah_bayar'] +  " " + data['siswa']['bulan_dibayar']+'/'+data['siswa']['tahun_dibayar']);
                },
                    error: function(data){
                        $('#ket').val("Rp.100.0000 - belum bayar spp ");
                    }

           });
    }
</script>
