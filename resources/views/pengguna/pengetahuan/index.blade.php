@extends('layouts.pengguna.main')

@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
            @foreach ($pengetahuans as $pengetahuan)
                <div class="col mb-4">
                    <div class="card h-100">
                        <div class="position-absolute bg-dark px-3 py-2 text-white">Berita</div>
                        <img src="{{ asset('assets/gambar/' . $pengetahuan->gambar) }}" class="card-img-top"
                            alt="{{ $pengetahuan->nama }}">
                        <div class="card-body">
                            <a href="{{ route('pengguna.pengetahuan.show', $pengetahuan->slug) }}">
                                <h5 class="card-title"><strong>{{ Str::title($pengetahuan->nama) }}</strong></h5>
                            </a>
                            <small class="text-muted">{{ $pengetahuan->created_at->diffForHumans() }}</small>
                            <p class="card-text">{!! Str::limit($pengetahuan->deskripsi, 100) !!}</p>
                            <hr>
                            <div class="detail text-right">
                                <a href="{{ route('pengguna.pengetahuan.show', $pengetahuan->slug) }}"
                                    class="btn btn-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
