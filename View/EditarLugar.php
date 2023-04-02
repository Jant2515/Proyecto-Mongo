<!DOCTYPE html>
 <html lang="en">
 <?php
    include_once __DIR__ . '\generales.php';
    require_once "./../Model/conexion.php";
    require_once "./../Model/cabana.php";
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
        <!-- Editar CITA NUEVA -->
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-light text-black" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                                <form action="" method="post" name="login">
                                    <div class="mb-md-5 mt-md-4 pb-5">
                                        <h2 class="fw-bold mb-2 text-uppercase">
                                            <h2 class="fw-bold mb-2 text-uppercase">Editar Cliente</h2>
                                        </h2>
                                        <p class="text-black-50 mb-5">Edite los datos necesarios</p>
                                        <input type="hidden" value="<?php echo $_id?>" id="idCli" name="idCli">
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" id="nombre"
                                                name="nombre" value="<?php echo $nombre?>">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputEmail4" class="form-label">Ruta Imagen</label>
                                            <input type="text" class="form-control" id="imagen" name="imagen"
                                            value="<?php echo $imagen?>">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Descripcion</label>
                                            <input type="text" class="form-control" id="descipcion"
                                                name="descipcion" value="<?php echo $descipcion?>">
                                        </div>
                                        <button type="submit" class="btn btn-outline-danger btn-lg px-5"
                                            name="btnConfirmar">Confirmar Cambios</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    