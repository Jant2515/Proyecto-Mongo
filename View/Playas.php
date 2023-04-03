 <!DOCTYPE html>
 <html lang="en">
 <?php
    include_once __DIR__ . '\generales.php';
    require_once "./../Model/conexion.php";
    require_once "./../Model/playas.php";
    $crud = new Crud();
    $datos = $crud->mostrarDatos();
?>
 <head>
     <?php
        links2();
        ?>

     <?php
        navBar2();
        ?>
 </head>
 <link rel="stylesheet" href="css/Otros.css">

 <body>
     <br>
     <img src="images/beach.png" alt="" style="display: block; margin-left: auto; margin-right: auto;">
     <H1 style="text-align: center;color:black;">Playas</H1>
     <h3 style="text-align: center;">Las mejores puntuaciones que veras</h3>
     <img src="images/doubledown.gif" alt="" clas="slider" style="display: block; margin-left: auto; margin-right: auto;">
     <br>
     <br>
     <form action="Post" class="TD" style="flex-wrap: wrap; margin-top: 20px;">
     <?php
        foreach($datos as $item) {
     ?>

         <div class="tarjeta" style="margin-top: 20px; display: inline-block;">
             <div class="titulo"><?php echo $item->nombre; ?></div>
             <img class="Img3" src="<?php echo $item->imagen; ?>" alt="muestra">
             <p style="display: flex; justify-content:center;"><?php echo $item->descripcion; ?> </p>
             <div class="pie">
                 <a href="calificacion.php">Puntuar Lugar</a>
             </div>
         </div>
     <?php
        }
     ?>
     </form>
     <br>
     <footer>
         <?php
            Footer2();
            ?>
     </footer>
     </div>
     <?php
        allLinks2();
        ?>
 </body>

 </html>