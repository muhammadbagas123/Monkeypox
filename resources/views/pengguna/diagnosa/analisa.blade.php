@extends('layouts.pengguna.main')

@section('content')
    <section class="inn">
        <div class="container">
            <div class="no-print">
                <button type="button" class="btn btn-primary" style="float: right" onclick="window.print()">Cetak Hasil Diagnosa</button>
            </div>
            <h2 class="text-center mb-2 fw-bold">Hasil Diagnosa</h2>
            <hr class="mb-4">
            <div class="pilihan" class="mt-4">
                <h3 style="font-size: 25px" class="mb-2">Pilihan Pengguna</h3>
                <div class="row">
                <div class="col-md-6">
                    <table border="0" class="table">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ Str::title(Session('biodata')['nama_penderita']) }}</td>
                        </tr>
                        <tr>
                            <td>gender</td>
                            <td>:</td>
                            <td>{{ Session('biodata')['gender'] }}</td>
                        </tr>
                        <tr>
                            <td>Usia</td>
                            <td>:</td>
                            <td>{{ Str::title(Session('biodata')['usia']) }} Tahun</td>
                        </tr>
                        <tr>
                            <td>Provinsi</td>
                            <td>:</td>
                            <td>{{ Session('biodata')['prov'] }}</td>
                        </tr>
                    </table>


                </div>
            </div>
                <table class="table table-bordered table-hovered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gejala</th>
                            <th>Kondisi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gejalas as $gejala)
                            @foreach ($kepastian as $key => $kp)
                                @if ($gejala->id == $key)
                                <tr>
                                    <td>{{$loop->iteration}}</td>

                                    <td>{{$gejala->nama}}</td>
                                    <td>
                                        @if($kp == 1)
                                        Sangat Yakin
                                        @elseif($kp == 2)
                                        Yakin
                                        @elseif($kp == 3)
                                        Cukup Yakin
                                        @elseif($kp == 4)
                                        Sedikit Yakin
                                        @elseif($kp == 5)
                                        Tidak Tahu
                                        @else
                                        Tidak
                                        @endif
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="my-4"></div>
            @foreach ($penyakits as $penyakit)
                @if ($penyakit->id == array_key_first($cfHasil))
                    <div class="row bg-light rounded-sm mt-4">
                        <div class="col-md-6 p-3">
                            <h3 style="font-size: 25px" class="mb-4">Hasil Diagnosa</h3>
                            <p>Berdasarkan daftar gejala yang anda pilih, Presentase hasil diagnosa penyakit:</p>
                                <h4 style="font-size: 22px" class="mb-3 text-success">{{ $penyakit->nama }}</h4>
                                <p style="font-size: 20px" class="text-success">Presentase : {{$cfHasil[array_key_first($cfHasil)] * 100}}%</p>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center p-3">
                            <img src="{{asset('assets/gambar/' . $penyakit->gambar)}}" alt="{{$penyakit->nama}}" width="400px" class="rounded-lg">
                        </div>
                    </div>
                    <div class="my-4"></div>
                    <div class="card">
                        <div class="card-body">
                            <h3 style="font-size: 25px" class="mb-2">Deskripsi penyakit</h3>
                            <br>
                            {!!$penyakit->deskripsi!!}
                        </div>
                    </div>
                    <div class="my-4"></div>
                    <div class="card">
                        <div class="card-body">
                            <h3 style="font-size: 25px" class="mb-2">Solusi Penyakit Menurut Dr. Fiska Rosita,Sp.DV</h3>
                            <br>
                            {!!$penyakit->solusi!!}
                        </div>
                    </div>
                    <div class="my-4"></div>
                    <div class="container">
                    <div class="button">
                    <a href="{{ route('pengguna.diagnosa.index') }}"><button type="button" class="btn btn-icon btn-danger">Diagnosa Ulang</button></a>
                    <a><button type="button" class="btn btn-primary" style="float: right" onclick="window.print()">Cetak Hasil Diagnosa</button></a>
                </div>
            </div>
                @endif
            @endforeach
            <div class="my-4"></div>
            <div class="just-print">
                <p>*) Data penyakit ini didapatkan dari Dr. Fiska Rosita,Sp.DV</p></p>
            </div>
        </div>
    </section>
@endSection

@push('script')
    <script>
        $('#plain tr:first').hide();
    </script>
@endpush
