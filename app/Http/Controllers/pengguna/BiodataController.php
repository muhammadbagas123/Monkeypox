<?php

namespace App\Http\Controllers\pengguna;

use App\Http\Controllers\pengguna\PenggunaController;
use App\Models\Province;
use Illuminate\Http\Request;


class BiodataController extends PenggunaController
{
    protected $title = "Biodata";

    public function index()
    {
        $title = $this->title;
        $provinsi = Province::orderBy('prov_name', 'asc')->get();
        $bcrum = $this->bcrum('Biodata');
        return view('pengguna.biodata.index', compact('title', 'bcrum', 'provinsi'));
    }

    public function store(Request $request)
    {
        Session([
            'biodata' => [
                'nama_penderita' => $request->nama_penderita,
                'gender' => $request->gender,
                'usia' => $request->usia,
                'prov' => $request->prov
            ]
        ]);
        return redirect()->route('pengguna.diagnosa.index');
    }
    public function reset ()
    {
        session()->flush();
        return redirect()->route('pengguna.diagnosa.index');
    }
}
