<aside id="sidebar-wrapper font2">
    <div class="sidebar-brand font2">
        <a href="{{ route('admin.dashboard') }}">
            <ion-icon name="shield-half-outline"></ion-icon> {{ config('app.name') }}
        </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('admin.dashboard') }}"><img src="https://lh3.googleusercontent.com/YtvwsOjpL5pd-6bQ-WOLlQkvv3VVVbejnhWsXfcUdWjKpAomRiIPkkpn2KzbrVBV4dZGa_fBpbA5dTiev1zOzul5giLJMn8v7bqyOKVQnpZ7yvvXgVDoTxLL9ciLUkhnsy6f3l1p5JRtoV3-tougX3mGYutAYGnOKsI_3bfeaagOJ6BvHqORMWiWDce7Djoo2D6z7QJx4SQp39gTCuglD5dmwJHWLFlsqLo7_5uVhJ9lhAK_ru4cuCdT4b-HPyvKPkjDMWsa8KlAXqENvUOfDbb_uR4Nj7mOW7dXGMlMSXRaJ_KmoVzvUY9be72PvUwbaefeFoTqT5Bq35mYBo2Jp8YtrRjicue31Fx2AsZqiMSM9Yb9xAzOGamAogVyKPrX5LcWPPmuoStAKBC1S57B9h7MhW215R5MMaVI_fuuPsWetMPWSRXMuX-8G25joSicuN0id-lip2Pz--oLhfv-BEcQXh46vUBIhTCDtFggVlN46AgI58A9KhBuXnvPn1bwnp3Oj0h8pL5tCm91imKWSCpzgEaMZhpKPez8P1L9CfUFWF6rUtI7mVKN1STsut5r26GM00fNRkOKVdH6kvqwr2fDnX_EspfCBlpVdZ3hCUaEnNdBR6M73dVMbuDkD-Lr2o8x5J9LMQmMjcUUzJrOl_z67YaGDtcNSpiFI0JryORefY-VK4RcbyVcciQ-Qv-hW_aECD5WuEYRcg6N2fP_u9CK97bGJtpaaQVVAon68Jqe7BPGAOTbAOtMDSdG9zuedvYeYk8LnO44VmysE_MNui96KyctXRcmU9nzKhlDpK1oRChfE7Lt2N4otlKmnxPb2Ef9ZnSUGVSBfg3ShAhjr08-uQ3VWwkuj6f0KvbixURtKZk9dMlLX8Yr_rcmPHPVtgNN_alHKCyCTRNIs4L1GzT7AR6HX7uTRgsYgw=s500-no?authuser=0" width="100%"></a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="nav-item dropdown">
        <li class="nav-item dropdown{{ $title == 'Dashboard' ? ' active' : '' }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-home"></i><span>Dashboard</span></a>
            <ul class="dropdown-menu" style="display: none;">
                <li><a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard Admin</a></li>
                <li><a class="nav-link" href="{{ route('pengguna.dashboard') }}">Dashboard User</a></li>
            </ul>
        </li>
        {{-- <li class="{{ $title == 'Dashboard' ? 'active' : ''}}">
      <a href="{{route('admin.dashboard')}}" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
    </li> --}}
        <li class="menu-header">Diagnosis</li>
        <li class="{{ $title == 'Gejala' ? 'active' : '' }}">
            <a href="{{ route('admin.gejala.index') }}" class="nav-link"><i
                    class="fas fa-plus-square"></i><span>Gejala</span></a>
        </li>
        <li     >
            <a href="{{ route('admin.penyakit.index') }}" class="nav-link"><i class="fas fa-medkit"></i>
                <span>Penyakit</span></a>
        </li>
        <li class="{{ $title == 'Pengetahuan' ? 'active' : '' }}">
            <a href="{{ route('admin.pengetahuan.index') }}" class="nav-link"><i class="fas fa-laptop-medical"></i>
                <span>Berita</span></a>
        </li>

        <li class="{{ $title == 'Credit' ? 'active' : '' }}">
            <a href="{{ route('admin.credit.index') }}" class="nav-link"><i class="fas fa-clipboard"></i>
                <span>Credit</span></a>
        </li>
        
        <li class="{{ $title == 'Basis Pengetahuan' ? 'active' : '' }}">
            <a href="{{ route('admin.bp.index') }}" class="nav-link"><i class="fas fa-book"></i><span>Basis
                    Pengetahuan</span></a>
        </li>
        <li class="{{ $title == 'Diagnosa' ? 'active' : '' }}">
            <a href="{{ route('admin.diagnosa.index')}}" class="nav-link"><i class="fas fa-file-medical-alt"></i><span>Riwayat Diagnosa</span></a>
        </li>

        <li class="menu-header">Support</li>
        <li class="{{ $title == 'Akun' ? 'active' : '' }}">
            <a href="{{ route('admin.akun.index') }}" class="nav-link">
                <i class="fas fa-user"></i><span>Akun</span>
            </a>
        </li>
        <li class="{{ $title == 'Pesan' ? 'active' : '' }}">
            <a href="{{ route('admin.pesan.index') }}" class="nav-link">
                <i class="fas fa-envelope"></i><span>Pesan</span>
            </a>
        </li>
    </ul>
</aside>
