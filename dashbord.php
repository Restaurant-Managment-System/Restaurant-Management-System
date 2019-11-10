<?php require "connection.php";?>


<?php 
if(!isset($_SESSION['user'])) 
   header("location:index.html");
?>



<!DOCTYPE html>
<html lang="">
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Good Food Restaurant</title>
     <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <div style="background-image: url(image/restaurant_image_3.jpg); width:100%;height: 575px; background-repeat: no-repeat; background-size: cover;">
          <div id="nav">
               <ul>
                    <li><a href="dashbord.php">Home</a></li>
                    <li><a href="menu.php">Menus</a></li>
					<li><a href="reservation.php">Reservation</a></li>
                     
					<li><a href="booktable.php">BookTable</a></li>
					<li><a href="partyhall.php">PartyHall</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
					<li><a href="contactus.php">ContactUs</a></li>
                    <li><a href="logout.php">LogOut</a></li>
                    
               </ul>
          </div>
          <div id="heading-1">
               <h1><bold>SEASON THE MOMENT</bold></h1>
               <p id="para_1" style="color:white; font-weight: bold;"><i>UNEXPECTED FLAVORS FORGED FROM NATURE AND MINGLED</i></p>
               <p id="para_2" style="color: gainsboro;font-weight: bold;"><i>ENJOYABLE & DELICIOUS</i></p>
          </div>
     
          <div id="discover">
              <div id="section-1">
                    <p id="para_3"><i>Discover</i><br>THE STORY</p>
                    <p id="para_4"><i>Good Food</i> is a cornerstone in the Fresh Meadows community and has been recognized for its outstanding Mediterranean cuisine, excellent service and friendly staff.<br><br></p>
              </div>
              <div id="section-2">
                    <img src="image/restaurant_image_8.jpg" width="250px"; height="250px"; style="padding-right: 50px;" >
                    <img src="image/restaurant_image_7.jpg" width="250px"; height="250px"; > 
              </div>
          </div>
          
          <div style="background-image: url(image/restaurant_image_10.jpg); width: 100%; height: 350px; background-repeat: no-repeat; background-size: cover;" id="menu-image">
<!--               <img src="image/restaurant_image_10.jpg"s width="100%" height="350px;">-->
               
               <div id="heading-2">
               <h1><i>TASTEFUL</i></h1>
                    <p><i>RECIPES</i></p>
               </div>
          </div>
          
          <div id="discover-2">
               <div id="section-3">
                    <img src="image/restaurant_image_11.jpg" width="250px"; height="250px"; style="padding-right: 50px;">
                    <img src="image/restaurant_image_12.jpg" width="250px"; height="250px";>
               </div>
               <div id="section-4">
                    <p id="para_5"><i>Discover</i><br>MENU</p>
                    <p id="para_6">For those with pure food indulgence in mind, come next door and sate your desires with our ever changing internationally and seasonally inspired small plates.  We love food, lots of different food, just like you.<br><br></p>
               </div>
          </div>
          
          <div style="background-image: url(image/restaurant_image_20.jpg); width: 100%; height: 350px; background-repeat: no-repeat; background-size: cover;" id="blend-image">
               <div id="heading-3">
               <h1><i>THE PERFECT</i></h1>
                    <p><i>BLEND</i></p>
               </div>  
                
          <div id="discover-3">
              <div id="section-5">
                    <p id="para_7"><i>CULINARY</i><br>DELIGHT</p>
                    <p id="para_8">We promise an intimate and relaxed dining experience that offers something different to local and foreign patrons and ensures you enjoy a memorable food experience every time.<br><br></p>
              </div>
              <div id="section-6">
                    <img src="image/restaurent_image_9.jpg" width="250px"; height="250px"; style="padding-right: 50px;" >
                    <img src="image/restaurant_image_15.jpg" width="250px"; height="250px"; > 
              </div>
          </div>
          </div>
          
         <div style="background-image: url(image/restaurant_image_19.jpg); width: 100%; height: 350px; background-repeat: no-repeat; background-size: cover;" id="welcome">
              <div id="heading-4">
               <h1 style="color:goldenrod"><i>WELCOME</i></h1>
                    <p style="color: goldenrod"><i>GOOD FOOD</i></p>
               </div>
         </div>
         
         <footer>
              <p>&copy; 2019 GOOD FOOD Restaurant Team</p>
         </footer>
     </div>
</body>
</html>
