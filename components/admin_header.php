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

<!-- Admin Sidebar -->
<aside class="sidebar">
   <div class="logo-container">
      <a href="dashboard.php" class="logo">Admin<span>Panel</span></a>
   </div>
   <nav class="sidebar-nav">
      <a href="dashboard.php"><i class="fas fa-home"></i> Home</a>
      <a href="products.php"><i class="fas fa-box"></i> Products</a>
      <a href="placed_orders.php"><i class="fas fa-shopping-cart"></i> Orders</a>
      <a href="admin_accounts.php"><i class="fas fa-user-shield"></i> Admins</a>
      <a href="users_accounts.php"><i class="fas fa-users"></i> Users</a>
      <a href="messages.php"><i class="fas fa-envelope"></i> Messages</a>
   </nav>
   <div class="profile">
      <p>Admin 1</p>
      <a href="update_profile.php" class="btn btn-secondary">Update Profile</a>
      <a href="../components/admin_logout.php" class="btn btn-danger">Logout</a>
   </div>
</aside>