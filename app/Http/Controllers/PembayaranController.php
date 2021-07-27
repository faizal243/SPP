<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Spp;
use App\Models\History;
use App\Models\Petuga;
use App\Models\Siswa;
use Carbon\Carbon;
use Auth;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayarans = History::all();
        $spp = Spp::all();
        $siswa = Siswa::all();
        $petuga = Petuga::all();

        return view('pembayaran.index', compact('pembayarans', 'spp', 'siswa', 'petuga'));
    }

    public function create()
    {
        $petuga = Petuga::all();
        $siswa = Siswa::all();
        $spp = Spp::all();
        $pembayaran = Pembayaran::all();

        return view('pembayaran.create', compact('spp', 'pembayaran', 'siswa', 'petuga'));

    }

    public function store(Request $request)
    {

        $siswa = Siswa::where('nisn', $request->nisn)->first();
        $spp = Spp::where('id_spp', $siswa->id_spp)->first();
        $bln = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni','Juli', 'Agustus', 'september', 'Oktober', 'November', 'Desember'];
        $transaksi = Pembayaran::where('nisn', $request->nisn)->get();

        
        if(sizeof($transaksi) == 0) :
            $bulan = 6;
            $tahun = substr($spp->tahun,0,4);
        else : 
            $pembayaran = array_key_last(end($transaksi));

            $akhir = $transaksi[$pembayaran];

            $pembayaran = array_search($akhir->bulan_dibayar, $bln);
        
            if ($pembayaran == 11) : 
                $bulan = 0;
                $tahun = $akhir->tahun_dibayar + 1;
            else : 
                $bulan = $pembayaran + 1;
                $tahun = $akhir->tahun_dibayar;
            endif;
        endif;
        if ($request->jumlah_bayar < $spp->nominal) : 
            return back()->with('success', 'Uang yg anda masukan kurang');
        endif; 
        // dd($bln[$bulan]);
        Pembayaran::create([
            'id_petugas' => Auth::user()->id,
            'nisn' => $request->nisn,
            'tgl_bayar' => Carbon::now()->timezone('Asia/Jakarta'),
            'bulan_dibayar' => $bln[$bulan],
            'tahun_dibayar' => $tahun,
            'id_spp' => $spp->id_spp,
            'jumlah_bayar' => $request->jumlah_bayar,
        ]);
        return redirect('/pembayaran');
    }

    public function destroy( $id_pembayaran)
    {
        $a = Pembayaran::where('id_pembayaran', $id_pembayaran)->delete();

        return redirect()->route('pembayaran.index');
    }
    public function getData($nisn)
    {
        $siswa = Pembayaran::where('nisn', $nisn)->get();
        $ind = array_key_last(end($siswa));
        $data = [
            'siswa' => $siswa[$ind],
            'proses' => 'suksesss',
        ];
        return response()->json($data);
    }

    public function show(History $pembayaran )
    {
        return view('pembayaran.show', compact('pembayaran'));
    }

    public function cetak_pdf()
    {
    	$pembayaran = Pembayaran::all();
 
    	$pdf = PDF::loadview('pembayaran_pdf',['pembayaran'=>$pembayaran]);
    	return $pdf->download('laporan-pembayaran-pdf');
    }
}
