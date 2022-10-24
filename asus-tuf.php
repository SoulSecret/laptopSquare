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
    <title>Asus TUF Gaming F15 | Laptop Square</title>
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
      <img class="mySlides" src="asus/asus_tuf1.jpg" style="width:100%">
      <img class="mySlides w3-grayscale-max" src="asus/asus_tuf2.jpg" style="width:100%">
      <img class="mySlides w3-sepia-max" src="asus/asus_tuf3.jpg" style="width:100%">
      <img class="mySlides" src="asus/asus_tuf4.jpg" style="width:100%">
      <img class="mySlides" src="asus/asus_tuf5.jpg" style="width:100%">
      <img class="mySlides" src="asus/asus_tuf6.jpg" style="width:100%">
      <button class="w3-button w3-display-left w3-hover-opacity" onclick="plusDivs(-1)">&#10094;</button>
      <button class="w3-button w3-display-right w3-hover-opacity" onclick="plusDivs(1)">&#10095;</button>
    </div>
    </div>
    <div style="margin-top: 30px;">
    <h3>ASUS FX506LH-HN215W TUF GAMING F15 / I5 / 8GB RAM / 512GB SSD / GTX1650 / 15.6" FHD IPS WIN 11 HOME</h3>
    <p style="font-size:20px">₱49,995</p>
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
    <h3>ASUS FX506LH-HN215W TUF GAMING F15 / I5 / 8GB RAM / 512GB SSD / GTX1650 / 15.6" FHD IPS WIN 11 HOME</h3>
    <ul class="w3-ul w3-border">
    <li><p><span style="color: red;">Model: </span>ASUS TUF Gaming F15</p></li>
    <li><p><span style="color: red;">Display: </span>15.6-inch<br>Resolution  FHD (1920 x 1080) 16:9<br>Refresh Rate  144Hz<br>Viewing Angle 170/170<br>Panel Tech  Value IPS-level<br>Brightness  250<br>Contrast  1000:1<br>NTSC %  45%<br>SRGB %  62.5%<br>Adobe % 47.1%<br>Anti glare  anti-glare display</p></li>
    <li><span style="color: red;">Color: </span>Bonfire Black</li>
    <li><span style="color: red;">Operating System: </span>Windows 11</li>
    <li><span style="color: red;">CPU: </span>Intel® Core™ i5-10300H Processor 2.5 GHz (8M Cache, up to 4.5 GHz, 4 cores)</li>
    <li><span style="color: red;">RAM: </span>8GB DDR4 SO-DIMM(2933MHz for i5-10300H/i7-10750H/i7-10870H)<br>On board memory N/A<br>Memory Slot 2x SO-DIMM slots<br>DIMM Memory 8GB DDR4 SO-DIMM(2933MHz for i5-10300H/i7-10750H/i7-10870H)<br>Memory Max. 32GB</li>
    <li><span style="color: red;">Storage: </span>System Storage Installed  512GB PCIe® 3.0 NVMe™ M.2 SSD<br>M.2 slots support either SATA or NVMe 1<br>M.2 SSD Support List  M.2 256GB PCIe SSD</li>
    <li><span style="color: red;">GPU: </span>Graphic NVIDIA® GeForce® GTX 1650<br>Graphic Memory  4GB GDDR6<br>IGPU  Intel® UHD Graphics</li>
    <li><span style="color: red;">Design: </span>The TUF Gaming chassis has been redesigned for 2022, and is 4.5% smaller than last year's models. The TUF logo has been reimagined as well, with both embossed and laser-sculpted versions. Despite this size reduction, the brand new 2022 TUF Gaming F15 still houses a large touchpad with anime-inspired accents and four-way indicators.</li>
    <li><span style="color: red;">Wifi: </span>LAN  10/100/1000 Mbps<br>Wi-Fi/Bluetooth Wi-Fi 6(802.11ax)+Bluetooth 5.2 (Dual band) 2*2<br>(*BT version may change with OS upgrades.)</li>
    <li><span style="color: red;">Others: </span>I/O Ports  1x USB 2.0 Type-A<br>2x USB 3.2 Gen 1 Type-A//1x USB 3.2 Gen 2 Type-C support DisplayPort™ / G-SYNC<br>Display output  1x HDMI 2.0b<br>Audio 1x 3.5mm Combo Audio Jack<br>Webcam  720P HD camera<br>Mic Built-in array microphone<br>Keyboard Type Backlit Chiclet Keyboard RGB<br>Speakers  2-speaker system with Smart Amplifier Technology<br>Audio Tech  DTS software<br>Operating System  Windows 11 Home<br>Office  1-month trial for new Microsoft 365 customers. Credit card<br>required.<br>Security  BIOS Administrator Password and User Password Protection Kensington Security Slot™ Trusted Platform Module (Firmware TPM)<br>Battery 48WHrs, 3S1P, 3-cell Li-ion<br>Power ø6.0, 150W AC Adapter, Output: 20V DC, 7.5A, 150W, Input: 100~240V AC, 50/60Hz universal<br>Bundled Peripherals TUF Gaming backpack<br>Reparability Index (for FR) 5.</li>
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