<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Portofolio</title>

    <!-- Favicons -->
    <link href="{{ asset('/assets_portofolio/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/assets_portofolio/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/assets_portofolio/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets_portofolio/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets_portofolio/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets_portofolio/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets_portofolio/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('/assets_portofolio/css/main.css') }}" rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">ESU</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home<br></a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#resume">Resume</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">

        <section id="hero" class="hero section dark-background">
            <img src="{{ asset('/assets_portofolio/img/evan_malio.jpg') }}" alt="" data-aos="fade-in">

            <div class="container d-flex flex-column align-items-center justify-content-center text-center"
                data-aos="fade-up" data-aos-delay="100">
                <div class="mt-10">
                    <h2>I am Evan Septya Utama</h2>
                    <p><span class="typed" data-typed-items="Back End Developer, Freelancer"></span></p>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <div class="col-md-6">

                        <div class="row justify-content-between gy-4">
                            <div class="col-lg-5">
                                <img src="{{ asset('/assets_portofolio/img/foto_berjas.jpg') }}" class="img-fluid"
                                    height="200" alt="">
                            </div>
                            <div class="col-lg-7 about-info">
                                <p><strong>Nama: </strong> <span>Evan Septya Utama</span></p>
                                <p><strong>Profile: </strong> <span>Back End Developer</span></p>
                                <p><strong>Email: </strong> <span>evansutama2001@gmail.com</span></p>
                                <p><strong>Phone: </strong> <span>0822-8609-6121</span></p>
                            </div>
                        </div>

                        <div class="skills-content skills-animation">

                            <h5>Skills</h5>

                            <div class="progress">
                                <span class="skill"><span>HTML</span> <i class="val">70%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div><!-- End Skills Item -->

                            <div class="progress">
                                <span class="skill"><span>CSS</span> <i class="val">60%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div><!-- End Skills Item -->

                            <div class="progress">
                                <span class="skill"><span>Php (Laravel)</span> <i class="val">80%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div><!-- End Skills Item -->

                            <div class="progress">
                                <span class="skill"><span>Analyst</span> <i class="val">70%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div><!-- End Skills Item -->

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="about-me">
                            <h4>About me</h4>
                            <p>
                                In 2019, I first got involved in the world of coding, precisely when I was studying at
                                Atma Jaya University, Yogyakarta and first developed web development.
                            </p>
                            <p>
                                My main focus at the moment is building a website for an agency. I most enjoy building
                                websites with simple designs and techniques that look good but are also well made. In my
                                free time, I also sometimes enjoy reviewing material I've learned and watching online
                                videos that cover everything you need to know to build web applications. The language
                                that I often use is the PHP programming language using the Laravel framework.
                            </p>
                            <p>
                                When I'm not in front of the computer, I usually use my time to exercise with friends
                                and go on vacation to enjoy nature.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Resume Section -->
        <section id="resume" class="resume section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Resume</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>Major of Natural Science</h4>
                            <h5>2016 - 2019</h5>
                            <p><em>SMA Negeri 2 North Sangatta, Kalimantan Timur, Indonesia</em></p>
                        </div><!-- Edn Resume Item -->
                        <div class="resume-item">
                            <h4>Bachelor of Computer</h4>
                            <h5>2019 - 2024</h5>
                            <p><em>Atma Jaya University, Yogyakarta, Indonesia</em></p>
                            <p>Final project is to design a website-based academic information system using the Laravel
                                framework.</p>
                        </div><!-- Edn Resume Item -->

                        <h3 class="resume-title">Professional Experience</h3>
                        <div class="resume-item">
                            <h4>Web Development | Internship</h4>
                            <h5>August 2022 - January 2023</h5>
                            <p><em>PT. LSP Teknologi Digital, Yogyakarta, Indonesia </em></p>
                            <ul>
                                <li>Lead in the design, development, and implementation of the graphic, layout, and
                                    production communication materials</li>
                                <li>Delegate tasks to the 7 members of the design team and provide counsel on all
                                    aspects of the project. </li>
                                <li>Supervise the assessment of all graphic materials in order to ensure quality and
                                    accuracy of the design</li>
                                <li>Oversee the efficient use of production project budgets ranging from $2,000 -
                                    $25,000</li>
                            </ul>
                        </div><!-- Edn Resume Item -->

                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="resume-title">Course Digital</h3>
                        <div class="resume-item">
                            <h4>Full-Stack | Web Development</h4>
                            <h5>2017 - 2018</h5>
                            <p><em>Stepping Stone Advertising, New York, NY</em></p>
                            <ul>
                                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations,
                                    and advertisements).</li>
                                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                                <li>Created 4+ design presentations and proposals a month for clients and account
                                    managers</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Full-Stack | Web Development</h4>
                            <h5>2017 - 2018</h5>
                            <p><em>Stepping Stone Advertising, New York, NY</em></p>
                            <ul>
                                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations,
                                    and advertisements).</li>
                                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                                <li>Created 4+ design presentations and proposals a month for clients and account
                                    managers</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Full-Stack | Web Development</h4>
                            <h5>2017 - 2018</h5>
                            <p><em>Stepping Stone Advertising, New York, NY</em></p>
                            <ul>
                                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations,
                                    and advertisements).</li>
                                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                                <li>Created 4+ design presentations and proposals a month for clients and account
                                    managers</li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>

        </section><!-- /Resume Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Portfolio</h2>
                <p>The entire project that I have built from the beginning of 2020 - Present</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
                    data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">App</li>
                    </ul><!-- End Portfolio Filters -->

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('/assets_portofolio/img/portfolio/app-1.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>E-Commerce | E-Ticket</p>
                                <a href="{{ asset('/assets_portofolio/img/portfolio/app-1.jpg') }}" title="App 1"
                                    data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('/assets_portofolio/img/portfolio/app-1.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>System Information Academic</p>
                                <a href="{{ asset('/assets_portofolio/img/portfolio/app-1.jpg') }}" title="App 1"
                                    data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('/assets_portofolio/img/portfolio/app-1.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>E-Commerce | Online Food Shop</p>
                                <a href="{{ asset('/assets_portofolio/img/portfolio/app-1.jpg') }}" title="App 1"
                                    data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->


                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Portfolio Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>My Contact</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="info-wrap" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-5">

                        <div class="col-lg-4">
                            <div class="info-item d-flex align-items-center">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Address Identity Card</h3>
                                    <p>Jalan Slamet 1, No. 27, RT/RW. 006/000, Teluk Lingga, Sangatta Utara, Kutai
                                        Timur, Kalimantan Timur,
                                        65241.</p>
                                    <h3>Address Domicile</h3>
                                    <p>Jalan Nayan Corongan, No. 161, RT/RW. 004/025, Maguwoharjo, Depok, Sleman, DIY,
                                        55282.</p>
                                </div>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-lg-4">
                            <div class="info-item d-flex align-items-center">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Call Us (Telp/WA)</h3>
                                    <p>+62 822 8609 6121</p>
                                </div>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-lg-4">
                            <div class="info-item d-flex align-items-center">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Email</h3>
                                    <p>evansutama2001@gmail.com</p>
                                </div>
                            </div>
                        </div><!-- End Info Item -->

                    </div>
                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer accent-background">

        <div class="container">
            <div class="copyright text-center ">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">DevFolio</strong> <span>All Rights
                        Reserved</span></p>
            </div>
            <div class="social-links d-flex justify-content-center">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('/assets_portofolio/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets_portofolio/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('/assets_portofolio/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('/assets_portofolio/vendor/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('/assets_portofolio/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('/assets_portofolio/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('/assets_portofolio/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('/assets_portofolio/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('/assets_portofolio/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('/assets_portofolio/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('/assets_portofolio/js/main.js') }}"></script>

</body>

</html>
