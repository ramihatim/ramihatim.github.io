<?php
    //Include the PHP functions to be used on the page 
    include('common.php'); 
	
    //Output header and navigation 
    outputHeader("Taxi Escape");
    outputNavigation("GamePage");
   
?>

<div class="article">
<div class="articlediv">
<div id="score"></div>
  </div>

  <div class="sidebar">
  <div id="canvas">
      <div class="gameover" id="blackscreen">
      <p class="gameover"> Game Over </p>
          <p class= "gameover" id="finScore">Score: </p>
      <button type="button" onclick="login()" id="gOverBtn" class="gameOver">RESTART</button>
      </div>
            <div id="taxi"> </div>
            <!-- <div id="cars"></div> -->
           
        </div>
</div>

<script src="../JS/game.js" type="module">
</script>




<?php
    echo '<div class="article ">' ;
    echo '</div>';
 
    //Output the footer
    outputFooter();
?>