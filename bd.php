<?php
    $ER_DUP_ENTRY = 1062;
    
    $connect = mysqli_connect("localhost", "root", "", "laba1db");
   
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    mysqli_set_charset($connect, 'utf8mb4');

?>