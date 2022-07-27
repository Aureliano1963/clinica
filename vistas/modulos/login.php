<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<body class="bg-gradient-login">
  <!-- Login Content -->
<div id="back"></div>

<div class="login-box">
  

  <div class="login-box-body">
  

                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Iniciar Sesión</h1>

                    <form  method="post">
                    <div class="form-group has-feedback">

                      <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
                      <span class="glyphicon glyphicon-user form-control-feedback"></span>

                    </div>


                        <div class="form-group has-feedback">

                      <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                      </div>


                      <div class="row">

                    <div class="col-sm-offset-3 col-sm-6">

                   

                        <button type="submit" class="btn btn-warning btn-block btn-flat">Ingresar</button>
                        </div>
                      </div>
                                  <?php

                        $login = new ControladorUsuarios();
                        $login -> ctrIngresoUsuario();
                        
                    ?>
        </form>

    
      <!-- /.social-auth-links -->

    
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->


</body>

