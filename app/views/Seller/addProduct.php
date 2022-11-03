<html>
<head>
  <title>Add product</title>
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
  if(isset($_GET['error'])){ ?>
        <div class="alert alert-danger" role="alert">
  <?= $_GET['error'] ?>
        </div>
<?php }
?>
<header>
      <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
        <div class="container-fluid">
          <a class="navbar-brand nav-link"><strong>Pink Bakery</strong></a>
            <div class="collapse navbar-collapse" id="navbarExample01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <div class="dropdown">
                      <a class="nav-link" data-bs-toggle="dropdown">Product</a>
                      <div class="dropdown-menu">
                          <a href="/Seller/addProduct" class="dropdown-item">Add Product</a>
                          <a href="/Seller/deleteProduct" class="dropdown-item">Delete Product</a>
                          <a href="/Seller/modifyProduct" class="dropdown-item">Modify Product</a>
                          <a href="/Seller/checkProducts" class="dropdown-item">Check Products</a>
                      </div>
                    </div>
                    <li class="nav-item">
                      <a class="nav-link" href="/Seller/viewOrders" target="_blank">View Orders</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/Seller/messagecenter" target="_blank">Message Center</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/User/logout" target="_blank" id="logout">Logout</a>
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
              <h2 class="text-center mb-5">Add Product</h2>

                <form action='' enctype="multipart/form-data" method='post'>
                 <div class="form-outline mb-4">
                  <label class="form-label">Name</label>
                  <input type="text" name="name">
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label">Select Picture<input type="file" name="image" id="image" class="form-control form-control-lg"/></label><img id='image_preview' src='/images/blank.jpg' style="max-width:200px;max-height:200px" id="product_image_preview" />
                </div>
               <script>
                  image.onchange = evt => {
                  const [file] = image.files
                    if (file) {
                      image_preview.src = URL.createObjectURL(file)
                    }
                  }
                </script>

                 <div class="form-outline mb-4">
                  <label for="category">Choose a Category:</label>
                  <select name="category_id" id="category">
                    <?php
                      $category=new \app\models\Category();
                      $categories = $category->getAll();
                      echo $categories;
                      foreach($data as $category){
                        echo "<option value='$category->category_id'>$category->name</option>";
                      }
                    ?>
                  </select>
                </div>


                <div class="form-outline mb-4">
                  <label>Descrption</label>
                  <textarea class="form-control" rows="3" name="description"></textarea>
                </div>

                <div class="form-outline mb-4">
                  <label for="size">Size:</label>
                   <select name="size" id="size">
                    <optgroup label="Breads">
                      <option value="smallBread">Small (6x3 inches)</option>
                      <option value="mediumBread">Medium (8x4 inches)</option>
                      <option value="largeBread">Large (9x5 inches)</option>
                    </optgroup>
                    <optgroup label="Cookies">
                      <option value="smallCookie">Small (3 inches)</option>
                      <option value="mediumCookie">Medium (4 inches)</option>
                      <option value="largeCookie">Large (5 inches)</option>
                    </optgroup>
                    <optgroup label="Pies">
                      <option value="smallPie">Small (4 inches)</option>
                      <option value="mediumPie">Medium (12 inches)</option>
                      <option value="largePie">Large (16 inches)</option>
                    </optgroup>
                    <optgroup label="Pastries">
                      <option value="default">Pastry</option>
                    </optgroup>
                    <optgroup label="Cakes">
                      <option value="smallCake">Small (6 inches)</option>
                      <option value="mediumCake">Medium (8 inches)</option>
                      <option value="largeCake">Large (10 inches)</option>
                    </optgroup>
                  </select>
                </div>

                <div class="form-outline mb-4">
                  <label>Price</label>
                  <input type="number" name="price" step="any" min="0">
                </div>
                
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4" name="action">Publish</button>
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