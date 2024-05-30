<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Checkout</title>
   
   <!-- Font Awesome CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="checkout-orders">

   <form action="" method="POST" class="checkout-form">

      <h1 class="heading">Your Orders</h1>

      <div class="display-orders">
         <p>Product 1 <span>(R111.99 x 2)</span></p>
         <p>Product 2 <span>(R111.99 x 1)</span></p>
         <p>Product 3 <span>(R111.99 x 3)</span></p>
         <div class="grand-total">Grand Total: <span>R671.94</span></div>
      </div>

      <h1 class="heading">Place Your Orders</h1>

      <div class="flex">
         <div class="inputBox">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" class="box" maxlength="20" required>
         </div>
         <div class="inputBox">
            <label for="number">Your Number:</label>
            <input type="number" id="number" name="number" placeholder="Enter your number" class="box" min="0" max="9999999999" onkeypress="if(this.value.length == 10) return false;" required>
         </div>
         <div class="inputBox">
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" class="box" maxlength="50" required>
         </div>
         <div class="inputBox">
            <label for="method">Payment Method:</label>
            <select id="method" name="method" class="box" required>
               <option value="credit card">Credit Card</option>
               <option value="paypal">PayPal</option>
            </select>
         </div>
         <div class="inputBox">
            <label for="flat">Address Line 01:</label>
            <input type="text" id="flat" name="flat" placeholder="e.g. Flat Number" class="box" maxlength="50" required>
         </div>
         <div class="inputBox">
            <label for="street">Address Line 02:</label>
            <input type="text" id="street" name="street" placeholder="e.g. Street Name" class="box" maxlength="50" required>
         </div>
         <div class="inputBox">
            <label for="city">City:</label>
            <input type="text" id="city" name="city" placeholder="e.g. Pretoria" class="box" maxlength="50" required>
         </div>
         <div class="inputBox">
            <label for="state">State:</label>
            <input type="text" id="state" name="state" placeholder="e.g. Gauteng" class="box" maxlength="50" required>
         </div>
         <div class="inputBox">
            <label for="country">Country:</label>
            <input type="text" id="country" name="country" placeholder="e.g. South Africa" class="box" maxlength="50" required>
         </div>
         <div class="inputBox">
            <label for="pin_code">Pin Code:</label>
            <input type="number" id="pin_code" name="pin_code" placeholder="e.g. 0157" class="box" min="0" max="999999" onkeypress="if(this.value.length == 6) return false;" required>
         </div>
      </div>

      <input type="submit" name="order" class="btn btn-primary" value="Place Order">

   </form>

</section>

<?php include 'components/footer.php'; ?>

<script src="assets/js/script.js"></script>

</body>
</html>
