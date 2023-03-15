@extends('layouts.pengguna.main')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <strong>Detail Credit</strong>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="image text-center">
                        <h4>{{ $credit->nama }}</h4>
                        <img src="{{ asset('assets/gambar/' . $credit->gambar) }}" alt="{{ $credit->nama }}"
                            width="200px">
                    </div>
                    <div class="deskripsi">
                        <strong>Deskripsi</strong>
                        {!! $credit->deskripsi !!}
                    </div>
                    <div class="Solusi text-center">
                        <strong>Pesan</strong>
                        {!! $credit->solusi !!}
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('pengguna.credit.index') }}" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>
@endsection
