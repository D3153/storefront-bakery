  <html>
<head>
	<title><?= _("Message Center")?></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
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
                          <a href="" class="dropdown-item">English</a>
                          <a href="" class="dropdown-item">Français</a>
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
              <h2 class="text-center mb-5"><?= _("Message Center")?></h2>

                <form action='' enctype="multipart/form-data" method='post'>
                <div class="form-outline mb-4">
                  <table width="100%" border="1" cellpadding="5" cellspacing="5">
                    <tr><th><?= _("Username")?></th><th><?= _("Email")?></th><th><?= _("Message")?></th><th><?= _("Date")?></th><th> </th></tr>
                    <?php
                      foreach($data as $contact){
                        echo "<tr>
                              <td type=name>$contact->name</td>
                              <td type=name>$contact->email</td>
                              <td type=name>$contact->message</td>
                              <td type=name>$contact->send_date</td>
                              <td type=action>
                              <button class='btn btn-primary'><a class='nav-link' href='/Seller/response/$contact->contact_us_id'>Reply</a></button>
                              </td>
                              </tr>";
                      }
                    ?>
                  </table>
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