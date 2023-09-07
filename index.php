<?php 
   session_start();

   if (!isset($_SESSION['username'])) {
       $_SESSION['msg'] = "You must log in first";
       header('Location: login.php');
   }

   if (!isset($_GET['logout'])) {
       session_destroy(); 
       unset($_SESSION['username']);
       header('location: login.php');

   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="header">
        <h2>Home page</h2>
    </div>

    <div class="content">

    <!-- Logged in user information -->
    <?php if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong> </p>
        <p><a href="index.php?logout='1'" style="color: red;">logout</a></p> <!-- Logout -->
    <?php endif ?>
    </div>
</body>
</html>