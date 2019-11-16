 <!--======= HEAD ======= -->
<?php include './includes/head.php' ?>
   <!--=======TOP ======= -->
<?php include './includes/top.php' ?>
   <!-- top ends -->
   <!--======= NAVBAR ======= -->
<?php include './includes/navbar.php' ?> 
      <div id="content" >
         <!-- content Starts -->
         <div class="container" >
            <!-- container Starts -->
            <div class="col-md-12" >
               <!--- col-md-12 Starts -->
               <ul class="breadcrumb" >
                  <!-- breadcrumb Starts -->
                  <li>
                     <a href="index.php">Home</a>
                  </li>
                  <li><a href="shop.php">Shop</a></li>
                  <li>
                     <a href="shop.php?p_cat=8"> Microsoft Windows </a>
                  </li>
                  <li> Cyberlink PowerDirector 16 Pro </li>
               </ul>
               <!-- breadcrumb Ends -->
            </div>
            <!--- col-md-12 Ends -->
            <div class="col-md-12">
               <!-- col-md-12 Starts -->
               <div class="row" id="productMain">
                  <!-- row Starts -->
                  <div class="col-sm-6">
                     <!-- col-sm-6 Starts -->
                     <div id="mainImage">
                        <!-- mainImage Starts -->
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                           <ol class="carousel-indicators">
                              <!-- carousel-indicators Starts -->
                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                           </ol>
                           <!-- carousel-indicators Ends -->
                           <div class="carousel-inner">
                              <!-- carousel-inner Starts -->
                              <div class="item active">
                                 <center>
                                    <img src="admin_area/product_images/cyberlink powerdirector.jpg" class="img-responsive">
                                 </center>
                              </div>
                           </div>
                           <!-- carousel-inner Ends -->
                           <a href="#myCarousel" class="left carousel-control" data-slide="prev">
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
                     </div>
                     <!-- mainImage Ends -->
                  </div>
                  <!-- col-sm-6 Ends -->
                  <div class="col-sm-6" >
                     <!-- col-sm-6 Starts -->
                     <div class="box" >
                        <!-- box Starts -->
                        <h1 class="text-center" > Cyberlink PowerDirector 16 Pro </h1>
                        <form action="" method="post" class="form-horizontal" >
                           <!-- form-horizontal Starts -->
                           <div class="form-group">
                              <!-- form-group Starts -->
                              <label class="col-md-5 control-label" >Product Quantity </label>
                              <div class="col-md-7" >
                                 <!-- col-md-7 Starts -->
                                 <select name="product_qty" class="form-control" required>
                                    <option value="">Select quantity</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                 </select>
                              </div>
                              <!-- col-md-7 Ends -->
                           </div>
                           <!-- form-group Ends -->
                           <input type="hidden" name="product_size" value="None">
                           <center>
                              <!-- center Starts -->
                           </center>
                           <!-- center Ends -->
                           <p class='price'>
                              Product Price : $60
                           </p>
                           <p class="text-center buttons" >
                              <!-- text-center buttons Starts -->
                              <button class="btn btn-primary" type="submit" name="add_cart">
                              <i class="fa fa-shopping-cart" ></i> Add to Cart
                              </button>
                              <button class="btn btn-primary" type="submit" name="add_wishlist">
                              <i class="fa fa-heart" ></i> Add to Wishlist
                              </button>
                           </p>
                           <!-- text-center buttons Ends -->
                        </form>
                        <!-- form-horizontal Ends -->
                     </div>
                     <!-- box Ends -->
                     <div class="row" id="thumbs" >
                        <!-- row Starts -->
                        <div class="col-xs-4" >
                           <!-- col-xs-4 Starts -->
                           <a href="#" class="thumb" >
                           <img src="admin_area/product_images/cyberlink powerdirector.jpg" class="img-responsive" >
                           </a>
                        </div>
                        <!-- col-xs-4 Ends -->
                     </div>
                     <!-- row Ends -->
                  </div>
                  <!-- col-sm-6 Ends -->
               </div>
               <!-- row Ends -->
               <div class="box" id="details">
                  <!-- box Starts -->
                  <a class="btn btn-primary tab" style="margin-bottom:10px;" href="#description" data-toggle="tab">
                     <!-- btn btn-primary tab Starts -->
                     Product Description
                  </a>
                  <!-- btn btn-primary tab Ends -->
                  <a class="btn btn-primary tab" style="margin-bottom:10px;" href="#features" data-toggle="tab">
                     <!-- btn btn-primary tab Starts -->
                     Features
                  </a>
                  <!-- btn btn-primary tab Ends -->
                  <a class="btn btn-primary tab" style="margin-bottom:10px;" href="#video" data-toggle="tab">
                     <!-- btn btn-primary tab Starts -->
                     Sounds and Videos
                  </a>
                  <!-- btn btn-primary tab Ends -->
                  <hr style="margin-top:0px;">
                  <div class="tab-content">
                     <!-- tab-content Starts -->
                     <div id="description" class="tab-pane fade in active" style="margin-top:7px;" >
                        <!-- description tab-pane fade in active Starts -->
                        <p>Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.</p>
                     </div>
                     <!-- description tab-pane fade in active Ends -->
                     <div id="features" class="tab-pane fade in" style="margin-top:7px;" >
                        <!-- features tab-pane fade in  Starts -->
                     </div>
                     <!-- features tab-pane fade in  Ends -->
                     <div id="video" class="tab-pane fade in" style="margin-top:7px;" >
                        <!-- video tab-pane fade in Starts -->
                     </div>
                     <!-- video tab-pane fade in  Ends -->
                  </div>
                  <!-- tab-content Ends -->
               </div>
               <!-- box Ends -->
               <div id="row same-height-row">
                  <!-- row same-height-row Starts -->
                  <div class="col-md-3 col-sm-6">
                     <!-- col-md-3 col-sm-6 Starts -->
                     <div class="box same-height headline">
                        <!-- box same-height headline Starts -->
                        <h3 class="text-center"> You also like these Products </h3>
                     </div>
                     <!-- box same-height headline Ends -->
                  </div>
                  <!-- col-md-3 col-sm-6 Ends -->
                  <div class='col-md-3 col-sm-6 center-responsive' >
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
                  <div class='col-md-3 col-sm-6 center-responsive' >
                     <div class='product' >
                        <a href='product-url-6' >
                        <img src='admin_area/product_images/Jack---Jones-White-Solid-Denim-Jacket-3115-5549091-1-pdp_slider_l.jpg' class='img-responsive' >
                        </a>
                        <div class='text' >
                           <center>
                              <p class='btn btn-primary'> Kane Bender </p>
                           </center>
                           <hr>
                           <h3><a href='product-url-6' >Jack & White Solid Denim Jacket</a></h3>
                           <p class='price' > $96  </p>
                           <p class='buttons' >
                              <a href='product-url-6' class='btn btn-default' >View details</a>
                              <a href='product-url-6' class='btn btn-primary'>
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
                  <div class='col-md-3 col-sm-6 center-responsive' >
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
               </div>
               <!-- row same-height-row Ends -->
            </div>
            <!-- col-md-12 Ends -->
         </div>
         <!-- container Ends -->
      </div>
      <!-- content Ends -->
   <!--======= FOOTER ======= -->
<?php include './includes/footer.php' ?>
   <!-- footer ends -->
   <!--======= COPY RIGHT ======= -->
<?php include './includes/copyright.php' ?>
   <!-- copyright Ends -->
   <!--======= SCRIPTS ======= -->
<?php include './includes/scripts.php' ?>
</body>
</html>
