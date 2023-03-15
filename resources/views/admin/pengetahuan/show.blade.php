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
                    <h4>Detail {{ $title }} {{ $pengetahuan->nama }}</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col text-center mb-4">
                            <img src="{{ asset('assets/gambar/' . $pengetahuan->gambar) }}" alt="{{ $pengetahuan->nama }}"
                                width="300px">
                        </div>
                        <div class="col-9">
                            <p><strong>Nama Berita :</strong></p>
                            <p>{{ $pengetahuan->nama }}</p>
                        </div>
                        <div class="col-3">
                            <p><strong>Id Berita :</strong></p>
                            <p>{{ $pengetahuan->id }}</p>

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Deskripsi Berita :</strong></p>
                            <p>{!! $pengetahuan->deskripsi !!}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Link Berita :</strong></p>
                            <p>{!! $pengetahuan->solusi !!}</p>
                        </div>
                    </div>


                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-6">
                            <a href="{{ route('admin.pengetahuan.index') }}" class="btn btn-secondary"><i
                                    class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="{{ route('admin.pengetahuan.edit', $pengetahuan->id) }}" class="btn btn-warning"><i
                                    class="fa fa-edit"></i> Edit</a>
                            <form action="{{ route('admin.pengetahuan.destroy', $pengetahuan->id) }}"
                                id="delete_{{ $pengetahuan->id }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $pengetahuan->id }}">
                                <button type="button" class="btn btn-danger btn-hapus" value="{{ $pengetahuan->id }}"><i
                                        class="fa fa-trash"></i> Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}">
@endpush

@push('js')
    <script src="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
@endpush

@push('script')
    <script>
        $('.btn-hapus').click(function() {
            let id = $(this).val();
            Swal.fire({
                title: 'Perhatian!',
                text: "Apakah Anda Yakin Untuk Menghapus Data?",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonColor: 'grey',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.isConfirmed) {
                    $(`#delete_${id}`).submit();
                }
            })
        })
    </script>
@endpush
