
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>YourHeal | Contact Us</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('front/img/favicon.png') }}" />
                <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('front/css/styles.css') }}" rel="stylesheet" />
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
        <header class="masthead" style="background-image: url('assets/img/contact-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading text-white">
                            <h1>Contact Us</h1>
                            <span class="subheading">Apakah ada yang ingin kamu ceritakan? </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7 text-center">
                        <p>Mohon isikan Form dibawah ini</p>
                        <div class="my-5">
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                <div class="form-floating">
                                    <input class="form-control" id="name" type="text" placeholder="Masukkan nama Anda..." data-sb-validations="required" />
                                    <label for="name">Nama</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Nama tidak boleh kosong!</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="email" type="email" placeholder="Enter your email..." data-sb-validations="required,email" />
                                    <label for="email">Email</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">Email tidak boleh kosong!</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="phone" type="tel" placeholder="Enter your phone number..." data-sb-validations="required" />
                                    <label for="phone">Nomor Telepon</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">Nomor Telepon tidak boleh kosong!</div>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" placeholder="Enter your message here..." style="height: 12rem" data-sb-validations="required"></textarea>
                                    <label for="message">Pesan</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">Pesan harus diisi!</div>
                                </div>                           
                                <button class="btn btn-primary" type="submit">Kirim Pesan!</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
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
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('front/js/script.js') }}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="{{ asset('front/js/contact.js') }}"></script>
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>
