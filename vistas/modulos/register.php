<div id="back"></div>
<div class="login-box">
  <div class="login-logo">
        <div className="login-logo">
          <a href="inicio">
            <b>Trading</b> Colombia
          </a>
        </div>        
  </div>

  <div class="login-box-body">
    <p class="login-box-msg">REGISTRO</p>
    <form action="#" method="post">

      <div class="form-group has-feedback">
        <input type="number" class="form-control" placeholder="Cedula" name="RegistroCedula" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nombres" name="RegistroNombres" required>
        <span class="glyphicon glyphicon-edit form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Apellidos" name="RegistroAepellidos" required>
        <span class="glyphicon glyphicon-edit form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Correo electrónico" name="RegistroCorreo" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="number" class="form-control" placeholder="Teléfono" name="RegistroTelefono" required>
        <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nombre de usuario" name="RegistroNombreUser" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña" name="RegistroClave" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Dirección" name="RegistroDireccion" required>
        <span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Pais" name="RegistroPais" required>
        <span class="glyphicon glyphicon-globe form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Ciudad" name="RegistroCiudad" required>
        <span class="glyphicon glyphicon-road form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Municipio" name="RegistroMunicipio" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>



      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
        </div>
        <!-- /.col -->
      </div>

      <?php

        $registro = new ControladorUsuarios();
        $registro -> registroDeUsuario();
        
        #if(isset($_GET["action"])){

         # if($_GET["action"] == "ok"){
          #  echo "DATOS INSERTADOS CORRECTAMENTE";
          #}
        #}
      ?>


    </form>

    <div class="social-auth-links text-center">
      <p>- Registrate con -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>

    <a href="login" class="text-center">Ya tengo una cuenta</a>
  </div>
  <!-- /.form-box -->
</div>