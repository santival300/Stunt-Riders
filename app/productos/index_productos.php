<?php

session_start();

require '../../db/conexion.php';

$sqlProductos = "SELECT p.id, p.nombre, p.descripcion, c.nombre AS categoria  FROM productos AS p
INNER JOIN categoria AS c 
ON p.id_categoria=c.id";
$productos = $conn->query($sqlProductos);

$dir = "imagen/";

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stunt riders</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/all.min.css">
</head>

<body>

    <div class="container py-3">
        <h2 class="text-center">Productos</h2>

        <hr>

        <?php if (isset($_SESSION['msg'])) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $_SESSION['msg']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        <?php 
        unset($_SESSION['msg']);
        } ?>



        <div class="row justify-content-end">
            <div class="col-auto">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#NuevoModal"><i
                        class="fa-solid fa-circle-plus"></i> Nuevo producto</a>
            </div>
        </div>

        <table class="table table-sm table-striped table-hover mt-4">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Categoria</th>
                    <th>imagen</th>
                    <th>acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php while ($row_productos = $productos->fetch_assoc()) { ?>

                    <tr>
                        <td><?= $row_productos['id'] ?></td>
                        <td><?= $row_productos['nombre'] ?></td>
                        <td><?= $row_productos['descripcion'] ?></td>
                        <td><?= $row_productos['categoria'] ?></td>
                        <td><img src="<?= $dir . $row_productos['id']. '.jpg'; ?>" width="100" ></td>
                        <td>

                            <a href="#" class="btn btn_sm btn-warning" data-bs-toggle="modal"
                                data-bs-target="#editarModal" data-bs-id="<?= $row_productos['id']; ?>" ><i class="fa-solid 
                        fa-pen-to-square"></i> Editar</a>

                            <a href="#" class="btn btn_sm btn-danger" data-bs-toggle="modal"
                                data-bs-target="#eliminaModal" data-bs-id="<?= $row_productos['id']; ?>"><i class="fa-solid 
                        fa-trash-can"></i> Eliminar</a>

                        </td>
                    </tr>

                <?php } ?>

            </tbody>
        </table>


    </div>


    <?php

    $sqlCategoria = "SELECT id,nombre FROM categoria";
    $categorias = $conn->query($sqlCategoria);

    ?>

    <?php include 'nuevoModal.php'; ?>

    <?php $categorias->data_seek(0); ?>

    <?php include 'editarModal.php'; ?>

    <?php include 'eliminarModal.php'; ?>

    <script>
        let editaModal = document.getElementById('editarModal')
        let eliminaModal = document.getElementById('eliminaModal')
        editaModal.addEventListener('show.bs.modal', event => {
            let buttom = event.relatedTarget
            let id = buttom.getAttribute('data-bs-id')

            let inputId = editaModal.querySelector('.modal-body #id')
            let inputNombre = editaModal.querySelector('.modal-body #nombre')
            let inputDescripcion = editaModal.querySelector('.modal-body #descripcion')
            let inputCategoria = editaModal.querySelector('.modal-body #categoria')
            let imagen = editaModal.querySelector('.modal-body #img_imagen')

            let url = "getProductos.php"
            let formData = new FormData()
            formData.append('id', id)

            fetch(url, {
                    method: "POST",
                    body: formData
                }).then(response => response.json())
                .then(data => {

                    inputId.value = data.id
                    inputNombre.value = data.nombre
                    inputDescripcion.value = data.descripcion
                    inputCategoria.value = data.id_categoria
                    imagen.src = '<?= $dir ?>' + data.id + '.jpg'

                }).catch(err => console.log(err))

        })

        eliminaModal.addEventListener('show.bs.modal', event => {
            let buttom = event.relatedTarget
            let id = buttom.getAttribute('data-bs-id')
            eliminaModal.querySelector('.modal-footer #id').value = id
        })
    </script>

    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>

</html>