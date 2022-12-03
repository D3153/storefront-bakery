<html>
<head>
	<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<style>
  body{
     background-image: url('../../images/r.png');
      height: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
  }
</style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
        <div class="container-fluid">
          <a class="navbar-brand nav-link" href="/Main/index"><strong>Pink Bakery</strong></a>
            <div class="collapse navbar-collapse" id="navbarExample01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <div class="dropdown">
                      <a class="nav-link" data-bs-toggle="dropdown">Register</a>
                      <div class="dropdown-menu">
                          <a href="/User/register" class="dropdown-item">As User</a>
                      </div>
                    </div>
                    <div class="dropdown">
                      <a class="nav-link" data-bs-toggle="dropdown">Login</a>
                      <div class="dropdown-menu">
                          <a href="/Seller/index" class="dropdown-item">As Seller</a>
                          <a href="/User/index" class="dropdown-item">As User</a>
                      </div>
                    </div>
              </ul>
            </div>
        </div>
      </nav>

<?php
if(isset($_GET['error'])){
?>
<div class="alert alert-danger" role="alert">
  <?=$_GET['error']?>
</div>
<?php
}
?>


  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 20px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Login</h2>

              <form action='' method='post'>
                <div class="form-outline mb-4">
                  <input type="text" id="inputUsername" name="username" class="form-control form-control-lg" />
                  <label class="form-label" for="inputUsername">Username</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="inputPassword" name="password" class="form-control form-control-lg" />
                  <label class="form-label" for="inputPassword">Password</label>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4" name="action">Get Started</button>
                </div>
                <p class="text-center text-muted mt-5 mb-0">New here? <a href='/Seller/register'
                    class="fw-bold text-body"><u>Create an Account</u></a></p>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>