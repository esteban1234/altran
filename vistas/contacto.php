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
            <li class="active">
              <a href="contacto.php"><i class="fa fa-phone fa-fw"></i> CONTACTO</a>
            </li>
          </ul>
         
        </div>
      </div>
    </div>

    <div class="bannerc">
        <div class="fondoc">
            <p class="texton">Contacto ALTRAN</p>
        </div>
    </div>

    <div class="container"> <br><br><br>
    <div class="row">
            <h4 style="text-align:center">Si desea contactar con nosotros por favor rellene el siguiente formulario.</h4>
    </div>
    <div class="row input-container">
            <div class="col-xs-12">
                <div class="styled-input wide">
                    <input type="text" required />
                    <label>Nombre completo</label> 
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="styled-input">
                    <input type="text" required />
                    <label>Correo</label> 
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="styled-input" style="float:right;">
                    <input type="text" required />
                    <label>Numero teléfonico</label> 
                </div>
            </div>
            <div class="col-xs-12">
                <div class="styled-input wide">
                    <textarea required></textarea>
                    <label>Comentario</label>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="btn-lrg submit-btn">Enviar mensaje</div>
            </div>
    </div>
</div>

<div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.120057734239!2d-93.1264857859782!3d16.770695888450934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd8e9dec28fff%3A0x2e1f7337d869526a!2sSanta+Rosa%2C+San+Pedro+Popular%2C+29039+Tuxtla+Guti%C3%A9rrez%2C+Chis.!5e0!3m2!1ses-419!2smx!4v1507588394248" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<br><br>
      <div class=" text-center">
        <div class="col-sm-3">
          <div class="contact-detail-box">
            <i class="fa fa-map-marker  fa-3x text-colored"></i>
            <h4>Dirección</h4>
            <p>C. SANTA ROSA #205 BIS 1-A POR AV. EL MILAGRO Y AV. SAN ANTONIO, TUXTLA GUTIERREZ CHIAPAS. C.P. 29049</p>
           
          </div>
        </div>

        <div class="col-sm-3">
          <div class="contact-detail-box">
            <i class="fa fa-clock-o fa-3x text-colored"></i>
            <h4>Horario</h4>

            <address>
            Lunes a Viernes de 9 am a 6 pm
          </address>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="contact-detail-box">
            <i class="fa fa-phone fa-3x text-colored"></i>
            <h4>Teléfono</h4>
            <!-- <h4 class="text-muted">PENDIENTE</h4> -->
            <p>PENDIENTE</p>
          </div>
        </div>

         <div class="col-sm-3">
          <div class="contact-detail-box">
            <i class="fa fa-envelope fa-3x text-colored"></i>
            <h4>Correo</h4>
            <!-- <h4 class="text-muted">info@comercializadoraaltran.com</h4> -->
            <a href="mailto:info@comercializadoraaltran.com" class="text-muted">info@comercializadoraaltran.com</a>
          </div>
        </div>

      </div>
    

<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/iconoarriba.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/sendCORREO.js"></script>

</body>
</html>
