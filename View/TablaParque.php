<!DOCTYPE html>
<html lang="en">

<?php

    include_once __DIR__ . '\generales.php';
    require_once "./../Model/conexion.php";
    require_once "./../Model/parqueN.php";
    $crud = new Crud();
    $datos = $crud->mostrarDatos();

?>

<head>
  <?php
    links2();
  ?>
</head>

<body>
<?php
        navBarAdmin();
        ?>
           <br>
     <img src="images/nationalPark.png" alt="" style="display: block; margin-left: auto; margin-right: auto;">
     <H1 style="text-align: center;color:black;">Parques Nacionales</H1>
     <h3 style="text-align: center;">Administracion de Parque Nacionales</h3>
     <img src="images/doubledown.gif" alt="" clas="slider" style="display: block; margin-left: auto; margin-right: auto;">
     <br>
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
                        <form action="./EditarParque.php" method="POST">
						              <input type="text" hidden value="<?php echo $item->_id ?>" name="id">
						              <button class="btn btn-outline-warning">Editar
						              </button>
					              </form>
                    </td>
                    <td>
                     
                        <div class="btn-group pull-right">
                        <form action="../Controller/EliminaParque.php" method="POST">
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
    <hr>
    <div class="btagregar">
        <a  href="AñadirParque.php" class="textC ">Agregar</a>
    </div>
    <br>
    <footer>
            <?php
            Footer2();
            ?>
        </footer>
        <?php
        allLinks2();
        ?>
</body>

</html>