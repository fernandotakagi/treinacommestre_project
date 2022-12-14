<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <link rel="stylesheet" href="./css/style.css">
  <title>FPA - Fundação Porta Aberta</title>
  <link rel="icon" type="image/x-icon" href="./img/logo.ico">
  <script src="js/config.js?versao=1" type="text/javascript"></script>
  <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</head>
<body>
  <div class="container-fluid ps-md-0">
    <div class="row g-0">
      <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
      <div class="col-md-8 col-lg-6">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                <h3 class="login-heading mb-4">Fundação Porta Aberta</h3>
                <h5 class="login-heading mb-4">Realize o login para continuar!</h5>
  
                <!-- Sign In Form -->
                <form action="login.php" method="post">
                  <div class="form-floating mb-3">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                    <label for="floatingInput">Login</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" name = "password" id="password" class="form-control" placeholder="Senha" required>
                    <label for="floatingPassword">Password</label>
                  </div>
  
                  <div class="d-grid">
                    <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit" name="acao" value="logar" onclick="Login()">Sign in</button>
                    
                  </div>
  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>