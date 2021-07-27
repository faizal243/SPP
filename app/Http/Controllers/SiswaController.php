<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Spp;
use App\Models\Kela;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas= Siswa::all();
        $spp = Spp::all();
        $kela = Kela::all();

        return view('siswa.index', compact('siswas', 'spp', 'kela'));
    }

    public function create()
    {
        $spp = Spp::all();
        $siswa = Siswa::all();
        $kela = Kela::all();
        return view('siswa.create', compact('spp', 'siswa', 'kela'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nis' => 'required|max:11'
        ]);

        Siswa::create([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->nis,
            'id_kelas' => $request->id_kelas,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'id_spp' => $request->id_spp,
        ]);

        User::create([
        'name' => $request->nama,
        'email' => $request->email,
        'password' => Hash::make($request->nis),
        'level' => 3           

        ]);

        return redirect('/siswa');

    }

    public function destroy( $nisn )
    {
        $siswa = Siswa::where('nisn', $nisn)->delete();

        return redirect()->route('siswa.index');
    }
    public function edit($nisn)
    {
        $spp = Spp::all();
        $kela = Kela::all();
        $siswa = Siswa::find($nisn);
        return view('siswa.edit', compact('siswa', 'spp', 'kela'));
    }
    public function update(Request $request, Siswa $nisn)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            // 'email' => 'required',
            // 'password' => 'required',
            'id_kelas' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'id_spp' => 'required',

        ]);
        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->nis),
            'level' => 3           
            ]);
    
        
        $nisn->update($request->all());

        return redirect()->route('siswa.index');
    }

}
