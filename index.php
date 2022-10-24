<?php
if(!isset($_SESSION)){
    session_start();
}
include_once("connection/connection.php");
$con = connection();
?>
<!DOCTYPE html>
<html style="scroll-behavior: smooth;" lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home | Laptop Square</title>
    <link rel="stylesheet" type="text/css" href="w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="image/logo-main.png">
    </head>
    <body class="w3-mobile w3-light-grey w3-sans-serif">
     <div class="w3-bar w3-black w3-padding-small">
        <a href="index.php"><p class="w3-bar-item w3-border">Laptop <span style="color: green;">Square</span></p></a>
        <div class="w3-right w3-margin w3-green">
        <input class="w3-bar-item w3-border-black w3-text-black" id="input" type="search" name="search" placeholder="Search...">
				<div class="search_bx2 w3-bar-item w3-border-black w3-text-black w3-green" style="top:60px; position: absolute; width: 230px;	max-height: 200px; background-color: #ffffff; overflow: auto; visibility: hidden; opacity: 0; transition: .3s linear;"></div>
        <a href="#" class="w3-bar-item w3-button w3-left w3-hover-green w3-hover-text-black"><i class="fa fa-search"></i>Search</a>
        <a href="index.php" class="w3-bar-item w3-button w3-hover-green w3-hover-text-black">Home</a>
        <div class="w3-dropdown-hover">
        <button class="w3-button w3-hover-green w3-hover-text-black">Laptops </button>
        <div class="w3-dropdown-content w3-green w3-bar-block w3-border">
        <a href="#lenovo" class="w3-bar-item w3-button w3-hover-green w3-hover-text-black">Lenovo</a>
        <a href="#asus" class="w3-bar-item w3-button w3-hover-green w3-hover-text-black">Asus</a>
        <a href="#msi" class="w3-bar-item w3-button w3-hover-green w3-hover-text-black">MSI</a>
        <a href="#acer" class="w3-bar-item w3-button w3-hover-green w3-hover-text-black">Acer</a>
        </div>
        </div>
        <a href="contact.php" class="w3-bar-item w3-button w3-hover-green w3-hover-text-black">Contact</a>
        <?php if(isset($_SESSION['UserLogin'])){?>
    <a href="logout.php" class="w3-bar-item w3-button w3-hover-green w3-hover-text-black">Logout</a>
    <?php }else{ ?>
    <a href="login.php" class="w3-bar-item w3-button w3-hover-green w3-hover-text-black">Login / Signup</a>
    <?php } ?>
    </div>
    </div>
    <div class="w3-content w3-section" style="max-width:90%">
    <img class="w3-round-xlarge" src="image/main.png" style="width:100%;height:600px">
    </div>
    <div class="page w3-center w3-auto w3-margin w3-wide w3-text-red">Price List</div>
     <table class="w3-table-all w3-padding" style="max-width:90%;margin-left:5%">
    </tr>
    <tr>
      <th>Laptops</th>
      <th>Discounted Price</th>
      <th>Price Before</th>
    </tr>
    <!-Lenovo-!>
    <tr>
      <td>Lenovo Ideapad 3</td>
      <td>₱36,995</td>
      <td>₱44,996</td>
    </tr>
    <tr>
      <td>Lenovo Ideapad Gaming 3</td>
      <td>₱39,999</td>
      <td>₱47,495</td>
    </tr>
    <tr>
      <td>Lenovo Yoga 6</td>
      <td>₱46,995</td>
      <td>₱65,795</td>
    </tr>
    <!-Asus-!>
    <tr>
      <td>Asus Vivobook 15.6</td>
      <td>₱24,995</td>
      <td>₱58,799</td>
    </tr>
    <tr>
      <td>Asus TUF Gaming F15</td>
      <td>₱49,999</td>
      <td>₱0</td>
    </tr>
    <tr>
      <td>Asus Zenbook 14</td>
      <td>₱46,995</td>
      <td>₱65,795</td>
    </tr>
    <!-MSI-!>
    <tr>
      <td>MSI Modern 15</td>
      <td>₱48,995</td>
      <td>₱58,999</td>
    </tr>
    <tr>
      <td>MSI Crosshair 15</td>
      <td>₱67,995</td>
      <td>₱83,996</td>
    </tr>
    <tr>
      <td>MSI Sword</td>
      <td>₱59,995</td>
      <td>₱83,995</td>
    </tr>
    <!-Acer-!>
    <tr>
      <td>Acer Aspire 5 15.6</td>
      <td>₱24,995</td>
      <td>₱34,495</td>
    </tr>
    <tr>
      <td>Acer Aspire 5 14</td>
      <td>₱37,999</td>
      <td>₱53,199</td>
    </tr>
    <tr>
      <td>Acer Swift 3</td>
      <td>₱31,990</td>
      <td>₱44,795</td>
    </tr>
  </table>
    <div class="page w3-center w3-auto w3-margin w3-wide" id="lenovo">Lenovo</div>
    <!-Lenovo-!>
    <div>
       <div class="w3-display-container w3-auto w3-row w3-section w3-stretch w3-mobile" style="margin-left:15%;">
        <div class="w3-col w3-margin-left w3-card-4 s4" style="width:230px;max-width:280px;">
        <a href="ideapad3.php" style="text-decoration:none">
        <div class="w3-center">
        <img class="w3-hover-opacity" src="lenovo/ideapad3-1.jpg" style="width:100%;height:100%;">
        <div class="w3-container w3-center">
            <p style="font-size:13px;">Lenovo Ideapad 3</p>
            <p><span style="text-decoration-line:line-through;color: red;font-size:14px">₱44,495 </span>  ₱36,995</p>
         </a>
        </div>
       </div>
      </div>
      <div class="w3-col w3-card-4 s4" style="width:230px;max-width:280px;margin-left:80px;">
        <a href="ideapadGaming3.php" style="text-decoration:none">
        <div class="w3-center">
        <img class="w3-hover-opacity" src="lenovo/ideapad3-11.jpg" style="width:100%;height:100%;">
        <div class="w3-container w3-center">
            <p style="font-size:13px;">Lenovo Ideapad Gaming 3</p>
            <p><span style="text-decoration-line:line-through;color: red;font-size:14px">₱47,495 </span>₱39,999</p>
         </a>
        </div>
       </div>
      </div>
      <div class="w3-col w3-card-4 s4" style="width:230px;max-width:280px;margin-left:80px;">
        <a href="yoga.php" style="text-decoration:none">
        <div class="w3-center">
        <img class="w3-hover-opacity" src="lenovo/yoga1.jpg" style="width:100%;height:100%;">
        <div class="w3-container w3-center">
            <p style="font-size:13px;">Lenovo Yoga 6</p>
            <p><span style="text-decoration-line:line-through;color: red;font-size:14px">₱65,795 </span>₱46,995</p>
         </a>
        </div>
       </div>
      </div>
    </div>
     <div class="page w3-center w3-auto w3-margin w3-wide" id="asus">Asus</div>
    <!-Asus-!>
    <div>
       <div class="w3-display-container w3-auto w3-row w3-section w3-stretch w3-mobile" style="margin-left:15%;">
        <div class="w3-col w3-margin-left w3-card-4 s4" style="width:230px;max-width:280px;">
        <a href="asus-vivobook.php" style="text-decoration:none">
        <div class="w3-center">
        <img class="w3-hover-opacity" src="asus/asus_vivobook1.jpg" style="width:100%;height:100%;">
        <div class="w3-container w3-center">
            <p style="font-size:13px;">Asus Vivobook 15.6</p>
            <p><span style="text-decoration-line:line-through;color: red;font-size:14px">₱58,799 </span>  ₱24,995</p>
         </a>
        </div>
       </div>
      </div>
      <div class="w3-col w3-card-4 s4" style="width:230px;max-width:280px;margin-left:80px;">
        <a href="asus-tuf.php" style="text-decoration:none">
        <div class="w3-center">
        <img class="w3-hover-opacity" src="asus/asus_tuf1.jpg" style="width:100%;height:100%;">
        <div class="w3-container w3-center">
            <p style="font-size:13px;">Asus TUF Gaming F15</p>
            <p>₱49,999</p>
         </a>
        </div>
       </div>
      </div>
      <div class="w3-col w3-card-4 s4" style="width:230px;max-width:280px;margin-left:80px;">
        <a href="asus-zenbook.php" style="text-decoration:none">
        <div class="w3-center">
        <img class="w3-hover-opacity" src="asus/asus_zenbook1.jpg" style="width:100%;height:100%;">
        <div class="w3-container w3-center">
            <p style="font-size:13px;">Asus Zenbook 14</p>
            <p><span style="text-decoration-line:line-through;color: red;font-size:14px">₱65,795 </span>₱46,995</p>
         </a>
        </div>
       </div>
      </div>
    </div>
     <div class="page w3-center w3-auto w3-margin w3-wide" id="msi">MSI</div>
    <!-MSI-!>
    <div>
       <div class="w3-display-container w3-auto w3-row w3-section w3-stretch w3-mobile" style="margin-left:15%;">
        <div class="w3-col w3-margin-left w3-card-4 s4" style="width:230px;max-width:280px;">
        <a href="msi-modern15.php" style="text-decoration:none">
        <div class="w3-center">
        <img class="w3-hover-opacity" src="msi/msi-moder15-1.jpg" style="width:100%;height:100%;">
        <div class="w3-container w3-center">
            <p style="font-size:13px;">MSI Modern 15</p>
            <p><span style="text-decoration-line:line-through;color: red;font-size:14px">₱58,995 </span>  ₱48,995</p>
         </a>
        </div>
       </div>
      </div>
      <div class="w3-col w3-card-4 s4" style="width:230px;max-width:280px;margin-left:80px;">
        <a href="msi-crosshair.php" style="text-decoration:none">
        <div class="w3-center">
        <img class="w3-hover-opacity" src="msi/msi-crosshair1.jpg" style="width:100%;height:100%;">
        <div class="w3-container w3-center">
            <p style="font-size:13px;">MSI Crosshair 15</p>
            <p><span style="text-decoration-line:line-through;color: red;font-size:14px">₱83,995 </span>₱67,995</p>
         </a>
        </div>
       </div>
      </div>
      <div class="w3-col w3-card-4 s4" style="width:230px;max-width:280px;margin-left:80px;">
        <a href="msi-sword.phpl" style="text-decoration:none">
        <div class="w3-center">
        <img class="w3-hover-opacity" src="msi/msi-sword-1.jpg" style="width:100%;height:100%;">
        <div class="w3-container w3-center">
            <p style="font-size:13px;">MSI Sword 15</p>
            <p><span style="text-decoration-line:line-through;color: red;font-size:14px">₱83,995 </span>₱59,995</p>
         </a>
        </div>
       </div>
      </div>
    </div>
     <div class="page w3-center w3-auto w3-margin w3-wide" id="acer">Acer</div>
    <!-Acer-!>
    <div>
       <div class="w3-display-container w3-auto w3-row w3-section w3-stretch w3-mobile" style="margin-left:15%;">
        <div class="w3-col w3-margin-left w3-card-4 s4" style="width:230px;max-width:280px;">
        <a href="ideapad3.php" style="text-decoration:none">
        <div class="w3-center">
        <img class="w3-hover-opacity" src="acer/Acer-aspire5-15.jpg" style="width:100%;height:100%;">
        <div class="w3-container w3-center">
            <p style="font-size:13px;">Acer Aspire 5 15.6</p>
            <p><span style="text-decoration-line:line-through;color: red;font-size:14px">₱34,495 </span>  ₱24,995</p>
         </a>
        </div>
       </div>
      </div>
      <div class="w3-col w3-card-4 s4" style="width:230px;max-width:280px;margin-left:80px;">
        <a href="ideapadGaming3.php" style="text-decoration:none">
        <div class="w3-center">
        <img class="w3-hover-opacity" src="acer/Acer-aspire5-14.jpg" style="width:100%;height:100%;">
        <div class="w3-container w3-center">
            <p style="font-size:13px;">Acer Aspire 5 14</p>
            <p><span style="text-decoration-line:line-through;color: red;font-size:14px">₱53,199 </span>₱37,999</p>
         </a>
        </div>
       </div>
      </div>
      <div class="w3-col w3-card-4 s4" style="width:230px;max-width:280px;margin-left:80px;">
        <a href="yoga.php" style="text-decoration:none">
        <div class="w3-center">
        <img class="w3-hover-opacity" src="acer/Acer-swift3.jpg" style="width:100%;height:100%;">
        <div class="w3-container w3-center">
            <p style="font-size:13px;">Acer Swift 3</p>
            <p><span style="text-decoration-line:line-through;color: red;font-size:14px">₱44,799 </span>₱31,990</p>
         </a>
        </div>
       </div>
      </div>
    </div>
    </body>
    </html>
