<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SIMPATI</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('soffer') }}/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('soffer') }}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('soffer') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('soffer') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('soffer') }}/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0" id="home">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">SIMPATI</h1>
                    <!-- <img src="{{ asset('soffer') }}/img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Beranda</a>
                        <a href="#about" class="nav-item nav-link">Tentang Kami</a>
                    </div>
                    <a href="" class="btn btn-light rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Login</a>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown">Awesome Software To Manage Your Business</h1>
                            <p class="text-white pb-3 animated slideInDown">Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd dolor sed magna dolor.</p>
                            <button type="button" class="btn btn-light rounded-pill m-2 py-2 px-4 ms-3">Laporkan!</button>
                            <button type="button" class="btn btn-outline-light rounded-pill m-2 py-2 px-4 ms-3">Alur Laporan</button>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid rounded animated zoomIn" src="{{ asset('soffer') }}/img/hero.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Feature Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <center>
                    <h1 class="mb-4 wow fadeInUp">-- ALUR LAPORAN --</h1>
                    <p class="mb-4">Nah ini dia alur laporan di aplikasi SIMPATI</p>
                </center>
                <div class="row g-3">
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded text-center p-5">
                            <i class="fa fa-4x fa-edit text-primary mb-4"></i>
                            <h5 class="mb-3">Kirim Laporan</h5>
                            <p class="m-0">Tulis laporan keluhan Anda dengan jelas.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded text-center p-5">
                            <i class="fa fa-4x fa-sync text-primary mb-4"></i>
                            <h5 class="mb-3">Proses Verifikasi</h5>
                            <p class="m-0">Tunggu sampai laporan Anda di verifikasi oleh admin/petugas.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded text-center p-5">
                            <i class="fa fa-4x fa-spinner text-primary mb-4"></i>
                            <h5 class="mb-3">Tindak Lanjut</h5>
                            <p class="m-0">Laporan Anda sedang dalam diproses dan ditindak lanjut.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded text-center p-5">
                            <i class="fa fa-4x fa-check-circle text-primary mb-4"></i>
                            <h5 class="mb-3">Selesai</h5>
                            <p class="m-0">Laporan pengaduan telah selesai ditindak.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->


        <!-- About Start -->
        <div class="container-xxl py-6" id="about">
            <div class="container">
                <div class="row g-5 flex-column-reverse flex-lg-row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4">Manage & Push Your Business To The Next Level</h1>
                        <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ms-4">
                                <h5>First Working Process</h5>
                                <p class="mb-0">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo magna</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="ms-4">
                                <h5>24/7 Hours Support</h5>
                                <p class="mb-0">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo magna</p>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary py-sm-3 px-sm-5 rounded-pill mt-3">Read More</a>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid rounded wow zoomIn" data-wow-delay="0.5s" src="{{ asset('soffer') }}/img/about.jpg">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Overview Start -->
        <div class="container-xxl bg-light my-6 py-5" id="overview">
            <div class="container">
                <div class="row g-5 py-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="{{ asset('soffer') }}/img/overview-1.jpg">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">01</h1>
                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">App Integration</h5>
                        </div>
                        <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Fully customizable</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>User friendly interface</p>
                        <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>More effective & poerwfull</p>
                    </div>
                </div>
                <div class="row g-5 py-5 align-items-center flex-column-reverse flex-lg-row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">02</h1>
                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">App Customization</h5>
                        </div>
                        <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Fully customizable</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>User friendly interface</p>
                        <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>More effective & poerwfull</p>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="{{ asset('soffer') }}/img/overview-2.jpg">
                    </div>
                </div>
                <div class="row g-5 py-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="{{ asset('soffer') }}/img/overview-3.jpg">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="mb-0">03</h1>
                            <span class="bg-primary mx-2" style="width: 30px; height: 2px;"></span>
                            <h5 class="mb-0">App Modification</h5>
                        </div>
                        <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Fully customizable</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>User friendly interface</p>
                        <p class="mb-0"><i class="fa fa-check-circle text-primary me-3"></i>More effective & poerwfull</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Overview End -->


        <!-- Advanced Feature Start -->
        <div class="container-xxl py-6" id="features">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Advanced Features</h1>
                    <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="advanced-feature-item text-center rounded py-5 px-4">
                            <i class="fa fa-edit fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">Fully Customizable</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="advanced-feature-item text-center rounded py-5 px-4">
                            <i class="fa fa-sync fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">App Integration</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="advanced-feature-item text-center rounded py-5 px-4">
                            <i class="fa fa-laptop fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">High Resolution</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="advanced-feature-item text-center rounded py-5 px-4">
                            <i class="fa fa-draw-polygon fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">Drag And Drop</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Advanced Feature End -->


        <!-- Facts Start -->
        <div class="container-xxl bg-primary my-6 py-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-cogs fa-3x text-white mb-3"></i>
                        <h1 class="mb-2" data-toggle="counter-up">7264</h1>
                        <p class="text-white mb-0">Active Install</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-users fa-3x text-white mb-3"></i>
                        <h1 class="mb-2" data-toggle="counter-up">6521</h1>
                        <p class="text-white mb-0">Satisfied Clients</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                        <h1 class="mb-2" data-toggle="counter-up">729</h1>
                        <p class="text-white mb-0">Award Wins</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-quote-left fa-3x text-white mb-3"></i>
                        <h1 class="mb-2" data-toggle="counter-up">5917</h1>
                        <p class="text-white mb-0">Clients Reviews</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->


        <!-- Process Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="{{ asset('soffer') }}/img/process.jpg">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <h1 class="mb-4">Three Simple Steps To Start Working With</h1>
                        <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>
                        <ul class="process mb-0">
                            <li>
                                <span><i class="fa fa-cog"></i></span>
                                <div>
                                    <h5>Install the Software</h5>
                                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit</p>
                                </div>
                            </li>
                            <li>
                                <span><i class="fa fa-address-card"></i></span>
                                <div>
                                    <h5>Setup Your Profile</h5>
                                    <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo</p>
                                </div>
                            </li>
                            <li>
                                <span><i class="fa fa-check"></i></span>
                                <div>
                                    <h5>Enjoy The Features</h5>
                                    <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Process End -->


        <!-- Pricing Start -->
        <div class="container-xxl py-6" id="pricing">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Pricing Plan</h1>
                    <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="price-item rounded overflow-hidden">
                            <div class="bg-dark p-4">
                                <h4 class="text-white mt-2">Standard</h4>
                                <div class="text-white">
                                    <span class="align-top fs-4 fw-bold">$</span>
                                    <h1 class="d-inline display-6 text-primary mb-0"> 29.99</h1>
                                    <span class="align-baseline">/ Month</span>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Cross-browser Support</span><i class="fa fa-times text-danger pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Remove Author's Credit</span><i class="fa fa-times text-danger pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>PHP & Ajax Contact Form</span><i class="fa fa-times text-danger pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>6 Months Free Support</span><i class="fa fa-times text-danger pt-1"></i></div>
                                <a href="" class="btn btn-dark rounded-pill py-2 px-4 mt-3">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="price-item rounded overflow-hidden">
                            <div class="bg-primary p-4">
                                <h4 class="text-white mt-2">Professional</h4>
                                <div class="text-white">
                                    <span class="align-top fs-4 fw-bold">$</span>
                                    <h1 class="d-inline display-6 text-dark mb-0"> 49.99</h1>
                                    <span class="align-baseline">/ Month</span>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Cross-browser Support</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Remove Author's Credit</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>PHP & Ajax Contact Form</span><i class="fa fa-times text-danger pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>6 Months Free Support</span><i class="fa fa-times text-danger pt-1"></i></div>
                                <a href="" class="btn btn-primary rounded-pill py-2 px-4 mt-3">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="price-item rounded overflow-hidden">
                            <div class="bg-dark p-4">
                                <h4 class="text-white mt-2">Ultimate</h4>
                                <div class="text-white">
                                    <span class="align-top fs-4 fw-bold">$</span>
                                    <h1 class="d-inline display-6 text-primary mb-0"> 79.99</h1>
                                    <span class="align-baseline">/ Month</span>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Cross-browser Support</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Remove Author's Credit</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>PHP & Ajax Contact Form</span><i class="fa fa-check text-success pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>6 Months Free Support</span><i class="fa fa-check text-success pt-1"></i></div>
                                <a href="" class="btn btn-dark rounded-pill py-2 px-4 mt-3">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-6" id="testimonial">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">What Our Clients Say</h1>
                    <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('soffer') }}/img/testimonial-1.jpg" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Client Name</h5>
                                <span>Profession</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('soffer') }}/img/testimonial-2.jpg" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Client Name</h5>
                                <span>Profession</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('soffer') }}/img/testimonial-3.jpg" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Client Name</h5>
                                <span>Profession</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Contact Start -->
        <div class="container-xxl py-6" id="contact">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-3">Get In Touch</h1>
                        <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Call Us</p>
                                <h5 class="mb-0">+012 345 6789</h5>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Mail Us</p>
                                <h5 class="mb-0">info@example.com</h5>
                            </div>
                        </div>
                        <div class="d-flex mb-0">
                            <div class="flex-shrink-0 btn-square rounded-circle bg-primary text-white">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-2">Our Office</p>
                                <h5 class="mb-0">123 Street, New York, USA</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        

        <!-- Footer Start -->
							
        <div class="container-fluid bg-dark wow fadeIn text-white py-3" data-wow-delay="0.1s">
            <center>&copy; 2023 Agus Setiawan · Made with ❤️ For PeTIK</center>
            {{-- <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
            Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
            <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a> --}}
        </div> 
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('soffer') }}/lib/wow/wow.min.js"></script>
    <script src="{{ asset('soffer') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('soffer') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('soffer') }}/lib/counterup/counterup.min.js"></script>
    <script src="{{ asset('soffer') }}/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('soffer') }}/js/main.js"></script>
</body>

</html>