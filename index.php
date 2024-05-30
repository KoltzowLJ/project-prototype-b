<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- Search Bar Section -->
<section class="search-bar">
   <div class="search-container">
      <input type="text" id="search-input" placeholder="Search for products...">
      <button id="search-button"><i class="fa fa-search"></i></button>
   </div>
</section>

<section class="home-products">
   <h1 class="heading">Latest Products</h1>
   <div class="products-grid">
      <!-- Product 1 -->
      <div class="product-card">
         <img src="assets/images/product-1.jpg" alt="Product 1" class="product-image">
         <div class="content">
            <h3 class="product-title">Product 1</h3>
            <p class="product-description">This will be product 1.</p>
            <div class="price">R111.99</div>
            <a href="#" class="btn btn-primary">Add to Cart</a>
         </div>
      </div>
      <!-- Product 2 -->
      <div class="product-card">
         <img src="assets/images/product-2.jpg" alt="Product 2" class="product-image">
         <div class="content">
            <h3 class="product-title">Product 2</h3>
            <p class="product-description">This will be product 2.</p>
            <div class="price">R111.99</div>
            <a href="#" class="btn btn-primary">Add to Cart</a>
         </div>
      </div>
      <!-- Product 3 -->
      <div class="product-card">
         <img src="assets/images/product-3.jpg" alt="Product 3" class="product-image">
         <div class="content">
            <h3 class="product-title">Product 3</h3>
            <p class="product-description">This will be product 3.</p>
            <div class="price">R111.99</div>
            <a href="#" class="btn btn-primary">Add to Cart</a>
         </div>
      </div>
      <!-- Product 4 -->
      <div class="product-card">
         <img src="assets/images/product-4.jpg" alt="Product 4" class="product-image">
         <div class="content">
            <h3 class="product-title">Product 4</h3>
            <p class="product-description">This will be product 4.</p>
            <div class="price">R111.99</div>
            <a href="#" class="btn btn-primary">Add to Cart</a>
         </div>
      </div>                        
   </div>
</section>

<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="assets/js/script.js"></script>
<script>
   document.getElementById('search-button').addEventListener('click', function() {
      let searchQuery = document.getElementById('search-input').value;
      alert('You searched for: ' + searchQuery); // Replace this with actual search functionality
   });
</script>

</body>
</html>
