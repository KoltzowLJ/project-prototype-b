<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Update Profile</title>
   
   <!-- Font Awesome CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="form-container">
   <div class="container">
      <h1 class="heading">Update Profile</h1>
      <form action="" method="post" class="update-form">
         <div class="inputBox">
            <label for="name">Username:</label>
            <input type="text" id="name" name="name" required placeholder="Enter your username" maxlength="20" class="box" value="test">
         </div>
         <div class="inputBox">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="Enter your email" maxlength="50" class="box" oninput="this.value = this.value.replace(/\s/g, '')" value="test@example.com">
         </div>
         <div class="inputBox">
            <label for="old_pass">Old Password:</label>
            <input type="password" id="old_pass" name="old_pass" placeholder="Enter your old password" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
         </div>
         <div class="inputBox">
            <label for="new_pass">New Password:</label>
            <input type="password" id="new_pass" name="new_pass" placeholder="Enter your new password" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
         </div>
         <div class="inputBox">
            <label for="cpass">Confirm New Password:</label>
            <input type="password" id="cpass" name="cpass" placeholder="Confirm your new password" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
         </div>
         <input type="submit" value="Update Now" class="btn btn-primary" name="submit">
      </form>
   </div>
</section>

<?php include 'components/footer.php'; ?>

<script src="assets/js/script.js"></script>

</body>
</html>
