<html>
<head>
	<title><?= _("My Account")?></title>
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
                    <li class="nav-item" style="float:right">
                      <a class="nav-link" href="/Cart/cart" id="logout"><?= _("Shopping Cart")?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/User/logout" id="logout"><?= _("Logout")?></a>
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

<body>

<div class="container">
<div class="row flex-lg-nowrap">
  <div class="col-12 col-lg-auto mb-3" style="width: 250px;">
    <div class="card p-3">
      <div class="e-navlist e-navlist--active-bg">
        <ul class="nav">
          <li class="nav-item"><a class="nav-link px-2" href="/User/messages" ><i class="fa fa-commenting-o" ></i><span> <?= _("View Messages")?></span></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="/Cart/orders" ><i class="fa fa-shopping-bag"></i><span> <?= _("Order History")?></span></a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="col">
     <div class="mask d-flex align-items-center h-100 gradient-custom-3" >
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6" style="width: 1000px;">
          <div class="card" style="border-radius: 20px;">
            <div class="card-body p-5">
              <h2 class="text-center mb-5"><?= _("Message Center")?></h2>

                <form action='' enctype="multipart/form-data" method='post'>
                <div class="form-outline mb-4">
                  <table width="100%" border="1" cellpadding="5" cellspacing="5">
                    <tr><th><?= _("From")?></th><th><?= _("Date")?></th><th><?= _("Response")?></th><th><?= _("Message Sent")?></th><th> </th></tr>
                    <?php
                      foreach($data as $message){
                        echo "<tr>
                              <td type=name>$message->sender</td>
                              <td type=name>$message->reply_date</td>
                              <td type=name>$message->response</td>
                              <td type=name>$message->message</td>
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
      </div>

    </div>

  </div>
</div>
</div>

  </body>
</html>