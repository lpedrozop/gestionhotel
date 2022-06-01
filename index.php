<?php
  include("db.php");
?>


<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;/>
        <title>Pa'Lujo</title>
        <head>
          <link rel="icon" href="img/logopalujo.png">
          </head>
        <link rel="icon" type="image/x-icon" href="assets/logopalujo.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    </head>
    <body id="page-top">
        <div class="topnav"  id="myTopnav">
            <a class="active"><img class="img-responsive" src="img/logopalujo.png" style="width:90px; margin-left:69px" alt=""></a>
            <a href="login.php" class="sesion1" style="margin-right:74px">Iniciar sesion</a>
            <a href="#inicio" class="screen-reader-text">Inicio</a>
            <a href="#servicios" class="screen-reader-text">Servicios</a>
            <a href="#super" class="screen-reader-text">Promocion</a>
            <a href="#contacto" class="screen-reader-text">Contacto</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i>
            </a>
     </div>
        
      
        <!-- Masthead-->
        <div class="superposicion" id="super">
            <div class="product-details">
		
                <h1>Promocion de la semana</h1>
                <span class="hint-star star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </span>
                    
                        <p class="information">" Esta habitacion es perfecta. 
                            Vine con mi esposo y su comodidad es fantastica, hace que no quiera volverme a casa ".<br>
                        Patricia Aguilar</p>
            <div class="control">
                <a href="login.php">
                <button class="btn">
                 <span class="price">$100.000</span>
               <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
               <span class="buy">Reservar</span>
             </button>
</a> 
            </div>
                        
            </div>
                
            <div class="imgproduct">
                
                <img src="https://static.abc.es/Media/201504/27/hotel12--644x362.jpg" alt="Habitacion de lujo">
                
            <div class="informacion">
                <h2> Descripcion</h2>
                <ul>
                    <li><strong>Camas: </strong>1 o 2 </li>
                    <li><strong>Servicio de habitacion: </strong>Si</li>
                    <li><strong>Aire acondicionado: </strong>Si</li>
                    <li><strong>Vista al mar: </strong>Si</li>
                    
                </ul>
            </div>
            </div>
            
            </div>
        </div>

        <div id="inicio"class="header">
            <h2 class="h1text">Disfruta de tus<br>Vacaciones Soñadas</h2>
            <p class="parrafolujo">Para los viajeros que buscan una experiencia memorable junto a la playa y cerca del realismo mágico de la ciudad<br>
            amurallada, el Hotel Pa'Lujo Cartagena es la opción perfecta para sus vacaciones y eventos.</p>
        </div>
        </section>

        <section class="hab">Habitaciones</section>
<section id="servicios" class="cards-wrapper">
  <div class="card-grid-space">
    <a class="card" href="login.php" style="--bg-img: url(../img/2hab.jpg)">
      <div>
        <h1>Pequeña</h1>
        <p>Maximo 2 personas, dispone de una cama y es perfecto para parejas</p>
        <div class="tags">
          <div name='' class="tag">Reservar</div>
        </div>
      </div>
    </a>
  </div>
  <div class="card-grid-space">
    
    <a class="card" href="login.php" style="--bg-img: url(../img/1hab.jpg)">
      <div>
        <h1>Mediana</h1>
        <p>Maximo 4 personas, ideal para una familia o para 2 parejas</p>
        <div class="tags">
          <div class="tag">Reservar</div>
        </div>
      </div>
    </a>
  </div>
  <div class="card-grid-space">
    
    <a class="card" href="login.php" style="--bg-img: url(../img/3hab.jpg)">
      <div>
        <h1>Grande</h1>
        <p>Maximo 7 personas, perfecto para la compañia de la familia completa y con bonitas vistas</p>
  
        <div class="tags">
          <div class="tag">Reservar</div>
        </div>
      </div>
    </a>
  </div>
  
</section>

</section>

<section class="salo">Salones</section>

<section  class="cards-wrapper">
  <div class="card-grid-space">
    <a class="card" href="login.php" style="--bg-img: url(../img/1salo.jpg)">
      <div>
        <h1>Pequeño</h1>
        <p>Maximo 30 personas, ideal para reuniones de familia o cumpleaños</p>
        <div class="tags">
          <div name='' class="tag">Reservar</div>
        </div>
      </div>
    </a>
  </div>
  <div class="card-grid-space"> 
    <a class="card" href="login.php" style="--bg-img: url(../img/2salo.jpg)">
      <div>
        <h1>Mediano</h1>
        <p>Maximo 50 personas, perfecto para reencuentros o quinceañeros </p>
        <div class="tags">
          <div class="tag">Reservar</div>
        </div>
      </div>
    </a>
  </div>
  <div class="card-grid-space">
    <a class="card" href="login.php" style="--bg-img: url(../img/3salo.jpg)">
      <div>
        <h1>Grande</h1>
        <p>Maximo 100 personas, ideal para reuniones de aforo alto o bodas</p>
  
        <div class="tags">
          <div class="tag">Reservar</div>
        </div>
      </div>
    </a>
  </div>
  
</section>

<!--Footer-->
<!-- Footer -->
<footer id="contacto" class="webintern-footer">
<div class="webintern-footer-inner">
<div class="container">
<div class="row">
<div class="col-sm-6 col-md-3 ">
<a class="webintern-footer-logo" href="#">
<img class="img-responsive" src="img/logopalujo.png" style="width:100px;" alt="">
</a>
<div class="simple-text dark padding-sm">
<p>Nuestro hotel es caracterizado por brindar una gran atencion al cliente, ademas de ofrecer diferentes servicios para los gustos de los clientes</p>
</div>
<div class="empty-space xs-25 sm-25"></div>
</div>
<div class="col-sm-6 col-md-2 footer-2">
<!-- webintern_footer_title -->
<h4 class="webintern_footer_title h5"><small>Navegacion</small></h4>
<ul class="webintern-footer-list">
<li><a href="#inicio">Inicio</a></li>
<li><a href="#contacto">Sobre nosotros</a></li>
<li><a href="#promocion"> Promocion </a></li>
<li><a href="#servicios"> Habitaciones </a></li>
</ul>
<div class="empty-space xs-25 sm-25"></div>
</div>
<div class="col-sm-6 col-md-3 footer-3">
<!-- webintern_footer_title -->
<h4 class="webintern_footer_title h5"><small> Nuestros servicios </small></h4>
<ul class="webintern-footer-list">
<li><a href="#">Transporte </a></li>
<li><a href="#">Habitaciones</a></li>
<li><a href="#">Salones</a></li>
<li><a href="#">Tour</a></li>
</ul>
<div class="empty-space xs-25"></div>
</div>
<div class="col-xs-12 col-md-4 col-sm-6">
<div class="marg-sm-b30"></div>
<!-- webintern_footer_title -->
<h4 class="webintern_footer_title h5"><small>Recibe notificaciones</small></h4>
<div class="empty-space marg-lg-b20"></div>
<!--
<div class="simple-text last dark ">
<p>Get latest updates and offers.</p>
</div>
-->
<div class="empty-space marg-lg-b15"></div>
<!-- TT-SUBSCRIBE -->
<form method="post">
<div class="tt-subscribe">
<input type="text" required="" placeholder="Ingresar correo electronico">
<div class="tt-subscribe-submit">
<i class="fa-brands fa-google" style="color:white;" aria-hidden="true"></i>
<input type="submit" value="">
</div>
</div>
</form>
<div class="empty-space marg-lg-b30"></div>
<!-- TT-SOCAIL -->
<ul class="tt-socail">
<li><a href="#"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa-brands fa-linkedin"  aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa-brands fa-google-plus" aria-hidden="true"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="tt-copy">
<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="tt-copy-left">Copyright © Pa'Lujo 2022. Todos los derechos reservados. </div>
</div>
<div class="col-sm-6">
</div>
</div>
</div>
</div>
</footer>


	<!-- ./Footer -->

    
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
