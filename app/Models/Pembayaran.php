<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayarans';

    protected $fillable = ['id_pembayaran','id_petugas','nisn','tgl_bayar', 'bulan_dibayar','tahun_dibayar','id_spp', 'jumlah_bayar'];

    protected $primaryKey = 'id_pembayaran';
}
