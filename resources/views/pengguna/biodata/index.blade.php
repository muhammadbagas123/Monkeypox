@extends('layouts.pengguna.main')

@section('content')
    <section id="bcg" class="inn">
        <div class="container">
            <form action="{{ route('pengguna.biodata.store') }}" method="post">
                @csrf
             
                    <div class="col-center">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-center">Mohon Isi Data Pribadi Anda</h3>
                                <hr>
                                <div class='alert alert-primary alert-dismissible'>
                        <h4><i class="bi bi-exclamation-triangle"></i>&nbsp;Perhatian !</h4>
                        <li>Masukan Data Diri Anda</li>
                        <li>Pastikan Data Anda Sudah Dicantumkan Sesuai yang Di minta Oleh Sistem</li>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                    </div>
                                <div class="form-group">
                                    <label for="nama_penderita">Nama Anda</label>
                                    <input type="text" class="form-control" id="nama_penderita" name="nama_penderita"
                                        placeholder="Masukkan Nama Anda">
                                </div>
                                <div class="form-group">
                                <label for="gender">Jenis Kelamin Anda</label>
                                <select class="form-control" id="gender" name="gender">
                                    <option disabled selected>Pilih Jenis Kelamin Anda</option>
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="nama_penderita">Usia</label>
                                    <input type="number" class="form-control" id="usia" name="usia"
                                        placeholder="0 Tahun">
                                </div>
                                <div class="form-group">
                                    <label for="prov">Pilih Provinsi</label>
                                                <select class="form-control" id="prov" name="prov">
                                                    <option disabled selected>Pilih Provinsi</option>
                                                    @foreach($provinsi as $provinsis)
                                                    <option>{{$provinsis->prov_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        
                                </div>
                            </div>
                        </div>
                    
                </div>
                <div class="text-center">
                    <a href="{{ route('pengguna.dashboard') }}" class="btn btn-danger btn-md">Kembali</a>
                    <button type="submit" class="btn btn-primary btn-md" id="kirim">Kirim</button>
                </div>
            </form>
        </div>
    </section>

@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
@endpush

@push('js')
    <script src="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/pengguna/js/nik_parse.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/vendor/bootstrap-datepicker/locales/bootstrap-datepicker.id.min.js') }}"></script> --}}
@endpush

@push('script')
    <script>
    </script>
@endpush