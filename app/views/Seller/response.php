<html>
  <head>
	     <title><?= _("Message Response")?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      body{
          background-image: url('../../images/response.jpg');
          height: 100%;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
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
               <h1><center><?= _("Reply to")?> <?= $data['userContact']->name ?></center></h1>
                <div class="alert alert-primary" role="alert"><?= _("Fill in the information")?> </div>
                <form name="myForm" action='' method="post">
                    <legend><i class="bi bi-info-circle-fill"></i> <?= _("User Info")?></legend>
                    <div class="form-group form-inline">
                         <label for="id"><?= _("Id")?></label>
                         &nbsp;
                         <input type="text" class="form-control" name="id"  value="<?= $data['userContact']->user_id ?>" readonly>
                    </div>
                    <div class="form-group form-inline">
                         <label for="name"><?= _("Name")?></label>
                         &nbsp;
                         <input type="text" class="form-control" name="name"  value="<?= $data['userContact']->name ?>" readonly>
                    </div>
                    <div class="form-group form-inline">
                         <label for="email"><?= _("Email")?></label>
                         &nbsp;&nbsp;
                         <input type="email" class="form-control" name="email"  value="<?= $data['userContact']->email ?>" readonly>
                    </div>

                    <div class="form-group form-inline">
                         <label for="recivedMessage"><?= _("Message Recieved")?></label>
                         <br>
                         <textarea name="recivedMessage" rows="4" cols="50" readonly> <?= $data['userContact']->message ?></textarea>
                    </div>

                    <div class="form-group form-inline">
                         <label for="message"><?= _("Response")?></label>
                         <br>
                         <textarea name="message" rows="4" cols="50" required></textarea>
                    </div>
                    <center><button type="submit"  name="action" class="btn btn-primary">Send</button></center>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </body>
</html>