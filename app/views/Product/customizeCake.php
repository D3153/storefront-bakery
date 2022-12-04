<html>
<head>
	<title><?= _("Customize Cake")?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<style>
  body{
      background-image: url('../../images/bg.jpg');
      height: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
  }
</style>
</head>


<body>
  <?php
if(isset($_GET['error'])){
?>
<div class="alert alert-info" role="alert">
  <?=$_GET['error']?>
</div>
<?php
}
?>
  <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
        <div class="container-fluid">
          <a class="navbar-brand nav-link" href="/User/home"><strong><?= _("Pink Bakery")?></strong></a>
            <div class="collapse navbar-collapse" id="navbarExample01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                   <li class="nav-item">
                      <a class="nav-link" href="/Product/shopAll"><?= _("Shop All")?></a>
                    </li>
                      <div class="dropdown">
                        <a class="nav-link" data-bs-toggle="dropdown"><?= _("Shop By Category")?></a>
                        <div class="dropdown-menu">
                          <a href="/Product/bread" class="dropdown-item"><?= _("Bread")?></a>
                          <a href="/Product/cookies" class="dropdown-item"><?= _("Cookies")?></a>
                          <a href="/Product/pies" class="dropdown-item"><?= _("Pies")?></a>
                          <a href="/Product/pastries" class="dropdown-item"><?= _("Pastries")?></a>
                          <a href="/Product/cakes" class="dropdown-item"><?= _("Cakes")?></a>
                          <a href="/Product/newArrivals" class="dropdown-item"><?= _("New Arrivals")?></a>
                      </div>
                    </div>
                    <li class="nav-item">
                      <a class="nav-link" href="/Product/customizeCake"><?= _("Customize Cake")?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/User/contactUs"><?= _("Contact Us")?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/User/myAccount"><?= _("My Account")?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/Cart/cart" id="logout"><?= _("Shopping Cart")?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/User/logout" id="logout"><?= _("Logout")?></a>
                    </li>
                    <div class="dropdown">
                        <a class="nav-link" data-bs-toggle="dropdown"><?= _("Language")?></a>
                        <div class="dropdown-menu">
                          <a href="/?lang=en_CA" class="dropdown-item">English</a>
                         <a href="/?lang=fr_CA" class="dropdown-item">Français</a>
                      </div>
                    </div>  
              </ul>
            </div>
        </div>
      </nav>
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 20px;">
            <div class="card-body p-5">
              <h2 class="text-center mb-5"><?= _("Customize cake")?></h2>

                <form action='' enctype="multipart/form-data" method='post'>
                <div class="form-outline mb-4">
                  <input type="file" name="image" class="form-control form-control-lg" required />
                  <label class="form-label"><?= _("Select Picture")?></label>
                </div>

                <div class="form-outline mb-4">
                  <label><?= _("Descrption")?></label>
                  <textarea class="form-control" rows="3" name="description" required></textarea>
                </div>

              <div class="form-outline mb-4">
                  <label for="layer"><?= _("Layer")?>:</label>
                  <input type="number" min="1" max="10" name="layer" required>
                </div>

                <div class="form-outline mb-4">
                  <label for="serving"><?= _("Serving")?>:</label>
                  <input type="number" min="1" max="500" name="serving" required>
                </div>

                <div class="form-outline mb-4">
                  <label><?= _("Flavor")?></label>
                  <input type="text" name="flavor" required>
                </div>

                
                <div class="d-flex justify-content-center">
                  <button type="submit"  name="action" class="btn btn-primary" id="confirmBtn"><?= _("Confirm")?></button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>