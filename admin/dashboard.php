<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Dashboard</title>

   <!-- Font Awesome CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="../assets/css/admin_styles.css">
</head>
<body>

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

<!-- Main Content -->
<main class="main-content">
   <section class="dashboard">
      <div class="container">
         <div class="stats-list">

            <div class="stat-card welcome">
               <h3>Welcome!</h3>
               <p>Admin 1</p>
               <a href="update_profile.php" class="btn btn-secondary">Update Profile</a>
            </div>

            <div class="stat-card">
               <h3><span>R</span>111.99<span>/-</span></h3>
               <p>Total Pendings</p>
               <a href="placed_orders.php" class="btn btn-primary">See Orders</a>
            </div>

            <div class="stat-card">
               <h3><span>R</span>223.98<span>/-</span></h3>
               <p>Completed Orders</p>
               <a href="placed_orders.php" class="btn btn-primary">See Orders</a>
            </div>

            <div class="stat-card">
               <h3>25</h3>
               <p>Orders Placed</p>
               <a href="placed_orders.php" class="btn btn-primary">See Orders</a>
            </div>

            <div class="stat-card">
               <h3>50</h3>
               <p>Products Added</p>
               <a href="products.php" class="btn btn-primary">See Products</a>
            </div>

            <div class="stat-card">
               <h3>100</h3>
               <p>Normal Users</p>
               <a href="users_accounts.php" class="btn btn-primary">See Users</a>
            </div>

            <div class="stat-card">
               <h3>5</h3>
               <p>Admin Users</p>
               <a href="admin_accounts.php" class="btn btn-primary">See Admins</a>
            </div>

            <div class="stat-card">
               <h3>10</h3>
               <p>New Messages</p>
               <a href="messages.php" class="btn btn-primary">See Messages</a>
            </div>

         </div>
      </div>
   </section>
</main>

<script src="../assets/js/admin_script.js"></script>

<script>
document.getElementById('user-btn').addEventListener('click', function() {
   document.querySelector('.profile').classList.toggle('active');
});
</script>
   
</body>
</html>
