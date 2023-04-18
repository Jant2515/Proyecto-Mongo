<!DOCTYPE html>
<html lang="en">
<?php
include_once __DIR__ . '/generales.php';
?>
  <head>

    <?php
   links2();
    ?>
</head>

<body>
    <form role="form" action="" method="post">
        <?php
        navBarUsua();
        ?>
        </header>

    <!--Fin de navbar-->
   
<!--Carousel-->
    <div class="slide-one-item home-slider owl-carousel">
      
      <div class="site-blocks-cover overlay" style="background-image: url(images/ImgPlayas/PlayaPenca.jpeg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              

              <h1 class="text-white font-weight-light">Nunca dejes de explorar</h1>
              <p class="mb-5">Visita Costa Rica el pais del pura vida</p>

            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(images/ImgParqueNacionales/rincon-de-la-vieja.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
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
            <a href="Cabañas.php" class="unit-1 text-center">
              <img src="images/imgAdmin/Cabaña1.webp" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">Cabañas</strong>
                <h3 class="unit-1-heading">Las Mejores Cabañas</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="ParquesNacio.php" class="unit-1 text-center">
              <img src="images/ImgAdmin/ManuelAntoniojpg.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">Parque Nacionales</strong>
                <h3 class="unit-1-heading">Las Mejores Parques Nacionales</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="Hostels.php" class="unit-1 text-center">
              <img src="images/imgAdmin/ArenalHostelResort.jpeg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">Hostels</strong>
                <h3 class="unit-1-heading">Los mejores Hostels</h3>
              </div>
            </a>
          </div>

         
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="Hoteles.php" class="unit-1 text-center">
              <img src="images/ImgAdmin/Hotel.png" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">Hoteles</strong>
                <h3 id="tiCar"class="unit-1-heading">Los mejores Hoteles </h3>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-lg-4 mb-4 mb-lg-4">
            <a href="Playas.php" class="unit-1 text-center">
              <img src="images/ImgAdmin/PlayoJaco.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">Playas</strong>
                <h3 class="unit-1-heading">Los mejores Playas </h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="images/imgAdmin/icon-admin.png" alt="Image" class="img-fluid">
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


 

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">Propio Blog</h2>
            <p class="color-black-opacity-5">ver los propios comentarios de las usuarios &amp; actualizaciones</p>
          </div>
        </div>
        <div class="row mb-3 align-items-stretch">
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/hero_bg_1.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">How to Plan Your Vacation</a></h2>
              <div class="meta mb-4">by Theresa Winston <span class="mx-2">&bullet;</span> Jan 18, 2019 at 2:00 pm <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
            </div> 
          </div>
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/hero_bg_2.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">How to Plan Your Vacation</a></h2>
              <div class="meta mb-4">by Theresa Winston <span class="mx-2">&bullet;</span> Jan 18, 2019 at 2:00 pm <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="#" class="btn btn-outline-primary border-2 py-3 px-5">View All Blog Posts</a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section border-top">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="mb-5 text-black">Want To Travel With Us?</h2>
            <p class="mb-0"><a href="booking.html" class="btn btn-primary py-3 px-5 text-white">Book Now</a></p>
          </div>
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