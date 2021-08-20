<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="project.css">
  
  <title>Online Grocery Shop</title>
  <link rel="icon" href="trolley.png">
  <script type="text/javascript" src="cart.js"></script>
</head>

<body>


<!-- Nav bar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<img src="trolley.png" class="navbar-brand" style="width: 40px;">
	<a class="navbar-brand" href="#">Online Grocery Shopping</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav mr-auto mx-auto">
	  <li class="nav-item active">
		<a class="nav-link" href="home.php">Home <span class="sr-only"></span></a>
	  </li>
	  <li class="nav-item active">
		<a class="nav-link" href="AllProducts.php">All Products</a>
	  </li>
	  <li class="nav-item dropdown active">
		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		  Aisles
		</a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		  <a class="dropdown-item" href="meataisle.php">Meat</a>
		  <a id="disabled" class="dropdown-item" href="dairy.php">Dairy</a>  
		  <a id="disabled" class="dropdown-item" href="beveragesaisle.php">Beverages</a>
		  <a id="disabled" class="dropdown-item" href="detergents.php">Detergents</a>
		<a id="disabled" class="dropdown-item" href="snacks.php">Snacks</a>
		  <a id="disabled" class="dropdown-item" href="alcohol.php">Alcohol</a>
    </div>
	  </li>
	  <li class="nav-item active">
		<a class="nav-link disabled" href="contact.php">Contact Us</a>
	  </li>
	</ul>
	<br>
	<form class="form-inline my-2 my-lg-0">
	  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="background-color: #343A40;">
	  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	  <a class="btn btn-outline-primary ml-1" href="signinpage.php">Sign in</a>
	</form>
  </div>
</nav>



<!-- go to cart -->
<div class="d-flex flex-column flex-md-row align-items-center p-2 px-md-4 bg-white border-bottom box-shadow">
      <h2 class="my-0 mr-md-auto font-weight-normal" style="margin: auto;">Your Shopping Cart</h2>
      <nav class="my-2 my-md-0 mr-md-3">
      </nav>
      <a class="btn btn-outline-primary" href="cart.php">Refresh Cart <img src="trolley.png" width="30px" height="30px"> </a>
    </div>





<!-- Main body -->
 <main>
   <!--Section: Block Content-->
<section>

  <!--Grid row-->
  <div class="row">

    <!--Grid column-->
    <div class="col-lg-8">

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4 wish-list col-xl-9 ">

          <h5 class="mb-4">Cart (<span>2</span> items)</h5>

          <div class="row mb-4">
            
            <div class="col-md-5 col-lg-3 col-xl-3">
              <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                <img class="img-fluid w-100"
                  src="chicken.jpg" alt="Sample">
                <a href="#!">
                 
                </a>
              </div>
            </div>
            
            <div class="col-md-7 col-lg-9 col-xl-9">
              <div>
                <div class="d-flex justify-content-between">
                  <div>
                    <h5>Chicken Breast</h5>
                    <p class="mb-1 text-muted text-uppercase small">Weight: 1kg</p>
                    <p class="mb-1 text-muted text-uppercase small">price: $16.75</p>
                  </div>
                  <div>
                    <div class="number">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepDown(); adjustPrice1(); adjustAmount();"
                        class="minus decrease" style="border-radius: 5px;" >-</button>
                      <input class="quantity" min="0" value="1" name="quantity" type="number" id="qty1">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepUp(); adjustPrice1(); adjustAmount();"
                        class="plus increase" style="border-radius: 5px;">+</button>
                    </div>
                    <small id="passwordHelpBlock" class="form-text text-muted text-center">
                      (Note, 1 piece)
                    </small>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                        class="fas fa-trash-alt mr-1"></i> Remove item </a>
                  </div>
                  <p class="mb-0"><span><strong id="summary">$16.75</strong></span></p class="mb-0">
                </div>
              </div>
            </div>
            
          </div>
          <hr class="mb-4">
          <div class="row mb-4">
            <div class="col-md-5 col-lg-3 col-xl-3">
              <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                <img class="img-fluid w-100"
                  src="yogurt.png" alt="Sample">
                <a href="#!">
                  
                </a>
              </div>
            </div>
            <div class="col-md-7 col-lg-9 col-xl-9">
              <div>
                <div class="d-flex justify-content-between">
                  <div>
                    <h5>Yogurt</h5>
                    <p class="mb-1 text-muted text-uppercase small">Weight: 250g</p>
                    <p class="mb-1 text-muted text-uppercase small">price: $5.99</p>
                  </div>
                  <div>
                    <div class="number">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepDown(); adjustPrice2(); adjustAmount();"
                        class="minus" style="border-radius: 5px;">-</button>
                      <input class="quantity" min="0" name="quantity" value="1" type="number" id="qty2">
                      <button onclick="this.parentNode.querySelector('input[type=number]').stepUp(); adjustPrice2(); adjustAmount();"
                        class="plus" style="border-radius: 5px;">+</button>
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                        class="fas fa-trash-alt mr-1"></i> Remove item </a>
                  </div>
                  <p class="mb-0"><span><strong id="summary2">$5.99</strong></span></p class="mb-0">
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
     

    

    </div>

    <div class="col-lg-4">

      <!-- Card -->
      <div class="mb-3">
        <div class="pt-4">

          <h5 class="mb-3">The total amount of</h5>

          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
              amount
              <span id="amount">$22.74</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
              GST
              <span id="gst">$2.25</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
              QST
              <span id="qst">$1.14</span>
            </li>


            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
              <div>
                <strong>The total amount of</strong>
                <strong>
                  <p class="mb-0">(including VAT)</p>
                </strong>
              </div>
              <span><strong id="totalAmount">$26.151</strong></span>
            </li>
          </ul>

          <button type="button" class="btn btn-primary btn-block">go to checkout</button>
        
          <a href="groceryshop.php">
          <button type="button" class="btn btn-secondary btn-block mt-1">Continue Shopping</button>
          </a>

        </div>
      </div>
      

     

    </div>
    <!--Grid column-->

  </div>
  <!-- Grid row -->

</section>
<!--Section: Block Content-->

          

 </main>










     <!--special offer  -->
    <main>
      <div class="jumbotron">
        <h2>Special Offer!</h2>
        <p class="lead">Free Delivery for orders over $150</p>
      </div>
    </main>  
  
    
   <!-- footer -->
   	<footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <p></p>
            <small class="d-block mb-3 text-muted"></small>
          </div>
          <div class="col-6 col-md">
            <h5>Contacts</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="contact.php">Manager</a></li>
              <li><a class="text-muted" href="contact.php">Supervisor</a></li>
              <li><a class="text-muted" href="contact.php">Our Team</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Careers</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="careers.php">Meat Section</a></li>
              <li><a class="text-muted" href="careers.php">Delivery</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="contact.php">Team</a></li>
              <li><a class="text-muted" href="https://www.google.com/maps/place/11011+Bd+Maurice-Duplessis,+Montr%C3%A9al,+QC+H1C+1V3/@45.6660703,-73.5345729,17z/data=!3m1!4b1!4m5!3m4!1s0x4cc8e1759aa6762d:0x80db5bbbc6e3d671!8m2!3d45.6660703!4d-73.5323842" target="_blank">Location</a></li>
              <li><a class="text-muted" href="terms.php">Privacy</a></li>
              <li><a class="text-muted" href="terms.php">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>

  
</body>
</html>