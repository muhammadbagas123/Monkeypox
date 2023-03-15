<?php

namespace App\Http\Controllers\admin;

use App\Models\Creditt;
use App\Http\Requests\admin\CreditRequest;
use App\Http\Controllers\admin\AdminController;
use App\Models\Credit;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CreditController extends AdminController
{
    protected $title = 'Credit';

    public function index()
    {
        $title = $this->title;
        $credits = Credit::latest()->get();
        return view('admin.credit.index', compact('title', 'credits'));
    }

    public function create()
    {
        $title = $this->title;
        $generate = Credit::all()->count();
        if ($generate > 0) {
            $generateId = sprintf("C%03s", ++$generate);
        } else if ($generate == 0) {
            $generateId = "C001";
        }
        return view('admin.credit.create', compact('title', 'generateId'));
    }

    public function store(CreditRequest $request)
    {
        $file = $request->file('gambar');
        $nama_gambar = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'assets/gambar';
        $file->move($tujuan_upload, $nama_gambar);
        Credit::create([
            'id' => $request->id,
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
            'deskripsi' => $request->deskripsi,
            'solusi' => $request->solusi,
            'gambar' => $nama_gambar
        ]);
        $this->notification('success', 'Berhasil', 'Data Credit Berhasil Ditambah');
        return redirect(route('admin.credit.index'));
    }

    public function show(Credit $credit)
    {
        $title = $this->title;
        return view('admin.credit.show', compact('title', 'credit'));
    }

    public function edit(Credit $credit)
    {
        $title = $this->title;
        return view('admin.credit.edit', compact('title', 'credit'));
    }

    public function update(CreditRequest $request, Credit $credit)
    {
        $credit->update([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
            'deskripsi' => $request->deskripsi,
            'solusi' => $request->solusi
        ]);
        if ($request->file('gambar')) {
            File::delete('assets/gambar/' . $credit->gambar);
            $gambar = time() . "_" . $request->file('gambar')->getClientOriginalName();
            $directory = 'assets/gambar';
            $request->file('gambar')->move($directory, $gambar);
            $credit->update([
                'gambar' => $gambar
            ]);
        }
        $this->notification('success', 'Berhasil', 'Data Credit Berhasil Diupdate');
        return redirect(route('admin.credit.show', $credit->id));
    }

    public function destroy(Credit $credit)
    {
        File::delete('assets/gambar/' . $credit->gambar);
        $credit->delete();
        $this->notification('success', 'Berhasil', 'Data Credit Berhasil Dihapus');
        return redirect(route('admin.credit.index'));
    }
}
