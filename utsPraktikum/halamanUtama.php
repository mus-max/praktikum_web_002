<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Pemrograman Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        #header-gradient {
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradientMove 15s ease infinite;
        }
        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        /* Efek hover dinamis untuk menu */
        .menu-link:hover {
            color: #e73c7e !important;
        }
    </style>
</head>
<body class="bg-light min-vh-100 d-flex align-items-center justify-content-center py-5">

    <div class="container shadow-lg bg-white rounded-4 overflow-hidden p-0" style="max-width: 1000px;">
        
        <div id="header-gradient" class="text-white text-center py-5 px-4">
            <h1 class="fw-bold display-6">Praktikum Pemrograman Web</h1>
            <p class="mb-0 fs-5 opacity-75">PRODI Sistem Informasi</p>
        </div>

        <nav class="nav justify-content-center bg-body-tertiary border-bottom py-2">
            <a class="nav-link menu-link fw-bold text-primary px-3" href="#">Home</a>
            <a class="nav-link menu-link fw-bold text-primary px-3" href="prak1_achmadmuslichul.html">Profil</a>
            <a class="nav-link menu-link fw-bold text-primary px-3" href="portofolio.html">Portofolio</a>
        </nav>

        <div class="p-4 p-md-5">
            <p class="lead text-secondary fs-6 mb-0" style="text-align: justify;">
                Sistem Informasi merupakan sebuah program studi yang berfokus pada software komputer.
            </p>
        </div>

        <footer class="bg-dark text-white text-center py-4">
            <p class="mb-0 fw-semibold">Achmad Muslichul Anwar</p>
            <small class="text-secondary">2026</small>
        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>