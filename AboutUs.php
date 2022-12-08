<?php
    //Include the PHP functions to be used on the page 
    include('common.php'); 
	
    //Output header and navigation 
    outputHeader("Taxi Escape - About Us");
    outputNavigation("About Us");
   
?>



<div class="article">
<div class="articlediv">
<h1 style="text-align: center; padding-top: 10px;">About Us</h1>
  <h1 style="text-align: left; padding-left: 50px; padding-top: 50px;">About the Game:</h1>
  <p style="text-align: center; padding-left: 50px; padding-right: 50px;">
  Taxi Escape is an infinite runner game. The user will play as a taxi car driving through a traffic jam; the user can press left or the right arrow keys to move the car. The game objective is to avoid hitting any obstacle and survive for as much time as
                possible. the Game was built using HTML, CSS, Java-Script and PHP.
  </p>
  <h1 style="text-align: left; padding-left: 50px; padding-top: 50px;">About the Maker:</h1>
  <p style="text-align: left; padding-left: 50px;">
  Taxi Escape was built by Rami Hassan as part of a coursework
  </p>

  <h1 style="text-align: left; padding-left: 50px; padding-top: 50px;">Download Link:</h1>
  <p style="text-align: left; padding-left: 50px;">
  <a href="https://github.com/ramihatim">Click Here</a></p>

  </div>

  <div class="sidebar">
  <img src="../IMAGES/taxi.png " class="taximg " alt="Taxi ">
  </div>
  </div>
  
    <?php
    //Output the footer
    outputFooter();
?>