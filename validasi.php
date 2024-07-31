<?php

$koneksi = mysqli_connect("localhost", "root", "", "user");

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $cekuser = mysqli_query($koneksi, $query);

    if ($cekuser && mysqli_num_rows($cekuser) > 0) {
        header("Location: menu.php");
        exit();
    } else {
        header("Location: index.php");
        exit();
    }
}

?>
