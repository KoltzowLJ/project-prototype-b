<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Login</title>
   
   <!-- Font Awesome CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="form-container">
   <div class="container">
      <h1 class="heading">Login Now</h1>
      <form action="" method="post" class="login-form">
         <div class="inputBox">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="Enter your email" maxlength="50" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
         </div>
         <div class="inputBox">
            <label for="pass">Password:</label>
            <input type="password" id="pass" name="pass" required placeholder="Enter your password" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
         </div>
         <input type="submit" value="Login Now" class="btn btn-primary" name="submit">
         <p>Don't have an account? <a href="user_register.php" class="option-btn">Register Now</a></p>
      </form>
      <p style="text-align: center; margin-top: 10px;">Admin? <a href="admin/admin_login.php" class="option-btn">Login</a></p>
   </div>
</section>

<?php include 'components/footer.php'; ?>

<script src="assets/js/script.js"></script>

</body>
</html>