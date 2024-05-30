<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Placed Orders</title>

   <!-- Font Awesome CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="../assets/css/admin_styles.css">
</head>
<body>

<?php include '../components/admin_header.php'; ?>

<!-- Main Content -->
<main class="main-content">
   <section class="orders">
      <div class="container">
         <h1 class="heading">Placed Orders</h1>
         <div class="stats-list">

            <!-- Example Order 1 -->
            <div class="stat-card">
               <div class="order-info">
                  <h3>John Doe</h3>
                  <p>Placed on: <span>2024-05-25</span></p>
                  <p>Number: <span>1234567890</span></p>
                  <p>Address: <span>123 Main St, City, Country</span></p>
                  <p>Total Products: <span>3</span></p>
                  <p>Total Price: <span>R335.97</span></p>
                  <p>Payment Method: <span>Credit Card</span></p>
               </div>
               <form action="" method="post" class="order-actions">
                  <input type="hidden" name="order_id" value="1">
                  <select name="payment_status" class="select">
                     <option selected disabled>Pending</option>
                     <option value="pending">Pending</option>
                     <option value="completed">Completed</option>
                  </select>
                  <div class="action-buttons">
                     <input type="submit" value="Update" class="btn btn-primary" name="update_payment">
                     <a href="placed_orders.php?delete=1" class="btn btn-danger" onclick="return confirm('Delete this order?');">Delete</a>
                  </div>
               </form>
            </div>

            <!-- Example Order 2 -->
            <div class="stat-card">
               <div class="order-info">
                  <h3>Jane Smith</h3>
                  <p>Placed on: <span>2024-05-24</span></p>
                  <p>Number: <span>0987654321</span></p>
                  <p>Address: <span>456 Another St, City, Country</span></p>
                  <p>Total Products: <span>5</span></p>
                  <p>Total Price: <span>R559.95</span></p>
                  <p>Payment Method: <span>PayPal</span></p>
               </div>
               <form action="" method="post" class="order-actions">
                  <input type="hidden" name="order_id" value="2">
                  <select name="payment_status" class="select">
                     <option selected disabled>Completed</option>
                     <option value="pending">Pending</option>
                     <option value="completed">Completed</option>
                  </select>
                  <div class="action-buttons">
                     <input type="submit" value="Update" class="btn btn-primary" name="update_payment">
                     <a href="placed_orders.php?delete=2" class="btn btn-danger" onclick="return confirm('Delete this order?');">Delete</a>
                  </div>
               </form>
            </div>

            <!-- Example Order 3 -->
            <div class="stat-card">
               <div class="order-info">
                  <h3>Mike Johnson</h3>
                  <p>Placed on: <span>2024-05-23</span></p>
                  <p>Number: <span>1122334455</span></p>
                  <p>Address: <span>789 Another Ave, City, Country</span></p>
                  <p>Total Products: <span>2</span></p>
                  <p>Total Price: <span>R223.98</span></p>
                  <p>Payment Method: <span>Cash on Delivery</span></p>
               </div>
               <form action="" method="post" class="order-actions">
                  <input type="hidden" name="order_id" value="3">
                  <select name="payment_status" class="select">
                     <option selected disabled>Pending</option>
                     <option value="pending">Pending</option>
                     <option value="completed">Completed</option>
                  </select>
                  <div class="action-buttons">
                     <input type="submit" value="Update" class="btn btn-primary" name="update_payment">
                     <a href="placed_orders.php?delete=3" class="btn btn-danger" onclick="return confirm('Delete this order?');">Delete</a>
                  </div>
               </form>
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
