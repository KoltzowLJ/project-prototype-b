<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact</title>
   
   <!-- Font Awesome CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="contact">
   <div class="container">
      <h1 class="heading">Contact Us</h1>
      <form action="" method="post" class="contact-form">
         <div class="inputBox">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required maxlength="20" class="box">
         </div>
         <div class="inputBox">
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required maxlength="50" class="box">
         </div>
         <div class="inputBox">
            <label for="number">Your Number:</label>
            <input type="number" id="number" name="number" placeholder="Enter your number" required onkeypress="if(this.value.length == 10) return false;" class="box">
         </div>
         <div class="inputBox">
            <label for="msg">Your Message:</label>
            <textarea id="msg" name="msg" class="box" placeholder="Enter your message" cols="30" rows="10"></textarea>
         </div>
         <input type="submit" value="Send Message" class="btn btn-primary">
      </form>
   </div>
</section>

<?php include 'components/footer.php'; ?>

<script src="assets/js/script.js"></script>

</body>
</html>
