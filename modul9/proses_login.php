<?php
session_start();

if (isset($_POST['Login'])) {
    if ($_POST['nama'] == "" && $_POST['pass'] == "") {
        echo "<p style='color:red;'>Username dan Password masih kosong!</p>"; 
        session_destroy();
    } else {
        if ($_POST['nama'] == 'naufal' && $_POST['pass'] == "chocolatos3") {
            $_SESSION['login'] = 1;
            $_SESSION['username'] = $_POST['nama'];
        }
        
        if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
            header("Location: submit_formlogin.php");
            exit();
        } else {
            echo "<p style='color:red;'>Username atau Password salah!</p>";
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Session Login</title>
    </head>
    <body>
        <form name="session" method="POST" action="">
            <p>Form Login</p>
            <p>User Name <input type="text" name="nama"/></p>
            <p>Password <input type="password" name="pass"/></p>
            <p><input type="submit" name="Login" value="Login"/></p>
        </form>
    </body>
</html>