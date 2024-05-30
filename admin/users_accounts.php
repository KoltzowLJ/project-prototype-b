<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Accounts</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="../assets/css/admin_styles.css">
</head>
<body>

<?php include '../components/admin_header.php'; ?>

<main class="main-content">
   <section class="user-accounts">
      <div class="container">
         <h1 class="heading">User Accounts</h1>
         <div class="accounts-list">

            <!-- Example User Account 1 -->
            <div class="account-card">
               <div class="account-info">
                  <h2>John Doe</h2>
                  <p>User ID: <span>1</span></p>
                  <p>Email: <span>johndoe@example.com</span></p>
               </div>
               <div class="account-actions">
                  <a href="users_accounts.php?delete=1" onclick="return confirm('delete this account? The user-related information will also be deleted!')" class="btn btn-danger">Delete</a>
               </div>
            </div>

            <!-- Example User Account 2 -->
            <div class="account-card">
               <div class="account-info">
                  <h2>Jane Smith</h2>
                  <p>User ID: <span>2</span></p>
                  <p>Email: <span>janesmith@example.com</span></p>
               </div>
               <div class="account-actions">
                  <a href="users_accounts.php?delete=2" onclick="return confirm('delete this account? The user-related information will also be deleted!')" class="btn btn-danger">Delete</a>
               </div>
            </div>

            <!-- Example User Account 3 -->
            <div class="account-card">
               <div class="account-info">
                  <h2>Mike Johnson</h2>
                  <p>User ID: <span>3</span></p>
                  <p>Email: <span>mikejohnson@example.com</span></p>
               </div>
               <div class="account-actions">
                  <a href="users_accounts.php?delete=3" onclick="return confirm('delete this account? The user-related information will also be deleted!')" class="btn btn-danger">Delete</a>
               </div>
            </div>

            <!-- Example User Account 4 -->
            <div class="account-card">
               <div class="account-info">
                  <h2>Emily Davis</h2>
                  <p>User ID: <span>4</span></p>
                  <p>Email: <span>emilydavis@example.com</span></p>
               </div>
               <div class="account-actions">
                  <a href="users_accounts.php?delete=4" onclick="return confirm('delete this account? The user-related information will also be deleted!')" class="btn btn-danger">Delete</a>
               </div>
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
