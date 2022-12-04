<html>
  <head>
       <title>Tracking</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
      body{
           background-image: url('../../images/food2.jpg');
          height: 100%;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
      }

    </style>
</head>

<body>
  <header>
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
                      <a class="nav-link" href="/Cart/cart">Shopping Cart</a>
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
                <h1><center>Tracking</center></h1>
                <form name="myForm" action='' method="post">
                    <legend><i class="bi bi-info-circle-fill"></i> Reciever Info</legend>
                    <div class="form-group form-inline">
                         <label for="name">Full Name</label>
                         &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                         <input type="text" class="form-control" name="name"  value="<?= $data['recieverInfo']->full_name ?>" readonly>
                    </div>
                    <div class="form-group form-inline">
                         <label for="address">Address</label>
                         &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                         <input type="text" class="form-control" name="address"  value="<?= $data['recieverInfo']->address ?>" readonly>
                    </div>
                    <div class="form-group form-inline">
                         <label for="phone">Phone Number</label>
                         &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;
                         <input type="text" class="form-control" name="phone"  value="<?= $data['recieverInfo']->phone_num ?>" readonly>
                    </div>
                    <div class="form-group form-inline">
                         <label for="trackingNumber">Tracking Number</label>
                         &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                         <input type="text" class="form-control" name="trackingNumber" value="<?=$data['shipDetail']->tracking_info ?>"readonly>
                    </div>
                   <div class="form-group form-inline">
                         <label for="trackingNumber">Date Shipped</label>
                         &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                         <input type="text" class="form-control" name="date" value="<?=$data['shipDetail']->time_stamp ?>"readonly>
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