<!DOCTYPE html>
<?php include 'vistas/encabezado.php' ?>
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
          <a class="navbar-brand"><img height="79" alt="ALTRAN" src="img/altran.png"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="index.php"><i class="fa fa-home fa-fw"></i> INDEX</a>
            </li>
            <li>
              <a href="vistas/nosotros.php"><i class="fa fa-users fa-fw"></i> NOSTROS</a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-briefcase fa-fw"></i> SERVICIOS<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="vistas/productos.php">Comercio de equipo y accesorios de cómputo</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="vistas/consultoria.php">Consultoría en computación</a></li>            
                  </ul>
            </li>
            <!-- <li>
              <a href="servicios.php"><i class="fa fa-briefcase fa-fw"></i> SERVICIOS</a>
            </li> -->
            <li>
              <a href="vistas/contacto.php"><i class="fa fa-phone fa-fw"></i> CONTACTO</a>
            </li>
          </ul>
         
        </div>
      </div>
    </div>

    <div class="banner">
        <div class="fondo">
            <div class="contenedor">
                <p>ALTRAN</p>
                <ul>
                    <li>Equipos de cómputo</li>
                    <li>Accesorios de cómputo</li>
                    <li>Consultoría en computación</li>
                </ul>
            </div>
            <div class="boton" style="text-align: center;">
                <a class="btn btn-primary btn-outline btn-lg" data-scroll href="vistas/contacto.php">¡CONTACTANOS!</a>
            </div>
        </div>
    </div>

    <div class="section seccion1">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="img/equipo2.jpg" class="img-responsive">
          </div>
          <div class="col-md-6">
            <h1 class="tit">Comercio</h1>
            <h3>Equipo y accesorios de cómputo</h3>
            <p>Contamos con una variedad de equipos, refacciones y accesorios de computo, desde un USB hasta una LAPTOP, todos los productos son totalmente nuevos y con garantia de fabrica por cualquier anomalia. </p>
          </div>
        </div>
      </div>
    </div>


    <div class="section seccion2">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1 class="tit">Consultoría</h1>
            <h3>En informática</h3>
            <p>Especialistas en tecnología de la información. Analizamos sus necesidades y le ofrecemos soluciones. Nuestro equipo de expertos en consultoría informática, le aconsejará siempre teniendo en cuenta la funcionalidad y los costes. Obtenga en cualquier momento un asesoramiento fiable y efectivo, sin argumentos de venta.</p>
          </div>
          <div class="col-md-6">
            <img src="img/consultoria.jpg" class="img-responsive">
          </div>
        </div>
      </div>
    </div>

    <div class="banner2">
        <div class="fondo2">
        <div class="row pd">
          <div class="col-md-4">
            <div class="iconos">
                <span class="fa-stack fa-3x">
                  <i class="fa fa-square-o fa-stack-2x"></i>
                  <i class="fa fa-thumbs-o-up fa-stack-1x" ></i>
                </span>
            </div>
            <h2 class="text-center" style="color: #fff;">CONFIANZA Y COMPROMISO</h2>
            <p class="text-center" style="color: #fff;">Especialistas en informática y telecomunicaciones. Cubrimos totalmente sus necesidades empresariales. Obtenga el apoyo que su empresa necesita, ¡podemos ayudarle! Nos sentimos orgullosos de contar con una gran trayectoria y una cartera de clientes satisfechos.</p>
          </div>
          <div class="col-md-4">
            <div class="iconos">
                <span class="fa-stack fa-3x">
                  <i class="fa fa-square-o fa-stack-2x"></i>
                  <i class="fa fa-pencil-square-o fa-stack-1x"></i>
                </span>
            </div>
            <h2 class="text-center" style="color: #fff;">ASESORAMIENTO</h2>
            <p class="text-center" style="color: #fff;">Cuente con un equipo de expertos informáticos, dispuestos a ofrecerle el mejor servicio. Asistencia informática para empresas y particulares Especialistas en diagnóstico, optimización y análisis de equipos y sistemas. Soluciones informáticas, adaptadas totalmente a sus necesidades reales.</p>
          </div>
          <div class="col-md-4">
            <div class="iconos">
                <span class="fa-stack fa-3x">
                  <i class="fa fa-square-o fa-stack-2x"></i>
                  <i class="fa fa-check fa-stack-1x"></i>
                </span>
            </div>
            <h2 class="text-center" style="color: #fff;">CREATIVIDAD E INNOVACIÓN</h2>
            <p class="text-center" style="color: #fff;">Cada empleado pierde muchas horas al año resolviendo incidencias informáticas. Las incidencias informáticas, suponen una gran pérdida de productividad y competitividad para las empresas. Desvían la atención sobre su negocio, ocasionando interrupciones de trabajo innecesarias. En definitiva son un riesgo en potencia por la falta de especialización a la hora de resolverlas.</p>
          </div>
        </div>
        <div class="" style="text-align: center;">
            <a class="btn btn-primary btn-outline btn-lg" data-scroll href="vistas/servicios.php">¡SERVICIOS!</a>
        </div>
      </div>
    </div>

<?php include 'vistas/pie.php' ?>
<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/iconoarriba.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/menu.js"></script>
</body>
</html>
