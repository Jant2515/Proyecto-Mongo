<!DOCTYPE html>
<html lang="en">
<?php
include_once __DIR__ . '\generales.php';
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
        
        <div class="slide-one-item home-slider owl-carousel">
      
      <div class="site-blocks-cover overlay" style="background-image: url(images/imgCabañas/Cabaña1.webp);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              

              <h1 class="text-white font-weight-light">Bienvenido Administrador</h1>
              <p class="mb-5"></p>
           

            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(images/imgHostels/BaliEcoStay.webp);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="text-white font-weight-light">Crea Edite Elimine tu lugar </h1>
              <p class="mb-5">Solo el Administrador esta autorizado para el Crud</p>
 
            </div>
          </div>
        </div>
      </div>  

    </div>
    <!--Fin de navbar-->
   
<!--Carousel-->

      <hr>
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">ACTUALIZE ,ELIMINE Y AGRAGUE DESTINO A TU GUSTO!!</h2>
            <p class="color-black-opacity-5">Elige el destino que desea Administrar</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="TablaCabana.php" class="unit-1 text-center">
              <img src="images/imgAdmin/Cabaña1.webp" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">Cabañas</strong>
                <h3 class="unit-1-heading">Administrar</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="TablaParque.php" class="unit-1 text-center">
              <img src="images/ImgAdmin/ManuelAntoniojpg.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">Parque Nacionales</strong>
                <h3 class="unit-1-heading">Administrar</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="TablaHostel.php" class="unit-1 text-center">
              <img src="images/imgAdmin/ArenalHostelResort.jpeg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">Hostels</strong>
                <h3 class="unit-1-heading">Administrador</h3>
              </div>
            </a>
          </div>

         
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="TablaHotel.php" class="unit-1 text-center">
              <img src="images/ImgAdmin/Hotel.png" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">Hoteles</strong>
                <h3 id="tiCar"class="unit-1-heading">Administrador</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="TablaPlaya.php" class="unit-1 text-center">
              <img src="images/ImgAdmin/PlayoJaco.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">Playas</strong>
                <h3 class="unit-1-heading">Administrador</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="TablaUsua.php" class="unit-1 text-center">
              <img src="images/imgAdmin/icon-admin.png" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">Usuarios</strong>
                <h3 class="unit-1-heading">Administrador</h3>
              </div>
            </a>
          </div>
        </div>
      </div>

    
  
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