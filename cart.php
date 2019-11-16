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
                  <li>Cart</li>
               </ul>
               <!-- breadcrumb Ends -->
               <nav class="checkout-breadcrumbs text-center">
                  <a href="cart.php" class="active"> Shopping Cart </a>
                  <i class="fa fa-chevron-right"></i>
                  <a href="checkout.php"> Checkout Details </a>
                  <i class="fa fa-chevron-right"></i>
                  <a href="#"> Order Complete </a>
               </nav>
            </div>
            <!--- col-md-12 Ends -->
            <div class="col-md-9" id="cart" >
               <!-- col-md-9 Starts -->
               <div class="box" >
                  <!-- box Starts -->
                  <form action="cart.php" method="post" enctype="multipart-form-data" >
                     <!-- form Starts -->
                     <h1> Shopping Cart </h1>
                     <p class="text-muted" > You currently have 4 item(s) in your cart. </p>
                     <div class="table-responsive" >
                        <!-- table-responsive Starts -->
                        <table class="table" >
                           <!-- table Starts -->
                           <thead>
                              <!-- thead Starts -->
                              <tr>
                                 <th colspan="2" >Product</th>
                                 <th>Quantity</th>
                                 <th>Unit Price</th>
                                 <th>Size</th>
                                 <th colspan="1">Delete</th>
                                 <th colspan="2"> Sub Total </th>
                              </tr>
                           </thead>
                           <!-- thead Ends -->
                           <tbody id="cart-products-tbody">
                              <!-- tbody Starts -->
                              <tr>
                                 <!-- tr Starts -->
                                 <td>
                                    <img src="admin_area/product_images/jacket-1.jpg" >
                                 </td>
                                 <td>
                                    <a href="#" > Solid Navy Denim Jackets Bundle </a>
                                 </td>
                                 <td>
                                    <input type="text" name="quantity" value="2" data-product_id="11" class="quantity form-control">
                                 </td>
                                 <td>
                                    $200.00
                                 </td>
                                 <td>
                                    Extra Large
                                 </td>
                                 <td>
                                    <input type="checkbox" name="remove[]" value="11">
                                 </td>
                                 <td>
                                    $400.00
                                 </td>
                              </tr>
                              <!-- tr Ends -->
                              <tr>
                                 <!-- tr Starts -->
                                 <td>
                                    <img src="admin_area/product_images/digital-bundle-1.jpg" >
                                 </td>
                                 <td>
                                    <a href="#" >  Digital Premium Softwares Bundle </a>
                                 </td>
                                 <td>
                                    <input type="text" name="quantity" value="2" data-product_id="18" class="quantity form-control">
                                 </td>
                                 <td>
                                    $150.00
                                 </td>
                                 <td>
                                    None
                                 </td>
                                 <td>
                                    <input type="checkbox" name="remove[]" value="18">
                                 </td>
                                 <td>
                                    $300.00
                                 </td>
                              </tr>
                              <!-- tr Ends -->
                           </tbody>
                           <!-- tbody Ends -->
                           <tfoot>
                              <!-- tfoot Starts -->
                              <tr>
                                 <th colspan="5"> Total </th>
                                 <th colspan="2"> <span class="subtotal-cart-price">$700</span>.00 </th>
                              </tr>
                           </tfoot>
                           <!-- tfoot Ends -->
                        </table>
                        <!-- table Ends -->
                        <div class="form-inline pull-right">
                           <!-- form-inline pull-right Starts -->
                           <div class="form-group">
                              <!-- form-group Starts -->
                              <label>Coupon Code : </label>
                              <input type="text" name="code" class="form-control">
                           </div>
                           <!-- form-group Ends -->
                           <input class="btn btn-primary" type="submit" name="apply_coupon" value="Apply Coupon Code" >
                        </div>
                        <!-- form-inline pull-right Ends -->
                     </div>
                     <!-- table-responsive Ends -->
                     <div class="box-footer">
                        <!-- box-footer Starts -->
                        <div class="pull-left">
                           <!-- pull-left Starts -->
                           <a href="index.php" class="btn btn-default">
                           <i class="fa fa-chevron-left"></i> Continue Shopping
                           </a>
                        </div>
                        <!-- pull-left Ends -->
                        <div class="pull-right">
                           <!-- pull-right Starts -->
                           <button class="btn btn-default" type="submit" name="update" value="Update Cart">
                           <i class="fa fa-refresh"></i> Update Cart
                           </button>
                           <a href="checkout.php" class="btn btn-primary">
                           Proceed to checkout <i class="fa fa-chevron-right"></i>
                           </a>
                        </div>
                        <!-- pull-right Ends -->
                     </div>
                     <!-- box-footer Ends -->
                  </form>
                  <!-- form Ends -->
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
                        <a href='product-url-5' >
                        <img src='admin_area/product_images/Next-Denim-Borg-Lined-Western-Jacket-0463-0064553-1-pdp_slider_l.jpg' class='img-responsive' >
                        </a>
                        <div class='text' >
                           <center>
                              <p class='btn btn-primary'> Kane Bender </p>
                           </center>
                           <hr>
                           <h3><a href='product-url-5' >Denim Borg Lined Western Jacket</a></h3>
                           <p class='price' > <del> $259 </del> | $100 </p>
                           <p class='buttons' >
                              <a href='product-url-5' class='btn btn-default' >View details</a>
                              <a href='product-url-5' class='btn btn-primary'>
                              <i class='fa fa-shopping-cart'></i> Add to cart
                              </a>
                           </p>
                        </div>
                        <a class='label sale' href='#' style='color:black;'>
                           <div class='thelabel'>Gift</div>
                           <div class='label-background'> </div>
                        </a>
                     </div>
                  </div>
                  <div class='col-md-3 col-sm-6 center-responsive' >
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
                  <div class='col-md-3 col-sm-6 center-responsive' >
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
               <!-- row same-height-row Ends -->
            </div>
            <!-- col-md-9 Ends -->
            <div class="col-md-3">
               <!-- col-md-3 Starts -->
               <div class="box" id="order-summary">
                  <!-- box Starts -->
                  <div class="box-header">
                     <!-- box-header Starts -->
                     <h3>Order Summary</h3>
                  </div>
                  <!-- box-header Ends -->
                  <p class="text-muted">
                     Shipping and additional costs are calculated based on the values you have entered.
                  </p>
                  <div class="table-responsive">
                     <!-- table-responsive Starts -->
                     <table class="table">
                        <!-- table Starts -->
                        <tbody id="cart-summary-tbody">
                           <!-- tbody Starts -->
                           <tr>
                              <td> Order Subtotal </td>
                              <th> $700.00 </th>
                           </tr>
                           <tr>
                              <th colspan="2">
                                 <p class="shipping-header text-muted">
                                    Cart Total Weight: 9 Kg
                                 </p>
                                 <P class="shipping-header text-muted">
                                    <I class="fa fa-truck"></i> Shipping:
                                 </P>
                                 <ul class="list-unstyled">
                                    <!-- ul list-unstyled Starts -->
                                    <li>
                                       <p> Please login to view the available shipping types, or contact us if you need any help. </p>
                                    </li>
                                 </ul>
                                 <!-- ul list-unstyled Ends -->
                              </th>
                           </tr>
                           <tr>
                              <td>Tax</td>
                              <th>$0.00</th>
                           </tr>
                           <tr class="total">
                              <td>Total</td>
                              <th class="total-cart-price">$700.00</th>
                           </tr>
                        </tbody>
                        <!-- tbody Ends -->
                     </table>
                     <!-- table Ends -->
                  </div>
                  <!-- table-responsive Ends -->
               </div>
               <!-- box Ends -->
            </div>
            <!-- col-md-3 Ends -->
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
      <script>
         $(document).ready(function(data){
         
         $(document).on('keyup', '.quantity', function(){
         
         var id = $(this).data("product_id");
         
         var quantity = $(this).val();
         
         var shipping_type = $("input[name=shipping_type]:checked").val();
         
         var shipping_cost = Number($("input[name=shipping_type]:checked").data("shipping_cost"));
         
         if(quantity  != ''){
         
         $.ajax({
         
         url:"change.php",
         
         method:"POST",
         
         data:{id:id, quantity:quantity, shipping_type: shipping_type, shipping_cost: shipping_cost},
         
         success:function(data){
         	
         $(".subtotal-cart-price").html(data);
         
         $("#cart-products-tbody").load("cart_products_tbody.php");
         
         $("#cart-summary-tbody").load("cart_summary_tbody.php");
         
         }
         
         });
         
         }
         
         });
         
         
         $(document).on("change", ".shipping_type", function(){
         	
         var shipping_cost = Number($(this).data("shipping_cost"));
         
         var total = Number(700);
         
         var total_cart_price = total + shipping_cost;
         
         $(".total-cart-price").html("$" + total_cart_price + ".00");
         	
         });
         
         
         });
         
      </script>
   </body>
</html>
