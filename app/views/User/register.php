<html>
<head>
	<title><?= _("Registeration")?></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<style>
  body{
    background-color: lightblue;
  }
</style>
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
        <div class="container-fluid">
          <a class="navbar-brand nav-link" href="/Main/index"><strong><?= _("Pink Bakery")?></strong></a>
            <div class="collapse navbar-collapse" id="navbarExample01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <div class="dropdown">
                      <a class="nav-link" data-bs-toggle="dropdown"><?= _("Register")?></a>
                      <div class="dropdown-menu">
                          <a href="/User/register" class="dropdown-item"><?= _("As User")?></a>
                      </div>
                    </div>
                    <div class="dropdown">
                      <a class="nav-link" data-bs-toggle="dropdown"><?= _("Login")?></a>
                      <div class="dropdown-menu">
                          <a href="/Seller/index" class="dropdown-item"><?= _("As Seller")?></a>
                          <a href="/User/index" class="dropdown-item"><?= _("As User")?></a>
                      </div>
                    </div>
                    <div class="dropdown">
                        <a class="nav-link" data-bs-toggle="dropdown"><?= _("Language")?></a>
                        <div class="dropdown-menu">
                          <a href="?lang=en_CA" class="dropdown-item">English</a>
                         <a href="?lang=fr_CA" class="dropdown-item">Français</a>
                      </div>
                    </div>  
              </ul>
            </div>
        </div>
      </nav>
<?php 
  if(isset($_GET['error'])){ ?>
        <div class="alert alert-danger" role="alert">
  <?= $_GET['error'] ?>
        </div>
<?php }
?>


  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 20px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5"><?= _("Create an account")?></h2>

              <form action='' method='post'>
                <div class="form-outline mb-4">
                  <input type="text" id="inputUsername" class="form-control form-control-lg" name="username" required/>
                  <label class="form-label" for="inputUsername"><?= _("Username")?></label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="inputPassword" class="form-control form-control-lg" name="password" required/>
                  <label class="form-label" for="inputPassword"><?= _("Password")?></label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="password_confirm" class="form-control form-control-lg" name="password_confirm"/>
                  <label class="form-label" for="password_confirm"><?= _("Password Confirmation")?></label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4" name="action"><?= _("Register")?></button>
                </div>

                <p class="text-center text-muted mt-5 mb-0"><?= _("Already a user")?>? <a href="/User/index"
                    class="fw-bold text-body"><u><?= _("Login here")?></u></a></p>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>