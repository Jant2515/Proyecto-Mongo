<!DOCTYPE html>
 <html lang="en">
 <?php
    include_once __DIR__ . '\generales.php';
    include "./../Model/conexion.php";
    include "./../Model/hoteles.php";
    
    $crud = new Editar();
	$id = $_POST['id'];
	$datos = $crud->obtenerDocumento($id);
	$idMongo = $datos->_id;
?>
 <head>
     <?php
        links2();
        ?>

     <?php
        navBar2();
        ?>
 </head>
        <!-- end header section -->
    </div>
    <div class="main_content">
        <div class="main_content_bg">
            <img src="images/content-bg.jpg" alt="">
        </div>
        <!-- Editar -->
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-light text-black" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                            <form action="./../Controller/EditarHoteles.php" method="POST">
						        <input type="text" hidden value="<?php echo $idMongo ?>" name="id">
						        <label for="nombre">Nombre</label>
						        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $datos->nombre ?>">
						        <label for="imagen">Imagen</label>
						        <input type="text" class="form-control" id="imagen" name="imagen" value="<?php echo $datos->imagen ?>">
						        <label for="descripcion">Descripcion</label>
						        <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $datos->descripcion ?>">
						        <button class = "btn btn-outline-success">Actualizar
						        </button>
					        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer style="margin-top: 500px;">
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