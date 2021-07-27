<?php

namespace App\Exports;


use App\ViewBayar;
use App\Models\History;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ViewBayarExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return History::all();
    }

    public function headings():array
    {
        return[
            'ID Pembayaran',
            'ID Petugas',
            'Nisn',
            'Tgl Bayar',
            'Bulan Dibayar',
            'Tahun Dibayar',
            'ID Spp',
            'Jumlah Bayar',
            'Created at',
            'Updated at',
            'Nama Petugas',
            'email',
            'Nis',
            'Nama',
            'id_kelas',
            'nama kelas',
            'alamat',
            'no_telp',
            'Tahun',
            'Nominal',
        ];
    }

}
