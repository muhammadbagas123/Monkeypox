@extends('layouts.admin.main')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ $title }}</h1>
        </div>

        <div class="section-body">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Edit {{ $title }}</h4>
                </div>
                <form action="{{ route('admin.pengetahuan.update', $pengetahuan->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="id">Id Berita</label>
                            <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id"
                                value="{{ $pengetahuan->id }}" readonly>
                            @error('id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Berita</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror"" id=" nama"
                                name="nama" value="{{ $pengetahuan->nama }}" placeholder="Masukkan Nama Pengetahuan">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Berita</label>
                            <textarea name="deskripsi" id="deskripsi"
                                class="form-control">{!! $pengetahuan->deskripsi !!}</textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="solusi">Link Berita</label>
                            <textarea name="solusi" id="solusi" class="form-control">{!! $pengetahuan->solusi !!}</textarea>
                            @error('solusi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar Berita</label>
                            <input type="file" class="form-control-file" id="gambar" name="gambar">
                            @error('gambar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <br>
                            <img src='{{ asset("assets/gambar/$pengetahuan->gambar") }}' alt="{{ $pengetahuan->nama }}"
                                width="200px">
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{ route('admin.pengetahuan.show', $pengetahuan->id) }}" class="btn btn-danger"><i
                                class="fas fa-arrow-left"></i> Kembali</a>
                        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script src="{{ asset('assets/vendor/ckeditor/ckeditor.js') }}"></script>
@endpush

@push('script')
    <script>
        $(document).ready(() => {
            CKEDITOR.replace('deskripsi');
            CKEDITOR.replace('solusi');
        });
    </script>
@endpush
