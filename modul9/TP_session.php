<?php
session_start();
$daftar_user = [
    'Ali' => 'password1',
    'Bona' => 'password2',
    'Charlie' => 'password3',
    'Dede' => 'password3',
    'Emon' => 'password5'
];

if (isset($_POST['Login'])) {
    $input_nama = $_POST['nama'];
    $input_pass = $_POST['pass'];

    if ($input_nama == "" && $input_pass == "") {
        echo "<p style='color:red; text-align:center;'>Username dan Password masih kosong!</p>"; 
        session_destroy();
    } else {
        if (array_key_exists($input_nama, $daftar_user)) {
            if ($daftar_user[$input_nama] == $input_pass) {
                $_SESSION['login'] = 1;
                $_SESSION['username'] = $input_nama;
            } else {
                $_SESSION['login'] = 0;
                $status_error = "password_salah";
            }
        } else {
            $_SESSION['login'] = 0;
            $status_error = "username_tidak_ada";
        }
        
        if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
            header("Location: TP_submitsession.php");
            exit();
        } else if (isset($status_error) && $status_error == "password_salah") { 
            echo "<p style='color:red; text-align:center;'>Password salah!</p>";
        } else { 
            echo "<p style='color:red; text-align:center;'>Username tidak terdaftar!</p>";
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
            <center>
                <p><b>Form Login</b></p>
                <p>User Name <input type="text" name="nama" required autocomplete="off"/></p>
                <p>Password <input type="password" name="pass" required/></p>
                <p><input type="submit" name="Login" value="Login"/></p>
            </center>
        </form>
    </body>
</html>