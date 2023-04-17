<!DOCTYPE html>
<html lang="en">
<?php
include_once __DIR__ . '\generales.php';
include "./../Model/conexion.php";
include "./../Model/calificaciones.php";

$Lugar = $_POST['Lugar'];
?>

<head>
    <?php
    links2();
    ?>

    <?php
    navBar2();
    ?>
</head>
<link rel="stylesheet" href="css/calificacion.css">

<body>
    <br>
    <br>
    <div style="display: flex; justify-content:center;">
        <div class="card" style="width: 20rem; ">
            <div class="card-body">
                <h5 class="card-title">Puntuacion</h5>
                <h6 class="card-subtitle mb-2 text-muted">Envianos tu puntuacion</h6>
                <form action="../Controller/Calificaciones.php" method="POST">
                    <p class="clasificacion">
                        <input id="radio1" type="radio" name="estrellas" value="5">
                        <label for="radio1">★</label>
                        <input id="radio2" type="radio" name="estrellas" value="4">
                        <label for="radio2">★</label>
                        <input id="radio3" type="radio" name="estrellas" value="3">
                        <label for="radio3">★</label>
                        <input id="radio4" type="radio" name="estrellas" value="2">
                        <label for="radio4">★</label>
                        <input id="radio5" type="radio" name="estrellas" value="1">
                        <label for="radio5">★</label>
                        <input id="Lugar" type="text" name="Lugar" value="<?php echo $Lugar ?>" hidden>
                    </p>
                    <button class="btn btn btn-danger" href="destination.php" class="card-link">Salir</button>
                    <button class="btn btn-info" href="destination.php" class="card-link">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
</body>
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