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
                        <li><a style="padding-right: 112px; text-decoration: none; color: #163785" href="login.php">Masuk</a></li>
                        <li><a style="padding-right: 85px; text-decoration: none; color: #163785" href="forgotpass.php">
                                Kata Sandi</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- End header -->

    <section class="register" id="register" style="margin: 120px 0 150px 0">
        <h1 class="text-center mb-5" style="color: #AAC4FF">REGISTER</h1>
        <h4 class="text-center mb-5" style="color: #AAC4FF">Please fill in the information below:</h4>
        <div class="d-flex justify-content-center mb-4">
            <input type="text" class="form-control-lg" placeholder="First Name" style="background-color: #EEF1FF; width: 50%">
        </div>
        <div class="d-flex justify-content-center mb-4">
            <input type="text" class="form-control-lg" placeholder="Last Name" style="background-color: #EEF1FF; width: 50%">
        </div>
        <div class="d-flex justify-content-center mb-4">
            <input type="text" class="form-control-lg" placeholder="Email" style="background-color: #EEF1FF; width: 50%">
        </div>
        <div class="d-flex justify-content-center mb-3">
            <input type="text" class="form-control-lg" placeholder="Password" style="background-color: #EEF1FF; width: 50%">
        </div>

        <div class="d-flex justify-content-center" style="margin-top: 50px">
            <a class="btn text-white btn-lg" href="login.php" style="background-color: #B1B2FF; width: 50%">REGISTER</a>
        </div>
        <div class="d-flex justify-content-center" style="margin-top: 10px">
            <strong class="text-center">Already have an account?<a style="text-decoration: none" href="login.php">Login here</a></strong>
        </div>
    </section>

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