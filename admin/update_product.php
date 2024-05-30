<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update Product</title>

   <!-- Font Awesome CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="../assets/css/admin_styles.css">
</head>
<body>

<?php include '../components/admin_header.php'; ?>

<!-- Main Content -->
<main class="main-content">
   <section class="update-product">
      <div class="container">
         <h1 class="heading">Update Product</h1>

         <!-- Example product form -->
         <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="pid" value="1">
            <input type="hidden" name="old_image_01" value="old_image1.jpg">
            <input type="hidden" name="old_image_02" value="old_image2.jpg">
            <input type="hidden" name="old_image_03" value="old_image3.jpg">
            
            <div class="image-container">
               <div class="main-image">
                  <img src="../uploaded_img/old_image1.jpg" alt="Main Image">
               </div>
               <div class="sub-image">
                  <img src="../uploaded_img/old_image1.jpg" alt="Image 1">
                  <img src="../uploaded_img/old_image2.jpg" alt="Image 2">
                  <img src="../uploaded_img/old_image3.jpg" alt="Image 3">
               </div>
            </div>
            
            <div class="inputBox">
               <label for="name">Update Name</label>
               <input type="text" id="name" name="name" required class="box" maxlength="100" placeholder="Enter product name" value="Sample Product Name">
            </div>
            
            <div class="inputBox">
               <label for="price">Update Price</label>
               <input type="number" id="price" name="price" required class="box" min="0" max="9999999999" placeholder="Enter product price" value="100">
            </div>
            
            <div class="inputBox">
               <label for="details">Update Details</label>
               <textarea id="details" name="details" class="box" required cols="30" rows="10">Sample product details...</textarea>
            </div>
            
            <div class="inputBox">
               <label for="image_01">Update Image 01</label>
               <input type="file" id="image_01" name="image_01" accept="image/jpg, image/jpeg, image/png, image/webp" class="box">
            </div>
            
            <div class="inputBox">
               <label for="image_02">Update Image 02</label>
               <input type="file" id="image_02" name="image_02" accept="image/jpg, image/jpeg, image/png, image/webp" class="box">
            </div>
            
            <div class="inputBox">
               <label for="image_03">Update Image 03</label>
               <input type="file" id="image_03" name="image_03" accept="image/jpg, image/jpeg, image/png, image/webp" class="box">
            </div>
            
            <div class="flex-btn">
               <input type="submit" name="update" class="btn btn-primary" value="Update">
               <a href="products.php" class="btn btn-secondary">Go Back</a>
            </div>
         </form>
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
