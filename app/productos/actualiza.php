<?php

require '../../db/conexion.php';

$id = $conn->real_escape_string($_POST['id']); 
$nombre = $conn->real_escape_string($_POST['nombre']); 
$descripcion = $conn->real_escape_string($_POST['descripcion']); 
$categoria = $conn->real_escape_string($_POST['categoria']); 

$sql = "UPDATE productos SET nombre ='$nombre', descripcion = '$descripcion', id_categoria =$categoria WHERE
id=$id";
if($conn->query($sql)){

        $_SESSION['msg'] = "Registro actualizado";

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
     $_SESSION['msg'] = "Error al actualizar registro";
}

header('location: index_productos.php');

?>