<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Achmad Muslichul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        body { font-family: 'Nunito', sans-serif; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Poppins', sans-serif; }
        html { scroll-padding-top: 72px; }

        .carousel-item img {
            height: 450px;
            object-fit: cover;
        }
        @media (max-width: 768px) {
            .carousel-item img {
                height: 250px;
            }
        }
        
        .btn-praktikum {
            background-color: rgba(255, 255, 255, 0.1);
            color: #ffffff !important;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }
        .btn-praktikum:hover {
            background-color: #0d6efd;
            border-color: #0d6efd;
            transform: translateY(-2px);
        }
    </style>
</head>

<body class="bg-white text-dark">
    <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4 text-dark text-decoration-none" href="#home">
                Achmad<span class="text-primary">Muslichul</span>
            </a>
            <button class="navbar-toggler border-0" type="button"
                    data-bs-toggle="collapse" data-bs-target="#mainNav">
                <i class="bi bi-list fs-2"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="mainNav">
                <ul class="navbar-nav gap-1 mt-2 mt-lg-0">
                    <li class="nav-item"><a class="nav-link fw-semibold px-3 rounded-pill active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold px-3 rounded-pill" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold px-3 rounded-pill" href="#projects">Portofolio</a></li>
                    <li class="nav-item ms-lg-2"><a class="btn btn-primary rounded-pill px-4 fw-bold" href="#login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="home" class="bg-primary bg-opacity-10 py-5">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-center text-lg-start" data-aos="fade-right">
                    <h1 class="display-4 fw-bold lh-sm mb-3">
                        My Portofolio<br>
                        <span class="text-primary">Achmad Muslichul</span>
                    </h1>
                    <p class="fs-5 text-secondary fw-semibold mb-2">Mahasiswa ITM</p>
                    <p class="fs-5 mb-4">"Memiliki ketertarikan pada analisis data."</p>
                    <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-start">
                        <a href="#projects" class="btn btn-primary rounded-pill px-4 py-2 fw-bold shadow-sm">
                            Lihat Proyek <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 text-center" data-aos="fade-left">
                    <img src="image/profil2.jpeg"
                         alt="Foto Achmad Muslichul"
                         class="rounded-circle border border-5 border-white shadow-lg"
                         width="260" height="260"
                         style="object-fit:cover">
                </div>
            </div>
        </div>
    </header>

    <div id="portfolioCarousel" class="carousel slide shadow-sm" data-bs-ride="carousel" data-aos="zoom-in">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#portfolioCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#portfolioCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#portfolioCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="4000">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=80" class="d-block w-100" alt="Grafik Chart Analisis Bisnis">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-4 p-3">
                    <h5 class="fw-bold">Analisis Tren & Grafik Data</h5>
                    <p>Menganalisis performa data secara visual untuk pengambilan keputusan strategis.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=1200&q=80" class="d-block w-100" alt="Pemrograman Web">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-4 p-3">
                    <h5 class="fw-bold">Pengembangan Aplikasi</h5>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=1200&q=80" class="d-block w-100" alt="Teknologi Informasi">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-4 p-3">
                    <h5 class="fw-bold">Solusi Inovatif</h5>
                </div>
            </div>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section id="about" class="py-5 bg-light" data-aos="fade-up">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-4 text-center">
                    <img src="image/profil2.jpeg"
                         alt="Foto Profil"
                         class="rounded-circle border border-5 border-white shadow"
                         width="200" height="200"
                         style="object-fit:cover">
                </div>
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-1">Tentang Saya</h2>
                    <div class="border-bottom border-primary border-3 mb-4" style="width:48px"></div>
                    <p class="text-secondary fs-5 lh-lg">
                        Saya <strong class="text-dark">Achmad Muslichul</strong>,
                        mahasiswa yang tertarik pada bidang teknologi informasi, khususnya pemrograman dan pengembangan aplikasi. Saya memiliki motivasi tinggi untuk terus belajar, mengembangkan keterampilan, serta menciptakan solusi yang inovatif dan bermanfaat melalui teknologi. Selain itu, saya juga memiliki ketertarikan pada dunia analisis data, visualisasi chart bisnis, dan terus mempelajari perkembangan tren teknologi di industri modern.
                    </p>
                    <div class="row g-3 mt-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center gap-3 bg-white rounded-4 p-3 shadow-sm">
                                <span class="fs-4 text-primary"><i class="bi bi-geo-alt-fill"></i></span>
                                <div>
                                    <div class="text-secondary small fw-bold text-uppercase">Lokasi</div>
                                    <div class="fw-bold">Nganjuk, Jawa Timur</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="py-5 bg-dark text-white" data-aos="fade-up">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-1 text-white">Praktikum</h2>
                <div class="border-bottom border-primary border-3 mb-2 mx-auto" style="width:48px"></div>
            </div>
            <div class="row g-3">
                <div class="col-md-6 border-end border-2 border-white border-opacity-10">
                    <a href="Praktikum/praktikum_web/"
                       class="d-flex align-items-center justify-content-between rounded-3 px-4 py-3 mb-3 fw-semibold shadow-sm text-decoration-none btn-praktikum">
                        Praktikum 1
                        <i class="bi bi-arrow-right-circle text-primary fs-5"></i>
                    </a>
                    <a href="prak2_AchmadMuslichul.html"
                       class="d-flex align-items-center justify-content-between rounded-3 px-4 py-3 mb-3 fw-semibold shadow-sm text-decoration-none btn-praktikum">
                       Praktikum 2
                       <i class="bi bi-arrow-right-circle text-primary fs-5"></i>
                    </a>
                    <a href="praktikum_web/prak3_AchmadMuslichul.html"
                       class="d-flex align-items-center justify-content-between rounded-3 px-4 py-3 mb-3 fw-semibold shadow-sm text-decoration-none btn-praktikum">
                        Praktikum 3
                        <i class="bi bi-arrow-right-circle text-primary fs-5"></i>
                    </a>
                    <a href="Praktikum/Praktikum_4/"
                       class="d-flex align-items-center justify-content-between rounded-3 px-4 py-3 mb-3 fw-semibold shadow-sm text-decoration-none btn-praktikum">
                        Praktikum 4
                        <i class="bi bi-arrow-right-circle text-primary fs-5"></i>
                    </a>
                </div>
                <div class="col-md-6 ps-md-3">
                    <a href="praktikum_web/modul5_perulanganPHP/perulangan_1.php"
                       class="d-flex align-items-center justify-content-between rounded-3 px-4 py-3 mb-3 fw-semibold shadow-sm text-decoration-none btn-praktikum">
                        Praktikum 5
                        <i class="bi bi-arrow-right-circle text-primary fs-5"></i>
                    </a>
                    <a href="Praktikum/Praktikum_6/"
                       class="d-flex align-items-center justify-content-between rounded-3 px-4 py-3 mb-3 fw-semibold shadow-sm text-decoration-none btn-praktikum">
                        Praktikum 6
                        <i class="bi bi-arrow-right-circle text-primary fs-5"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 1200,
            once: false
        });
    </script>

    <script>
        const sections = document.querySelectorAll('section[id], header[id]');
        const navLinks = document.querySelectorAll('.nav-link');
        window.addEventListener('scroll', () => {
            const pos = window.scrollY + 90;
            sections.forEach(s => {
                if (pos >= s.offsetTop && pos < s.offsetTop + s.offsetHeight) {
                    navLinks.forEach(l => {
                        l.classList.remove('active');
                        if (l.getAttribute('href') === '#' + s.id) l.classList.add('active');
                    });
                }
            });
        }, { passive: true });
    </script>
</body>
</html>