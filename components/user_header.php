<?php
   if(isset($message)){
      foreach($message as $msg){
         echo '
         <div class="message">
            <span>'.$msg.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

<header class="header">
   <div class="container flex">
      <a href="index.php" class="logo">SimplicityTech<span></span></a>

      <nav class="navbar">
         <a href="index.php">Home</a>
         <a href="about.php">About</a>
         <a href="orders.php">Orders</a>
         <a href="shop.php">Shop</a>
         <a href="contact.php">Contact</a>
      </nav>

      <div class="icons">
         <a href="cart.php" class="fas fa-shopping-cart"></a>
         <a href="user_login.php" class="fas fa-user"></a>
      </div>
   </div>
</header>