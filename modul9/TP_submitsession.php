<?php
session_start();
if (isset($_GET['aksi']) && $_GET['aksi'] == "logout") {
    session_destroy();
    header("Location: TP_session.php");
    exit();
}

if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
    $nama = $_SESSION['username'];
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Halaman Utama</title>
    </head>
    <body>
        <center>
            <p>Selamat Datang <b><?php echo htmlspecialchars($nama); ?></b></p>
            <p>Berikut ini menu navigasi anda</p>
            <p>
                <a href='menu1.php'>Menu 1</a> &nbsp;
                <a href='menu2.php'>Menu 2</a> &nbsp;
                <a href='menu3.php'>Menu 3</a> &nbsp;
            </p>
            <br>
            <a href="?aksi=logout">Logout</a>
        </center>
    </body>
    </html>
<?php
} else {
    header("Location: TP_session.php");
    exit();
}
?>