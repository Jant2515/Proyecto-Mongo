<!DOCTYPE html>
<html lang="en">
<?php
include_once __DIR__ . '\generales.php';
require_once "./../Model/conexion.php";
require_once "./../Model/comentario.php";
?>

<head>
     <?php
        links2();
        ?>

     <?php
        navBarUsua();
        ?>
 </head>


<body>
    <!-- end header section -->
    </div>
    <div class="main_content">
        <div class="main_content_bg">
            <img src="images/content-bg.jpg" alt="">
        </div>
        <form action="../Controller/AgregarComentario.php" method="post">
        <section class="vh-100 gradient-custom">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <div class="card bg-light text-black" style="border-radius: 1rem;">
                                <div class="card-body p-5 text-center">
                                    <form action="" method="post" name="login">
                                        <div class="mb-md-5 mt-md-4 pb-5">
                                            <h2 class="fw-bold mb-2 text-uppercase">
                                                <h2 class="fw-bold mb-2 text-uppercase">Agregar Comentario</h2>
                                            </h2>
                                            <p class="text-black-50 mb-5">Ingrese los datos necesarios</p>
                                            <div class="form-outline form-white  mb-4">
                                                <label for="text" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre">
                                            </div>
                                            <div class="form-outline form-white  mb-4">
                                                <label for="inputPassword4" class="form-label">Comentario</label>
                                                <textarea name="comentario" id="comentario" cols="40" rows="3"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-outline-success btn-lg px-5"
                                            name="AgregarLugar">Enviar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    </form>
    <br>
    <footer style="margin-top:10%">
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