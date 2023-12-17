<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>YourHeal | About Us</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('front/img/favicon.png') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('front/css/styles.css') }}" rel="stylesheet" />
        <style>
        .card {
            max-width: 70%;
            margin: 0 auto;
        }

        .card-img-top {
            max-width: 100%;
            height: auto;
        }
    </style>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('front/img/favicon.png') }}" alt="Favicon" width="90" height="90"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/about') }}">About Us</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/post') }}">Post</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/contact') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading text-white">
                            <h1>About Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container text-center" style="min-height: 100vh;">
            <div class="row justify-content-center">
                <div class="col-lg-6 mb-3 mx-auto">
                    <div class="card">
                        <a href="#!"><img class="card-img-top" src="{{ asset('storage/photo/basranie.jpg') }}" alt="..." /></a>
                        <div class="card-body">
                            <h2 class="card-title h4">Basranie Azhar</h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-3 mx-auto">
                    <div class="card">
                        <a href="#!"><img class="card-img-top" src="{{ asset('storage/photo/hafidz.jpg') }}" alt="..." /></a>
                        <div class="card-body">
                            <h2 class="card-title h4">Hafidz Maulana Syamputra</h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-3 mx-auto">
                    <div class="card">
                        <a href="#!"><img class="card-img-top" src="{{ asset('storage/photo/eka.jpg') }}" alt="..." /></a>
                        <div class="card-body">
                            <h2 class="card-title h4">Eka Herlina</h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-3 mx-auto">
                    <div class="card">
                        <a href="#!"><img class="card-img-top" src="{{ asset('storage/photo/ahmad.jpg') }}" alt="..." /></a>
                        <div class="card-body">
                            <h2 class="card-title h4">Ahmad Bonanza</h2>
                        </div>
                    </div>
                </div>            

                <div class="col-lg-6 mb-3 mx-auto">
                    <div class="card">
                        <a href="#!"><img class="card-img-top" src="{{ asset('storage/photo/raden.jpg') }}" alt="..." /></a>
                        <div class="card-body">
                            <h2 class="card-title h4">Raden Ceuceu Oceania</h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-3 mx-auto">
                    <div class="card">
                        <a href="#!"><img class="card-img-top" src="{{ asset('storage/photo/ririn.jpg') }}" alt="..." /></a>
                        <div class="card-body">
                            <h2 class="card-title h4">Ririn Nurvita Dewi</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; YourHeal 2023</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('front/js/script.js') }}"></script>
    </body>
</html>
