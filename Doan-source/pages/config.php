<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "doan";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        die("" . mysqli_connect_error());
    } else {
    }
?>

