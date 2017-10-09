<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">ALTRAN</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a class="navbar-brand"><span style="color: #F2C512;">ALTRAN</span></a> -->
          <a class="navbar-brand"><img height="79" alt="ALTRAN" src="../img/altran.png"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="../index.php"><i class="fa fa-home fa-fw"></i> INDEX</a>
            </li>
            <li>
              <a href="nosotros.php"><i class="fa fa-users fa-fw"></i> NOSTROS</a>
            </li>
            <li class="dropdown active">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-briefcase fa-fw"></i> SERVICIOS<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="productos.php">Comercio de equipo y accesorios de cómputo</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="consultoria.php">Consultoría en computación</a></li>            
                  </ul>
            </li>
            <!-- <li>
              <a href="servicios.php"><i class="fa fa-briefcase fa-fw"></i> SERVICIOS</a>
            </li> -->
            <li>
              <a href="contacto.php"><i class="fa fa-phone fa-fw"></i> CONTACTO</a>
            </li>
          </ul>
         
        </div>
      </div>
    </div>

    <div class="bannersc">
        <div class="fondosc">
            <p class="texton">Consultoría en computación</p>
            <div class="boton" style="text-align: center;">
                <a class="btn btn-primary btn-outline btn-lg" data-scroll href="contacto.php">¡CONTACTANOS!</a>
            </div>
        </div>
    </div>

    <div class="textosc seccion1">
      <p>Auditamos sus sistemas actuales y necesidades reales. Ponemos a su alcance la solución apropiada para que invierta adecuadamente en tecnología.<br><br>

      Nuestro equipo de expertos en consultoría informática, le aconsejará siempre teniendo en cuenta la funcionalidad y los costes. Obtenga en cualquier momento un asesoramiento fiable y efectivo, sin argumentos de venta.<br><br>

      El valor añadido que proporcionamos es la alta capacidad que da esa experiencia a nuestros consultores para alcanzar un elevado conocimiento de las necesidades de cada empresa, u organización en general, y de los procedimientos y objetivos que rigen su funcionamiento. Sólo así nos vemos capacitados para poder seleccionar la arquitectura y herramientas más adecuadas en cada caso, que sirvan a la organización para sacar el máximo provecho de una manera eficiente, y al más largo plazo posible.<br><br>

      Reciba el asesoramiento tecnológico necesario, para hacer un uso adecuado de las herramientas que estén a su disposición.Le ayudamos a obtener un óptimo rendimiento de los recursos informáticos de su empresa, que evitarán realizar gastos innecesarios.</p>
    </div>
    <div class="" style="text-align: center; color: #000; margin-bottom: 5%;">
                <a class="btn btn-info btn-outline btn-lg" data-scroll href="contacto.php">¡CONTACTANOS!</a>
            </div>

<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/iconoarriba.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/menu.js"></script>

</body>
</html>
