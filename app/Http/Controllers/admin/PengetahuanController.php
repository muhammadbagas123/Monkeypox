<?php

namespace App\Http\Controllers\admin;

use App\Models\Pengetahuant;
use App\Http\Requests\admin\PengetahuanRequest;
use App\Http\Controllers\admin\AdminController;
use App\Models\Pengetahuan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PengetahuanController extends AdminController
{
    protected $title = 'Pengetahuan';

    public function index()
    {
        $title = $this->title;
        $pengetahuans = Pengetahuan::latest()->get();
        return view('admin.pengetahuan.index', compact('title', 'pengetahuans'));
    }

    public function create()
    {
        $title = $this->title;
        $generate = Pengetahuan::all()->count();
        if ($generate > 0) {
            $generateId = sprintf("B%03s", ++$generate);
        } else if ($generate == 0) {
            $generateId = "B001";
        }
        return view('admin.pengetahuan.create', compact('title', 'generateId'));
    }

    public function store(PengetahuanRequest $request)
    {
        $file = $request->file('gambar');
        $nama_gambar = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'assets/gambar';
        $file->move($tujuan_upload, $nama_gambar);
        Pengetahuan::create([
            'id' => $request->id,
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
            'deskripsi' => $request->deskripsi,
            'solusi' => $request->solusi,
            'gambar' => $nama_gambar
        ]);
        $this->notification('success', 'Berhasil', 'Data Pengetahuan Berhasil Ditambah');
        return redirect(route('admin.pengetahuan.index'));
    }

    public function show(Pengetahuan $pengetahuan)
    {
        $title = $this->title;
        return view('admin.pengetahuan.show', compact('title', 'pengetahuan'));
    }

    public function edit(Pengetahuan $pengetahuan)
    {
        $title = $this->title;
        return view('admin.pengetahuan.edit', compact('title', 'pengetahuan'));
    }

    public function update(PengetahuanRequest $request, Pengetahuan $pengetahuan)
    {
        $pengetahuan->update([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
            'deskripsi' => $request->deskripsi,
            'solusi' => $request->solusi
        ]);
        if ($request->file('gambar')) {
            File::delete('assets/gambar/' . $pengetahuan->gambar);
            $gambar = time() . "_" . $request->file('gambar')->getClientOriginalName();
            $directory = 'assets/gambar';
            $request->file('gambar')->move($directory, $gambar);
            $pengetahuan->update([
                'gambar' => $gambar
            ]);
        }
        $this->notification('success', 'Berhasil', 'Data Pengetahuan Berhasil Diupdate');
        return redirect(route('admin.pengetahuan.show', $pengetahuan->id));
    }

    public function destroy(Pengetahuan $pengetahuan)
    {
        File::delete('assets/gambar/' . $pengetahuan->gambar);
        $pengetahuan->delete();
        $this->notification('success', 'Berhasil', 'Data Pengetahuan Berhasil Dihapus');
        return redirect(route('admin.pengetahuan.index'));
    }
}
