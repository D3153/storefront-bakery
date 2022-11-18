<html>
<head>
  <title>Pies</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<style>
  body{
      background-color: lightpink;
  }
</style>
</head>

<body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
        <div class="container-fluid">
          <a class="navbar-brand nav-link"><strong>Pink Bakery</strong></a>
            <div class="collapse navbar-collapse" id="navbarExample01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                   <li class="nav-item">
                      <a class="nav-link" href="/Product/shopAll">Shop All</a>
                    </li>
                      <div class="dropdown">
                        <a class="nav-link" data-bs-toggle="dropdown">Shop by category</a>
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


                    <form action="/Product/search" method="get" style='display:inline-block'>
                      <div class="input-group">
                        <input type="search" placeholder="Search" name="search_term"/>
                        <button type="submit" class="btn btn-outline-primary" name="search">Search</button>
                      </div>  
                    </form>

                    <li class="nav-item">
                      <a class="nav-link" href="/User/myAccount">My Account</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/Cart/cart" id="logout">Shopping Cart</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/User/logout" id="logout">Logout</a>
                    </li>
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
              <div class="form-outline mb-4">
                    <h2 class="text-center mb-5">Pies</h2>
                    <table width="100%" border="1" cellpadding="5" cellspacing="5">
                    <tr><th>Name</th><th>Image</th><th>Price</th><th> </th></tr>
                    <?php
                      foreach($data['Pies'] as $product){
                        echo "<tr>
                              <td type=name>$product->name</td>
                              <td> <img src='/images/".$product->image."'style='max-width:200px;max-height:100px'/></td>
                              <td type=name>$product->price</td>
                              <td type=action>
                              <button type='button' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#Modal$product->product_id'><a class='nav-link'>details</a></button>
                              </td>
                              </tr>

                              <div class='modal fade' id='Modal$product->product_id' tabindex='-1' aria-labelledby='ModalLabel$product->product_id' aria-hidden='true'>
                              <div class='modal-dialog modal-dialog-centered'>
                                <div class='modal-content'>
                                  <div class='modal-header'>
                                    <h1 class='modal-title fs-5' id='ModalLabel$product->product_id'>Details</h1>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                  </div>
                                  <div class='modal-body'>
                                    <p>Name: $product->name</p>
                                    <p>Description: $product->description</p>
                                    <p>Image: <img src='/images/".$product->image."'style='max-width:200px;max-height:100px'/></p>
                                    <p>Size: $product->size</p>
                                    <p>Price: $product->price</p>

                                  </div>
                                  <div class='modal-footer'>
                                  </div>
                                </div>
                              </div>
                            </div>";
                      }
                    ?>
                    
                  </table>
                </div>

              </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </body>
</html>