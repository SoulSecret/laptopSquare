<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['Access'])){
echo '<script>
alert("Login First!");
window.location.href = "login.php";
</script>';
}else{

}

include_once("connection/connection.php");
$con = connection();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment | Laptop Square</title>
    <link rel="stylesheet" type="text/css" href="w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="icon" href="image/logo-main.png">
    <style>
      body{
    background-image: url("image/bg-login.png");
    background-size:cover ;
    }
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
      }
      option{
        width: 250px;
      }
    </style>
</head>
<body class="w3-mobile w3-cursive">

  <div class="w3-bar w3-black w3-padding-small">
        <a href="index.php"><p class="w3-bar-item w3-border">Laptop <span style="color: green;">Square</span></p></a>
        <div class="w3-right w3-margin w3-green">
        <input class="w3-bar-item w3-border-black w3-text-black" type="search" name="search">
        <a href="#" class="w3-bar-item w3-button w3-left w3-hover-green w3-hover-text-black"><i class="fa fa-search"></i>Search</a>
        <a href="index.php" class="w3-bar-item w3-button w3-hover-green w3-hover-text-black">Home</a>
        <?php if(isset($_SESSION['UserLogin'])){?>
    <a href="logout.php" class="w3-bar-item w3-button w3-hover-green w3-hover-text-black">Logout</a>
    <?php }else{ ?>
    <a href="login.php" class="w3-bar-item w3-button w3-hover-green w3-hover-text-black">Login / Signup</a>
    <?php } ?>
        </div>
    </div>
    <div class="w3-card-4 w3-display-middle w3-white w3-padding" style="width: 800px;height: 420px;margin-left: 15%;">
    <div class="w3-container w3-cell w3-cell-top" style="max-width:320px">
      <h3>Card Information</h3>
      <p>Indicate details of the card from which money will be debated</p>
      <div class="w3-border w3-round-xlarge w3-padding" style="width: 300px;">
        <div class="w3-right" style="font-size: 30px">
        <img src="image/card.png" style="width:160px;height: 40px;">
        </div>
      <p>Card Details<br><input class="w3-text-black w3-input" type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx"></p>
      <p>Month / Year and CVV Code</p>
        <div class="w3-container w3-cell w3-cell-top">
           <input type="number" id="month" placeholder="XX" class="w3-text-black w3-input" pattern="[0-9]{2}" style="max-width: 50px;">
         </div>
           <div class="w3-container w3-cell w3-cell-top">
           <input type="number" id="year" placeholder="XX" class="w3-text-black w3-input" pattern="[0-9]{4}" style="max-width: 50px;">
         </div>
        <div class="w3-container w3-cell w3-cell-top">
        <input type="number" id="cvv" placeholder="XXXX" class="w3-text-black w3-input" pattern="[0-9]{4}"  style="max-width: 75px;">
        </div>
      </div>
    </div>
      <div class="w3-container w3-cell w3-cell-top">
      <h3>Personal Information</h3>
      <div class="w3-padding">
        <div class="w3-container w3-cell">
          <input type="name" name="firstname" placeholder="First Name" class="w3-input w3-border w3-round-xxlarge w3-padding" style="width: 150px;">
        </div>
          <div class="w3-container w3-cell">
          <input type="name" name="lastname" placeholder="Last Name" class="w3-input w3-border w3-round-xxlarge w3-padding" style="width: 150px;">
        </div>
       <div class="w3-container w3-margin-top">
        <select class="w3-select w3-border w3-round-xxlarge w3-padding" style="width: 330px;">
          <option value="State">Select State</option>
          <option value="Abra">Abra</option>
          <option value="Agusan del Norte">Agusan del Norte</option>
          <option value="Agusan del Sur">Agusan del Sur</option>
          <option value="Aklan">Aklan</option>
          <option value="Albay">Albay</option>
          <option value="Antique">Antique</option>
          <option value="Apayao">Apayao</option>
          <option value="Aurora">Aurora</option>
          <option value="Autonomous Region in Muslim Mindanao">Autonomous Region in Muslim Mindanao</option>
          <option value="Basilan">Basilan</option>
          <option value="Bataan">Bataan</option>
          <option value="Batanes">Batanes</option>
          <option value="Batangas">Batangas</option>
          <option value="Benguet">Benguet</option>
          <option value="Bicol Region">Bicol Region</option>
          <option value="Biliran">Biliran</option>
          <option value="Bohol">Bohol</option>
          <option value="Bukidnon">Bukidnon</option>
          <option value="Bulacan">Bulacan</option>
          <option value="Cagayan">Cagayan</option>
          <option value="Cagayan Valley">Cagayan Valley</option>
          <option value="Calabarzon">Calabarzon</option>
          <option value="Camarines Norte">Camarines Norte</option>
          <option value="Camarines Sur">Camarines Sur</option>
          <option value="Camiguin">Camiguin</option>
          <option value="Capiz">Capiz</option>
          <option value="Caraga">Caraga</option>
          <option value="Catanduanes">Catanduanes</option>
          <option value="Cavite">Cavite</option>
          <option value="Cebu">Cebu</option>
          <option value="Central Luzon">Central Luzon</option>
          <option value="Central Visayas">Central Visayas</option>
          <option value="Compostela Valley">Compostela Valley</option>
          <option value="Cordillera Administrative Region">Cordillera Administrative Region</option>
          <option value="Cotabato">Cotabato</option>
          <option value="Davao del Norte">Davao del Norte</option>
          <option value="Davao del Sur">Davao del Sur</option>
          <option value="Davao Occidental">Davao Occidental</option>
          <option value="Davao Oriental">Davao Oriental</option>
          <option value="Davao Region">Davao Region</option>
          <option value="Dinagat Islands">Dinagat Islands</option>
          <option value="Eastern Samar">Eastern Samar</option>
          <option value="Eastern Visayas">Eastern Visayas</option>
          <option value="Guimaras">Guimaras</option>
          <option value="Ifugao">Ifugao</option>
          <option value="Ilocos Norte">Ilocos Norte</option>
          <option value="Ilocos Region">Ilocos Region</option>
          <option value="Ilocos Sur">Ilocos Sur</option>
          <option value="Iloilo">Iloilo</option>
          <option value="Isabela">Isabela</option>
          <option value="Kalinga">Kalinga</option>
          <option value="La Union">La Union</option>
          <option value="Laguna">Laguna</option>
          <option value="Lanao del Norte">Lanao del Norte</option>
          <option value="Lanao del Sur">Lanao del Sur</option>
          <option value="Leyte">Leyte</option>
          <option value="Maguindanao">Maguindanao</option>
          <option value="Marinduque">Marinduque</option>
          <option value="Masbate">Masbate</option>
          <option value="Metro Manila">Metro Manila</option>
          <option value="Mimaropa">Mimaropa</option>
          <option value="Misamis Occidental">Misamis Occidental</option>
          <option value="Misamis Oriental">Misamis Oriental</option>
          <option value="Mountain Province">Mountain Province</option>
          <option value="Negros Occidental">Negros Occidental</option>
          <option value="Negros Oriental">Negros Oriental</option>
          <option value="Northern Mindanao">Northern Mindanao</option>
          <option value="Northern Samar">Northern Samar</option>
          <option value="Nueva Ecija">Nueva Ecija</option>
          <option value="Nueva Vizcaya">Nueva Vizcaya</option>
          <option value="Occidental Mindoro">Occidental Mindoro</option>
          <option value="Oriental Mindoro">Oriental Mindoro</option>
          <option value="Palawan">Palawan</option>
          <option value="Pampanga">Pampanga</option>
          <option value="Pangasinan">Pangasinan</option>
          <option value="Quezon">Quezon</option>
          <option value="Quirino">Quirino</option>
          <option value="Rizal">Rizal</option>
          <option value="Romblon">Romblon</option>
          <option value="Sarangani">Sarangani</option>
          <option value="Siquijor">Siquijor</option>
          <option value="Soccsksargen">Soccsksargen</option>
          <option value="Sorsogon">Sorsogon</option>
          <option value="South Cotabato">South Cotabato</option>
          <option value="Southern Leyte">Southern Leyte</option>
          <option value="Sultan Kudarat">Sultan Kudarat</option>
          <option value="Sulu">Sulu</option>
          <option value="Surigao del Norte">Surigao del Norte</option>
          <option value="Surigao del Sur">Surigao del Sur</option>
          <option value="Tarlac">Tarlac</option>
          <option value="Tawi-Tawi">Tawi-Tawi</option>
          <option value="Western Visayas">Western Visayas</option>
          <option value="Zambales">Zambales</option>
          <option value="Zamboanga del Norte">Zamboanga del Norte</option>
          <option value="Zamboanga del Sur">Zamboanga del Sur</option>
          <option value="Zamboanga Peninsula">Zamboanga Peninsula</option>
          <option value="Zamboanga Sibugay">Zamboanga Sibugay</option>
        </select>
        </div>
        <div class="w3-margin-top">
         <div class="w3-container w3-cell">
          <input type="text" name="city" placeholder="City" class="w3-input w3-border w3-round-xxlarge w3-padding" style="width: 150px;">
        </div>
          <div class="w3-container w3-cell">
          <input type="number" name="zipcode" placeholder="Zip code" pattern="[0-9]{6}" class="w3-input w3-border w3-round-xxlarge w3-padding" style="width: 150px;">
        </div>
        </div>
        <div class="w3-container w3-margin-top">        
      <input type="number" name="zipcode" placeholder="Phone Number" pattern="[0-9]{11}" class="w3-input w3-border w3-round-xxlarge w3-padding" style="width: 330px;">     
      <input type="text" name="city" placeholder="Aditional Address" class="w3-input w3-border w3-round-xxlarge w3-padding w3-margin-top" style="width: 330px;">
        </div>
        </div>
      <button class="w3-button w3-display-bottommiddle w3 w3-margin w3-green w3-border w3-border-green w3-hover-green w3-round-xxlarge w3-padding" onclick="paynow()">Pay Now</button>
      </div>
    </div>
    <script>
    function paynow() {
     alert("Payment Approved!");
     window.location.href = "index.php";
   }
  </script>
    </body>
    </html>