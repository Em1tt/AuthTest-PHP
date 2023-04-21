<?php
    $connection = mysqli_connect("localhost", "root", "", "authTest");
    if (mysqli_connect_errno()){
        echo "Nepodarilo sa pripojiť k databázi";
    }
?>