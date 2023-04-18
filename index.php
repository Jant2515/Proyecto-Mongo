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
    <div class="site-section block-13 bg-light">
  

  <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7">
          <h2 class="font-weight-light text-black text-center">Comentarios</h2>
        </div>
      </div>

      <div class="nonloop-block-13 owl-carousel">

        <div class="item">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 mb-5">
                <img src="View/images/img_1.jpg" alt="Image" class="img-md-fluid">
              </div>
              <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
                <p class="text-black lead">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique dolorem quisquam laudantium, incidunt id laborum, tempora aliquid labore minus. Nemo maxime, veniam! Fugiat odio nam eveniet ipsam atque, corrupti porro&rdquo;</p>
                <p class="">&mdash; <em>James Martin</em>, <a href="#">Traveler</a></p>
              </div>
            </div>
          </div>
        </div>

       
        <div class="item">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 mb-5">
                <img src="View/images/img_4.jpg" alt="Image" class="img-md-fluid">
              </div>
              <div class="overlap-left col-lg-6 bg-white p-md-5 align-self-center">
                <p class="text-black lead">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique dolorem quisquam laudantium, incidunt id laborum, tempora aliquid labore minus. Nemo maxime, veniam! Fugiat odio nam eveniet ipsam atque, corrupti porro&rdquo;</p>
                <p class="">&mdash; <em>James Martin</em>, <a href="#">Traveler</a></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>



    
    <div class="site-section border-top">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="mb-5 text-black">Comenta ahora?</h2>
            <p class="mb-0"><a href="View/Comentario.php" class="btn btn-primary py-3 px-5 text-white">Comentar</a></p>
          </div>
        </div>
      </div>
    </div>
    
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