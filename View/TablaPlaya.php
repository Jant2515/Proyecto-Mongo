<!DOCTYPE html>
<html lang="en">

<?php

    include_once __DIR__ . '\generales.php';
    require_once "./../Model/conexion.php";
    require_once "./../Model/playas.php";
    $crud = new Crud();
    $datos = $crud->mostrarDatos();
    $crud1 = new eliminar();
    $crud2 = new Editar();

?>

<head>
  <?php
    links2();
  ?>
</head>

<body>

<form action="../Controller/EditarPlayas.php" method="POST">
<input type="text" hidden value="<?php echo $idMongo?>" name="id"> 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" value="<?php echo $datos->nombre?>">
          </div>
          <div class="form-group">
          <label for="recipient-name" class="col-form-label">Ruta imagen</label>
            <input type="text" class="form-control" id="imagen" value="<?php echo $datos->imagen?>">
          </div>
          <div class="form-group">
          <label for="recipient-name" class="col-form-label">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" value="<?php echo $datos->descripcion?>">
          </div>
        </form>
      </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>



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
                        <div class="btn-group pull-right">
                          <form  action="../Model/playas.php" method="POST">
                        <input type="text" name="id" value="<?php echo $item->_id; ?>" hidden>
                        <button type="button"  name="id" class="btn btn-outline-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Editar</button>                        </div>
                    </form></td>
                    <td>
                     
                        <div class="btn-group pull-right">
                        <form action="../Controller/EliminaPlayas.php" method="POST">
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