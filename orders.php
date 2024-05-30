<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Orders</title>
   
   <!-- Font Awesome CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="orders">
   <div class="container">
      <h1 class="heading">Placed Orders</h1>

      <div class="orders-grid">
         <!-- Example Order 1 -->
         <div class="order-card">
            <div class="order-header">
               <h3>Order Details</h3>
               <p class="order-date">Placed on: <span>2023-04-25</span></p>
            </div>
            <div class="order-body">
               <p>Name: <span>Jane Smith</span></p>
               <p>Email: <span>janesmith@example.com</span></p>
               <p>Number: <span>+0987654321</span></p>
               <p>Address: <span>456 Another St, Anycity, USA</span></p>
               <p>Payment Method: <span>PayPal</span></p>
               <p>Your Orders: <span>1 item</span></p>
               <p>Total Price: <span>R111.99</span></p>
               <p>Payment Status: <span class="status completed">Completed</span></p>
            </div>
         </div>

         <!-- Example Order 2 -->
         <div class="order-card">
            <div class="order-header">
               <h3>Order Details</h3>
               <p class="order-date">Placed on: <span>2023-04-25</span></p>
            </div>
            <div class="order-body">
               <p>Name: <span>Jane Smith</span></p>
               <p>Email: <span>janesmith@example.com</span></p>
               <p>Number: <span>+0987654321</span></p>
               <p>Address: <span>456 Another St, Anycity, USA</span></p>
               <p>Payment Method: <span>PayPal</span></p>
               <p>Your Orders: <span>2 items</span></p>
               <p>Total Price: <span>R223.98</span></p>
               <p>Payment Status: <span class="status pending">Pending</span></p>
            </div>
         </div>
      </div>
   </div>
</section>

<?php include 'components/footer.php'; ?>

<script src="assets/js/script.js"></script>

</body>
</html>
