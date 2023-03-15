@extends('layouts.pengguna.main')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <strong>Detail Pengetahuan</strong>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="image text-center">
                        <h4>{{ $pengetahuan->nama }}</h4>
                        <img src="{{ asset('assets/gambar/' . $pengetahuan->gambar) }}" alt="{{ $pengetahuan->nama }}"
                            width="400px">
                    </div>
                    <div class="deskripsi">
                        <strong>Deskripsi</strong>
                        {!! $pengetahuan->deskripsi !!}
                    </div>
                    <div class="Solusi">
                        <strong>Link Berita</strong>
                        {!! $pengetahuan->solusi !!}
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('pengguna.pengetahuan.index') }}" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>
@endsection
