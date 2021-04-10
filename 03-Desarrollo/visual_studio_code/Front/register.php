

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CVRP - Registro</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  
</head>

<body class="bg-gradient-dark">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
        <?php
          include '../back/conexion/conexion.php';
        ?>
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Desea Crear una Cuenta!</h1>
                </div>
                <form class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                      <select class="form-control" id="exampleTipodDoc" required>
                        <option>SELECIONE UNA OPCION</option>
                        <option>CEDULA DE CIUDADANIA</option>
                        <option>PASAPORTE</option>
                        <option>CEDULA DE EXTRANJERIA</option>
                      </select>
                    </div> 
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="slider" class="form-control form-control-user" id="exampleDocumento" placeholder="Número De Documento" required>
                    </div> 
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" class="form-control form-control-user" id="examplePrimerNombre" placeholder="Primer Nombre" required>
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-user" id="exampleSegundoNombre" placeholder="Segundo Nombre">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" class="form-control form-control-user" id="examplePrimerApellido" placeholder="Primer Apellido"required>
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control-user" id="exampleSegundoApellido" placeholder="Segundo Apellido">
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" required>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="date" class="form-control form-control-user" id="exampleFechaDeNacimiento" placeholder="Fecha De Nacimiento" required>
                    </div>
                    <div class="col-sm-6">
                      <input type="number" class="form-control form-control-user" id="exampleNumero" placeholder="Número Celular" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Contraseña" required>
                    </div>
                    <div class="col-sm-6">
                      <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repite La Contraseña" required>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                      <select class="form-control" id="exampleRol" required>
                        <option>SELECIONE UNA OPCION</option>
                        <option>ADMINISTRADOR</option>
                        <option>CLIENTE</option>
                        <option>VENDEDOR</option>
                      </select>
                    </div> 
                    <br>
                  <input type="hidden" name="oculto" value="1">
                  <button type="submit" class="btn btn-info btn-user btn-block" href="index.php">
                    Crear Cueta
                  </button>
                  <hr>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="login.php">Ya Tienes Cuenta? Inicia Sesión!</a>
                </div>
              </div>
            </div>
          </div>   
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <div class = "d-flex justify-content-center">
    <a href="index.php" button type="button" class="btn btn-info btn-lg" disabled center >Regresar</button></a>
  </div>

</body>

</html>
