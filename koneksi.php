<?php
$koneksi = mysqli_connect("localhost","root","","user");

if (!$koneksi) { ?>
    <script>
        alert ("not succesful")
    </script> 
<?php
} else {
    ?>
    <script>
        alert ("you are good to go")
    </script> 
    <?php
}

?>