<html>
<head>
	<title><?= _("Modify product")?></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
          <a class="navbar-brand nav-link" href="/Seller/home"><strong><?= _("Pink Bakery")?></strong></a>
            <div class="collapse navbar-collapse" id="navbarExample01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <div class="dropdown">
                      <a class="nav-link" data-bs-toggle="dropdown"><?= _("Product")?></a>
                      <div class="dropdown-menu">
                          <a href="/Seller/addProduct" class="dropdown-item"><?= _("Add Product")?></a>
                          <a href="/Seller/checkProducts" class="dropdown-item"><?= _("Check Products")?></a>
                      </div>
                    </div>
                    <li class="nav-item">
                      <a class="nav-link" href="/Seller/viewOrders"><?= _("View Orders")?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/Seller/messagecenter"><?= _("Message Center")?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/Seller/index" id="logout"><?= _("Logout")?></a>
                    </li>
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
    </header>
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 20px;">
            <div class="card-body p-5">
              <h2 class="text-center mb-5"><?= _("Modify Product")?></h2>

                <form action='' enctype="multipart/form-data" method='post'>

                 <div class="form-outline mb-4">
                  <label class="form-label"><?= _("Name")?></label>
                  <input type="text" name="name" value="<?= $data['product']->name ?>" required>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label"><?= _("Select Picture")?><input type="file" name="image" id="image"class="form-control form-control-lg" required /></label><img id='image_preview' src='/images/<?= $data['product']->image ?>' value="<?= $data['product']->image ?>" style="max-width:200px;max-height:200px" id="product_image_preview" />
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
                  <label for="category"><?= _("Choose a Category")?>:</label>
                  <select name="category_id" id="category" value=" ">
                    <?php
                      foreach($data['categories'] as $category){
                        if($category->category_id == $data['product']->category_id){
                          echo "<option value='$category->category_id' selected='selected'>$category->name</option>";
                        }
                        echo "<option value='$category->category_id'>$category->name</option>";
                      }
                    ?>
                  </select>
                </div>

                <div class="form-outline mb-4">
                  <label><?= _("Description")?></label>
                  <textarea class="form-control" rows="3" name="description" ><?= $data['product']->description ?></textarea>
                </div>

                <div class="form-outline mb-4">
                  <label for="size"><?= _("Size")?>:</label>
                   <select name="size" id="size" value="<?= $data['product']->size ?>">

                    <optgroup label="Breads">
                      <?php
                      foreach(bread_sizes as $key=>$text){
                        echo "<option value='$text'" . ($data['product']->size == $text?" selected":"") . ">$text</option>";
                      }
                      
                      ?>
                    </optgroup>
                    <optgroup label="Cookies">
                      <?php
                      foreach(cookie_sizes as $key=>$text){
                        echo "<option value='$text'" . ($data['product']->size == $text?" selected":"") . ">$text</option>";
                      }
                      ?>
                    </optgroup>
                    <optgroup label="Pies">
                      <?php
                      foreach(pie_sizes as $key=>$text){
                        echo "<option value='$text'" . ($data['product']->size == $text?" selected":"") . ">$text</option>";
                      }
                      ?>
                    </optgroup>
                    <optgroup label="Pastries">
                      <?php
                        if($data['product']->size == 'default'){
                        echo "<option value='default' selected= 'selected'>Pastry</option>";
                      }
                      else echo "<option value='default'>Pastry</option>";
                      ?>
                    </optgroup>
                    <optgroup label="Cakes">
                      <?php
                      foreach(cake_sizes as $key=>$text){
                        echo "<option value='$text'" . ($data['product']->size == $text?" selected":"") . ">$text</option>";
                      }
                      ?>
                    </optgroup>
                  </select>
                </div>

                <div class="form-outline mb-4">
                  <label><?= _("Price")?></label>
                  <input type="number" name="price" step="any" min="0" value="<?= $data['product']->price ?>" required>
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