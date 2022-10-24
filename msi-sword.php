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
    <title>Ideapad 3 | Laptop Square</title>
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
      <img class="mySlides" src="lenovo/ideapad3-1.jpg" style="width:100%">
      <img class="mySlides w3-grayscale-max" src="lenovo/ideapad3-2.jpg" style="width:100%">
      <img class="mySlides w3-sepia-max" src="lenovo/ideapad3-3.jpg" style="width:100%">
      <img class="mySlides" src="lenovo/ideapad3-4.jpg" style="width:100%">
      <img class="mySlides" src="lenovo/ideapad3-5.jpg" style="width:100%">
      <img class="mySlides" src="lenovo/ideapad3-6.jpg" style="width:100%">
      <img class="mySlides" src="lenovo/ideapad3-7.jpg" style="width:100%">
      <button class="w3-button w3-display-left w3-hover-opacity" onclick="plusDivs(-1)">&#10094;</button>
      <button class="w3-button w3-display-right w3-hover-opacity" onclick="plusDivs(1)">&#10095;</button>
    </div>
    </div>
    <div style="margin-top: 30px;">
    <h3>Lenovo Ideapad 3 15.6" FHD Touch Screen Laptop - Intel Core i5 11th Gen, 12GB RAM, 256GB SSD - Grey</h3>
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
    <h3>Lenovo Ideapad 3 15.6" FHD Touch Screen Laptop - Intel Core i5 11th Gen, 12GB RAM, 256GB SSD - Grey</h3>
    <ul class="w3-ul w3-border">
    <li><p><span style="color: red;">Model: </span>Lenovo IdeaPad 3 15ITL06</p></li>
    <li><p><span style="color: red;">Display: </span>15.6" Full-HD 10-point multitouch screen<br>The 1920 x 1080 resolution boasts impressive color and clarity. IPS technology for wide viewing angles. Energy-efficient LED backlight.</p></li>
    <li><span style="color: red;">Color: </span>Arctic Grey</li>
    <li><span style="color: red;">Operating System: </span>Windows 10 Home in S mode</li>
    <li><span style="color: red;">CPU: </span>11th Gen Intel® Core™ i5-1135G7 mobile processor<br>Ultra-low-voltage platform. Quad-core, eight-way processing provides maximum high-efficiency power to go.</li>
    <li><span style="color: red;">RAM: </span>12GB system memory for full-power multitasking<br>Plenty of high-bandwidth RAM to smoothly run your games and photo- and video-editing applications, as well as multiple programs and browser tabs all at once.</li>
    <li><span style="color: red;">Storage: </span>256GB Solid State Drive (NVMe TLC)<br>Save files fast and store more data. With massive amounts of storage and advanced communication power, NVMe TLC SSDs are great for major gaming applications, multiple servers, daily backups, and more.</li>
    <li><span style="color: red;">GPU: </span>Intel® Iris Xe Graphics<br>On-processor graphics with shared video memory provide everyday image quality for Internet use, basic photo editing and casual gaming.</li>
    <li><span style="color: red;">Design: </span>Modern aluminum design<br>Creates a sleek, modern look with clean lines and provides a rigid but lightweight frame.</li>
    <li><span style="color: red;">Wifi: </span>Wireless/Wired connectivity (WiFi 6 - 802.11 ax)<br>Flexible, dual-band connectivity w/ greater reliability thanks to two data streams and antennas. Connect to a Wi-Fi router to experience GB Wi-Fi speeds nearly 3X faster vs. standard Wi-Fi 5 w/ improved responsiveness for even more devices.</li>
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