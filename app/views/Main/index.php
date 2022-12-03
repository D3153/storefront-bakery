<html>
<head>
	<title>Welcome</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <style>
  .carousel-item:nth-child(1) {
    background-image: url('../../images/1.jpg'); 
    background-size: cover;
  }

  @media (min-width: 992px) {
    #introCarousel {
      margin-top: -58.59px;
    }
  }
</style>
</head>

<body>
    <header>
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
      <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
              <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white text-center">
                  <h1 class="mb-3">Welcome to Pink Bakery</h1>
                  <h5 class="mb-4">By Jiamin Yuan & Dinal Patel</h5>
                  
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
</header>

</body>
</html>