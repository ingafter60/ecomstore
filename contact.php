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
                  <li>Contact Us</li>
               </ul>
               <!-- breadcrumb Ends -->
            </div>
            <!--- col-md-12 Ends -->
            <div class="col-md-12" >
               <!-- col-md-12 Starts -->
               <div class="box" >
                  <!-- box Starts -->
                  <div class="box-header" >
                     <!-- box-header Starts -->
                     <center>
                        <!-- center Starts -->
                        <h2> Contact  To Us </h2>
                        <p class="text-muted" >
                           If you have any questions, please feel free to contact us, our customer service center is working for you 24/7.
                        </p>
                     </center>
                     <!-- center Ends -->
                  </div>
                  <!-- box-header Ends -->
                  <form action="contact.php" method="post" >
                     <!-- form Starts -->
                     <div class="form-group" >
                        <!-- form-group Starts -->
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" required>
                     </div>
                     <!-- form-group Ends -->
                     <div class="form-group">
                        <!-- form-group Starts -->
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" required>
                     </div>
                     <!-- form-group Ends -->
                     <div class="form-group">
                        <!-- form-group Starts -->
                        <label> Subject </label>
                        <input type="text" class="form-control" name="subject" required>
                     </div>
                     <!-- form-group Ends -->
                     <div class="form-group">
                        <!-- form-group Starts -->
                        <label> Message </label>
                        <textarea class="form-control" name="message"> </textarea>
                     </div>
                     <!-- form-group Ends -->
                     <div class="form-group">
                        <!-- form-group Starts -->
                        <label> Select Enquiry Type </label>
                        <select name="enquiry_type" class="form-control">
                           <!-- select Starts -->
                           <option> Select Enquiry Type </option>
                           <option> Order and Delivery Support </option>
                           <option> Technical Support </option>
                           <option> Price Concern </option>
                        </select>
                        <!-- select Ends -->
                     </div>
                     <!-- form-group Ends -->
                     <div class="text-center">
                        <!-- text-center Starts -->
                        <button type="submit" name="submit" class="btn btn-primary">
                        <i class="fa fa-user-md"></i> Send Message
                        </button>
                     </div>
                     <!-- text-center Ends -->
                  </form>
                  <!-- form Ends -->
               </div>
               <!-- box Ends -->
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
