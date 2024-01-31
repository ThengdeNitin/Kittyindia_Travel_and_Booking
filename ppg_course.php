<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>PPG Courses</title>
    <link rel="stylesheet" href="assetes/CSS/ppg_course.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet">
    <style>
 *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.background {
  position: relative;
  width: 100%;
  height: 100vh;
  overflow: hidden;
  margin-bottom: 50px;
}

.half-img {
  position: absolute;
  height: 100%;
  object-fit: cover;
}

.left-half {
  left: 0;
  z-index: -1;
}

.right-half {
  right: 0;
  z-index: -2;
}
.cards-container {
  margin-left: 50px;
  justify-content: space-around;
  position: relative;
  z-index: 1;
  margin-top: 170px;
  box-sizing: border-box;
}

.card {
  background-color: rgb(201, 201, 201);  
  background-image: url('https://cdn.pixabay.com/photo/2020/01/30/19/53/paraglider-4806383_1280.jpg');
  padding: 5px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  margin: 10px;
  max-width: 550px;
  height:100px;
  transition: transform 0.3s;
}

.card:hover {
  transform: scale(1.05);
}

.h27Uaw{
  border-bottom: 1px solid rgb(5, 169, 46);
  margin-top: -20px;
  margin-left: -40px;
}
.bsH18Ka{
  font-family: 'Merriweather', serif;
  margin-left: 5px;
  font-weight: bold;
}
@media (max-width: 768px) {
.card{
  max-width: 400px;
}
.cards-container {
  flex-direction: column;
  margin-top:0;
}
.h27Uaw{
  margin-left: 0;
}
}
@media (max-width: 584px) {
.card{
  max-width: 300px;
  height:100px;
}
.h27Uaw{
  margin-top: -35px;
 
}
}
    </style>
</head>
<body>

<header id="masthead" class="site-header header-primary">
    <!-- header html start -->
    <div class="top-header" >
      <div class="container">
        <div class="row">
          <div class="col-lg-8 d-none d-lg-block">
            <div class="header-contact-info  ">
              <ul>
                <li> <a href="tel:+91 9944571727"><i class="fas fa-phone-alt"></i>+91 9944571727</a> </li>
                <span>||</span>
                <li> <a href="mailto:contact@kittyindia.com">contact@Kittyindia.com</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  
            <!-- navbar start -->

    
       <!-- navbar start -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a  class="navbar-brand"  href="index.html"> <img src="assetes/home/logo.jpg" alt="Kanyakumari Travels" style="width:auto; max-width:90%; height: 50px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <li> <a href="index.php" role="menuitem">Home</a> </li>
            <li> <a href="about_us.php" role="menuitem">About Us</a> </li>
           
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-expanded="false"style="margin-top:-8px;  color:black; "  onMouseOver="this.style.color='red'"onMouseOut="this.style.color='black'">
                 Services
               </a>
               <div class="dropdown-menu p-3" style="width: 500px; margin-bottom:10px; ">
               <div class="row">
                     <div class="col-md-6">
                         <a class="dropdown-item text-dark" href="booking.php">Paramotor JoyRide</a>
                         <a class="dropdown-item text-dark" href="helicopter.php">Helicopter JoyRide</a>
                         <a class="dropdown-item text-dark" href="corporate.php">Corporate Events</a>
                         <!-- <a class="dropdown-item text-white" href="business.php">Business Tours</a> -->
                         <a class="dropdown-item text-dark" href=" school.php">School Tours</a>
                         <a class="dropdown-item text-dark" href="collage_evevt.php">College Tours</a>
                         <a class="dropdown-item text-dark" href="Tamilnadu_Tour_Packages.php">Tamilnadu Tour Packages</a>
                     </div>
                     <div class="col-md-6">
                         <!-- <a class="dropdown-item text-white" href="Tamilnadu_Tour_Packages.php">Tamilnadu Tour Packages</a> -->
                         <a class="dropdown-item text-dark" href="advanture_activities.php">Adventure Activities</a>
                         <a class="dropdown-item text-dark" href="campsite_camping.php">Campsite/Camping</a>
                         <a class="dropdown-item text-dark" href="beach_activities.php">Beach Activities</a>
                         <a class="dropdown-item text-dark" href="beach_sport_event.php">Beach Sports Events</a>
                         <a class="dropdown-item text-dark" href="couple_package.php">Couple Packages</a>
                     </div>
                 </div>
               </div>
            </li>
            <li> <a href="gallery.php" role="menuitem">Gallery</a> </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-expanded="false"style="margin-top:-8px;  color:black; "  onMouseOver="this.style.color='red'"onMouseOut="this.style.color='black'">
                 Courses
               </a>
               <div class="dropdown-menu">
                 <a class="dropdown-item" href="paramotor_course.php">Paramotor Course</a>
                 <a class="dropdown-item" href="ppg_course.php">PPG Course</a>
                 <a class="dropdown-item" href="college_course.php">College Course</a>
                 <a class="dropdown-item" href="school_course.php">School Course</a>
                 <a class="dropdown-item" href="college_course.php">College Course</a>
               </div>
            </li>
            <li> <a href="contact_us.php" role="menuitem">Contact Us</a> </li>
          </div>
        </div>
        <div class="header-btn"> 
          <a href="enquiry.html" class="button-primary">BOOK NOW</a> 
         </div>
      </nav>
     <!-- nav bar end -->
</header>
<!-- header end -->


<!--Top Banner Start-->
<div class="background">
    <img class="half-img left-half " src="https://c1.wallpaperflare.com/path/807/658/394/paramotor-air-sport-light-aviation-338f7ad62b69dc31cc88d224330af7b4.jpg" alt="Left Half Image" style="width:25%; filter: blur(2px);clip-path: polygon(0 0,100% 0,82% 100%,0 100%)">
    <img class="half-img right-half " src="https://c1.wallpaperflare.com/path/4/421/174/paramotor-air-sport-light-aviation-1f7da7f24479de16fb571e5d8841edb9.jpg" alt="Right Half Image" style="width:80%;">
    
    <div class="cards-container" style="margin-top: 120px;">
      <h3 class="bsH18Ka" style="text-shadow: 2px 2px black;">Recent Post</h3>
      <a href="ppg_course.php" style="color:black;text-decoration:none;">
      <div class="card mb-3" style="border-radius:20px;">
        <div class="row g-0" >
            <div class="col-md-8" style="margin-top:20px;">
              <div class="card-body">
                  <h5 class="h27Uaw">PPG Training</h5>
              </div>
            </div>
          </div>
        </div>
      </a>

      <a href="ppg1.php" style="color:black;text-decoration:none;">
      <div class="card mb-3" style="border-radius:20px;">
        <div class="row g-0" >
            <div class="col-md-8">
              <div class="card-body">
                  <h5 class="h27Uaw">Paramotoring Adventures: Personal Stories from the Sky</h5>
              </div>
            </div>
          </div>
        </div>
      </a>

      <a href="ppg2.php" style="color:black;text-decoration:none;">
      <div class="card mb-3" style="border-radius:20px;">
        <div class="row g-0" >
            <div class="col-md-8">
              <div class="card-body" style="margin-top:-10px;">
                  <h5 class="h27Uaw">Exploring Scenic Paramotoring Destinations: Unforgettable Aerial Views</h5>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>


  </div>
<!--Top Banner End-->


<!--PPG Training Start-->
<div style="margin-left:70px;width:90%;">
<div class="elementor-element elementor-element-43dbdce elementor-widget elementor-widget-gva_post_content container" data-id="43dbdce" data-element_type="widget" data-widget_type="gva_post_content.default">
			<div class="elementor-widget-container">
			  <div class="gva-element-gva_post_content gva-element">  
          <h1>PPG Training</h1> 
          <div class="post-content">
            <p><b>Paramotor Training Courses at Rushtofly in Gurgaon (Delhi-NCR) India.</b></p>
            <p><b>Basic Paramotor Training:</b></p>
            <ul>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Duration</span><b>:</b><span style="font-weight: 400;"> 5 Days</span></li>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Theory and Ground Handling Practice</span></li>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Introduction to Equipment</span></li>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Safety Measures and Pre-flight Checks</span></li>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">First Solo Flights and 5 Tandem Flights</span></li>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Cost: Rs. 70,000</span><span style="font-weight: 400;"><br>
            </span><span style="font-weight: 400;"><p></p>
            <p></p></span></li>
            </ul>
            <p><b>Intermediate Paramotor Training:</b></p>
            <ul>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Duration: 7 Days</span></li>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Advanced Ground Handling Techniques</span></li>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Flight Maneuvers and Control</span></li>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Navigation and Weather Understanding</span></li>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Long-Distance Flights and Solo or Tandem 10 Flights</span><span style="font-weight: 400;"></span></li>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Cost: Rs. 1,25,000</span></li>
            </ul>
              <p><span style="font-weight: 400;"><br>
              </span><b>Advanced Paramotor Training:</b></p>
            <ul>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Duration: 10 Days</span></li>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Advanced Aerodynamics and Wing Control</span></li>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Cross-Country Flying Techniques</span></li>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Emergency Procedures and Safety Drills</span></li>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Aerobatics Training (Optional)</span></li>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Cost: Rs. 1,50,000</span></li>
            </ul>
              <p><span style="font-weight: 400;"><br>
              </span><b>Training Includes:</b></p>
            <ul>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Experienced Instructors with International Certifications</span></li>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">State-of-the-Art Equipment</span></li>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Ground Briefings and Practical Sessions</span></li>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Hands-on Experience in Takeoff, Flight, and Landing</span></li>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Certificate of Completion</span></li>
            </ul>
              <p><span style="font-weight: 400;"><br>
              </span><b>Requirements:</b></p>
            <ul>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Minimum Age: 18 years</span></li>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Good Physical Health</span></li>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Willingness to Learn and Follow Instructions</span></li>
            </ul>
              <p><span style="font-weight: 400;"><br>
              </span><b>Why Choose Rushtofly:</b></p>
            <ul>
              <li style="font-weight: 400;" aria-level="1"><b>&nbsp;&nbsp;</b><span style="font-weight: 400;">Experienced and Certified Instructors</span></li>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Safe and Controlled Environment</span></li>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Comprehensive Training Modules</span></li>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Personalized Attention</span></li>
              <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Opportunity for Solo Flights</span></li>
            </ul>
              <p><span style="font-weight: 400;"><br>
              </span><b>Note</b><span style="font-weight: 400;">: Course prices may vary and are subject to change. Please contact us for the latest information and to schedule your training slots.</span></p>
        </div>      

      </div>		
   </div>		
</div>
</div>
</div>
<!--PPG Training End-->


















   <?php
   include "footer.php";
   ?>

</body>
</html>