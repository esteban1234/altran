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
            <li class="active">
              <a href="nosotros.php"><i class="fa fa-users fa-fw"></i> NOSTROS</a>
            </li>
            <li class="dropdown">
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
  
  <div class="bannern">
        <div class="fondon">
            <p class="texton">El departamento IT que su empresa necesita</p>
            <div class="boton" style="text-align: center;">
                <a class="btn btn-primary btn-outline btn-lg" data-scroll href="contacto.php">¡CONTACTANOS!</a>
            </div>
        </div>
    </div>

    <div class="section seccion1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center" style="color: #243367;">NOSOTROS</h1>
            <p class="text-center">Lo que nos distingue</p>
          </div>
        </div> <br><br>
        <div class="row">
          <div class="col-md-3">
            <img src="../img/profesional.png" class="center-block img-responsive">
            <h3 class="text-center">Profesionalismo</h3>
            <p class="text-center">Disponemos de un equipo de profesionales cualificados, expertos en ingeniería informática. Le garantizamos resultados de calidad. El servicio que ofrecemos a nuestros clientes nos avala.</p>
          </div>
          <div class="col-md-3">
            <img src="../img/seguridad.png" class="center-block img-responsive">
            <h3 class="text-center">Seguridad</h3>
            <p class="text-center">Cumplimos rigurosamente con la Seguridad. El soporte remoto se desarrolla bajo un entorno encriptado, y nuestros procesos se ejecutan bajo normativas estándares de seguridad y calidad. Confidencialidad garantizada.</p>
          </div>
          <div class="col-md-3">
            <img src="../img/compromiso.png" class="center-block img-responsive">
            <h3 class="text-center">Compromiso y Eficacia</h3>
            <p class="text-center">Nos esforzamos por convertir a cada cliente en un compromiso profesional. 
            Le brindamos una respuesta efectiva a cualquier duda o incidencia que le pueda surgir.</p>
          </div>
          <div class="col-md-3">
            <img src="../img/trato.png" class="center-block img-responsive">
            <h3 class="text-center">Trato personalizado</h3>
            <p class="text-center">Es nuestro elemento diferenciador. Analizamos sus necesidades, con el objetivo de encontrar una solución integral adaptada totalmente a su empresa.</p>
          </div>
        </div>
      </div>
    </div>
  
   <div class="section seccion2">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-1">
            <h1 class="">COMPUTACION Y TECNOLOGIA ALTRAN SA DE CV</h1>
            <h3>Quines somos</h3>
            <p>Somos expertos en tecnologías de información y contamos con una experiencia de años en la comercialización de productos informaticos y consultoría en computación en los sectores industrial, comercial y de servicios. Esta experiencia la combinamos ahora con las nuevas tecnologías de información desarrolladas para aplicaciones de Internet, por lo que estamos seguros de poder ofrecer a ustedes las soluciones que sus negocios demandan hoy en día.</p>
          </div>
          <div class="col-md-4">
            <img src="../img/altran.png" class="img-responsive">
          </div>
        </div>
      </div>
    </div>



<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/iconoarriba.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/menu.js"></script>

</body>
</html>
