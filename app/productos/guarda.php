<?php

session_start();

require '../../db/conexion.php';

$nombre = $conn->real_escape_string($_POST['nombre']); 
$descripcion = $conn->real_escape_string($_POST['descripcion']); 
$categoria = $conn->real_escape_string($_POST['categoria']); 

$sql = "INSERT INTO productos (nombre, descripcion, id_categoria, fecha) 
VALUES('$nombre','$descripcion','$categoria', NOW())";
if($conn->query($sql)){
    $id = $conn->insert_id;

     $_SESSION['msg'] = "Registro guardado";

    if($_FILES['imagen']['erorr'] == UPLOAD_ERR_OK){
        $permitidos = array("image/jpg", "image/jpeg");
        if(in_array($_FILES['poster']['type'], $permitidos)){


            $dir = "imagen";

            $info_img = pathinfo($_FILES['imagen']['name']);
            $info_img['extension'];

            $imagen = $dir.'/'.$id.'.jpg';

            if(!file_exists($dir)){
                mkdir($dir, 0777);
            }
            
            if(!move_uploaded_file($_FILES['imagen']['tmp_name'], $imagen));
                $_SESSION['msg'] .= "<br>Error al guardar imagen";
        }

    } else {
        $_SESSION['msg'] .= "<br>Formato de imagen no permitido";
    }
} else {
     $_SESSION['msg'] = "Error al guardar imagen";
}

header('location: index_productos.php');

?>