<?php
    //Include the PHP functions to be used on the page 
    include('common.php'); 
	
    //Output header and navigation 
    outputHeader("Taxi Escape - Log In");
    outputNavigation("Log In");
   
?>


<div class="article">
        <!-- dividing the artcicle into two sections "articlediv" and "sidebar" -->
        <div class="articlediv">
            <img src="../IMAGES/logo.png" class="logo2" alt="Home">
            <h1>Play Now!</h1>

            <form class="loginbox">

                <label for="uname"><b>Username:</b></label>
                <input type="username" id="usernameinput2" class="input-field" placeholder="Username" name="Username " required/>


                <label for="psw "><b>Password:</b></label>
                <input type="password" id="passwordinput2" class="input-field" placeholder="Password" name="psw " required/>

                <button type="button" onclick="login()" class="login-btn">Login</button>
                <button type="button" onclick="location.href='SignUpPage.php';" class="register-btn">Register</button>
                <button type="button" onclick="location.href='index.php';" class=" guest-btn ">Skip</button>

                <label>
                </form>


        </div>

        <div class="sidebar ">
            <img src="../IMAGES/taxi.png " class="taximg " alt="Taxi ">

        </div>
    </div>

<?php
    //Output the footer
    outputFooter();
?>