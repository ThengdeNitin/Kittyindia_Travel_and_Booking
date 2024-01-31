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
  background-image: url('https://cdn.pixabay.com/photo/2022/11/21/22/08/paragliding-7608345_1280.jpg');
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
  color: aliceblue;
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
    <img class="half-img right-half " src="https://cdn.pixabay.com/photo/2016/04/04/08/57/paragliding-1306378_1280.jpg" alt="Right Half Image" style="width:80%;">
    
    <div class="cards-container" style="margin-top: 120px;">
      <h3 class="bsH18Ka" style="text-shadow: 2px 2px black;">Recent Post</h3>
      <a href="ppg_course.php" style="color:black;text-decoration:none;">
      <div class="card mb-3" style="border-radius:20px;">
        <div class="row g-0" >
            <div class="col-md-8" style="margin-top:20px;">
              <div class="card-body">
                  <h5 class="h27Uaw" style="color:white">PPG Training</h5>
              </div>
            </div>
          </div>
        </div>
      </a>

      <a href="ppg1.php" style="color:black;text-decoration:none;">
      <div class="card mb-3" style="border-radius:20px;">
        <div class="row g-0" >
            <div class="col-md-8" style="margin-top:10px;">
              <div class="card-body">
                  <h5 class="h27Uaw" style="color:white">Paramotoring Adventures: Personal Stories from the Sky</h5>
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
                  <h5 class="h27Uaw" style="color:white">Exploring Scenic Paramotoring Destinations: Unforgettable Aerial Views</h5>
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
<h1>Exploring Scenic Paramotoring Destinations: Unforgettable Aerial Views
</h1><br>
    <div class="elementor-element elementor-element-43dbdce elementor-widget elementor-widget-gva_post_content" data-id="43dbdce" data-element_type="widget" data-widget_type="gva_post_content.default">
				 <div class="elementor-widget-container">
			 <div class="gva-element-gva_post_content gva-element">   
    <div class="post-content">
         
  <ol>
     <li><strong>Lake Bled, Slovenia</strong><br>Nestled in the Julian Alps, Lake Bled is a picture-perfect destination for paramotoring<br>enthusiasts. As you take off from the shores of the crystal-clear lake, you’ll be treated to<br>panoramic views of Bled Castle perched on a cliff and the iconic Bled Island with its charming<br>church. The lush greenery, pristine waters, and the stunning alpine backdrop make this<br>Slovenian gem a must-visit for any paramotor adventurer.</li>
  </ol>



  <ol start="2">
      <li><strong>Rio de Janeiro, Brazil</strong><br>If you’re looking for a blend of urban and natural beauty, consider paramotoring over Rio de<br>Janeiro. Soaring above the iconic Christ the Redeemer statue, the golden beaches of<br>Copacabana and Ipanema, and the lush Tijuca Forest, you’ll witness the city’s vibrant culture<br>and remarkable natural wonders all at once. The juxtaposition of the bustling cityscape and the<br>tranquil coastline is truly awe-inspiring.</li>

      <li><strong>The Swiss Alps, Switzerland</strong><br>Paramotoring over the Swiss Alps is a dream come true for thrill-seekers. With its towering<br>peaks, glacier-fed lakes, and charming alpine villages, Switzerland offers some of the most<br>breathtaking aerial views in the world. Imagine flying over the Matterhorn, Jungfrau, or Lake<br>Geneva, with the majestic mountains as your backdrop. It’s a visual feast that will stay with you<br>forever.</li>

      <li><strong>Santorini, Greece</strong><br>The Greek island of Santorini is famous for its stunning sunsets, white-washed buildings, and<br>crystal-clear waters. Paramotoring here takes your exploration of this paradise to new heights,<br>quite literally. Soaring over the island, you’ll witness the unique architecture of its villages,<br>dramatic cliffs, and the renowned blue-domed churches. The contrasting colors of the blue sea<br>and white buildings are a sight to behold from the air.</li>

      <li><strong>Maasai Mara, Kenya</strong><br>For wildlife enthusiasts, the Maasai Mara in Kenya offers a once-in-a-lifetime paramotoring<br>experience. Flying over the vast savannah, you’ll have the chance to spot iconic African wildlife<br>such as elephants, lions, zebras, and giraffes from a bird’s-eye view. The sheer diversity and<br>abundance of wildlife in this region are nothing short of spectacular.</li>
  </ol>
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