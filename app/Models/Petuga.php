<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petuga extends Model
{
    use HasFactory;

    protected $table = 'petugas';

    protected $fillable = ['id_petugas','username','password','nama_petugas', 'email','level'];

    protected $primaryKey = 'id_petugas';

}
