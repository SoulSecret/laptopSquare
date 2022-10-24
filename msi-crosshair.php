<?php
if(!isset($_SESSION)){
    session_start();
}
include_once("connection/connection.php");
$con = connection();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MSI Crosshair 15 | Laptop Square</title>
    <link rel="stylesheet" type="text/css" href="w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="image/logo-main.png">
    <style>
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
      }
    </style>
</head>
<body class="w3-mobile w3-light-grey w3-sans-serif">
     <div class="w3-bar w3-black w3-padding-small">
        <a href="index.php"><p class="w3-bar-item w3-border">Laptop <span style="color: green;">Square</span></p></a>
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
    <div class="w3-row s4 w3-white w3-margin">
        <div class="w3-left w3-margin-left w3-margin">
    <div class="w3-content w3-display-container" style="max-width:500px">
      <img class="mySlides" src="msi/msi-crosshair1.jpg" style="width:100%">
      <img class="mySlides w3-grayscale-max" src="msi/msi-crosshair2.jpg" style="width:100%">
      <img class="mySlides w3-sepia-max" src="msi/msi-crosshair3.jpg" style="width:100%">
      <img class="mySlides" src="msi/msi-crosshair4.jpg" style="width:100%">
      <img class="mySlides" src="msi/msi-crosshair5.jpg" style="width:100%">
      <button class="w3-button w3-display-left w3-hover-opacity" onclick="plusDivs(-1)">&#10094;</button>
      <button class="w3-button w3-display-right w3-hover-opacity" onclick="plusDivs(1)">&#10095;</button>
    </div>
    </div>
    <div style="margin-top: 30px;">
    <h3>MSI Crosshair 144HZ i7-11800H 16GB RAM 512GB SSD RTX 3050 GPU Titanium Gray</h3>
    <p style="font-size:20px">₱67,995 <span style="text-decoration-line:line-through;color: red;font-size:14px">  ₱83,995</span></p>
    </div>
     <div style="margin-top: 30px;">
    <p>Quantity</p>
    <button id="plus">+</button>
    <input type="number" id="input" value="1" style="width:30px"></input>
    <button id="minus">-</button>
    </div>
    <div style="margin-top: 25px;">
    <button class="w3-button w3-light-red w3-hover-text-red w3-border w3-border-red"><i class="fa fa-cart-plus" style="margin-right:10px"></i>Add to Cart</button>
    <a href="payment.php"><button class="w3-button w3-red w3-hover-red w3-hover-opacity">Buy Now</button></a>
    </div>
    </div>
    <div class="w3-border w3-border-black w3-margin w3-round w3-padding-small" style="background-color: #e6e6e6;">
    <h3>MSI Crosshair 144HZ i7-11800H 16GB RAM 512GB SSD RTX 3050 GPU Titanium Gray</h3>
    <ul class="w3-ul w3-border">
    <li><p><span style="color: red;">Model: </span>MSI Crosshair</p></li>
    <li><p><span style="color: red;">Display: </span>Screen Size - 15.6"<br>Display Screen Type - LCD<br>Display Screen Technology - In-plane Switching (IPS) Technology<br>Aspect Ratio - 16:9<br>Standard Refresh Rate - 144 Hz<br>Screen Mode - Full HD<br>Screen Resolution - 1920 x 1080</li>
    <li><span style="color: red;">Operating System: </span>Upgradable Windows OS - Free upgrade to Windows 11 when available<br>Operating System Platform - Windows<br>Operating System - Windows 10 Home</li>
    <li><span style="color: red;">CPU: </span>Processor Type - Core i7<br>Processor Generation - 11th Gen<br>Processor Model - i7-11800H<br>Processor Core - Octa-core (8 Core)<br>Processor Speed - 2.40 GHz<br>Maximum Turbo Speed - 4.60 GHz</li>
    <li><span style="color: red">Storage: </span>Drive Type - SSD<br>Total Solid State Drive Capacity - 512 GB<br>Solid State Drive Interface - NVMe</li>
    <li><span style="color: red;">RAM: </span>1Standard Memory - 16 GB<br>Memory Technology - DDR4<br>Memory Speed - 3200 MHz</li>
    <li><span style="color: red;">GPU: </span>Graphics Controller Model - Geforce RTX 3050<br>Graphics Memory Capacity - 4 GB<br>Graphics Memory Technology - GDDR6<br>Graphics Memory Accessibility - Dedicated<br>GPU Boost Clock - 1500 MHz<br>Maximum Graphics Power - 60 W/li>
    <li><span style="color: red;">Design: </span>Color - Titanium Gray<br>Height -.94"<br>Width - 14.13"<br>Depth - 10.2"<br>Weight (Approximate) - 4.63 lbs</li>
    <li><span style="color: red;">Wifi & Bluetooth: </span>Wireless LAN Model - Wi-Fi 6<br>Wireless LAN Standard - AX201 (2x2)<br>Bluetooth - Yes<br>Bluetooth Standard - Bluetooth 5.1</li>
    <li><span style="color: red;">HDMI: </span>HDMI output expands your viewing options<br>Connect to an HDTV or high-def monitor to set up two screens side by side or just see more of the big picture.</li>
    <li><span style="color: red;">Keyboard: </span>Backlit keyboard for easy typing in dim or dark locations<br>Touchpad with scroll and multitouch capability.</li>
    </ul>
    </div>
    <script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      x[slideIndex-1].style.display = "block";  
    }
    </script>
     <script>
const minusButton = document.getElementById('minus');
const plusButton = document.getElementById('plus');
const inputField = document.getElementById('input');

minusButton.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField.value) || 0;
  inputField.value = currentValue - 1;
});

plusButton.addEventListener('click', event => {
  event.preventDefault();
  const currentValue = Number(inputField.value) || 0;
  inputField.value = currentValue + 1;
});
</script> 
</body>
</html>