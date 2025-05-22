<?php
require '../../db/conexion.php';

$id = $conn->real_escape_string($_POST['id']); 

$sql = "SELECT id, nombre, descripcion, id_categoria FROM productos WHERE id=$id LIMIT 1";
$resultado = $conn->query($sql);
$rows = $resultado->num_rows;

$productos = [];

if($rows > 0){
    $productos = $resultado->fetch_array();
}

echo json_encode($productos, JSON_UNESCAPED_UNICODE);


?>