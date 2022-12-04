<html>
<head>
  <title>Products</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
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
          <a class="navbar-brand nav-link" href="/Seller/home"><strong>Pink Bakery</strong></a>
            <div class="collapse navbar-collapse" id="navbarExample01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <div class="dropdown">
                      <a class="nav-link" data-bs-toggle="dropdown">Product</a>
                      <div class="dropdown-menu">
                          <a href="/Seller/addProduct" class="dropdown-item">Add Product</a>
                          <a href="/Seller/checkProducts" class="dropdown-item">Check Products</a>
                      </div>
                    </div>
                    <li class="nav-item">
                      <a class="nav-link" href="/Seller/viewOrders">View Orders</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/Seller/messagecenter">Message Center</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/Seller/index" id="logout">Logout</a>
                    </li>
              </ul>
            </div>
        </div>
      </nav>
    </header>

<div class="container">
<div class="row flex-lg-nowrap">
   <div class="col">
     <div class="mask d-flex align-items-center h-100 gradient-custom-3" >
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6" style="width: 1200px;">
          <div class="card" style="border-radius: 20px;">
            <div class="card-body p-5">
              <h2 class="text-center mb-5">Unshipped Items</h2>

                <form action='' enctype="multipart/form-data" method='post'>
                  <div class="form-outline mb-4">
                    <h4><center>Products</center></h4>
                    <table width="100%" border="1" cellpadding="5" cellspacing="5">
                    <tr><th>Product Name</th><th>Image</th><th>Quantity</th><th></th></tr>
                    <?php
                      
                      foreach($data ['productCartPaid'] as $product){
                        echo "<tr>
                              <td type=name>$product->name</td>
                              <td> <img src='/images/".$product->image."'style='max-width:200px;max-height:100px'/></td>
                              <td type=name>$product->quantity</td>

                              <td type=action>
                              <button type='button' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#Modal$product->product_id'><a class='nav-link'>details</a></button>
                              </td>
                              <td type=action>
                              <button class='btn btn-primary  '><a class='nav-link' href='/Shipping/trackingInfo/$product->cart_id'>Ready to Go</a></button>
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

                  <br><h4><center>Custom Cake</center></h4>
                  <table width="100%" border="1" cellpadding="5" cellspacing="5">
                    <tr><th>Image</th><th>Description</th><th>Layer</th><th>Serving</th><th>Flavor</th></tr>
                    <?php
                      
                      foreach($data ['cakeCartPaid'] as $cake){
                        echo "<tr>
                              <td> <img src='/images/".$cake->cake_image."'style='max-width:200px;max-height:100px'/></td>
                              <td type=name>$cake->description</td>
                              <td type=name>$cake->layer</td>
                              <td type=name>$cake->serving</td>
                              <td type=name>$cake->flavor</td>

                              <td type=action>
                              <button type='button' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#Modal$cake->custom_cake_id'><a class='nav-link'>details</a></button>
                              </td>
                              <td type=action>
                              <button class='btn btn-primary  '><a class='nav-link' href='/Shipping/trackingInfo/$cake->cart_id'>Ready to Go</a></button>
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
                                      <p>Size: $cake->layer</p>
                                      <p>Size: $cake->serving</p>
                                      <p>Size: $cake->flavor</p>
                                      <p>Price: $cake->price</p>

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
                    <br><br>
                    <h2 class="text-center mb-5">Shipped Order</h2>
                    <div class="form-outline mb-4">
                    <h4><center>Products</center></h4>
                    <table width="100%" border="1" cellpadding="5" cellspacing="5">
                    <tr><th>Product Name</th><th>Image</th><th>Quantity</th><th></th></tr>
                    <?php
                      
                      foreach($data ['shippedProducts'] as $product){
                        echo "<tr>
                              <td type=name>$product->name</td>
                              <td> <img src='/images/".$product->image."'style='max-width:200px;max-height:100px'/></td>
                              <td type=name>$product->quantity</td>

                              <td type=action>
                              <button type='button' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#Modal$product->product_id'><a class='nav-link'>details</a></button>
                              </td>
                              <td type=action>
                              <button class='btn btn-primary  '><a class='nav-link' href='/Shipping/viewDetails/$product->cart_id'>Shipping</a></button>
                              </td>

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
                      </div>" ;

                              if($product->feedback_id!='0'){
                                echo"
                                <td type=action>
                                <button class='btn btn-success  '><a class='nav-link' href='/Feedback/viewFeedback/$product->feedback_id'>View Feedback</a></button>
                              </td>
                              
                              </tr>

                ";
                      }
                    }
                    ?>
                    
                  </table>

                  <br><h4><center>Custom Cake</center></h4>
                  <table width="100%" border="1" cellpadding="5" cellspacing="5">
                    <tr><th>Image</th><th>Description</th><th>Layer</th><th>Serving</th><th>Flavor</th><th>Price</th><th></th></tr>
                    <?php
                      
                      foreach($data ['shippedCakes'] as $cake){
                        echo "<tr>
                              <td> <img src='/images/".$cake->cake_image."'style='max-width:200px;max-height:100px'/></td>
                              <td type=name>$cake->description</td>
                              <td type=name>$cake->layer</td>
                              <td type=name>$cake->serving</td>
                              <td type=name>$cake->flavor</td>
                              <td type=name>$cake->price</td>

                               <td type=action>
                              <button class='btn btn-primary  '><a class='nav-link' href='/Shipping/viewDetails/$cake->cart_id'>Shipping</a></button>
                              </td>
                              </tr>";


                      if($cake->feedback_id!='0'){
                            echo"
                            <td type=action>
                            <button class='btn btn-success  '><a class='nav-link' href='/Feedback/viewFeedback/$cake->feedback_id'>View Feedback</a></button>
                            </td>
                              
                            </tr>

                ";
                      }
                    }
                    ?>
                    
                  </table>
                </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

</body>
</html>