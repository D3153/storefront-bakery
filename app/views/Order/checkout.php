<html>
<head>
  <title>Checkout</title>
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
              <h2 class="text-center mb-5">Checkout</h2>
              <h4 style="text-align: right;">Total Price: </h4>
                <h4>Shipping Methods</h4>
                <div class="form-outline mb-4">
                  <div class="form-check">
                    <input type="radio" class="form-check-input" name="shipping" value="free">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Free Shipping (5 business days)
                    </label>
                  </div>
                  <div class="form-check">
                    <input type="radio"class="form-check-input" name="shipping" value="extra">
                    <label class="form-check-label" for="flexRadioDefault2">
                      Express Shipping (1 business day + $8.99)
                    </label>
                  </div>
                </div>

                <hr>
                <h4>Address</h4>
                <div class="form-outline mb-4">
                  <label for="name"><i class="fa fa-user"></i> Full Name:</label>
                  <input type="text" name="name" class="form-control form-control-lg" placeholder="Norah Wilkinson" required>
                </div>

                 <div class="form-outline mb-4">
                  <label for="email"><i class="fa fa-envelope"></i> Email:</label>
                  <input type="email" name="email" class="form-control form-control-lg" placeholder="norah123@gmail.com" required />
                </div>

              <div class="form-outline mb-4">
                  <label for="address"><i class="fa fa-address-card-o"></i> Address: </label>
                  <input type="text" name="address" class="form-control form-control-lg" placeholder="4089 Chapmans Lane" required>
                </div>

              <div class="form-outline mb-4">
                  <label for="phone"><i class="fa fa-address-book-o"></i> Phone Number: </label>
                  <input type="tel" name="phone" class="form-control form-control-lg" placeholder="123-456-789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required><br><br>
                                <hr>

              </div>

              <h4>Payment Methods</h4>
              <div class="form-outline mb-4">
                  <div class="icon-container">
                    <i class="fa fa-cc-visa" style="color:navy; font-size: 36px;"></i>
                    <i class="fa fa-cc-amex" style="color:blue; font-size: 36px;"></i>
                    <i class="fa fa-cc-mastercard" style="color:red; font-size: 36px;"></i>
                    <i class="fa fa-cc-discover" style="color:orange; font-size: 36px;"></i>
                    <i class="fa fa-cc-paypal" style="color:blue; font-size: 36px;"></i>
                  </div>
              </div>

              <div class="form-outline mb-4">
                <label for="cardHolder">Card holder</label>
                <input type="text" name="cardHolder" class="form-control form-control-lg" placeholder="Norah Wilkinson" required>
              </div>

              <div class="form-outline mb-4">
                <label for="ccnum">Credit card number</label>
                <input type="text" name="cardnumber" class="form-control form-control-lg" placeholder="1111222233334444" required>
              </div>

              <div class="form-outline mb-4">
                <label for="expdate">Expire date</label>
                <input type="month" name="expdate" class="form-control form-control-lg" required>
              </div>

              <div class="form-outline mb-4">
                <label for="cvv">CVV</label>
                <input type="number" name="cvv"class="form-control form-control-lg" placeholder="897" min="000" max="999" required>
              </div>

              <form action='' enctype="multipart/form-data" method='post'>
              <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4" name="action">Place Order</button>
              </div>
                
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