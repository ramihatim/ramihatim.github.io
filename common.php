<?php

function outputHeader($title){ //creating a function to output the header
    echo '<!DOCTYPE HTML>';
   
    echo '<html>';
    echo '<head>';
    echo '<title>' . $title . '</title>';
    echo '<!-- Link to external style sheet -->';
    echo '<link rel="stylesheet" type="text/css" href="../CSS/style.css">';
    echo '<script src="../JS/content.js">
    </script>';
    echo '</head>';
    echo '<body>';
}
    function outputNavigation($pageName){
    //Output banner and the navigation bar
    echo '<header>';
    echo '<meta charset="UTF-8">';
    echo '<!-- creating the navigation bar using a list -->';
    echo '<a href="index.php"> <img src="../IMAGES/logo.png" class="logo" alt="Home"> </a>';
    echo '<div class="navigation">';
    echo '<nav>';
    echo '<ul>';
    
    //Linking pages and Adresses through arrays
    $linkNames = array("About Us", "How To Play", "Leaderboard");
    $linkAddresses = array("AboutUs.php", "HowToPlay.php", "Leaderboard.php");
    
    //Output navigation using a for loop
    for($x = 0; $x < count($linkNames); $x++){
        echo '<li> <a ' ;
      if($linkNames[$x] == $pageName){
            echo 'class="selected" ';
        }
        else{
            echo 'class="navItem" ';
        }
        echo 'href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</a></li>';
    }
    echo '<li> <button type="button" class="login-head" id="login-ID" onclick="location.href=\'login.php\';">Log In</button> <button type="button" class="logout-head" id="logout-ID" onclick="logout()">Log Out</button></li>';
    echo '</ul>';
    echo '</nav>';
    echo '</header>';
    
}
function outputFooter(){
    echo '<script>
        window.onload = checkLogin();
        window.onload = init2;
    </script>';
    
    echo '<footer>';
    echo '</footer>';
    echo '</body>';
    echo '</html>';
}