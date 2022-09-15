<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Team Wisnu</title>
    <link rel="shortcut icon" href="<?= base_url('assets/img/Logo_2.png') ?>" type="image/x-icon">

    <?= $this->include('inc/styleImport') ?>
</head>

<body>
    <!-- Floating WA -->
    <a href="https://api.whatsapp.com/send?phone=+6281333337329&text=Halo, Ada yang ingin Saya tanyakan. Mohon bantuannya">
        <button class="btn-floating" target="_blank">
            <img src="assets/img/WA.svg" alt="whatsapp">
        </button>
    </a>
    <!-- Akhir Floating WA -->

    <!-- Scroll to Top -->
    <a href="#" id="scroll-top" class="scrollTop"><i class="bi bi-arrow-up-square"></i></a>
    <!-- Akhir Scroll to Top -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./assets/img/Logo_2.png" alt="" width="30" height="40">
                Team Wisnu
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#project">PROJECT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">CONTACT</a>
                    </li>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        LOGIN
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <img src="assets/img/Logo_2.png" alt="logoTeamWisnu" width="30" height="40" class="mx-2">
                                    <h5 class="modal-title" id="exampleModalLabel"> Team Wisnu - Login</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-warning" role="alert">
                                        Email/password salah.
                                    </div>
                                    <form action="/adminIndex.html" method="post">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="xyz@gmail.com" required autofocus>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" placeholder="password" required>
                                        </div>
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div>
                                        <!-- <button type="login" class="btn btn-danger">Login</button> -->
                                        <a href="loginAdmin.html" class="btn btn-danger mx-2 my-2">Login
                                            Admin</a>
                                        <a href="view-client/clientIndex.html" class="btn btn-danger mx-2 my-2">Login
                                            Client</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Modal -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <div id="jumbotron" class="jumbotron p-5 mb-4 bg-light" style="background-image: url(assets/img/Jumbotron1.jpg);">
        <div class="container py-5">
            <h1 class="display-5 fw-bold">Team Wisnu</h1>
            <p class="col-md-8 fs-4"> Kami menawarkan dan menyediakan jasa kontraktor serta desain untuk pembangunan
                rumah yang terencana.</p>
        </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <div id="about" class="about">
        <div class="container">
            <h1>About Us</h1>

            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <img src="assets/img/aboutUs2.svg" width="400" alt="">
                </div>
                <div class="col-lg-7 col-md-7">
                    <p>
                        Kami merupakan kontraktor renovasi rumah dan bangunan yang terpercaya untuk lokasi Surabaya dan
                        sekitarnya.
                        Selalu siap melakukan pekerjaan renovasi untuk rumah atau bangunan lainnya. Didukung keahlian,
                        pengalaman, peralatan yang lengkap tentunya kami mempunyai target untuk memuaskan semua pihak
                        yang menggunakan jasa kami. Kepedulian akan kebutuhan anda, kami akan lakukan sebaik mungkin
                        untuk pencapaian hasil yang terbaik dan maksimal.
                    </p>
                </div>
            </div>

        </div>
    </div>
    <!-- Akhir About -->

    <!-- Project -->
    <div id="project" class="project">
        <div class="container text-center">
            <h1>Project</h1>
            <p>Hasil dari project yang kami tangani</p>

            <div class="owl-carousel">
                <div class="card" style="width: 22rem;">
                    <img src="assets/img/portofolio 1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Blara Cafe.</p>
                    </div>
                </div>
                <div class="card" style="width: 22rem;">
                    <img src="assets/img/portofolio 2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Hunian Rumah.</p>
                    </div>
                </div>
                <div class="card" style="width: 22rem;">
                    <img src="assets/img/portofolio 3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Gedung Perkantoran.</p>
                    </div>
                </div>
                <div class="card" style="width: 22rem;">
                    <img src="assets/img/portofolio 4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Living Room Interior Design.</p>
                    </div>
                </div>
                <div class="card" style="width: 22rem;">
                    <img src="assets/img/portofolio 5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Starbucks Coffee.</p>
                    </div>
                </div>
                <div class="card" style="width: 22rem;">
                    <img src="assets/img/portofolio 6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Office Interior Design.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Project -->

    <!-- Contact -->
    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-12 col-md-7">
                    <h4>Contact us if you have <br> any question</h4>
                    <p>Use this space to encourage visitors to get in touch with<br>your team for questions, bookings,
                        feedback, or just to<br>say hi.</p>
                    <a href="https://api.whatsapp.com/send?phone=+6281333337329&text=Halo, Ada yang ingin Saya tanyakan. Mohon bantuannya" class="btn btn-black">CONTACT</a>
                </div>

                <div class="col-lg-5 col-sm-12 col-md-5">
                    <h4 class="h4-sitemap">Sitemap</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.3845398046687!2d112.6969211139569!3d-7.310624873905338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fd1f00011a15%3A0xa38049db60260012!2sCV.%20Team%20Wisnu%20(Workshop)!5e0!3m2!1sen!2sid!4v1660801636653!5m2!1sen!2sid" class="sitemap" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer id="footer" class="footer bg-dark">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="foot-brand">
                        <a href="#">
                            <img src="assets/img/Logo.png" width="150px" height="150px" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-12 col-md-3">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#about">About</a></li>
                        <li><a href="#project">Project</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-sm-12 col-md-3">
                    <h4>Address</h4>
                    <p>Jl. Keramat I No.29, Wiyung, Kota Surabaya, Jawa Timur</p>
                </div>

                <div class="col-lg-5 col-sm-12 col-md-4">
                    <h4>Contact us</h4>
                    <a href="mailto:teamwisnu@gmail.com" class="link-mail"><i class="bi bi-envelope"></i>
                        teamwisnu@gmail.com</a>
                    <br>
                    <a href="tel:0317520201" class="link-tel"><i class="bi bi-headset"></i> (031)7520201</a> <br>
                    <a href="tel:0317520201" class="link-tel"><i class="bi bi-telephone"></i> +62 8133-333-7329</a> <br>
                    <a href="https://www.facebook.com/teamwisnu/?ref=page_internal" class="link-fb"><i class="bi bi-facebook"></i> Team
                        Wisnu</a>
                    <br><br>
                    <p>Hari Operasional : Senin - Sabtu</p>
                    <p>Jam Operasional : 09.00 - 16.00 </p>
                </div>
            </div>
        </div>
        <hr>
        <p class="text-center text-light">&copy;2022 <a href="#" class="link-copyright"> CV. Team Wisnu</a>. All Right
            Reserved</p>
    </footer>
    <!-- Akhir Footer -->

    <?= $this->include('inc/scriptImport') ?>

</body>

</html>