<?php

include "../lib/koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

// if (!ctype_alnum($username) or !ctype_alnum($password)) {
//     echo "Login Gagal,<a href=../> Kembali</a>";
// } 

$query = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE (email_user = '$username' or noHp_user = '$username') AND password = '$password'");
$login = mysqli_num_rows($query);
$row = mysqli_fetch_array($query);

if ($login > 0) {
    session_start();
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    header('location: assets/adminweb.php?module=home');
    // header('location:adminweb.php');
} else {
    echo '<script>

        alert("Login Gagal Silahkan Ulangi");

        document.location.href="../admin/";

        </script>';
}
