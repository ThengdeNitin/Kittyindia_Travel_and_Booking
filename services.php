<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     <!-- customize css -->
    <link rel="stylesheet" href="assetes/CSS/services.css">
     
     <!-- boostrap css -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        
     <STYle>
      .call-to-action {
  background-color: #b59f9f; 
  padding: 30px 0;
  margin-left: 40px; 
  margin-right: 40px;
  border-radius:10px;
  
}


.inner-content .text-right {
  text-align: center;
}


.inner-content .text-right .filled-button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.inner-content .text-right .filled-button:hover {
  background-color: #0056b3;
}

     </STYle>
    </head>
<body>
    <?php
     include "header.php";
     ?>
    <!-- main containt start -->
    <section class="">

      <!-- banner start -->
       
       <div class="banner">
         <div class="container">
             <div class="inner_containt">
                <h1 class="text_banner text-center">our services</h1>
             </div>
         </div>
       </div>

      <!-- banner end -->

      <!-- service card start -->
    <section class="travel_section mt-5">
    	<div class="container">
        <div class="service_text center-text">
           <h1 class="service_head text-center" style="margin-top:10px;  color: rgb(83, 30, 83); text-shadow: 2px 2px 4px rgb(201, 7, 7); font-size: 38px;font-weight: 500; margin-bottom:10px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Learn More Our Services</h1>
           <p class="text-dark">There are many variations of passages of Lorem Ipsum available, but the joy have suffered alteration in some format, by injected humour.</p>
        </div>
      <!--best feature start-->
      <div class="row push-down-100">
        <div class="col-md-6 col-sm-12">
        	<div class="best_feature_wrapper">
            	<div class="best_feature_icon"><i class="fa fa-dollar"></i><span class="icon_overlay"></span></div>
                <h3>Price Guarantee</h3>
                <p>Duis non lectus sit amet Etiam adipiscing morbi est imperdiet cursus ame elementum vitae eros.</p>
            </div>
        </div>
        
        <div class="col-md-6 col-sm-12">
        	<div class="best_feature_wrapper">
            	<div class="best_feature_icon"><i class="fa fa-lock"></i><span class="icon_overlay"></span></div>
                <h3>Trust & Safety</h3>
                <p>Duis non lectus sit amet Etiam adipiscing morbi est imperdiet cursus ame elementum vitae eros.</p>
            </div>
        </div>
        
        <div class="col-md-6 col-sm-6">
        	<div class="best_feature_wrapper">
            	<div class="best_feature_icon"><i class="fa fa-plane"></i><span class="icon_overlay"></span></div>
                <h3>Best tour</h3>
                <p>Duis non lectus sit amet Etiam adipiscing morbi est imperdiet cursus ame elementum vitae eros.</p>
            </div>
        </div>
        
        <div class="col-md-6 col-sm-6">
        	<div class="best_feature_wrapper">
            	<div class="best_feature_icon"><i class="fa fa-thumbs-o-up"></i><span class="icon_overlay"></span></div>
                <h3>Good guidance</h3>
                <p>Duis non lectus sit amet Etiam adipiscing morbi est imperdiet cursus ame elementum vitae eros.</p>
            </div>
        </div>
	  </div>
      <!--best feature end-->
      </div>
    </section>
      <!-- service card end -->

     <!-- contact us start -->
     <div class="call-to-action mb-5" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Lorem ipsum dolor sit amet.</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, tempora!</p>
                </div>
                <div class="col-lg-4 col-md-6 text-right">
                  <a href="contact.html" class="filled-button">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     <!-- contact us end -->

    </section>

     <!-- main containt end-->


    <?php
    include "footer.php";
    ?>

    <!-- boostrap js and jquery  -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>