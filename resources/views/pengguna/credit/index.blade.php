@extends('layouts.pengguna.main')

@section('content')
<section id="bcg">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
            @foreach ($credits as $credit)
                <div class="col mb-4">
                    <div class="card h-100">
                        <div class="position-absolute bg-dark px-3 py-2 text-white">Credit</div>
                        <div class="image text-center">
                        <img src="{{ asset('assets/gambar/' . $credit->gambar) }}" width="150px" height="200px"
                            alt="{{ $credit->nama }}">
                        </div>
                        <div class="card-body">
                            <a href="{{ route('pengguna.credit.show', $credit->slug) }}">
                                <h5 class="card-title"><strong>{{ Str::title($credit->nama) }}</strong></h5>
                            </a>
                            <small class="text-muted">{{ $credit->created_at->diffForHumans() }}</small>
                            <p class="card-text">{!! Str::limit($credit->deskripsi, 100) !!}</p>
                            <hr>
                            <div class="detail text-right">
                                <a href="{{ route('pengguna.credit.show', $credit->slug) }}"
                                    class="btn btn-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
