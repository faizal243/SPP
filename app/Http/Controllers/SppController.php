<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use Illuminate\Http\Request;

class SppController extends Controller
{
    public function index()
    {
        $spps= Spp::all();
        
        return view('spp.index', compact('spps'));
    }

    public function create()
    {
        return view('spp.create');
    }

    public function store(Request $request)
    {
        Spp::create([
            'id_spp' => $request ->id_spp,
            'tahun' => $request ->tahun,
            'nominal' => $request ->nominal,
        ]);

        return redirect('/spp');
    }

    public function destroy( $id_spp)
    {
        $spp = Spp::where('id_spp', $id_spp)->delete();

        return redirect()->route('spp.index');
    }

    public function edit($id_spp)
    {
        $spp = Spp::find($id_spp);
        return view('spp.edit', compact('spp'));
    }

    public function update(Request $request, Spp $id_spp)
    {
        $request->validate([
            'tahun' => 'required',
            'nominal' => 'required',
        ]);
        
        $id_spp->update($request->all());

        return redirect()->route('spp.index');
    }

}
