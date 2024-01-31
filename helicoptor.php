<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>helicopter</title>
 
   
    <link rel="stylesheet" href="assetes/CSS/helicopter.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

    <style>
      .hidden_laptop{
        display: none;
      }
      @media (max-width: 767.98px) {
    .hidden_mobile {
        display: none;
    }
    .hidden_laptop{
        display: block;
      }
    
    }
    </style>

        
</head>
<body>
    <?php
      include "header.php";
    ?>

  <main class="all_part">
     <!-- sub header start -->
     <div class="subheader-top mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
            <div class="right-side">
                    <h3 class="right-text">Helicopter Joyride</h3>
                    <!-- <div class="right-img">
                    <img src="./assetes/home/paragliding/location.png" class="w-25 h-25" alt="">
                    <span class="right-para">Kanyakumari</span>
                    </div> -->
                    
                    <div class="right-img">
                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                    <span class="right-para">Kanyakumari</span>
                    </div>
                 </div>
            </div>
            <div class="col-lg-6 col-sm-12">
            <div class="inner-conatiner">
                    <div class="left-img">
                    <img src="./assetes/home/paragliding/reward.png" alt=""style="margin-left:10px">
                    </div>
                    <div class="inner-text">
                        <h4>From</h4>
                        <span class="currency_amount" data-amount="2500"><span class="currency_symbol">₹</span>5000.00</span>
                    </div>
                  </div>
                  <div class="inner-conatiner">
                    <div class="left-img">
                    <img src="./assetes/home/paragliding/time.png" alt="" style="margin-left:30px">
                    </div>
                    <div class="inner-text">
                    <h4>Distance</h4>
                        <span class="currency_amount" ><span class="currency_symbol"></span>30km (air)</span>
                    </div>
                  </div>
                  <div class="inner-conatiner">
                    <div class="left-img">
                    <img src="./assetes/home/paragliding/travel.png" alt=""style="margin-left:10px">
                    </div>
                    <div class="inner-text">
                    <h4>Tour</h4>
                        <span class="currency_amount" data-amount="2500"><span class="currency_symbol"></span>JoyRide</span>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
     <!-- sub header end -->


     <!-- wrapper start -->
   <div class="wrapper"> 
     <div class="container-fluid">
        <div class="row">
           <!-- left side start -->
         <div class="col-lg-6 col-sm-12 dark">
              <!-- carosal start -->
            <div id="carouselExampleControls" class="carousel slide mt-5" data-ride="carousel">
                 <div class="carousel-inner">
                   <div class="carousel-item active">
                     <img src="./assetes/home/paragliding/blog-4-720x480.jpg" class="d-block w-100" alt="...">
                   </div>
                   <div class="carousel-item">
                     <img src="./assetes/home/paragliding/blog-5-720x480.jpg" class="d-block w-100" alt="...">
                   </div>
                   <div class="carousel-item">
                     <img src="./assetes/home/paragliding/blog-6-720x480.jpg" class="d-block w-100" alt="...">
                   </div>
                 </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="sr-only">Previous</span>
                 </button>
                 <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="sr-only">Next</span>
                 </button>
               </div>
               <!-- corasol end -->
               
                <!-- accordian start -->
              <div class="accordion  hidden_mobile" id="accordionExample ">
                    <div class="card">
                        <div class="card-header" >
                            <h2>Description</h2>
                        </div>
                        <div class="card-para p-5">
                            <p>Enjoy the fantastic birds-eye view with exciting helicopter joyride in Kanyakumari. Let an aircraft fly you over and above this beautiful city as an unforgettable experience. Get ready to hop on for an unforgettable aerial tour of Kanyakumari through this helicopter joy ride in Kanyakumari .
                            </p>
                        </div>
                      
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          What to expect
                          </button>
                        </h2>
                      </div>
                      <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                        <ul class="right_margin">
                           <li>Embark on a beautiful and scenic flight around Kanyakumari by helicopter and get photography done too! </li>
                           <li> Enjoy a bird's eye view of the city of Kanyakumari and its magnificent beaches with your loved ones and feel like you are in heaven!</li>
                           <li> Spot the famous landmarks of Kanyakumari and explore the city in a whole new way,Get ready to hop on for an unforgettable aerial tour of Kanyakumari through this helicopter joy ride in Kanyakumari</li>
                       </ul>
                        </div>
                      </div>
                    </div>
					            <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Things To Carry
                          </button>
                        </h2>
                      </div>
                      <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                        <ul class="right_margin">
                           <li>Valid Identification</li>
                           <li>Comfortable Clothing</li>
						               <li>Sunglasses and Sunscreen</li>
						               <li>Camera to Capture Memories</li>
						               <li>Motion Sickness Remedies</li>
						               <li>Carry your Govt Valid ID proof</li>
						            </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           Booking Policies
                          </button>
                        </h2>
                      </div>
                      <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                        <ul>
                          <li>In order to book your trip, you need to select the desired package option. On the checkout page select the suitable date on which you are willing to travel. Fill in the traveler detail and lastly select desired the payment method to proceed with the payment. After the successful payment, you will receive the payment confirmation details on their email ID within 10 minutes. However, in the case of the unavailability of the desired slot for the service, our team will arrange an alternative schedule after the customer's confirmation.</li>
                      </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                       <div class="card-header" id="headingOne">
                         <h2 class="mb-0">
                           <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                             Inclusion & Exclusion
                           </button>
                         </h2>
                       </div>
                   
                       <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                         <div class="card-body">
                         <ul >
                          
                           <li>Pre-flight briefing (Inclusion)</li>
                           <li>30 kilometers of Aerial ride (Inclusion)</li>
                           <li>6 persons per ride required for booking or if less no of people , helicopter can be chartered.(Inclusion)</li>
                           <li>Expenses of personal nature (Exclusion)</li>
                           <li>Pick and drop to/from the boarding point(Exclusion)</li>
                           <li>Anything not mentioned under Inclusions(Exclusion)</li>
                           <li>Food and drinks(Exclusion)</li>
                           <li>Hotel drop-off(Exclusion)</li>
                           <li>Any type of accommodation or stay(Exclusion)</li>
                           <li>Gratuities(Exclusion)</li>
                           </ul>
                           
                         </div>
                       </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Cancellation and Refunds Policy
                            </button>
                          </h2>
                        </div>
                    
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                          <p>All flights are fully refundable if canceled before 72 hours of the scheduled time.s</p>
                          </div>
                        </div>
                      </div>
                  </div>  
                  <!-- accordian end -->
             </div>
           <!-- left side end-->
             
           <!-- right side start -->
           <div class="col-lg-6 col-sm-12 primary bg-light">
                  <!-- wrap the content in a div for scrolling -->
                    
                       <!-- description start -->
                         <div class="col-md-12 mt-5">
                             <h3 class="side_head text-center mt-5">Helicopter JoyRide</h3>
                             <h5 class="text-center side_bar">Experience the Thrill</h5>
                             <p class=" side_para mt-4" >Have you ever imagined having a ride on the air using the helicopter services in Kanyakumari to make your special day an unforgettable one? If yes, this is the right time to reach out to us for the Helicopter Joy ride in TamilNadu.</p>
                         </div>
                       <!-- description end -->

                        <!-- from start -->
                            <section class="container  c_form" style="margin-top:100px;">
                              <div class="row justify-content-md-center">
                                  <form action="save_paraglidimg.php" method="post" class="col-md-10 col-sm-12 bg-white p-5 rounded shadow">
                                      <div class="col-12 text-center">
                                          <h3 class="txt"><strong>Who's Flying?</strong></h3>
                                      </div>
                                      <div class="row">
                                          <div class="col-6">
                                          <label for="f_name" class="form-label">First Name</label>
                                          <input type="text" class="form-control" name="f_name" id="f_name">
                                          </div>
                                          <div class="col-6">
                                          <label for="l_name" class="form-label">Last Name</label>
                                          <input type="text" class="form-control" name="l_name" id="l_name">
                                          </div>
                                      </div>
                                    
                                      <div class="mb-3">
                                          <label for="mobile_no" class="form-label">Mobile.No</label>
                                          <input type="tel" class="form-control" name="mobile_no" id="moblie_number">
                                      </div>
                                      <div class="mb-3">
                                          <label for="email" class="form-label">Email_address</label>
                                          <input type="eamil" class="form-control" name="email_address" id="email">
                                      </div>
                              </div>
                          </section> 
                        
                      
                             <!-- Calendar picker start -->
                            <div class="c_date" style="margin-top:100px;">
                                <label id="c_label" for="datetime"> Date and Time:</label>
                                <input type="datetime-local" id="daytime" name="data_time" onchange="displayDateTime()">
                            </div>
                          <!-- Calendar picker end -->
                      
                            <!-- child and adult start-->
                             
                            <div class="boxs"style="margin-top:50px;"> 
                                <div class="quantity" >
                              
                                    <label  class="q_lable" style="font-size:15; color:black;  font-weight: bold; padding:10px">Adult</label><br> 
                                    <div class="amount-box">
                                          <button class="btn1 btn-decrement" onclick="updateCount(-1, 'quantity1')">-</button>
                                          <span id="count1" class="count">0</span>
                                          <button class="btn1 btn-increment"onclick="updateCount(1, 'quantity1')">+</button>
                                   </div>  
                                </div>
                      
                                <div class="quantity">
                                      <label class="q_lable" style="font-size:15; color:black;  font-weight: bold; padding:10px">Childs</label><br> 
                                      <div class="amount-box">
                                          <button class="btn1 btn-decrement" onclick="updateCount(-1, 'quantity2')">-</button>
                                          <span id="count2" class="count">0</span>
                                          <button class="btn1 btn-increment" onclick="updateCount(1, 'quantity2')">+</button>
                                  </div> 
                               </div>
                           </div>
                                  
                         <!-- child and adult end-->
                      
                          <!-- classic Paragliding start  -->
                          <div class="container1"  style="margin-top:150px;">
                              <div class="row">
                              <div class="col-md-10 bg-white p-3 rounded shadow">
                                  <div class="col-12">
                                      <h3 class="text-center font-weight-bold  txt">Helicopter Ride</h3>
                                  </div>
                                  <div class="col-6">
                                      <label for="" class="input1 font-weight-bold" name="date" id="dateLabel">Date :</label>
                                  </div>
                                  <div class="col-6">
                                      <label for="" class="input1 font-weight-bold" name="time" id="timeLabel">Time :</label>
                                  </div>
                      
                                  <div class="col-12">
                                      <label for="" class="input1 font-weight-bold mb-3" name="sub_total" id="total">Sub Total :</label>
                                  </div>
                                  <div class="col-12">
                                      <label for="" class="input1 font-weight-bold" name="total" id="totals">Total :</label>
                                  </div>
                                  <div class="col-12">
                                      <div class="mb-3 mt-3 form-check">
                                          <input type="checkbox" class="form-check-input" id="terms" required>
                                          <label class="form-check-label" for="terms"> I have read and agree to the website terms and conditions and indemnity waiver *</label>
                                      </div>
                                  </div> 
                                  <div class="col-12 p-3">
                                      <a href="https://rzp.io/l/helicopterridekanyakumari" class="button-primary mt-5 pay_now " style="margin-left:150px;">Pay NOW</a> 
                                  </div>
                              </div>
                          </div>
                       </div>
                      </form>
                         <!-- video start -->
                      <div class="container" style="margin-top:100px">
                         <div class="heading-video">
                         <h3 class="side_head text-center mt-5">Classic Paragliding</h3>
                             <h5 class="text-center side_bar">Experience the Thrill</h5>
                         </div>
                        <div class="row">
                        <video width="560" height="315" controls>
                         <source src="path_to_your_video/video.mp4" type="video/mp4">
                         Your browser does not support the video tag.
                        </video>

                        <div class="v_para">
                        <p class=" side_para mt-5 " >Have you ever imagined having a ride on the air using the helicopter services in Kanyakumari to<br> make your special day an unforgettable one? If yes, this is the right time to reach out to us for <br>the Helicopter Joy ride in TamilNadu.</p>
                        </div>
                      </div>
                    </div> 
                     <!-- video start -->
                    </div>
                
           <!-- right side end -->

           <div class="col-md-10">
              <!-- accordian start -->
              <div class="accordion  hidden_laptop" id="accordionExample ">
                    <div class="card">
                        <div class="card-header" >
                            <h2>Description</h2>
                        </div>
                        <div class="card-para p-5">
                            <p>Enjoy the fantastic birds-eye view with exciting helicopter joyride in Kanyakumari. Let an aircraft fly you over and above this beautiful city as an unforgettable experience. Get ready to hop on for an unforgettable aerial tour of Kanyakumari through this helicopter joy ride in Kanyakumari .
                            </p>
                        </div>
                      
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          What to expect
                          </button>
                        </h2>
                      </div>
                      <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                        <ul class="right_margin">
                           <li>Embark on a beautiful and scenic flight around Kanyakumari by helicopter and get photography done too! </li>
                           <li> Enjoy a bird's eye view of the city of Kanyakumari and its magnificent beaches with your loved ones and feel like you are in heaven!</li>
                           <li> Spot the famous landmarks of Kanyakumari and explore the city in a whole new way,Get ready to hop on for an unforgettable aerial tour of Kanyakumari through this helicopter joy ride in Kanyakumari</li>
                       </ul>
                        </div>
                      </div>
                    </div>
					            <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Things To Carry
                          </button>
                        </h2>
                      </div>
                      <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                        <ul class="right_margin">
                           <li>Valid Identification</li>
                           <li>Comfortable Clothing</li>
						               <li>Sunglasses and Sunscreen</li>
						               <li>Camera to Capture Memories</li>
						               <li>Motion Sickness Remedies</li>
						               <li>Carry your Govt Valid ID proof</li>
						            </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           Booking Policies
                          </button>
                        </h2>
                      </div>
                      <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                        <ul>
                          <li>In order to book your trip, you need to select the desired package option. On the checkout page select the suitable date on which you are willing to travel. Fill in the traveler detail and lastly select desired the payment method to proceed with the payment. After the successful payment, you will receive the payment confirmation details on their email ID within 10 minutes. However, in the case of the unavailability of the desired slot for the service, our team will arrange an alternative schedule after the customer's confirmation.</li>
                      </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                       <div class="card-header" id="headingOne">
                         <h2 class="mb-0">
                           <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                             Inclusion & Exclusion
                           </button>
                         </h2>
                       </div>
                   
                       <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                         <div class="card-body">
                         <ul >
                          
                           <li>Pre-flight briefing (Inclusion)</li>
                           <li>30 kilometers of Aerial ride (Inclusion)</li>
                           <li>6 persons per ride required for booking or if less no of people , helicopter can be chartered.(Inclusion)</li>
                           <li>Expenses of personal nature (Exclusion)</li>
                           <li>Pick and drop to/from the boarding point(Exclusion)</li>
                           <li>Anything not mentioned under Inclusions(Exclusion)</li>
                           <li>Food and drinks(Exclusion)</li>
                           <li>Hotel drop-off(Exclusion)</li>
                           <li>Any type of accommodation or stay(Exclusion)</li>
                           <li>Gratuities(Exclusion)</li>
                           </ul>
                           
                         </div>
                       </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Cancellation and Refunds Policy
                            </button>
                          </h2>
                        </div>
                    
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                          <p>All flights are fully refundable if canceled before 72 hours of the scheduled time.s</p>
                          </div>
                        </div>
                      </div>
                  </div>
             </div>
             
        </div>
     </div>
   </div>
    <!-- wrapper end -->

  </main>



  <?php
   include "footer.php";
  ?>
  
<script>
function displayDateTime() {
    // Get the selected date and time value
    const selectedDateTime = document.getElementById('daytime').value;

    // Split the date and time string into separate parts
    const [date, time] = selectedDateTime.split('T');

    // Display date and time in the respective labels
    document.getElementById('dateLabel').textContent = `Date:  ${date}`;
    document.getElementById('timeLabel').textContent = `Time:  ${time}`;
}






let count1 = 0;
let count2 = 0;
let person= 5000;
let child= 5000;


function updateCount(value, quantity) {

if (quantity === 'quantity1') {
count1 += value;
count1 = Math.max(count1, 0);
document.getElementById('count1').innerText =count1;
} else if (quantity === 'quantity2') {
count2 += value;
count2 = Math.max(count2, 0);
document.getElementById('count2').innerText =count2;
}

const totalAmount = (count1*person) + (count2*child);
document.getElementById('total').innerText =`SubTotal:  ${totalAmount}` ;
document.getElementById('totals').innerText = `Total:   ${totalAmount}`;
}
</script>

</body>
</html>