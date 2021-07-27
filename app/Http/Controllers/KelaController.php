<?php

namespace App\Http\Controllers;

use App\Models\Kela;
use Illuminate\Http\Request;

class KelaController extends Controller
{
    public function index()
    {
        $kelas= Kela::all();

        return view('kela.index', compact('kelas'));
    }

    public function create()
    {
        return view('kela.create');
    }

    public function store(Request $request)
    {
        Kela::create([
            'id_kelas' => $request ->id_kelas,
            'nama_kelas' => $request ->nama_kelas,
        ]);

        return redirect('/kela');

    }
    public function destroy( $id_kelas)
    {
        $kela = Kela::where('id_kelas', $id_kelas)->delete();
       
        return redirect()->route('kela.index');
    }

    public function edit($id_kelas)
    {
        $kela = Kela::find($id_kelas);
        return view('kela.edit', compact('kela'));
    }

    public function update(Request $request, Kela $id_kelas)
    {
        $request->validate([
            'nama_kelas' => 'required',
        ]);

        $id_kelas->update($request->all());

        return redirect()->route('kela.index');
    }
}
