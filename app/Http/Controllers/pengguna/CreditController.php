<?php

namespace App\Http\Controllers\pengguna;

use App\Http\Controllers\pengguna\PenggunaController;
use Illuminate\Http\Request;
use App\Models\Credit;

class CreditController extends PenggunaController
{
    public $title = 'Credit Author';
    public function index()
    {
        $title = $this->title;
        $bcrum = $this->bcrum($title);
        $credits = Credit::latest()->get();
        return view('pengguna.credit.index', compact('credits', 'title', 'bcrum'));
    }

    public function show(Credit $credit)
    {
        $title = $this->title;
        $bcrum = $this->bcrum($credit->nama, route('pengguna.credit.index'), $title);
        return view('pengguna.credit.show', compact('credit', 'title', 'bcrum'));
    }
}
