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
    <title>Lenovo Yoga 6 | Laptop Square</title>
    <link rel="stylesheet" type="text/css" href="w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="image/logo-main.png">
    <style>
    .mySlides {display:none;}
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
      <img class="mySlides" src="lenovo/yoga1.jpg" style="width:100%">
      <img class="mySlides w3-grayscale-max" src="lenovo/yoga2.jpg" style="width:100%">
      <img class="mySlides w3-sepia-max" src="lenovo/yoga3.jpg" style="width:100%">
      <img class="mySlides" src="lenovo/yoga4.jpg" style="width:100%">
      <img class="mySlides" src="lenovo/yoga5.jpg" style="width:100%">
      <img class="mySlides" src="lenovo/yoga6.jpg" style="width:100%">
      <img class="mySlides" src="lenovo/yoga7.jpg" style="width:100%">
      <img class="mySlides" src="lenovo/yoga8.jpg" style="width:100%">
      <button class="w3-button w3-display-left w3-hover-opacity" onclick="plusDivs(-1)">&#10094;</button>
      <button class="w3-button w3-display-right w3-hover-opacity" onclick="plusDivs(1)">&#10095;</button>
    </div>
    </div>
    <div style="margin-top: 30px;">
    <h3>Lenovo Yoga 6 13.3" FHD 2-in-1 Touchscreen AMD Ryzen 7 5700U 16GB RAM DDR4 512 SSD Win11 Abyss Blue</h3>
    <p style="font-size:20px">₱46,995 <span style="text-decoration-line:line-through;color: red;font-size:14px"> ₱65,795</span></p>
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
    <h3>Lenovo Yoga 6 13.3" FHD 2-in-1 Touchscreen AMD Ryzen 7 5700U 16GB RAM DDR4 512 SSD Win11 Abyss Blue</h3>
    <ul class="w3-ul w3-border">
    <li><p><span style="color: red;">Model: </span> Lenovo Yoga 6</p></li>
    <li><p><span style="color: red;">Display: </span>Screen Size - 13.3 inches<br>Screen Resolution - 1920 x 1080 (Full HD)<br>Touch Screen - Yes</p></li>
    <li><span style="color: red;">Color: </span> Abyss Blue with Fabric Cover</li>
    <li><span style="color: red;">Operating System: </span>Operating System - Windows 11 Home<br>Operating System Architecture - 64-bit</li>
    <li><span style="color: red;">CPU: </span>Processor Brand - AMD<br>Processor Model - AMD Ryzen 7 5000 Series<br>Processor Model Number - 5700U<br>Processor Cores - 8-core<br>Processor Speed (up to) - 1.8 gigahertz</li>
    <li><span style="color: red;">RAM: </span>System Memory (RAM) - 16 gigabytes<br>Type of Memory (RAM) - DDR4<br>System Memory RAM Speed - 3200 megahertz<br>Cache Memory - 8 megabytes</li>
    <li><span style="color: red;">Storage: </span>Storage Type - SSD<br>Total Storage Capacity - 512 gigabytes<br>Solid State Drive Capacity - 512 gigabytes<br>Solid State Drive Interface - NVMe</li>
    <li><span style="color: red;">GPU: </span>Graphics Type - Integrated<br>GPU Brand - AMD Radeon<br>Graphics - AMD Radeon</li>
    <li><span style="color: red;">Ports: </span>Internet Connectivity - Wi-Fi<br>Wireless Networking - Wireless-AX<br>Headphone Jack - Yes<br>Bluetooth Enabled - Yes<br>Number of USB Ports (Total) - 4<br>Number of USB 3.1 Type A Ports - 2<br>Number of USB 3.2 Type A Ports - 2<br>Number of USB 3.0 Type C Ports - 2<br>Number of USB 3.2 Type C Ports - 2<br>Internal Carrier - Not Applicable</li>
    <li><span style="color: red;">Battery: </span>Power Supply Maximum Wattage - 45 watts<br>Battery Cells - 4-cell<br>Battery Type - Lithium-ion polymer</li>
    <li><span style="color: red;">Others: </span>Cooling System - Air<br>2-in-1 Design - Yes<br>Backlit Keyboard - Yes<br>Keyboard Touch Screen - Yes<br>Touchpad Type - 10 point<br>Media Card Reader - No<br>Audio Technology - 2 x 1W; Dolby Atmos Speaker System<br>Speaker Type - Dolby<br>Security Features - Fingerprint reader<br>Cable Lock Slot - None</li>
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