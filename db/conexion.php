<?php

    $conn = new mysqli("localhost","root","","stunt_riders");

    if($conn->connect_error){
        die("Error de conexion". $conn->connect_error);
    }
?>