<?php

namespace App\Http\Controllers\pengguna;

use App\Http\Controllers\pengguna\PenggunaController;
use Illuminate\Http\Request;
use App\Models\Pengetahuan;

class PengetahuanController extends PenggunaController
{
    public $title = 'Info Berita';
    public function index()
    {
        $title = $this->title;
        $bcrum = $this->bcrum($title);
        $pengetahuans = Pengetahuan::latest()->get();
        return view('pengguna.pengetahuan.index', compact('pengetahuans', 'title', 'bcrum'));
    }

    public function show(Pengetahuan $pengetahuan)
    {
        $title = $this->title;
        $bcrum = $this->bcrum($pengetahuan->nama, route('pengguna.pengetahuan.index'), $title);
        return view('pengguna.pengetahuan.show', compact('pengetahuan', 'title', 'bcrum'));
    }
}
