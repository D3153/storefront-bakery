<html>
    <head>
        <title>Leave Feedback</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      body{
         background-color: beige;
            }

    </style>
    </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light d-none d-lg-block" style="z-index: 2000;">
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
               <h1><center>Leave Your Feedback</center></h1>
                <form name="myForm" action='' method="post">
                    <div class="form-group form-inline">
                      <h5>Please rate this product:</h5>
                         &nbsp; &nbsp; 
                     <input type="radio" name="rating" value="Good">
                    <label for="Good">Good</label>
                    &nbsp; &nbsp; 
                     <input type="radio"  name="rating" value="Ok">
                    <label for="Ok">Ok</label><br>
                       &nbsp; &nbsp; 
                    <input type="radio" name="rating" value="Poor">
                    <label for="Poor">Poor</label>
                    </div>

                    <div class="form-group form-inline">
                         <label for="comment">Comment</label>
                         <textarea name="comment" rows="4" cols="50" required></textarea>

                    </div>
                    <center><button type="submit"  name="action" class="btn btn-primary">Submit</button></center>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </body>
</html>