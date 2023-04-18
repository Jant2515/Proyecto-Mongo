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
    <form role="form" action="" method="post">
        <?php
        navBar2();
        ?>
        </header>

    <div class="site-blocks-cover inner-page-cover" style="background-image: url(images/ImgHostels/CasaWolaba.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="text-white font-weight-light">Ponerse en contacto</h1>
              <div><a href="../index.html">Inicio</a> <span class="mx-2 text-white">&bullet;</span> <span class="text-white">Contactar</span></div>
              
            </div>
          </div>
        </div>
      </div>  

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">

            

            <form action="#" class="p-5 bg-white">
             

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Nombre</label>
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Apellidos</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Descripcion</label> 
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Mensaje</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Escriba tu Mensaje aqui..!!"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Enviar Mensaje" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Direccion</p>
              <p class="mb-4">Costa Rica </p>

              <p class="mb-0 font-weight-bold">Telefono</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

              <p class="mb-0 font-weight-bold">Email</p>
              <p class="mb-0"><a href="#">DestinosCR@domain.com</a></p>

            </div>
            

          </div>
        </div>
      </div>
    </div>

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