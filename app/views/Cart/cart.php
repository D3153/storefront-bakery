<html>
<head>
  <title>Shopping cart</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<style>
  body{
    background-color: lightpink;
  }
</style>
</head>
<body>
  <?php
if(isset($_GET['error'])){
?>
<div class="alert alert-danger" role="alert">
  <?=$_GET['error']?>
</div>
<?php
}
?>
<header>
      <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
        <div class="container-fluid">
          <a class="navbar-brand nav-link" href="/User/home"><strong>Pink Bakery</strong></a>
            <div class="collapse navbar-collapse" id="navbarExample01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                   <li class="nav-item">
                      <a class="nav-link" href="/Product/shopAll">Shop All</a>
                    </li>
                      <div class="dropdown">
                        <a class="nav-link" data-bs-toggle="dropdown">Shop By Category</a>
                        <div class="dropdown-menu">
                          <a href="/Product/bread" class="dropdown-item">Bread</a>
                          <a href="/Product/cookies" class="dropdown-item">Cookies</a>
                          <a href="/Product/pies" class="dropdown-item">Pies</a>
                          <a href="/Product/pastries" class="dropdown-item">Pastries</a>
                          <a href="/Product/cakes" class="dropdown-item">Cakes</a>
                      </div>
                    </div>
                    <li class="nav-item">
                      <a class="nav-link" href="/Product/customizeCake">Customize Cake</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/User/contactUs">Contact Us</a>
                    </li> 
                    <li class="nav-item">
                      <a class="nav-link" href="/User/myAccount">My Account</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/Cart/cart" id="logout">Shopping Cart</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/User/logout" id="logout">Logout</a>
                    </li>
                    <div class="dropdown">
                        <a class="nav-link" data-bs-toggle="dropdown">Language</a>
                        <div class="dropdown-menu">
                          <a href="" class="dropdown-item">English</a>
                          <a href="" class="dropdown-item">French</a>
                      </div>
                    </div>  
              </ul>
            </div>
        </div>
      </nav>
    </header>
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 20px;">
            <div class="card-body p-5">
              <h2 class="text-center mb-5">Shopping cart</h2>

                <form action='' enctype="multipart/form-data" method='post'>
                  <div class="form-outline mb-4">
                    <table width="100%" border="1" cellpadding="5" cellspacing="5">
                    <tr><th>Name</th><th>Image</th><th>Quantity</th><th>Price</th><th> </th></tr>

                    <?php 

                      foreach ($data['cartUser'] as $cartUser) {
                        echo "<tr>
                              <td type=name id='prName'>$cartUser->name</td>
                              <td> <img src='/images/".$cartUser->image."'style='max-width:200px;max-height:100px'/></td>
                              <td type=name>$cartUser->quantity</td>
                              <td type=name>$cartUser->unit_price</td>
                              <td type=action>
                              <button type='button' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#Modal$cartUser->product_id'><a class='nav-link'>Details</a></button>
                              </td>
                              <td type=action>
                              <button class='btn btn-danger'><a class='nav-link' href='/Cart/removeFromCart/$cartUser->product_id'>-</a></button>
                              </td>
                              </tr>

                              <div class='modal fade' id='Modal$cartUser->product_id' tabindex='-1' aria-labelledby='ModalLabel$cartUser->product_id' aria-hidden='true'>
  <div class='modal-dialog modal-dialog-centered'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h1 class='modal-title fs-5' id='ModalLabel$cartUser->product_id'>Details</h1>
        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
      </div>
      <div class='modal-body'>
        <p>Name: $cartUser->name</p>
        <p>Description: $cartUser->description</p>
        <p>Image: <img src='/images/".$cartUser->image."'style='max-width:200px;max-height:100px'/></p>
        <p>Size: $cartUser->size</p>
        <p>Price: $cartUser->price</p>

      </div>
      <div class='modal-footer'>
      </div>
    </div>
  </div>
</div>";
                      }

                    ?>

                    <tfoot><tr>Product Total Price: </tr><tr><?php echo $data['total_price'] ?>$</tr></tfoot>
                    
                  </table>
                </div>

                  <?php

                  if (count($data['customCake']) > 0){
                    echo "<div class='form-outline mb-4'>
                    <h2 class='text-center mb-5'>Custom Cake</h2>
                    <table width='100%' border='1' cellpadding='5' cellspacing='5'>
                    <tr><th>Image</th><th>Description</th><th>Price</th><th> </th></tr>";
                    
                      foreach($data['customCake'] as $cake){
                        echo "<tr>
                              <td> <img src='/images/".$cake->cake_image."'style='max-width:200px;max-height:100px'/></td>
                              <td type=name>$cake->description</td>
                              <td type=name>$cake->price</td>
                              <td type=action>
                              <button type='button' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#Modal$cake->custom_cake_id'><a class='nav-link'>Details</a></button>
                              </td>
                              <td type=action>
                              <button class='btn btn-danger'><a class='nav-link' href='/Cart/removeFromCake/$cake->custom_cake_id'>-</a></button>
                              </td>
                              </tr>

                              <div class='modal fade' id='Modal$cake->custom_cake_id' tabindex='-1' aria-labelledby='ModalLabel$cake->custom_cake_id' aria-hidden='true'>
  <div class='modal-dialog modal-dialog-centered'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h1 class='modal-title fs-5' id='ModalLabel$cake->custom_cake_id'>Details</h1>
        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
      </div>
      <div class='modal-body'>
        <p>Name: $cake->description</p>
        <p>Image: <img src='/images/".$cake->cake_image."'style='max-width:200px;max-height:100px'/></p>
        <p>Layer: $cake->layer</p>
        <p>Serving: $cake->serving</p>
        <p>Flavor: $cake->flavor</p>
        <p>Price: $cake->price</p>

      </div>
      <div class='modal-footer'>
      </div>
    </div>
  </div>
</div>";
                      }
                      echo"<tr>Custom Cake Price:</tr>$".$data['customCake_price'];

                    }
                    ?>
                  </table>
                </div>

                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4" name="action">Checkout</button>
                  </div>
                  <br>
                
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