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
    <p class="login-box-msg">LOGIN</p>
    <form method="post">

      <div class="form-group has-feedback">

        <input type="email" class="form-control" placeholder="Correo electronico" name="ingUsuario" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      
      </div>

      <div class="row">
       
        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>

        </div>
          <div>
            <a href="register">Quiero registrarme</a>
          </div>  
      </div>



      <?php

        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario();
        
      ?>

    </form>

      <div class="social-auth-links text-center">
      <p>- Ingresa con -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>

  </div>

</div>
