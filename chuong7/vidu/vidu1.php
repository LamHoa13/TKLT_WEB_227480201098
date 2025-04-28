<?php
    $servername = "localhost";
    $database = "quanlysinhvien";
    $username = "root";
    $password ="123456";
    //Create connection
    $conn = mysqli connect($servername, $username, $password, $database);
    //Check connection
    if (!$conn) {
        die ("Connection failed: ".
        mysqli_connect error());
    }
    echo "Connected successfully";
    mysqli_close($conn);
?>