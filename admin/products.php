<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Products</title>

   <!-- Font Awesome CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="../assets/css/admin_styles.css">
</head>
<body>

<?php include '../components/admin_header.php'; ?>

<!-- Main Content -->
<main class="main-content">
   <section class="add-products">
      <div class="container">
         <h1 class="heading">Add Product</h1>
         <form action="" method="post" enctype="multipart/form-data">
            <div class="flex">
               <div class="inputBox">
                  <span>Product Name (required)</span>
                  <input type="text" class="box" required maxlength="100" placeholder="Enter product name" name="name">
               </div>
               <div class="inputBox">
                  <span>Product Price (required)</span>
                  <input type="number" min="0" class="box" required max="9999999999" placeholder="Enter product price" name="price">
               </div>
               <div class="inputBox">
                  <span>Image 01 (required)</span>
                  <input type="file" name="image_01" accept="image/*" class="box" required>
               </div>
               <div class="inputBox">
                  <span>Image 02 (required)</span>
                  <input type="file" name="image_02" accept="image/*" class="box" required>
               </div>
               <div class="inputBox">
                  <span>Image 03 (required)</span>
                  <input type="file" name="image_03" accept="image/*" class="box" required>
               </div>
               <div class="inputBox">
                  <span>Product Details (required)</span>
                  <textarea name="details" placeholder="Enter product details" class="box" required maxlength="500" cols="30" rows="10"></textarea>
               </div>
            </div>
            <input type="submit" value="Add Product" class="btn btn-primary" name="add_product">
         </form>
      </div>
   </section>

   <section class="show-products">
      <div class="container">
         <h1 class="heading">Products Added</h1>
         <div class="stats-list">
            <div class="stat-card">
               <img src="../assets/images/product-1.jpg" alt="Product Image">
               <div class="content">
                  <h3 class="name">Product 1</h3>
                  <p class="price">R111.99</p>
                  <p class="details">Details about product 1</p>
               </div>
               <div class="action-buttons">
                  <a href="update_product.php?update=1" class="btn btn-secondary">Update</a>
                  <a href="products.php?delete=1" class="btn btn-danger" onclick="return confirm('Delete this product?');">Delete</a>
               </div>
            </div>
            <div class="stat-card">
               <img src="../assets/images/product-2.jpg" alt="Product Image">
               <div class="content">
                  <h3 class="name">Product 2</h3>
                  <p class="price">R111.99</p>
                  <p class="details">Details about product 2</p>
               </div>
               <div class="action-buttons">
                  <a href="update_product.php?update=2" class="btn btn-secondary">Update</a>
                  <a href="products.php?delete=2" class="btn btn-danger" onclick="return confirm('Delete this product?');">Delete</a>
               </div>
            </div>
            <div class="stat-card">
               <img src="../assets/images/product-3.jpg" alt="Product Image">
               <div class="content">
                  <h3 class="name">Product 3</h3>
                  <p class="price">R111.99</p>
                  <p class="details">Details about product 3</p>
               </div>
               <div class="action-buttons">
                  <a href="update_product.php?update=3" class="btn btn-secondary">Update</a>
                  <a href="products.php?delete=3" class="btn btn-danger" onclick="return confirm('Delete this product?');">Delete</a>
               </div>
            </div>
         </div>
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
