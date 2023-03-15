<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Verdana, sans-serif;
    }

    .mySlides {
      display: none;
      animation-duration: 10s;
    }

    img {
      vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {
      max-width: 800px;
      position: relative;
      margin: auto;
      animation-duration: 10s;
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      animation-name: fade;
      animation-duration: 2.5s;
    }

    .w3-animate-right {
      position: relative;
      animation: animateright 0.4s;

    }

    @keyframes animateright {
      from {
        right: -300px;
        -webkit-animation-play-state: paused;
        opacity: 0
      }

      to {
        right: 0;
        opacity: 1
      }
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {
        font-size: 11px
      }
    }
  </style>
</head>

<body>
  <section id="hero">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width:80%; margin:auto;">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="assets\pengguna\img\hal1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets\pengguna\img\hal2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets\pengguna\img\hal3.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <br>
    <div style="text-align:center">
      <span><a href="{{ route('pengguna.biodata.index') }}" class="btn btn-get-started">Mulai Diagnosa</a></span>
      <span><a class="btn btn-get-started" data-toggle="modal" data-target="#tutorial">BACALAH Tutorial</a></span>
      <span><a class="btn btn-get-started" data-toggle="modal" data-target="#rumahsakit">Info Test PCR</a></span>
    </div>
    <div>
      <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="tutorial" tabindex="-1" role="dialog" aria-labelledby="tutorialTitle" aria-labelledby="tutorialTitle2" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="tutorialTitle">TUTORIAL</h5>
                <b class="modal-title" id="tutorialTitle2">Bacalah Tutorial Ini Sebelum Menjalankan Sistem</b>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <li>Klik Mulai Diagnosa Dibawah Ini</li>
                <li>Masukkan Data Diri Anda</li>
                <li>Pilih Gejala yang dirasakan</li>
                <li>Pilih Kirim</li>
                <li>Maka Akan muncul presentase dari diagnosa <i>Monkeypox</i></li>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="rumahsakit" tabindex="-1" role="dialog" aria-labelledby="rumahsakitTitle" aria-labelledby="rumahsakitTitle2" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">

                <h5><b class="modal-title" id="rumahsakitTitle2">Info Test PCR</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-header">
                <h6>
                  <p>Tempat Yang Dapat Test PCR Penyakit <i>Monkeypox</i></p>
                </h6>
              </div>
              <div class="modal-body">
                <h5><b>Laboratorium Nasional BKPK Kemenkes</b></h5>
                <a href="(021) 4261088">&#9742; (021) 4261088</a>
                <p>Jl. Percetakan Negara No.29, RT.23/RW.7, Johar Baru, Kec. Johar Baru, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10560</p>
                <h5><b>Laboratorium Institut Pertanian Bogor</b></h5>
                <p> Kampus IPB, Jl. Raya Dramaga, Babakan, Kec. Dramaga, Kabupaten Bogor, Jawa Barat 16680</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>





      </div>
  </section>
  </div>
  </section>
</body>