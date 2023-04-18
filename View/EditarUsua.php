<!DOCTYPE html>
 <html lang="en">
 <?php
    include_once __DIR__ . '\generales.php';
    include "./../Model/conexion.php";
    include "./../Model/usuarioModel.php";
    
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
        navBarAdmin();
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
                            <form action="./../Controller/EditarUsua.php" method="POST">
						        <input type="text" hidden value="<?php echo $idMongo ?>" name="id">
						        <label for="nombre">Usuario</label>
						        <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $datos->Correo ?>">
						        <label for="text">Contraseña</label>
						        <input type="text" class="form-control" id="contrasena" name="contrasena" value="<?php echo $datos->Contrasena ?>">
                                <label for="text">Rol</label>
						        <input type="text" class="form-control" id="contrasena" name="contrasena" value="<?php echo $datos->Rol ?>">
						        <button style="margin-top:10px"  class = "btn btn-outline-success">Actualizar
						        </button>
					        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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