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
            <!--======= NAVBAR ======= -->
            <div class="col-md-12" >
               <!--- col-md-12 Starts -->
               <ul class="breadcrumb" >
                  <!-- breadcrumb Starts -->
                  <li>
                     <a href="index.php">Home</a>
                  </li>
                  <li>Shop</li>
               </ul>
               <!-- breadcrumb Ends -->
            </div>
            <!--- col-md-12 Ends -->
            <div class="col-md-3">
               <!-- col-md-3 Starts -->
               <div class="panel panel-default sidebar-menu">
                  <!-- panel panel-default sidebar-menu Starts -->
                  <div class="panel-heading">
                     <!-- panel-heading Starts -->
                     <h3 class="panel-title">
                        <!-- panel-title Starts -->
                        Manufacturers
                        <div class="pull-right">
                           <!-- pull-right Starts -->
                           <a href="#" style="color:black;">
                           <span class="nav-toggle hide-show">
                           Hide
                           </span>
                           </a>
                        </div>
                        <!-- pull-right Ends -->
                     </h3>
                     <!-- panel-title Ends -->
                  </div>
                  <!-- panel-heading Ends -->
                  <div class="panel-collapse collapse-data">
                     <!-- panel-collapse collapse-data starts -->
                     <div class="panel-body">
                        <!-- panel-body Starts -->
                        <div class="input-group">
                           <!-- input-group Starts -->
                           <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-manufacturer" placeholder="Filter Manufacturers">
                           <a class="input-group-addon"> <i class="fa fa-search"></i> </a>
                        </div>
                        <!-- input-group Ends -->
                     </div>
                     <!-- panel-body Ends -->
                     <div class="panel-body scroll-menu">
                        <!-- panel-body scroll-menu Starts -->
                        <ul class="nav nav-pills nav-stacked category-menu" id="dev-manufacturer">
                           <!-- nav nav-pills nav-stacked category-menu Starts -->
                           <li style='background:#dddddd;' class='checkbox checkbox-primary'>
                              <a>
                              <label>
                              <input  type='checkbox' value='6' name='manufacturer' class='get_manufacturer'>
                              <span>
                              <img src='admin_area/other_images/akshay-kumar.jpg' width='20px' >&nbsp;
                              Akshay Kumar
                              </span>
                              </label>
                              </a>
                           </li>
                           <li class='checkbox checkbox-primary'>
                              <a>
                              <label>
                              <input  type='checkbox' value='2' name='manufacturer' class='get_manufacturer'>
                              <span>
                              <img src='admin_area/other_images/image2.jpg' width='20px'> &nbsp;
                              Amir Khan
                              </span>
                              </label>
                              </a>
                           </li>
                           <li class='checkbox checkbox-primary'>
                              <a>
                              <label>
                              <input  type='checkbox' value='3' name='manufacturer' class='get_manufacturer'>
                              <span>
                              <img src='admin_area/other_images/image3.jpg' width='20px'> &nbsp;
                              Omri Liba
                              </span>
                              </label>
                              </a>
                           </li>
                           <li class='checkbox checkbox-primary'>
                              <a>
                              <label>
                              <input  type='checkbox' value='4' name='manufacturer' class='get_manufacturer'>
                              <span>
                              <img src='admin_area/other_images/manufacturer.jpg' width='20px'> &nbsp;
                              Joy Peng
                              </span>
                              </label>
                              </a>
                           </li>
                           <li class='checkbox checkbox-primary'>
                              <a>
                              <label>
                              <input  type='checkbox' value='5' name='manufacturer' class='get_manufacturer'>
                              <span>
                              <img src='admin_area/other_images/image6.jpg' width='20px'> &nbsp;
                              Kane Bender
                              </span>
                              </label>
                              </a>
                           </li>
                        </ul>
                        <!-- nav nav-pills nav-stacked category-menu Ends -->
                     </div>
                     <!-- panel-body scroll-menu Ends -->
                  </div>
                  <!-- panel-collapse collapse-data Ends -->
               </div>
               <!-- panel panel-default sidebar-menu Ends -->
               <div class="panel panel-default sidebar-menu">
                  <!--- panel panel-default sidebar-menu Starts -->
                  <div class="panel-heading">
                     <!-- panel-heading Starts -->
                     <h3 class="panel-title">
                        <!-- panel-title Starts -->
                        Products Categories
                        <div class="pull-right">
                           <!-- pull-right Starts -->
                           <a href="#" style="color:black;">
                           <span class="nav-toggle hide-show">
                           Hide
                           </span>
                           </a>
                        </div>
                        <!-- pull-right Ends -->
                     </h3>
                     <!-- panel-title Ends -->
                  </div>
                  <!-- panel-heading Ends -->
                  <div class="panel-collapse collapse-data">
                     <!-- panel-collapse collapse-data Starts -->
                     <div class="panel-body">
                        <!-- panel-body Starts -->
                        <div class="input-group">
                           <!-- input-group Starts -->
                           <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-p-cats" placeholder="Filter Product Categories">
                           <a class="input-group-addon"> <i class="fa fa-search"></i> </a>
                        </div>
                        <!-- input-group Ends -->
                     </div>
                     <!-- panel-body Ends -->
                     <div class="panel-body scroll-menu">
                        <!-- panel-body scroll-menu Starts -->
                        <ul class="nav nav-pills nav-stacked category-menu" id="dev-p-cats">
                           <!-- nav nav-pills nav-stacked category-menu Starts -->
                           <li class='checkbox checkbox-primary' style='background:#dddddd;' >
                              <a>
                              <label>
                              <input  type='checkbox' value='7' name='p_cat' class='get_p_cat' id='p_cat' >
                              <span>
                              <img src='admin_area/other_images/jacket.jpg' width='20'> &nbsp;
                              jackets
                              </span>
                              </label>
                              </a>
                           </li>
                           <li class='checkbox checkbox-primary' style='background:#dddddd;' >
                              <a>
                              <label>
                              <input  type='checkbox' value='8' name='p_cat' class='get_p_cat' id='p_cat' >
                              <span>
                              Microsoft Windows
                              </span>
                              </label>
                              </a>
                           </li>
                           <li class='checkbox checkbox-primary'>
                              <a>
                              <label>
                              <input  type='checkbox' value='4' name='p_cat' class='get_p_cat' id='p_cat' >
                              <span>
                              <img src='admin_area/other_images/image3.jpg' width='20'> &nbsp;
                              Coats
                              </span>
                              </label>
                              </a>
                           </li>
                           <li class='checkbox checkbox-primary'>
                              <a>
                              <label>
                              <input  type='checkbox' value='5' name='p_cat' class='get_p_cat' id='p_cat' >
                              <span>
                              <img src='admin_area/other_images/image2.jpg' width='20'> &nbsp;
                              T-Shirts
                              </span>
                              </label>
                              </a>
                           </li>
                           <li class='checkbox checkbox-primary'>
                              <a>
                              <label>
                              <input  type='checkbox' value='6' name='p_cat' class='get_p_cat' id='p_cat' >
                              <span>
                              <img src='admin_area/other_images/sweater.jpg' width='20'> &nbsp;
                              Sweater
                              </span>
                              </label>
                              </a>
                           </li>
                        </ul>
                        <!-- nav nav-pills nav-stacked category-menu Ends -->
                     </div>
                     <!-- panel-body scroll-menu Ends -->
                  </div>
                  <!-- panel-collapse collapse-data Ends -->
               </div>
               <!--- panel panel-default sidebar-menu Ends -->
               <div class="panel panel-default sidebar-menu">
                  <!--- panel panel-default sidebar-menu Starts -->
                  <div class="panel-heading">
                     <!-- panel-heading Starts -->
                     <h3 class="panel-title">
                        <!-- panel-title Starts -->
                        Categories
                        <div class="pull-right">
                           <!-- pull-right Starts -->
                           <a href="#" style="color:black;">
                           <span class="nav-toggle hide-show">
                           Hide
                           </span>
                           </a>
                        </div>
                        <!-- pull-right Ends -->
                     </h3>
                     <!-- panel-title Ends -->
                  </div>
                  <!-- panel-heading Ends -->
                  <div class="panel-collapse collapse-data">
                     <!-- panel-collapse collapse-data Starts -->
                     <div class="panel-body">
                        <!-- panel-body Starts -->
                        <div class="input-group">
                           <!-- input-group Starts -->
                           <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-cats" placeholder="Filter Categories">
                           <a class="input-group-addon"> <i class="fa fa-search"> </i> </a>
                        </div>
                        <!-- input-group Ends -->
                     </div>
                     <!-- panel-body Ends -->
                     <div class="panel-body scroll-menu">
                        <!-- panel-body scroll-menu Starts -->
                        <ul class="nav nav-pills nav-stacked category-menu" id="dev-cats">
                           <!-- nav nav-pills nav-stacked category-menu Starts -->
                           <li class='checkbox checkbox-primary' style='background:#dddddd;'>
                              <a>
                              <label>
                              <input  type='checkbox' value='4' name='cat' class='get_cat' id='cat'> 
                              <span>
                              <img src='admin_area/other_images/cat_image.jpg' width='20'>&nbsp;
                              Others
                              </span>
                              </label>
                              </a>
                           </li>
                           <li class='checkbox checkbox-primary' style='background:#dddddd;'>
                              <a>
                              <label>
                              <input  type='checkbox' value='5' name='cat' class='get_cat' id='cat'> 
                              <span>
                              <img src='admin_area/other_images/image11.jpg' width='20'>&nbsp;
                              Men
                              </span>
                              </label>
                              </a>
                           </li>
                           <li class='checkbox checkbox-primary'>
                              <a>
                              <label>
                              <input  type='checkbox' value='2' name='cat' class='get_cat' id='cat'> 
                              <span>
                              <img src='admin_area/other_images/zinta_preity.jpg' width='20'>&nbsp;
                              Feminine
                              </span>
                              </label>
                              </a>
                           </li>
                           <li class='checkbox checkbox-primary'>
                              <a>
                              <label>
                              <input  type='checkbox' value='3' name='cat' class='get_cat' id='cat'> 
                              <span>
                              <img src='admin_area/other_images/image10.jpg' width='20'>&nbsp;
                              Kids
                              </span>
                              </label>
                              </a>
                           </li>
                           <li class='checkbox checkbox-primary'>
                              <a>
                              <label>
                              <input  type='checkbox' value='6' name='cat' class='get_cat' id='cat'> 
                              <span>
                              Antivirus
                              </span>
                              </label>
                              </a>
                           </li>
                           <li class='checkbox checkbox-primary'>
                              <a>
                              <label>
                              <input  type='checkbox' value='7' name='cat' class='get_cat' id='cat'> 
                              <span>
                              Softwares
                              </span>
                              </label>
                              </a>
                           </li>
                        </ul>
                        <!-- nav nav-pills nav-stacked category-menu Ends -->
                     </div>
                     <!-- panel-body scroll-menu Ends -->
                  </div>
                  <!-- panel-collapse collapse-data Ends -->
               </div>
               <!--- panel panel-default sidebar-menu Ends -->
            </div>
            <!-- col-md-3 Ends -->
            <div class="col-md-9" >
               <!-- col-md-9 Starts --->
               <div class='box'>
                  <h1>Shop</h1>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using '</p>
               </div>
               <div class="row flex-wrap" id="Products" >
                  <!-- row Starts -->
                  <div class='col-md-4 col-sm-6 center-responsive' >
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
                  <div class='col-md-4 col-sm-6 center-responsive' >
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
                  <div class='col-md-4 col-sm-6 center-responsive' >
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
                  <div class='col-md-4 col-sm-6 center-responsive' >
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
                  <div class='col-md-4 col-sm-6 center-responsive' >
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
                  <div class='col-md-4 col-sm-6 center-responsive' >
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
               </div>
               <!-- row Ends -->
               <center>
                  <!-- center Starts -->
                  <ul class="pagination" >
                     <!-- pagination Starts -->
                     <li><a href='shop.php?page=1' >First Page</a></li>
                     <li><a href='shop.php?page=1' >1</a></li>
                     <li><a href='shop.php?page=2' >2</a></li>
                     <li><a href='shop.php?page=3' >3</a></li>
                     <li><a href='shop.php?page=3' >Last Page</a></li>
                  </ul>
                  <!-- pagination Ends -->
               </center>
               <!-- center Ends -->
            </div>
            <!-- col-md-9 Ends --->
            <div id="wait" style="position:absolute;top:40%;left:45%;padding:100px;padding-top:200px;">
               <!--- wait Starts -->
            </div>
            <!--- wait Ends -->
         </div>
         <!-- container Ends -->
      </div>
   <!--======= FOOTER ======= -->
<?php include './includes/footer.php' ?>
   <!-- footer ends -->
   <!--======= COPY RIGHT ======= -->
<?php include './includes/copyright.php' ?>
   <!-- copyright Ends -->
   <!--======= SCRIPTS ======= -->
<?php include './includes/scripts.php' ?>
      <script>
         $(document).ready(function(){
         
         /// Hide And Show Code Starts ///
         
         $('.nav-toggle').click(function(){
         
         $(".panel-collapse,.collapse-data").slideToggle(700,function(){
         
         if($(this).css('display')=='none'){
         
         $(".hide-show").html('Show');
         
         }
         else{
         
         $(".hide-show").html('Hide');
         
         }
         
         });
         
         });
         
         /// Hide And Show Code Ends ///
         
         /// Search Filters code Starts /// 
         
         $(function(){
         
         $.fn.extend({
         
         filterTable: function(){
         
         return this.each(function(){
         
         $(this).on('keyup', function(){
         
         var $this = $(this), 
         
         search = $this.val().toLowerCase(), 
         
         target = $this.attr('data-filters'), 
         
         handle = $(target), 
         
         rows = handle.find('li a');
         
         if(search == '') {
         
         rows.show(); 
         
         } else {
         
         rows.each(function(){
         
         var $this = $(this);
         
         $this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();
         
         });
         
         }
         
         });
         
         });
         
         }
         
         });
         
         $('[data-action="filter"][id="dev-table-filter"]').filterTable();
         
         });
         
         /// Search Filters code Ends /// 
         
         });
         
          
         
      </script>
      <script>
         $(document).ready(function(){
          
           // getProducts Function Code Starts 
         
           function getProducts(){
           
           // Manufacturers Code Starts 
         
             var sPath = ''; 
         
         var aInputs = $('li').find('.get_manufacturer');
         
         var aKeys = Array();
         
         var aValues = Array();
         
         iKey = 0;
         
         $.each(aInputs,function(key,oInput){
         
         if(oInput.checked){
         
         aKeys[iKey] =  oInput.value
         
         };
         
         iKey++;
         
         });
         
         if(aKeys.length>0){
         
         var sPath = '';
         
         for(var i = 0; i < aKeys.length; i++){
         
         sPath = sPath + 'man[]=' + aKeys[i]+'&'; 
         
         }
         
         }
         
         // Manufacturers Code ENDS 
         
         // Products Categories Code Starts 
         
         var aInputs = Array();
         
         var aInputs = $('li').find('.get_p_cat');
         
         var aKeys = Array();
         
         var aValues = Array();
         
         iKey = 0;
         
         $.each(aInputs,function(key,oInput){
         
         if(oInput.checked){
         
         aKeys[iKey] =  oInput.value
         
         };
         
         iKey++;
         
         });
         
         if(aKeys.length>0){
         
         for(var i = 0; i < aKeys.length; i++){
         
         sPath = sPath + 'p_cat[]=' + aKeys[i]+'&';
         
         }
         
         }
         
         // Products Categories Code ENDS 
         
            // Categories Code Starts 
         
         var aInputs = Array();
         
         var aInputs = $('li').find('.get_cat');
         
         var aKeys  = Array();
         
         var aValues = Array();
         
         iKey = 0;
         
             $.each(aInputs,function(key,oInput){
         
             if(oInput.checked){
         
             aKeys[iKey] =  oInput.value
         
         };
         
             iKey++;
         
         });
         
         if(aKeys.length>0){
         
             for(var i = 0; i < aKeys.length; i++){
         
             sPath = sPath + 'cat[]=' + aKeys[i]+'&';
         
         }
         
         }
         
            // Categories Code ENDS 
            
            // Loader Code Starts 
         
         $('#wait').html('<img src="images/load.gif">'); 
         
         // Loader Code ENDS
         
         // ajax Code Starts 
         
         $.ajax({
         
         url:"load.php", 
          
         method:"POST",
          
         data: sPath+'sAction=getProducts', 
          
         success:function(data){
          
          $('#Products').html('');  
          
          $('#Products').html(data);
          
          $("#wait").empty(); 
          
         }  
         
         });  
         
             $.ajax({
         url:"load.php",  
         method:"POST",  
         data: sPath+'sAction=getPaginator',  
         success:function(data){
         $('.pagination').html('');  
         $('.pagination').html(data);
         }  
         
             });
         
         // ajax Code Ends 
            
            }
         
            // getProducts Function Code Ends    
         
         $('.get_manufacturer').click(function(){ 
         
         getProducts(); 
         
         });
         
         
           $('.get_p_cat').click(function(){ 
         
         getProducts();
         
         }); 
         
         $('.get_cat').click(function(){ 
         
         getProducts(); 
         
         });
          
          
          }); 
         
      </script>
   </body>
</html>



      