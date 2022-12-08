<?php
    //Include the PHP functions to be used on the page 
    include('common.php'); 
	
    //Output header and navigation 
    outputHeader("Taxi Escape - Leaderboard");
    outputNavigation("Leaderboard");
   
?>

        
    <div class="article" style= "width: 100%">
<div class="articlediv" style= "width: 100%">
 <div id="table">
 </div>
 </div>
  <div class="sidebar" style= "width: 0%">
  </div>
  </div> 
</div>
    <script src="../JS/leaderboard.js" defer type="module">
</script>

<?php
    outputFooter(); //Output the footer
?>