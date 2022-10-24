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
    <title>Asus Zenbook 14 | Laptop Square</title>
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
      <img class="mySlides" src="asus/asus_zenbook1.jpg" style="width:100%">
      <img class="mySlides w3-grayscale-max" src="asus/asus_zenbook2.jpg" style="width:100%">
      <img class="mySlides w3-sepia-max" src="asus/asus_zenbook3.jpg" style="width:100%">
      <img class="mySlides" src="asus/asus_zenbook4.jpg" style="width:100%">
      <img class="mySlides" src="asus/asus_zenbook5.jpg" style="width:100%">
      <img class="mySlides" src="asus/asus_zenbook6.jpg" style="width:100%">
      <button class="w3-button w3-display-left w3-hover-opacity" onclick="plusDivs(-1)">&#10094;</button>
      <button class="w3-button w3-display-right w3-hover-opacity" onclick="plusDivs(1)">&#10095;</button>
    </div>
    </div>
    <div style="margin-top: 30px;">
    <h3>Asus Zenbook 14" FHD AMD Ryzen 5 8GB RAM 256GB SSD NVIDIA GeForce MX450 Win 11 Gray</h3>
    <p style="font-size:20px">₱36,995 <span style="text-decoration-line:line-through;color: red;font-size:14px">  ₱44,495</span></p>
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
    <h3>Asus Zenbook 14" FHD AMD Ryzen 5 8GB RAM 256GB SSD NVIDIA GeForce MX450 Win 11 Gray</h3>
    <ul class="w3-ul w3-border">
    <li><p><span style="color: red;">Model: </span>Asus Zenbook 14</p></li>
    <li><p><span style="color: red;">Display: </span>This 14-inch Full HD display provides stunning visuals, while the AMD Ryzen 5 processor and 8GB of RAM power through everyday software and support smooth multitasking.</p></li>
    <li><span style="color: red;">Color: </span>Light Grey</li>
    <li><span style="color: red;">Operating System: </span>Windows 11 Home</li>
    <li><span style="color: red;">CPU: </span>Processor Brand - AMD<br>Processor Model - AMD Ryzen 5 5000 Series<br>Processor Model Number - 5500U<br>Processor Cores - 6-core</li>
    <li><span style="color: red;">RAM: </span>System Memory (RAM) - 8 gigabytes<br>Type of Memory (RAM) - LPDDR4X</li>
    <li><span style="color: red;">Storage: </span>Storage Type - SSD<br>Total Storage Capacity - 256 gigabytes<br>Solid State Drive Capacity - 256 gigabytes</li>
    <li><span style="color: red;">GPU: </span>Graphics Type - Dedicated<br>GPU Brand - NVIDIA<br>Graphics - NVIDIA GeForce MX450</li>
    <li><span style="color: red;">Design: </span>Modern aluminum design<br>Creates a sleek, modern look with clean lines and provides a rigid but lightweight frame.</li>
    <li><span style="color: red;">Wifi: </span>This Wi-Fi and Bluetooth-enabled ASUS ZenBook laptop has a 256GB SSD for rapid boots.</li>
    <li><span style="color: red;">Others: </span>Screen Size - 14 inches<br>Screen Resolution - 1920 x 1080 (Full HD)<br>Touch Screen - No<br>Processor Model - AMD Ryzen 5 5000 Series<br>Processor Model Number - 5500U<br>Storage Type - SSD<br>Total Storage Capacity - 256 gigabytes<br>Solid State Drive Capacity - 256 gigabytes<br>System Memory (RAM) - 8 gigabytes<br>Graphics - NVIDIA GeForce MX450<br>Operating System - Windows 11 Home<br>Battery Type - Lithium-ion polymer<br>Backlit Keyboard - Yes</li>
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