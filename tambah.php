<?php
include('koneksi.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];
    $hobi = $_POST['hobi'];

    $sql = "INSERT INTO user (username, password, email, gender, role, hobi) 
            VALUES ('$username', '$password', '$email', '$gender', '$role', '$hobi')";

    if (mysqli_query($koneksi, $sql)) { 
        header("Location: index.php");
        ?>
        <script>
            alert ("Registered!")
        </script>
        <?php
    } else {
        $error_message = mysqli_error($koneksi);
        header("Location: register.php?error=$error_message");
        exit();
    }
} else {
    $error_message = "Register Failed: Form submission error";
    header("Location: register.php?error=$error_message");
    exit();
}

mysqli_close($koneksi);
?>
