<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ViewBayarExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\History;
use App\Models\Siswa;
use App\Models\Pembayaran;
use Auth;

class HistoryController extends Controller
{
    public function index()
    {
        if(auth()->user()->level==1 or auth()->user()->level==2)
        {
            $viewbayar = History::all();
        }
        else
        {
           $email = auth()->user()->email;
           $siswa = Siswa::where('email', $email)->pluck('nisn');
           $viewbayar = History::where('nisn', $siswa)->get();
        }

        return view('History.index', compact('viewbayar'));

    }
    public function export_excel(Type $var = null)
    {
        return Excel::download(new ViewbayarExport, 'viewbayar.xlsx');
    }
}
