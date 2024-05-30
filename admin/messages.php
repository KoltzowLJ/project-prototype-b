<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Messages</title>
   
   <!-- Font Awesome CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="../assets/css/admin_styles.css">
</head>
<body>

<?php include '../components/admin_header.php'; ?>

<!-- Main Content -->
<main class="main-content">
   <section class="messages">
      <div class="container">
         <h1 class="heading">Messages</h1>
         <div class="stats-list">

            <!-- Example Message 1 -->
            <div class="stat-card">
               <div class="message-info">
                  <h3>John Doe</h3>
                  <p>User ID: <span>1</span></p>
                  <p>Email: <span>johndoe@example.com</span></p>
                  <p>Number: <span>1234567890</span></p>
                  <p>Message: <span>Hello, I have a question about...</span></p>
               </div>
               <div class="message-actions">
                  <a href="messages.php?delete=1" onclick="return confirm('delete this message?');" class="btn btn-danger">Delete</a>
               </div>
            </div>

            <!-- Example Message 2 -->
            <div class="stat-card">
               <div class="message-info">
                  <h3>Jane Smith</h3>
                  <p>User ID: <span>2</span></p>
                  <p>Email: <span>janesmith@example.com</span></p>
                  <p>Number: <span>0987654321</span></p>
                  <p>Message: <span>I need help with my order...</span></p>
               </div>
               <div class="message-actions">
                  <a href="messages.php?delete=2" onclick="return confirm('delete this message?');" class="btn btn-danger">Delete</a>
               </div>
            </div>

            <!-- Example Message 3 -->
            <div class="stat-card">
               <div class="message-info">
                  <h3>Mike Johnson</h3>
                  <p>User ID: <span>3</span></p>
                  <p>Email: <span>mikejohnson@example.com</span></p>
                  <p>Number: <span>1122334455</span></p>
                  <p>Message: <span>Can you provide more details about...</span></p>
               </div>
               <div class="message-actions">
                  <a href="messages.php?delete=3" onclick="return confirm('delete this message?');" class="btn btn-danger">Delete</a>
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