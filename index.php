<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Andara Dental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="">
        <div class="container-fluid justify-content-between" style="background-color: #5E8CF5">
            <div class="row">
                <a class="navbar-brand" href="index.php" style="padding: 10px 0 10px 0">
                    <img src="img/logo.png" alt="" width="100" height="50" class="d-inline-block align-text-top ms-4">
                </a>
            </div>
            <div class="row" style="margin-right: 130px">
                <div class="dropdown" style="margin-right: -100px;" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person" style="color: #ffffff; margin-right: -100px;" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                    </svg>
                    <ul>
                        <li><a style="padding-right: 113px; text-decoration: none; color: #163785" href="register.php">Daftar</a></li>
                        <!-- <hr style="border: 2px solid #B1B2FF"> -->
                        <li><a style="padding-right: 112px; text-decoration: none; color: #163785" href="login.php">Masuk</a></li>
                        <li><a style="padding-right: 85px; text-decoration: none; color: #163785" href="forgotpass.php">
                                Kata Sandi</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- End header -->

    <!-- content -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="margin-top: 70px;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/content.png" class="d-block w-100" alt="0">
            </div>
            <div class="carousel-item">
                <img src="img/content2.png" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item">
                <img src="img/content3.png" class="d-block w-100" alt="2">
            </div>
        </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    <!-- End content -->

    <!-- card -->
    <section id="fitur">
        <div class="row" style="margin: 0 20px 43px 19px">
            <div class="col-lg-4">
                <div class="card text-center">
                    <div class="card-body mb-2">
                        <h1>PERIKSA GIGI </h1>
                        <img src="img/gigi.png" style="height: 220px" alt="">
                        <button>
                            <div>
                                <span></span>
                                <a href="login.php">PERIKSA</a>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-center">
                    <div class="card-body mb-2 ">
                        <h1>DOKTER GIGI </h1>
                        <img src="img/dokter.png" style="height: 220px" alt="">
                        <button>
                            <div>
                                <span></span>
                                <a href="login.php">CHAT DOKTER</a>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-center">
                    <div class="card-body mb-2">
                        <h1>PASIEN BARU </h1>
                        <img src="img/pasien.png" style="height: 220px" alt="">
                        <button>
                            <div>
                                <span></span>
                                <a href="login.php">DAFTAR</a>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End card -->
    <br>
    <br>

    <!-- artikel -->
    <section id="artikel" class="mb-5">
        <h1 style="color: #AAC4FF; padding-left: 155px">Artikel</h1>

        <div class="erga d-flex justify-content-center">
            <div class="col-10">
                <div class="card ms-5 me-5 mb-4" style="background-color: #B1B2FF; color: white; border-radius: 10px">
                    <div class="card-body" style="margin: 5px 0 5px 0">
                        <div class="row">
                            <div class="col-lg-3">
                                <img src="img/artikel1.jpg" style="border-radius: 10px; heigh: 100px; width: 200px" alt="">
                            </div>
                            <div class="col-lg-9" style="">
                                <h5 class="card-title" style="font-size: 30px; font-weight: 700">Gingivitis</h5>
                                <p class="card-text" style="font-size: 15px">Kebanyakan topik yang dibahas jika berbicara tentang kesehatan gigi dan mulut adalah bagaimana menjaga agar gigi...</p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a class="me-4" style="text-decoration: none; color: white; font-size: 20px; margin-top: -30px" href="login.php">Baca selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="erga d-flex justify-content-center">
            <div class="col-10">
                <div class="card ms-5 me-5 mb-4" style="background-color: #B1B2FF; color: white; border-radius: 10px">
                    <div class="card-body" style="margin: 5px 0 5px 0">
                        <div class="row">
                            <div class="col-lg-3">
                                <img src="img/artikel2.jpg" style="border-radius: 10px; heigh: 100px; width: 200px" alt="">
                            </div>
                            <div class="col-lg-9" style="">
                                <h5 class="card-title" style="font-size: 30px; font-weight: 700">Wajib Tahu! 7 Fakta Tentang Gigi Palsu</h5>
                                <p class="card-text" style="font-size: 15px">Pasti sedikit atau banyaknya Sobat pernah mendengar istilah ini: gigi palsu. Yap, gigi yang perannya untuk menggantikan....</p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a class="me-4" style="text-decoration: none; color: white; font-size: 20px; margin-top: -30px" href="login.php">Baca selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="erga d-flex justify-content-center">
            <div class="col-10">
                <div class="card ms-5 me-5 mb-4" style="background-color: #B1B2FF; color: white; border-radius: 10px">
                    <div class="card-body" style="margin: 5px 0 5px 0">
                        <div class="row">
                            <div class="col-lg-3">
                                <img src="img/artikel3.jpg" style="border-radius: 10px; heigh: 100px; width: 200px" alt="">
                            </div>
                            <div class="col-lg-9" style="">
                                <h5 class="card-title" style="font-size: 30px; font-weight: 700">Cegah Gigi Keropos Dengan 5 Langkah Ini</h5>
                                <p class="card-text" style="font-size: 15px">Tentu Sobat sudah tahu dong, ya, bahwa gigi kita ini tersusun dari berbagai mineral seperti kalsium dan fosfat...</p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a class="me-4" style="text-decoration: none; color: white; font-size: 20px; margin-top: -30px" href="login.php">Baca selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End artikel -->

    <!-- Footer -->
    <footer id="footer" class="footer" style="background-color: #5E8CF5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 footer-info text-align-center">
                    <a href="" class="logo d-flex align-items-center" style="text-decoration:none  ">
                        <span>FRESH DENTAL
                            INDONESIA </span>
                    </a>
                    <p style="font-size: 25px">Jl. Kalidami No. 41 Surabaya</p>
                </div>
                <div class="col-lg-4 col-12 footer-links text-align-center">
                    <h4>Hubungi Kami</h4>
                    <ul style="font-size: 20px; ">
                        <li><a style="text-decoration: none" href="#">freshdental@gmail.com</a></li>
                        <li><a style="text-decoration: none" href="#">@freshdent</a></li>
                        <li><a style="text-decoration: none" href="#">021-555-786-234</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-12 footer-links text-align-center">
                    <h4>Download Aplikasi</h4>
                    <a href="">
                        <img src="img/gplay.png" style="margin-left: -20px" alt="">
                    </a>
                    <br>
                    <a href="">
                        <img src="img/astore.png" style="margin-left: -5px" alt="">
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script>
        $('#carouselExampleIndicators').on('slid.bs.carousel', function(e) {
            $('#carouselExampleIndicators').carousel(
                '2') // Will slide to the slide 2 as soon as the transition to slide 1 is finished
        })
        $('#carouselExampleIndicators').carousel('1') // Will start sliding to the slide 1 and returns to the caller
        $('#carouselExampleIndicators').carousel(
            '2') // !! Will be ignored, as the transition to the slide 1 is not finished !!
    </script>
</body>

</html>