<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Admin Accounts</title>

   <!-- Font Awesome CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="../assets/css/admin_styles.css">
</head>
<body>

<?php include '../components/admin_header.php'; ?>

<!-- Main Content -->
<main class="main-content">
   <section class="accounts">
      <div class="container">
         <h1 class="heading">Admin Accounts</h1>
         <div class="actions">
            <a href="register_admin.php" class="btn btn-primary">Add New Admin</a>
         </div>
         <div class="stats-list">

            <!-- Example Admin Account 1 -->
            <div class="stat-card">
               <div class="admin-info">
                  <h3>Admin One</h3>
                  <p>ID: <span>1</span></p>
               </div>
               <div class="admin-actions">
                  <a href="update_profile.php" class="btn btn-secondary">Update</a>
                  <a href="#" onclick="return confirm('delete this account?')" class="btn btn-danger">Delete</a>
               </div>
            </div>

            <!-- Example Admin Account 2 -->
            <div class="stat-card">
               <div class="admin-info">
                  <h3>Admin One</h3>
                  <p>ID: <span>2</span></p>
               </div>
               <div class="admin-actions">
                  <a href="update_profile.php" class="btn btn-secondary">Update</a>
                  <a href="#" onclick="return confirm('delete this account?')" class="btn btn-danger">Delete</a>
               </div>
            </div>

            <!-- Example Admin Account 3 -->
            <div class="stat-card">
               <div class="admin-info">
                  <h3>Admin One</h3>
                  <p>ID: <span>3</span></p>
               </div>
               <div class="admin-actions">
                  <a href="update_profile.php" class="btn btn-secondary">Update</a>
                  <a href="#" onclick="return confirm('delete this account?')" class="btn btn-danger">Delete</a>
               </div>
            </div>

            <!-- Example Empty State -->
            <div class="empty-state">
               <p>No accounts available!</p>
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
