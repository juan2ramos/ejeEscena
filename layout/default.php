<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="es">
<head>

    <title><?php echo $title ?></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="author" content="juan2ramos"/>
    <meta name="contact" content="juan2ramos@gmail.com"/>
    <meta name="description" content="Ejs Escena"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1"/>
    <!-- Meta Facebook -->
    <meta property="og:url" content="">
    <meta property="og:title" content="circulart"/>
    <meta property="og:description" content=".."/>
    <meta property="og:image" content="images/logo.png"/>


    <link rel="shortcut icon" href="favicon.png">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic'
          rel='stylesheet' type='text/css'>

    <!-- Estilos -->
    <script src="js/prefixfree.min.js"></script>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/style.css"/>


</head>
<body>

<header>
  <figure>
    <img src="images/logo-eje-escena.png" alt="logo eje escena" />
  </figure>
  <nav>
    <ul id="nav">
      <li><a href="inicio">sobre eje escena</a></li>
      <li>
          <a href="http://eje-escena.circulart.org/m/index.php?modo=inscripciones" target="_blank">
              formulario de registro
          </a>
      </li>
      <li><a href="taller">Taller preparatorio</a></li>
      <!--<li><a href="">noticias</a></li>
      <li><a href="">programación</a></li>-->
      <li><a href="contacto">contacto</a></li>
    </ul>
    <ul id="network">
    
      <li><a href=""><span class="icon-twitter"></a></span> </li>
      <li><a href=""><span class="icon-facebook"></a></span> </li>
    </ul>
  </nav>
</header>
<?php include $fileName; ?>
<footer class="clear">
  <ul>
    <li><img src="images/min-cultura.png" alt="Ministerio de Cultura" /> </li>
    <li><img src="images/prosperidad-para-todos.png" alt="Prosperidad para todos" /> </li>
    <li><img src="images/festival-teatro-manizales.png" alt="Festival de Teatro de manizales" /> </li>
    <li><img src="images/redlat-circulart.png" alt="Redlat y Circulart" /> </li>
  </ul>
</footer>
<!-- JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
