<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Shopping Cart</title>
   
   <!-- Font Awesome CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="shopping-cart">

   <h1 class="heading">Shopping Cart</h1>

   <div class="cart-container">

      <!-- Example Product 1 -->
      <div class="cart-item">
         <img src="assets/images/product-1.jpg" alt="Product 1" class="cart-image">
         <div class="cart-info">
            <div class="cart-name">Product 1</div>
            <div class="cart-flex">
               <div class="cart-price">R111.99</div>
               <input type="number" name="qty" class="cart-qty" min="1" max="99" value="1">
            </div>
            <div class="cart-sub-total">Sub Total: <span>R111.99</span></div>
            <button class="delete-btn" name="delete">Delete Item</button>
         </div>
      </div>

      <!-- Example Product 2 -->
      <div class="cart-item">
         <img src="assets/images/product-2.jpg" alt="Product 2" class="cart-image">
         <div class="cart-info">
            <div class="cart-name">Product 2</div>
            <div class="cart-flex">
               <div class="cart-price">R111.99</div>
               <input type="number" name="qty" class="cart-qty" min="1" max="99" value="2">
            </div>
            <div class="cart-sub-total">Sub Total: <span>R223.98</span></div>
            <button class="delete-btn" name="delete">Delete Item</button>
         </div>
      </div>

      <!-- Example Product 3 -->
      <div class="cart-item">
         <img src="assets/images/product-3.jpg" alt="Product 3" class="cart-image">
         <div class="cart-info">
            <div class="cart-name">Product 3</div>
            <div class="cart-flex">
               <div class="cart-price">R111.99</div>
               <input type="number" name="qty" class="cart-qty" min="1" max="99" value="1">
            </div>
            <div class="cart-sub-total">Sub Total: <span>R111.99</span></div>
            <button class="delete-btn" name="delete">Delete Item</button>
         </div>
      </div>

   </div>

   <div class="cart-total">
      <p>Grand Total: <span>R447.96</span></p>
      <a href="shop.php" class="option-btn">Continue Shopping</a>
      <button class="delete-btn">Delete All Items</button>
      <a href="checkout.php" class="btn btn-primary">Proceed to Checkout</a>
   </div>

</section>

<?php include 'components/footer.php'; ?>

<script src="assets/js/script.js"></script>

</body>
</html>
