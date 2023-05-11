<?php

@include 'functions/config.php';

session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = $_POST['password'];

   $select = "SELECT * FROM user_db WHERE email = '$email' AND password = '$pass'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      $_SESSION['user_name'] = $row['name'];
      header('location:index.php');

   }else{
      $error[] = 'Incorrect Email or Password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="images/svci.icon.png" type="image/x-icon">
   <title>SVCI ComLab An Internet of Things System | SIGN IN</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="form-container" style="background: linear-gradient(to bottom, #87CEFA, #1E90FF);">


   <form action="" method="post" style="padding-top: 5px; ">

     <a <a href="admin/admin_signin.php"><img src="images/svci.png.png" alt="SVCI LOGO" style="width: 70px; height: 70px;">
     </a>

<h3>SVCI Computer laboratory An Internet of Things System | Sign In </a></h3>

      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Enter your Email">
      <input type="password" name="password" required placeholder="Enter your Password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>Forgot your password? <a href="forgot_password.php">Reset here</a></p>
      <p>Don't have an account? <a href="signup.php">Sign up now</a></p>
   </form>

</div>

</body>
</html>
