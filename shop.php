<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Shop</title>
   
   <!-- Font Awesome CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="products">
   <h1 class="heading">Products</h1>
   <div class="products-grid">
      <!-- Example Product 1 -->
      <form action="" method="post" class="product-card">
         <img src="images/product-1.jpg" alt="Product 1" class="product-image">
         <div class="content">
            <h3 class="product-name">Product 1</h3>
            <div class="flex">
               <div class="price"><span>R</span>111.99<span>/-</span></div>
               <input type="number" name="qty" class="qty" min="1" max="99" value="1">
            </div>
            <input type="submit" value="Add to Cart" class="btn btn-primary" name="add_to_cart">
         </div>
      </form>
      <!-- Example Product 2 -->
      <form action="" method="post" class="product-card">
         <img src="images/product-2.jpg" alt="Product 2" class="product-image">
         <div class="content">
            <h3 class="product-name">Product 2</h3>
            <div class="flex">
               <div class="price"><span>R</span>111.99<span>/-</span></div>
               <input type="number" name="qty" class="qty" min="1" max="99" value="1">
            </div>
            <input type="submit" value="Add to Cart" class="btn btn-primary" name="add_to_cart">
         </div>
      </form>
      <!-- Example Product 3 -->
      <form action="" method="post" class="product-card">
         <img src="images/product-3.jpg" alt="Product 3" class="product-image">
         <div class="content">
            <h3 class="product-name">Product 3</h3>
            <div class="flex">
               <div class="price"><span>R</span>111.99<span>/-</span></div>
               <input type="number" name="qty" class="qty" min="1" max="99" value="1">
            </div>
            <input type="submit" value="Add to Cart" class="btn btn-primary" name="add_to_cart">
         </div>
      </form>
      <!-- Example Product 4 -->
      <form action="" method="post" class="product-card">
         <img src="images/product-4.jpg" alt="Product 4" class="product-image">
         <div class="content">
            <h3 class="product-name">Product 4</h3>
            <div class="flex">
               <div class="price"><span>R</span>111.99<span>/-</span></div>
               <input type="number" name="qty" class="qty" min="1" max="99" value="1">
            </div>
            <input type="submit" value="Add to Cart" class="btn btn-primary" name="add_to_cart">
         </div>
      </form>
   </div>
</section>

<?php include 'components/footer.php'; ?>

<script src="assets/js/script.js"></script>

</body>
</html>
