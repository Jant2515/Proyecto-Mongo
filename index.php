<!DOCTYPE html>
<html lang="en">
<?php
include_once __DIR__ . '\View\generales.php';
?>
  <head>

    <?php
   links();
    ?>
</head>

<body>
    <form role="form" action="" method="post">
        <?php
        navBar();
        ?>
        </header>

    <!--Fin de navbar-->
   
<!--Carousel-->
    <div class="slide-one-item home-slider owl-carousel">
      
      <div class="site-blocks-cover overlay" style="background-image: url(View/images/ImgPlayas/PlayaPenca.jpeg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              

              <h1 class="text-white font-weight-light">Nunca dejes de explorar</h1>
              <p class="mb-5">Visita Costa Rica el pais del pura vida</p>

            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(View/images/ImgParqueNacionales/rincon-de-la-vieja.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="text-white font-weight-light">Lugares que amaste</h1>
              <p class="mb-5">Danos tu reseña del viaje</p>
            </div>
          </div>
        </div>
      </div>  

    </div>

      <!--Fin carousel-->



    <div class="site-section">
      
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">Los mejores lugares de Costa Rica!!</h2>
            <p class="color-black-opacity-5">Elige el destino que desea visualizar</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="view/Cabañas.php" class="unit-1 text-center">
              <img src="view/images/imgAdmin/Cabaña1.webp" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">Cabañas</strong>
                <h3 class="unit-1-heading">Las Mejores Cabañas</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="view/ParquesNacio.php" class="unit-1 text-center">
              <img src="view/images/ImgAdmin/ManuelAntoniojpg.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">Parque Nacionales</strong>
                <h3 class="unit-1-heading">Las Mejores Parques Nacionales</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="view/Hostels.php" class="unit-1 text-center">
              <img src="view/images/imgAdmin/ArenalHostelResort.jpeg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">Hostels</strong>
                <h3 class="unit-1-heading">Los mejores Hostels</h3>
              </div>
            </a>
          </div>

         
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="view/Hoteles.php" class="unit-1 text-center">
              <img src="view/images/ImgAdmin/Hotel.png" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">Hoteles</strong>
                <h3 id="tiCar"class="unit-1-heading">Los mejores Hoteles </h3>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-lg-4 mb-4 mb-lg-4">
            <a href="view/Playas.php" class="unit-1 text-center">
              <img src="view/images/ImgAdmin/PlayoJaco.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">Playas</strong>
                <h3 class="unit-1-heading">Los mejores Playas </h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="view/images/imgAdmin/icon-admin.png" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">Otros</strong>
                <h3 class="unit-1-heading">Contactenos</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    
    </div>

    <!-- <div class="site-section bg-light">
      
    </div> -->

    <footer>
            <?php
            Footer();
            ?>
        </footer>
        <?php
        allLinks();
        ?>
    
  </body>
</html>