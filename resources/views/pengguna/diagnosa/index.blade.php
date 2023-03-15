@extends('layouts.pengguna.main')

@section('content')
<style>
    .justify { 
        text-align: justify;
        
    }
</style>
    <section class="inn">
        <div class="container">
        <div class="button">
                    <a href="{{ route('pengguna.biodata.reset') }}"><button type="button" class="btn btn-warning" style="float: right">Ubah Identitas / Biodata</button></a>
                </div>
            <div class="row">
                <div class="col-md-6">
                    <h3 class="mb-4 mb-4">Identitas Anda:</h3>
                    <table border="0" class="table">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ Str::title(Session('biodata')['nama_penderita']) }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>{{ Session('biodata')['gender'] }}</td>
                        </tr>
                        <tr>
                            <td>Usia</td>
                            <td>:</td>
                            <td>{{ Session('biodata')['usia'] }} tahun</td>
                        </tr>
                        <tr>
                            <td>Provinsi</td>
                            <td>:</td>
                            <td>{{ Session('biodata')['prov'] }}</td>
                        </tr>
                    </table>


                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class='alert alert-primary alert-dismissible'>
                        <h4><i class="bi bi-exclamation-triangle"></i>&nbsp;Perhatian !</h4>
                        <li class="justify">Silahkan pilih gejala sesuai dengan kondisi anda</li>
                        <li class="justify">Gejala dibawah ini dikeluarkan oleh Dokter Spesialis Kulit</li>
                        <br>
                        <p class="justify">Jika Anda <b>HANYA</b> Memiliki Gejala</p>
                       <li> Demam Selama 0-5 Hari</li>
                        <li>Demam Mengigil Lebih Dari 38°C</li>
                        <li>Sakit Kepala</li>
                        <li>Nyeri Otot</li>
                        <li>Nyeri Pada Tenggorokan</li>
                        <li>Lemas/Letih </li>
                        
                        <p class="justify">Maka Tidak Termasuk Terdiagnosa Penyakit Monkeypox, Karena Gejala Tersebut Termasuk Gejala Umum</p>
                        <p class="justify"><b>ATURAN PILIHAN</b>
                        <li class="justify">Sangat Yakin : Selalu Merasakan</li>
                        <li class="justify">Yakin : Setiap Saat Merasakan</li>
                        <li class="justify">Cukup Yakin : Tidak Sering Merasakan</li>
                        <li class="justify">Sedikit Yakin : Pernah Merasakan</li>
                        <li class="justify">Tidak Tahu : Hanya Sekali Merasakan</li>
                        <li class="justify">Tidak : Tidak Pernah Merasakan </li></p>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                    </div>
                    
                    <form action="{{ route('pengguna.diagnosa.analisa') }}" method="post">
                        @csrf
                        <table class="table tabled-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Gejala yang dialami</th>
                                    <th scope="col">Kondisi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gejalas as $gejala)

                                    <tr>
                                        <th scope="row" width="10%">{{ $loop->iteration }}</th>
                                        <td>{{ Str::title($gejala->nama) }}</td>
                                        <td width="25%">
                                            <div class="form-group">
                                                <select name="kondisi[]" id="kondisi" class="form-control">
                                                    <option disabled selected>Pilih</option>
                                                    <option value="{{ $gejala->id }}_1">Sangat Yakin</option>
                                                    <option value="{{ $gejala->id }}_2">Yakin</option>
                                                    <option value="{{ $gejala->id }}_3">Cukup Yakin</option>
                                                    <option value="{{ $gejala->id }}_4">Sedikit Yakin</option>
                                                    <option value="{{ $gejala->id }}_5">Tidak Tahu</option>
                                                    <option value="{{ $gejala->id }}_0">Tidak</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="{{ route('pengguna.diagnosa.reset') }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Analisa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
@endpush

@push('js')
    <script src="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
@endpush
