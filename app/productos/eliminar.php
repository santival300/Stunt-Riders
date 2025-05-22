<?php

require '../../db/conexion.php';

$id = $conn->real_escape_string($_POST['id']); 


$sql = "DELETE FROM productos WHERE id=$id";
if($conn->query($sql)){
    
}

header('location: index_productos.php');

?>