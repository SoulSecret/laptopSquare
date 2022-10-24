<?php
require_once("control.php");
include_once("connection/connection.php");
$con = connection();

if(!isset($_SESSION)){
    session_start();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Laptop Square</title>
    <link rel="stylesheet" type="text/css" href="w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="icon" href="image/logo-main.png">
    <style>
      body{
    background-image: url("image/bg-login.png");
    background-size:cover ;
    }
    </style>
</head>
<body class="w3-mobile w3-sans-serif login">

  <div class="w3-bar w3-black w3-padding-small">
        <a href="index.html"><p class="w3-bar-item w3-border">Laptop <span style="color: green;">Square</span></p></a>
        <div class="w3-right w3-margin w3-green">
        <input class="w3-bar-item w3-border-black w3-text-black" type="search" name="search">
        <a href="#" class="w3-bar-item w3-button w3-left w3-hover-green w3-hover-text-black"><i class="fa fa-search"></i>Search</a>
        <a href="index.php" class="w3-bar-item w3-button w3-hover-green w3-hover-text-black">Home</a>
        <a href="contact.php" class="w3-bar-item w3-button w3-hover-green w3-hover-text-black">Contact</a>
        <?php if(isset($_SESSION['UserLogin'])){?>
    <a href="logout.php" class="w3-bar-item w3-button w3-hover-green w3-hover-text-black">Logout</a>
    <?php }else{ ?>
    <a href="login.php" class="w3-bar-item w3-button w3-hover-green w3-hover-text-black">Login / Signup</a>
    <?php } ?>
        </div>
    </div>
    <div class="w3-display-middle w3-card-4 w3-third">
  <div class="w3-container w3-padding w3-display-middle w3-text-white w3-white w3-card-4" style="width:400px">
    <form action="login.php" method="POST" autocomplete="">
    <h2 class="w3-center w3-monospace w3-wide w3-text-black">Login</h2>
  <div class="w3-display-container w3-row" style="display:flex;">
  <i class="fa fa-user-circle w3-center w3-text-green" style="font-size:30px;margin:auto"></i>
  <input type="text" name="email" placeholder="Email:" class="w3-input w3-border w3-border-green" style="max-width:300px" required></input>
  </div>
  <br>
  <div class="w3-display-container w3-row" style="display:flex;">
  <i class="fa fa-lock w3-center w3-text-green" style="font-size:30px;margin:auto"></i>
  <input type="password" name="password" placeholder="Password:" class="w3-input w3-border w3-border-green" style="max-width:300px" required></input>
  </div>
  <div class="w3-row s5">
    <p class="w3-right w3-text-black"><a href="forgot-password.php" style="text-decoration:none;"><b>Forgot Password?</b></a></p>
  </div>
  <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="w3-panel w3-pale-red w3-center w3-text-black w3-padding-small">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
  <div class="w3-container w3-cell">
  <button type="submit" name="login" class="w3-center w3-panel w3-green w3-padding w3-half w3-center w3-margin-left w3-left w3-text-black w3-hover-green" style="width:300px"><b>Login</b></button>
</div>
   </form>
   <div class="w3-container w3-cell">
    <center>
    <p class="w3-center w3-text-black w3-margin-left">Don't have an Account?  <span><a href="signup.php" style="text-decoration:none;font-weight: bold;">Signup now!</a></span></p>
    </center> 
  </div>
   </div>
 </div>
</body>
</html>