<?php

namespace App\Http\Controllers;

use App\Models\Petuga;
use App\Models\User;
use Illuminate\Support\facades\Hash;
use Illuminate\Http\Request;

class PetugaController extends Controller
{
    public function index()
    {
        $petugas= Petuga::all();

        return view('petuga.index', compact('petugas'));
    }

    public function create()
    {
        return view('petuga.create');
    }

    public function store(Request $request)
    {
        Petuga::create([
            'id_petugas' => $request->id_petugas,
            'username' => $request->username,
            'password' => $request->password,
            'nama_petugas' => $request->nama_petugas,
            'email' => $request->email,
            'level' => $request->level,
        ]);

        User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => 2 
        ]);
        return redirect('/petuga');
    }
    public function destroy( $id_petugas )
    {
        $petuga = Petuga::where('id_petugas', $id_petugas)->delete();

        return redirect()->route('petuga.index');
    }
    public function edit($id_petugas)
    {
        $petuga = Petuga::find($id_petugas);
        return view('petuga.edit', compact('petuga'));
    }
    public function update(Request $request, Petuga $id_petugas)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'nama_petugas' => 'required',
            'level' => 'required',
        ]);
        
        $id_petugas->update($request->all());

        return redirect()->route('petuga.index');
    }
}
