<!DOCTYPE html>
<html>
<head>
   <title>E commerce Store </title>
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
   <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >
   <link href="styles/bootstrap.min.css" rel="stylesheet">
   <link href="styles/style.css" rel="stylesheet">
   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
   <!--=======TOP ======= -->
   <div id="top">
      <!-- top Starts -->
      <div class="container">
         <!-- container Starts -->
         <div class="col-md-6 offer">
            <!-- col-md-6 offer Starts -->
            <a href="#" class="btn btn-success btn-sm" >
            Welcome :Guest</a>
            <a href="#">
            Shopping Cart Total Price: $700, Total Items 4</a>
         </div>
         <!-- col-md-6 offer Ends -->
         <div class="col-md-6">
            <!-- col-md-6 Starts -->
            <ul class="menu">
               <!-- menu Starts -->
               <li>
                  <a href="customer_register.php">
                  Register
                  </a>
               </li>
               <li>
                  <a href='checkout.php' >My Account</a>
               </li>
               <li>
                  <a href="cart.php">
                  Go to Cart
                  </a>
               </li>
               <li>
                  <a href='checkout.php'> Login </a>
               </li>
            </ul>
            <!-- menu Ends -->
         </div>
         <!-- col-md-6 Ends -->
      </div>
      <!-- container Ends -->
   </div>
   <!-- top ends -->
   <!--======= NAVBAR ======= -->
   <div class="navbar navbar-default" id="navbar">
      <!-- navbar navbar-default Starts -->
      <div class="container" >
         <!-- container Starts -->
         <div class="navbar-header">
            <!-- navbar-header Starts -->
            <a class="navbar-brand home" href="index.php" >
               <!--- navbar navbar-brand home Starts -->
               <img src="images/logo.png" alt="computerfever logo" class="hidden-xs" >
               <img src="images/logo-small.png" alt="computerfever logo" class="visible-xs" >
            </a>
            <!--- navbar navbar-brand home Ends -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation"  >
            <span class="sr-only" >Toggle Navigation </span>
            <i class="fa fa-align-justify"></i>
            </button>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search" >
            <span class="sr-only" >Toggle Search</span>
            <i class="fa fa-search" ></i>
            </button>
         </div>
         <!-- navbar-header Ends -->
         <div class="navbar-collapse collapse" id="navigation" >
            <!-- navbar-collapse collapse Starts -->
            <div class="padding-nav" >
               <!-- padding-nav Starts -->
               <ul class="nav navbar-nav navbar-left">
                  <!-- nav navbar-nav navbar-left Starts -->
                  <li class="active">
                     <a href="index.php"> Home </a>
                  </li>
                  <li>
                     <a href="shop.php"> Shop </a>
                  </li>
                  <li>
                     <a href='checkout.php' >My Account</a>
                  </li>
                  <li>
                     <a href="cart.php"> Shopping Cart </a>
                  </li>
                  <li>
                     <a href="about.php"> About Us </a>
                  </li>
                  <li>
                     <a href="services.php"> Services </a>
                  </li>
                  <li>
                     <a href="contact.php"> Contact Us </a>
                  </li>
               </ul>
               <!-- nav navbar-nav navbar-left Ends -->
            </div>
            <!-- padding-nav Ends -->
            <a class="btn btn-primary navbar-btn right" href="cart.php">
               <!-- btn btn-primary navbar-btn right Starts -->
               <i class="fa fa-shopping-cart"></i>
               <span> 4 items in cart </span>
            </a>
            <!-- btn btn-primary navbar-btn right Ends -->
            <div class="navbar-collapse collapse right">
               <!-- navbar-collapse collapse right Starts -->
               <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
               <span class="sr-only">Toggle Search</span>
               <i class="fa fa-search"></i>
               </button>
            </div>
            <!-- navbar-collapse collapse right Ends -->
            <div class="collapse clearfix" id="search">
               <!-- collapse clearfix Starts -->
               <form class="navbar-form" method="get" action="results.php">
                  <!-- navbar-form Starts -->
                  <div class="input-group">
                     <!-- input-group Starts -->
                     <input class="form-control" type="text" placeholder="Search" name="user_query" required>
                     <span class="input-group-btn">
                        <!-- input-group-btn Starts -->
                        <button type="submit" value="Search" name="search" class="btn btn-primary">
                        <i class="fa fa-search"></i>
                        </button>
                     </span>
                     <!-- input-group-btn Ends -->
                  </div>
                  <!-- input-group Ends -->
               </form>
               <!-- navbar-form Ends -->
            </div>
            <!-- collapse clearfix Ends -->
         </div>
         <!-- navbar-collapse collapse Ends -->
      </div>
      <!-- container Ends -->
   </div>
   <!-- navbar ends -->
   <!--======= SLIDER ======= -->
   <div class="container" id="slider">
      <!-- container Starts -->
      <div class="col-md-12">
         <!-- col-md-12 Starts -->
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- carousel slide Starts --->
            <ol class="carousel-indicators">
               <!-- carousel-indicators Starts -->
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
               <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <!-- carousel-indicators Ends -->
            <div class="carousel-inner">
               <!-- carousel-inner Starts -->
               <div class='item active'>
                  <a href='http://localhost/Ecom_store/shop.php'><img src='admin_area/slides_images/1.jpg'></a>
               </div>
               <div class='item'>
                  <a href='htttp://www.computerfever.com/services'><img src='admin_area/slides_images/2.jpg'></a>
               </div>
               <div class='item'>
                  <a href='http://urdustories.computerfever.com'><img src='admin_area/slides_images/3.jpg'></a>
               </div>
               <div class='item'>
                  <a href='http://www.computerfever.com'><img src='admin_area/slides_images/slide-5.jpg'></a>
               </div>
            </div>
            <!-- carousel-inner Ends -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
               <!-- left carousel-control Starts -->
               <span class="glyphicon glyphicon-chevron-left"> </span>
               <span class="sr-only"> Previous </span>
            </a>
            <!-- left carousel-control Ends -->
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
               <!-- right carousel-control Starts -->
               <span class="glyphicon glyphicon-chevron-right"> </span>
               <span class="sr-only"> Next </span>
            </a>
            <!-- right carousel-control Ends -->
         </div>
         <!-- carousel slide Ends --->
      </div>
      <!-- col-md-12 Ends -->
   </div>
   <!-- slider ends -->
   <!--======= ADVANTAGES ======= -->
   <div id="advantages">
      <!-- advantages Starts -->
      <div class="container">
         <!-- container Starts -->
         <div class="same-height-row">
            <!-- same-height-row Starts -->
            <div class="col-sm-4">
               <!-- col-sm-4 Starts -->
               <div class="box same-height">
                  <!-- box same-height Starts -->
                  <div class="icon">
                     <i class="fa fa-heart" ></i>
                  </div>
                  <h3><a href="#"> BEST PRICES </a></h3>
                  <p>
                     You can check on all others sites about the prices and than compare with us.
                  </p>
               </div>
               <!-- box same-height Ends -->
            </div>
            <!-- col-sm-4 Ends -->
            <div class="col-sm-4">
               <!-- col-sm-4 Starts -->
               <div class="box same-height">
                  <!-- box same-height Starts -->
                  <div class="icon">
                     <i class="fa fa-heart" ></i>
                  </div>
                  <h3><a href="#"> 100% SATISFACTION GUARANTEED From Us </a></h3>
                  <p>
                     Free returns on everything for 3 months. 
                  </p>
               </div>
               <!-- box same-height Ends -->
            </div>
            <!-- col-sm-4 Ends -->
            <div class="col-sm-4">
               <!-- col-sm-4 Starts -->
               <div class="box same-height">
                  <!-- box same-height Starts -->
                  <div class="icon">
                     <i class="fa fa-heart" ></i>
                  </div>
                  <h3><a href="#"> WE LOVE OUR CUSTOMERS </a></h3>
                  <p>
                     We are known to provide best possible service ever
                  </p>
               </div>
               <!-- box same-height Ends -->
            </div>
            <!-- col-sm-4 Ends -->
         </div>
         <!-- same-height-row Ends -->
      </div>
      <!-- container Ends -->
   </div>
   <!-- advantages ends -->
   <!--======= HOT ======= -->
   <div id="hot">
      <!-- hot Starts -->
      <div class="box">
         <!-- box Starts -->
         <div class="container">
            <!-- container Starts -->
            <div class="col-md-12">
               <!-- col-md-12 Starts -->
               <h2>Latest this week</h2>
            </div>
            <!-- col-md-12 Ends -->
         </div>
         <!-- container Ends -->
      </div>
      <!-- box Ends -->
   </div>
   <!-- hot ends -->
   <!--======= MAIN CONTENT ======= -->
   <div id="content" class="container">
      <!-- container Starts -->
      <div class="row flex-wrap">
         <!-- row Starts -->
         <div class='col-md-4 col-sm-6 single' >
            <div class='product' >
               <a href='cyberlink-powerdirector-16-ultimate' >
               <img src='admin_area/product_images/cyberlink powerdirector.jpg' class='img-responsive' >
               </a>
               <div class='text' >
                  <center>
                     <p class='btn btn-primary'> Kane Bender </p>
                  </center>
                  <hr>
                  <h3><a href='cyberlink-powerdirector-16-ultimate' >Cyberlink PowerDirector 16 Pro</a></h3>
                  <p class='price' > $60  </p>
                  <p class='buttons' >
                     <a href='cyberlink-powerdirector-16-ultimate' class='btn btn-default' >View details</a>
                     <a href='cyberlink-powerdirector-16-ultimate' class='btn btn-primary'>
                     <i class='fa fa-shopping-cart'></i> Add to cart
                     </a>
                  </p>
               </div>
            </div>
         </div>
         <div class='col-md-4 col-sm-6 single' >
            <div class='product' >
               <a href='digital-premium-softwares-bundle' >
               <img src='admin_area/product_images/digital-bundle-1.jpg' class='img-responsive' >
               </a>
               <div class='text' >
                  <center>
                     <p class='btn btn-primary'> Joy Peng </p>
                  </center>
                  <hr>
                  <h3><a href='digital-premium-softwares-bundle' > Digital Premium Softwares Bundle</a></h3>
                  <p class='price' > $150  </p>
                  <p class='buttons' >
                     <a href='digital-premium-softwares-bundle' class='btn btn-default' >View details</a>
                     <a href='digital-premium-softwares-bundle' class='btn btn-primary'>
                     <i class='fa fa-shopping-cart'></i> Add to cart
                     </a>
                  </p>
               </div>
               <a class='label sale' href='#' style='color:black;'>
                  <div class='thelabel'>Bundle</div>
                  <div class='label-background'> </div>
               </a>
            </div>
         </div>
         <div class='col-md-4 col-sm-6 single' >
            <div class='product' >
               <a href='adobe-photoshop-cc-2018' >
               <img src='admin_area/product_images/photoshop-cc.jpg' class='img-responsive' >
               </a>
               <div class='text' >
                  <center>
                     <p class='btn btn-primary'> Joy Peng </p>
                  </center>
                  <hr>
                  <h3><a href='adobe-photoshop-cc-2018' >Adobe Photoshop CC 2018 | 12 Month Subscription (Download)</a></h3>
                  <p class='price' > $129  </p>
                  <p class='buttons' >
                     <a href='adobe-photoshop-cc-2018' class='btn btn-default' >View details</a>
                     <a href='adobe-photoshop-cc-2018' class='btn btn-primary'>
                     <i class='fa fa-shopping-cart'></i> Add to cart
                     </a>
                  </p>
               </div>
               <a class='label sale' href='#' style='color:black;'>
                  <div class='thelabel'>Software</div>
                  <div class='label-background'> </div>
               </a>
            </div>
         </div>
         <div class='col-md-4 col-sm-6 single' >
            <div class='product' >
               <a href='corel-video-studio-ultimate-x10' >
               <img src='admin_area/product_images/corel video-1.jpg' class='img-responsive' >
               </a>
               <div class='text' >
                  <center>
                     <p class='btn btn-primary'> Joy Peng </p>
                  </center>
                  <hr>
                  <h3><a href='corel-video-studio-ultimate-x10' >Corel VideoStudio Ultimate X10</a></h3>
                  <p class='price' > $79  </p>
                  <p class='buttons' >
                     <a href='corel-video-studio-ultimate-x10' class='btn btn-default' >View details</a>
                     <a href='corel-video-studio-ultimate-x10' class='btn btn-primary'>
                     <i class='fa fa-shopping-cart'></i> Add to cart
                     </a>
                  </p>
               </div>
               <a class='label sale' href='#' style='color:black;'>
                  <div class='thelabel'>Software</div>
                  <div class='label-background'> </div>
               </a>
            </div>
         </div>
         <div class='col-md-4 col-sm-6 single' >
            <div class='product' >
               <a href='microsoft-office-professional-2016' >
               <img src='admin_area/product_images/microsft-office.jpg' class='img-responsive' >
               </a>
               <div class='text' >
                  <center>
                     <p class='btn btn-primary'> Amir Khan </p>
                  </center>
                  <hr>
                  <h3><a href='microsoft-office-professional-2016' >Microsoft Office Professional 2016 Download</a></h3>
                  <p class='price' > $130  </p>
                  <p class='buttons' >
                     <a href='microsoft-office-professional-2016' class='btn btn-default' >View details</a>
                     <a href='microsoft-office-professional-2016' class='btn btn-primary'>
                     <i class='fa fa-shopping-cart'></i> Add to cart
                     </a>
                  </p>
               </div>
               <a class='label sale' href='#' style='color:black;'>
                  <div class='thelabel'>Software</div>
                  <div class='label-background'> </div>
               </a>
            </div>
         </div>
         <div class='col-md-4 col-sm-6 single' >
            <div class='product' >
               <a href='avast-internet-security' >
               <img src='admin_area/product_images/avast-1.jpg' class='img-responsive' >
               </a>
               <div class='text' >
                  <center>
                     <p class='btn btn-primary'> Kane Bender </p>
                  </center>
                  <hr>
                  <h3><a href='avast-internet-security' >Avast Internet Security 2018 (1 PC, 1 Year) [Download]</a></h3>
                  <p class='price' > $59  </p>
                  <p class='buttons' >
                     <a href='avast-internet-security' class='btn btn-default' >View details</a>
                     <a href='avast-internet-security' class='btn btn-primary'>
                     <i class='fa fa-shopping-cart'></i> Add to cart
                     </a>
                  </p>
               </div>
               <a class='label sale' href='#' style='color:black;'>
                  <div class='thelabel'>Software</div>
                  <div class='label-background'> </div>
               </a>
            </div>
         </div>
         <div class='col-md-4 col-sm-6 single' >
            <div class='product' >
               <a href='jacket-bundle' >
               <img src='admin_area/product_images/jacket-1.jpg' class='img-responsive' >
               </a>
               <div class='text' >
                  <center>
                     <p class='btn btn-primary'> Kane Bender </p>
                  </center>
                  <hr>
                  <h3><a href='jacket-bundle' >Solid Navy Denim Jackets Bundle</a></h3>
                  <p class='price' > <del> $300 </del> | $200 </p>
                  <p class='buttons' >
                     <a href='jacket-bundle' class='btn btn-default' >View details</a>
                     <a href='jacket-bundle' class='btn btn-primary'>
                     <i class='fa fa-shopping-cart'></i> Add to cart
                     </a>
                  </p>
               </div>
               <a class='label sale' href='#' style='color:black;'>
                  <div class='thelabel'>Sale</div>
                  <div class='label-background'> </div>
               </a>
            </div>
         </div>
         <div class='col-md-4 col-sm-6 single' >
            <div class='product' >
               <a href='product-url-9' >
               <img src='admin_area/product_images/product-1.jpg' class='img-responsive' >
               </a>
               <div class='text' >
                  <center>
                     <p class='btn btn-primary'> Amir Khan </p>
                  </center>
                  <hr>
                  <h3><a href='product-url-9' >Remind Printed T-Shirt</a></h3>
                  <p class='price' > $50  </p>
                  <p class='buttons' >
                     <a href='product-url-9' class='btn btn-default' >View details</a>
                     <a href='product-url-9' class='btn btn-primary'>
                     <i class='fa fa-shopping-cart'></i> Add to cart
                     </a>
                  </p>
               </div>
               <a class='label sale' href='#' style='color:black;'>
                  <div class='thelabel'>New</div>
                  <div class='label-background'> </div>
               </a>
            </div>
         </div>
      </div>
      <!-- row Ends -->
   </div>
   <!-- main content ends -->  
   <!--======= FOOTER ======= -->
   <div id="footer">
      <!-- footer Starts -->
      <div class="container">
         <!-- container Starts -->
         <div class="row" >
            <!-- row Starts -->
            <div class="col-md-3 col-sm-6" >
               <!-- col-md-3 col-sm-6 Starts -->
               <h4>Pages</h4>
               <ul>
                  <!-- ul Starts -->
                  <li><a href="cart.php">Shopping Cart</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                  <li><a href="shop.php">Shop</a></li>
                  <li>
                     <a href='checkout.php' >My Account</a>
                  </li>
               </ul>
               <!-- ul Ends -->
               <hr>
               <h4>User Section</h4>
               <ul>
                  <!-- ul Starts -->
                  <li>
                     <a href='checkout.php' >Login</a>
                  </li>
                  <li><a href="customer_register.php">Register</a></li>
                  <li><a href="terms.php">Terms And Conditions </a></li>
               </ul>
               <!-- ul Ends -->
               <hr class="hidden-md hidden-lg hidden-sm" >
            </div>
            <!-- col-md-3 col-sm-6 Ends -->
            <div class="col-md-3 col-sm-6">
               <!-- col-md-3 col-sm-6 Starts -->
               <h4> Top Products Categories </h4>
               <ul>
                  <!-- ul Starts -->
                  <li> <a href='shop.php?p_cat=4'> Coats </a> </li>
                  <li> <a href='shop.php?p_cat=5'> T-Shirts </a> </li>
                  <li> <a href='shop.php?p_cat=6'> Sweater </a> </li>
                  <li> <a href='shop.php?p_cat=7'> jackets </a> </li>
                  <li> <a href='shop.php?p_cat=8'> Microsoft Windows </a> </li>
               </ul>
               <!-- ul Ends -->
               <hr class="hidden-md hidden-lg">
            </div>
            <!-- col-md-3 col-sm-6 Ends -->
            <div class="col-md-3 col-sm-6">
               <!-- col-md-3 col-sm-6 Starts -->
               <h4>Where to find us</h4>
               <p>
                  <!-- p Starts -->
                  <strong>Computerfever Ltd.</strong>
                  <br>Saeed Park
                  <br>Lahore
                  <br>0923334566931
                  <br>sad.ahmed22224@gmail.com
                  <br>
                  <strong>Mohammed Tahir Ahmed</strong>
               </p>
               <!-- p Ends -->
               <a href="contact.php">Go to Contact us page</a>
               <hr class="hidden-md hidden-lg">
            </div>
            <!-- col-md-3 col-sm-6 Ends -->
            <div class="col-md-3 col-sm-6">
               <!-- col-md-3 col-sm-6 Starts -->
               <h4>Get the news</h4>
               <p class="text-muted">
                  Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
               </p>
               <form action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=computerfever', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
                  <!-- form Starts -->
                  <div class="input-group">
                     <!-- input-group Starts -->
                     <input type="text" class="form-control" name="email">
                     <input type="hidden" value="computerfever" name="uri"/>
                     <input type="hidden" name="loc" value="en_US"/>
                     <span class="input-group-btn">
                        <!-- input-group-btn Starts -->
                        <input type="submit" value="subscribe" class="btn btn-default">
                     </span>
                     <!-- input-group-btn Ends -->
                  </div>
                  <!-- input-group Ends -->
               </form>
               <!-- form Ends -->
               <hr>
               <h4> Stay in touch </h4>
               <p class="social">
                  <!-- social Starts --->
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-envelope"></i></a>
               </p>
               <!-- social Ends --->
            </div>
            <!-- col-md-3 col-sm-6 Ends -->
         </div>
         <!-- row Ends -->
      </div>
      <!-- container Ends -->
   </div>
   <!-- footer ends -->
   <!--======= COPY RIGHT ======= -->
   <div id="copyright">
      <!-- copyright Starts -->
      <div class="container" >
         <!-- container Starts -->
         <div class="col-md-6" >
            <!-- col-md-6 Starts -->
            <p class="pull-left"> &copy; 2016 Mohammed Tahir Ahmed </p>
         </div>
         <!-- col-md-6 Ends -->
         <div class="col-md-6" >
            <!-- col-md-6 Starts -->
            <p class="pull-right" >
               Template by <a href="http://www.computerfever.com" >Computerfever.com</a>
            </p>
         </div>
         <!-- col-md-6 Ends -->
      </div>
      <!-- container Ends -->
   </div>
   <!-- copyright Ends -->
   <!--======= SCRIPTS ======= -->
   <script src="js/jquery.min.js"> </script>
   <script src="js/bootstrap.min.js"></script>
</body>
</html>
