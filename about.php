<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">
   <div class="container">
      <h1 class="heading">About Us</h1>
      <div class="about-content">
         <div class="image">
            <img src="assets/images/about-img.jpg" alt="About Image">
         </div>
         <div class="text">
            <p>This will be information of the company here: </p>
            <a href="contact.php" class="btn btn-primary">Contact Us</a>
         </div>
      </div>
   </div>
</section>

<section class="team">
   <div class="container">
      <h2 class="heading">Our Team</h2>
      <div class="team-grid">

         <!-- Team Member 1 -->
         <div class="team-member">
            <img src="assets/images/team-member-1.jpg" alt="Team Member 1">
            <h3>Person 1</h3>
            <p>CEO</p>
         </div>

         <!-- Team Member 2 -->
         <div class="team-member">
            <img src="assets/images/team-member-2.jpg" alt="Team Member 2">
            <h3>Person 2</h3>
            <p>CTO</p>
         </div>

         <!-- Team Member 3 -->
         <div class="team-member">
            <img src="assets/images/team-member-3.jpg" alt="Team Member 3">
            <h3>Person 3</h3>
            <p>COO</p>
         </div>

      </div>
   </div>
</section>

<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="assets/js/script.js"></script>

</body>
</html>
