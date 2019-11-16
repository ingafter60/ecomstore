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