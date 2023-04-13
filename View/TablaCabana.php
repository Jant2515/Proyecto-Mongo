<!DOCTYPE html>
<html lang="en">

<?php

    include_once __DIR__ . '\generales.php';
    require_once "./../Model/conexion.php";
    require_once "./../Model/cabana.php";
    $crud = new Crud();
    $datos = $crud->mostrarDatos();
    $crud1 = new eliminar();
?>

<head>
  <?php
    links2();
  ?>
</head>

<body>

    <table class="table" style="margin-top: 50px;">

        <thead>
            <tr>
                <th scope="col" >ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">RutaImagen</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($datos as $item) {
            ?>
                <tr>
                    <th scope="row"></th>
                    <td><?php echo $item->nombre; ?></td>
                    <td><?php echo $item->imagen; ?></td>
                    <td><?php echo $item->descripcion; ?></td>
                    <td>
                    <form  action="EditarCabana.php" method="POST">
                        <input type="text" name="id" value="<?php echo $item->_id; ?>" hidden>
                        <a href="EditarCabana.php"><button type="button"  name="id" class="btn btn-outline-warning">Editar</button></a>
                    </form>
                    </td>
                    <td>
                     
                        <div class="btn-group pull-right">
                        <form action="../Controller/EliminaCabanas.php" method="POST">
                        <input type="text" name="id" value="<?php echo $item->_id; ?>" hidden>
                        <button class="btn btn-danger">
                            <i class="fa-solid fa-user-xmark"></i> Eliminar
                        </button>
                    </form>
                        </div>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</body>

</html>