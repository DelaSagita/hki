<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Beranda Sentra HaKI</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets2/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets2/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets2/img/favicons/favicon.ico">
    <link rel="manifest" href="assets2/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets2/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link href="vendors/prism/prism.css" rel="stylesheet">
    <link href="assets2/css/theme.css" rel="stylesheet" />
    <link href="assets2/css/user.css" rel="stylesheet" />

    <link href="vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>

<body>

    <!-- ===============================================-->
    <!--    login-->
    <!-- ===============================================-->
    <main>
        <section class="py-3" style="background-color:#10203F;">
            <div class="container" id="topNav">
                <div class="row justify-content-between">

                    {{-- @if (Auth::user())
                    <p class="text text-info font-weight-bold">{{ Auth::user()->name }}</p>
                    @else
                    <a href="{{ route('login') }}"><button class="btn btn-dark">Login</button></a>
                    @endif

                    @if (Auth::user())
                    <a href="{{ route('logout') }}"><button class="btn btn-danger">Logout</button></a>
                    @else

                    @endif --}}


                    <form class="col-auto order-2 d-none d-sm-block">
                        {{-- <button class="btn btn-outline-light" type="submit">                           --}}
                        @if (Route::has('login'))
                        @auth
                            <button class="btn btn-outline-light" type="submit">
                                <a href="{{ url('/dosen') }}" class="text-decoration-none">User</a></button>
                            <button class="btn btn-outline-light" type="submit">
                                <a href="{{ url('/home') }}" class="text-decoration-none">Admin</a></button>
                            <button class="btn btn-outline-light" type="submit">
                                <a href="{{ url('/direktur') }}" class="text-decoration-none">Direktur</a></button>
                        @else
                            <button class="btn btn-outline-light" type="submit">
                                <a href="{{ route('login') }}" class="text-decoration-none"> Log in</a></button>

                        {{-- </button> --}}
                            <button class="btn btn-outline-light" type="submit">
                        @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-decoration-none">Register</a>
                        @endif
                        @endauth
                        @endif
                            </button>
                    </form>


    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->

                    <div class="col-auto d-none d-lg-block">
                        <div class="d-flex align-items-center">
                            <h3 class="mb-0 me-5 text-white text-start lh-1">SENTRAL HaKI
                                <br />POLITEKNIK NEGERI KETAPANG
                            </h3>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="py-7 py-sm-8 py-lg-10 py-xxl-9 py-xxl-11" style="background-color:#10203F;"></div>
        <section class="mb-n9 mb-lg-n11 p-0" style="transform: translateY(calc(-50% - 25px));">
            <div class="container-fluid">
                <div class="position-relative hero-carousel-container" id="heroCarouselContainer">
                    <div class="position-absolute translate-middle d-none d-xxl-block"><img
                            src="assets2/img/illustrations/bg-circle.png" alt="" /></div>
                    <div class="position-absolute top-0 d-none d-lg-block" style="right: -16px;">
                        <div class="bg-carousel-soft-primary position-relative" id="heroSlidercounterContainer">
                            <div class="hero-slider-counter" id="heroSlidercounter"> 01 </div>
                        </div>
                    </div>
                    <div class="carousel slide" id="hero-carousel" data-bs-ride="carousel">
                        <div class="slider-rectangle z-index-2 d-none d-xxl-block"><img
                                src="assets2/img/gallery/rectangle-s.png" alt="" /></div>
                        <div class="position-relative">

                            <div class="carousel-inner" id="heroCarouselInner">
                                <div class="carousel-item active"><img class="d-block w-100"
                                        src="assets2/img/gallery/header-slider-1.png" height="447" alt="..." />
                                    <div class="carousel-caption d-none d-sm-block">
                                        <h1
                                            class="display-4 text-light text-start fw-light fs-2 fs-md-3 fs-lg-4 fs-xl-5">
                                            Segera Daftarkan <strong> Karya mu</strong><br />Kami akan Membantu</h1>
                                    </div>
                                </div>
                                <div class="carousel-item"><img class="d-block w-100"
                                        src="assets2/img/gallery/header-slider-2.png" height="447" alt="..." />
                                    <div class="carousel-caption d-none d-sm-block">
                                        <h1 class="display-4 text-light text-start fw-light"> <strong>Hak Kekayaan
                                                Intelektual </strong><br class="d-none d-xxl-block" />Politeknik Negeri
                                            Ketapang.</h1>
                                    </div>
                                </div>
                                <div class="carousel-item"><img class="d-block w-100"
                                        src="assets2/img/gallery/header1.jpg" height="447" alt="..." />
                                    <div class="carousel-caption d-none d-sm-block">
                                        <h1 class="display-4 text-light text-start fw-light"> Prosedur Pengajuan<strong>
                                                Permohonan </strong><br />Ajukan Permohonan Mu Disini.</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-3 position-relative">
                                <div class="carousel-indicators justify-content-start custom-indicators">
                                    <button class="active" type="button" data-bs-target="#hero-carousel"
                                        data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2"
                                        aria-label="Slide 3"> </button>
                                </div>
                            </div>
                            <div class="col-9 position-relative">
                                <div class="card" style="background-color:#2257BF;">
                                    <div
                                        class="card-body border-bottom border-primary p-2 px-md-4 py-md-3 py-xl-4 p-sm-3">
                                        <div class="d-md-flex flex-between-center">
                                            <p class="mb-0 text-primary fs-2">Ajukan Karya Mu
                                            </p><a class="text-decoration-none text-light fw-bold" href="{{ route('login') }}"
                                                role="button">AYO BERGABUNG
                                                <svg class="bi bi-arrow-right text-primary ms-2"
                                                    xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    fill="currentColor" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                                    </path>
                                                </svg></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================-->
        <!-- ========= <HAK KEKAYAAN INTELEKTUAL> =======-->

         {{-- <section class="pt-0">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-6">
                            <h1 class="header-title display-4 header text-center">HAK KEKAYAAN INTELEKTUAL</h1>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                <div class="card border-100 h-100 shadow">
                                    <div class="card-body p-4 h-100"><img class="w-100"
                                            src="assets2/img/gallery/art-craft.png" alt="" />
                                        <div class="d-flex justify-content-between mt-3 border-bottom border-100 py-2">
                                            <span
                                                class="badge bg-soft-info rounded-1 text-info fw-normal p-2">Art</span>
                                             <p class="mb-0 text-500">23 Nov 2021</p> -->
                                         </div>
                                        <h3 class="fw-normal fs-lg-1 fs-xxl-2 lh-sm mt-3">The limits between art and
                                            craft</h3><a class="text-secondary stretched-link" href="#!">Full
                                            Article</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                <div class="card border-100 h-100 shadow">
                                    <div class="card-body p-4 h-100"><img class="w-100"
                                            src="assets2/img/gallery/art-lovers.png" alt="" />
                                        <div class="d-flex justify-content-between mt-3 border-bottom border-100 py-2">
                                            <span
                                                class="badge bg-soft-info rounded-1 text-info fw-normal p-2">Info.Tech</span>
                                            <p class="mb-0 text-500">24 Nov 2021</p>
                                        </div>
                                        <h3 class="fw-normal fs-lg-1 fs-xxl-2 lh-sm mt-3">8 guidelines for art lovers
                                        </h3><a class="text-secondary stretched-link" href="#!">Full Article</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                <div class="card border-100 h-100 shadow">
                                    <div class="card-body p-4 h-100"><img class="w-100"
                                            src="assets2/img/gallery/statistics.png" alt="" />
                                        <div class="d-flex justify-content-between mt-3 border-bottom border-100 py-2">
                                            <span
                                                class="badge bg-soft-info rounded-1 text-info fw-normal p-2">Mathmatics</span>
                                            <p class="mb-0 text-500">25 Nov 2021</p>
                                        </div>
                                        <h3 class="fw-normal fs-lg-1 fs-xxl-2 lh-sm mt-3">The Importance of Statistic
                                        </h3><a class="text-secondary stretched-link" href="#!">Full Article</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                <div class="card border-100 h-100 shadow">
                                    <div class="card-body p-4 h-100"><img class="w-100"
                                            src="assets2/img/gallery/color-theory.png" alt="" />
                                        <div class="d-flex justify-content-between mt-3 border-bottom border-100 py-2">
                                            <span
                                                class="badge bg-soft-info rounded-1 text-info fw-normal p-2">Design</span>
                                            <p class="mb-0 text-500">26 Nov 2021</p>
                                        </div>
                                        <h3 class="fw-normal fs-lg-1 fs-xxl-2 lh-sm mt-3">The Fundamentals of Color
                                            Theory</h3><a class="text-secondary stretched-link" href="#!">Full
                                            Article</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section> --}}

        <!-- ============================================-->
        <!--========= <FORMULIR PENGAJUAN HAKI> =========-->

        {{-- <section class="bg-secondary">
            <div class="container">
                <div class="row g-3">
                    <h1 class="header-title-explore display-4 header text-start mb-5"> FORMULIR PENGAJUAN HAKI</h1>

                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-hover h-100">
                            <div class="card-body d-flex align-items-center px-4 px-lg-2 px-xl-4">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box"><img class="eduprix-icon" src="assets2/img/icons/film.png"
                                            alt="explore" /><img class="eduprix-icon-hover"
                                            src="assets2/img/icons/film.svg" alt="explore" /></div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="fs-lg-1 text-light mb-0">Pengajuan Hak Cipta</h4><a
                                            class="stretched-link explore-link" href="#!">11 Hak Cipta</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-hover h-100">
                            <div class="card-body d-flex align-items-center px-4 px-lg-2 px-xl-4">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box"><img class="eduprix-icon" src="assets2/img/icons/math.png"
                                            alt="explore" /><img class="eduprix-icon-hover"
                                            src="assets2/img/icons/math.svg" alt="explore" /></div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="fs-lg-1 text-light mb-0">Pengajuan Merek</h4><a
                                            class="stretched-link explore-link" href="#!">3 Merek</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-hover h-100">
                            <div class="card-body d-flex align-items-center px-4 px-lg-2 px-xl-4">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box"><img class="eduprix-icon" src="assets2/img/icons/health.png"
                                            alt="explore" /><img class="eduprix-icon-hover"
                                            src="assets2/img/icons/health.svg" alt="explore" /></div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="fs-lg-1 text-light mb-0">Pengajuan Paten</h4><a
                                            class="stretched-link explore-link" href="#!">7 Paten</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-hover h-100">
                            <div class="card-body d-flex align-items-center px-4 px-lg-2 px-xl-4">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box"><img class="eduprix-icon" src="assets2/img/icons/design.png"
                                            alt="explore" /><img class="eduprix-icon-hover"
                                            src="assets2/img/icons/design.svg" alt="explore" /></div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="fs-lg-1 text-light mb-0">Pengajuan Paten Sederhana</h4><a
                                            class="stretched-link explore-link" href="#!">9 P Sederhana</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- ============================================-->
        <!-- ========= <PENJELASAN SINGKAT HAKI> ========-->

    <section id="testimonial">
        <div class="container">
            <div class="row justify-content-end">
                <h1 class="header-title display-4 header text-start mb-5"> PENJELASAN SINGKAT HAKI</h1>
                <div class="row flex-center h-100">

                <div class="carousel slide" id="carouselStudentReview" data-bs-ride="carousel">
                  <div class="carousel-inner ps-4">
                    <div class="carousel-item active">
                        @foreach ($category as $result)

                      <div class="row h-100 align-items-center">
                        <div class="col-auto p-0">
                          <div class="card border-0 h-100">
                            <div class="card-body h-100 p-0 pe-4">
                              <div class="d-flex align-items-start"> <img src="assets2/img/gallery/rectangle.png" alt="rectangle" /><img src="{{ asset($result->image) }}" alt="testimonials" width="315" /></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-5 col-lg-6 col-xl-7 mb-4">
                          <div class="bg-holder z-index--1" style="background-image:url(assets2/img/gallery/quotation.png);background-position:top center;background-size:auto;">
                          </div>

                          <h1 class="fw-normal lh-1 mt-4 mt-lg-0">{{ $result->name }}</h1>
                          <h4 class="fw-light">{{ $result->category }}</h4>
                          <p class="mt-4 pe-xxl-8">{{ $result->content }}. </p>
                        </div>
                        @endforeach
                      </div>

                    </div>
                  </div>

                   <div class="row justify-content-end">
                       <div class="col-auto">
                           <div class="carousel-indicators position-relative">
                                <button class="active" type="button" data-bs-target="#carouselStudentReview" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselStudentReview" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselStudentReview" data-bs-slide-to="2" aria-label="Slide 3"></button>
                           </div>
                       </div>
                    </div>
                </div>
                </div>
            </div>
                  <div class="col-2 position-xl-relative">
                       <button class="carousel-control-prev" type="button" data-bs-target="#carouselStudentReview" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                       <button class="carousel-control-next" type="button" data-bs-target="#carouselStudentReview" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button>
                 </div>
        </div>
    </section>

        <!-- ============================================-->
        <!-- ============== <JUMLAH> ====================-->

        <section class="bg-soft-primary">

            <div class="container">
                <div class="row flex-center">
                    <div class="col-12 col-md-6 col-lg-3 text-center mb-5 mb-lg-0"><img class="mb-5"
                            src="assets2/img/illustrations/top-course.png" height="140" alt="rectangle" />
                        <h1 class="count">{{ $hakcipta }}</h1>
                        <h1 class="fw-normal text-secondary"> Total <br> Hak Cipta </h1>
                        {{-- <p>Take courses from the world’s best <br> instructors and universities. </p> --}}
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 text-center mb-5 mb-lg-0"><img class="mb-5"
                            src="assets2/img/illustrations/happy-learners.png" height="140" alt="rectangle" />
                        <h1 class="count">{{ $kepemilikan }}</h1>
                        <h1 class="fw-normal text-secondary"> Total <br> Paten </h1>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 text-center mb-5 mb-lg-0"><img class="mb-5"
                            src="assets2/img/illustrations/instructors.png" height="140" alt="rectangle" />
                        <h1 class="count">{{ $merek }}</h1>
                        <h1 class="fw-normal text-secondary"> Total <br> Merek </h1>
                    </div>
                </div>
            </div>

        </section>


        <!-- ============================================ -->
        <!-- ============= <KEPENGURUSAN> =============== -->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="header-title display-4 header text-center mb-5"> KEPENGURUSAN SENTRAL HAKI</h1>
                        <div class="swiper-custom-container">
                            <div class="swiper-container theme-slider"
                                data-swiper='{"spaceBetween":1,"slideToClickedSlide":true,"slidesPerView":1,"pagination":{"el":".swiper-pagination","clickable":true,"bulletActiveClass":"bullet-active"},"breakpoints":{"320":{"slidesPerView":1,"spaceBetween":20},"480":{"slidesPerView":2,"spaceBetween":30},"640":{"slidesPerView":4,"spaceBetween":40}}}'>
                                <div class="swiper-wrapper">
                                    @foreach ($asu as $result)
                                    <div class="swiper-slide">
                                        <div class="text-center product"><img class="w-100 photograph"
                                                src="{{ asset($result->image) }}" alt="" />
                                            <h3 class="fw-normal font-base lh-1 text-black mt-3">{{ $result->name }}
                                            </h3>
                                            <p class="mb-0">{{ $result->jabatan }}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>


                                <div class="swiper-pagination position-static d-flex justify-contnet-evenly mx-2 my-5">
                                </div>
                            </div>
                            <div class="swiper-button-next d-none d-sm-block">
                                <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="42" height="27"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="swiper-button-prev d-none d-sm-block">
                                <svg class="bi bi-arrow-left" xmlns="http://www.w3.org/2000/svg" width="42" height="27"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================-->
        <!-- ================ <AKHIR> ===================-->

        <section class="bg-soft-primary">
            <div class="container">
                <div class="row flex-center">
                    <div class="col-lg-5 col-xl-4"><img class="w-100" src="assets2/img/illustrations/cta.png"
                            alt="..." /></div>
                    <div class="col-lg-5 col-xl-4">
                        <h1 class="fw-normal text-secondary mb-4">Ayo Ajukan <br />Permohonan</h1><img
                            src="gambar/pengajuan1.png" height="300" alt="..." />
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================-->
        <!-- ================ <FOOTER> ==================-->

        <section class="py-0 bg-dark">
            <div class="container">
                <div class="row justify-content-md-between justify-content-evenly py-4">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
                        <p class="fs--1 my-2 fw-light text-200">All rights Reserved &copy; Teknologi Informasi, 2022</p>
                    </div>
                    <div class="col-12 col-sm-8 col-md-6">
                        <p class="fs--1 fw-light my-2 text-center text-md-end text-200"> Made with&nbsp;
                            <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                fill="#F95C19" viewBox="0 0 16 16">
                                <path
                                    d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z">
                                </path>
                            </svg>&nbsp;by&nbsp;<a class="fw-bold text-primary text-decoration-none" href="https://politap.ac.id/" target="_blank">POLITAP</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/swiper/swiper-bundle.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="assets2/js/theme.js"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
</body>

</html>
