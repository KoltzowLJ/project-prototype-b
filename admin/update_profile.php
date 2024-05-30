<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update Profile</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="../assets/css/admin_styles.css">
</head>
<body>

<?php include '../components/admin_header.php'; ?>

<main class="main-content">
   <section class="update-profile">
      <div class="container">
         <h1 class="heading">Update Profile</h1>
         <form action="" method="post">
            <input type="hidden" name="prev_pass" value="examplePrevPass">
            <div class="inputBox">
               <span>Username</span>
               <input type="text" name="name" value="Admin 1" required placeholder="Enter your username" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
            </div>
            <div class="inputBox">
               <span>Old Password</span>
               <input type="password" name="old_pass" placeholder="Enter old password" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
            </div>
            <div class="inputBox">
               <span>New Password</span>
               <input type="password" name="new_pass" placeholder="Enter new password" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
            </div>
            <div class="inputBox">
               <span>Confirm New Password</span>
               <input type="password" name="confirm_pass" placeholder="Confirm new password" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
            </div>
            <input type="submit" value="Update Now" class="btn" name="submit">
         </form>
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