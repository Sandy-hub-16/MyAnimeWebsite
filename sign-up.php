<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="SignInAndSignUp/sign-up.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

  <title>Reconime - Sign Up</title>
</head>

<body>
  <div class="container">


    <form class="form" name="signup" method="POST">
      <img class="logo" src="sign-in-myAnimeLogo.png">

    <h1 class="sign-up-text">Sign Up</h1>
    <p class="message">Get started with out website. Create an account and enjoy the experiece.</p>

   <div class="input-container">
    <input class="input" name="username" type="text" placeholder="Username">
    <input class="input" name="email" type="text" placeholder="Email"> 
    <input class="input" name="pass_word" type="password" placeholder="Password">
    <input class="input" name="confirm_password" type="password" placeholder="Confirm Password">
   </div>


  <input class="sign-up-button" type="submit" name="signup" value="Sign Up">

   <p>Already have an account? <a class="log-in-portal" href="sign-in.php">Sign-in here.</a></p>
    </form>

<!-- Custom Popup Modal -->
<div id="popupModal" class="modal">
  <div class="modal-content">
    <span id="closeBtn" class="close">&times;</span>
    <p id="popupMessage"></p>
  </div>
</div>




<?php
$DBHost = "localhost";
$DBUser = "root";
$DBPass = "";
$DBName = "signup";
 
$conn = mysqli_connect($DBHost, $DBUser, $DBPass, $DBName);
 
if(!$conn){
die("Connection failed: " . mysqli_error());
}


if(isset($_POST['signup'])!=''){
    $username = $_POST['username'];  
    $email = $_POST['email']; 
    $pass_word = $_POST['pass_word'];
    $confirm_password = $_POST['confirm_password'];

    if ($pass_word !== $confirm_password) {
        echo "<script>window.addEventListener('DOMContentLoaded', function() {
            showPopup('❌ Passwords do not match. Please try again.');
        });</script>";
    }

    else if (empty($username) && empty($email) && empty($pass_word) && empty($confirm_password)) {
      echo "<script>window.addEventListener('DOMContentLoaded', function() {
            showPopup('⚠️ Please fill out all the textbox' );
        });</script>";
    }

    else {
      $sql = "INSERT into signup (`username`,`email`,`pass_word`,`confirm_password`) values ('$_POST[username]','$_POST[email]','$_POST[pass_word]','$_POST[confirm_password]')";
       $result = mysqli_query($conn,$sql);

       echo "<script>window.addEventListener('DOMContentLoaded', function() {
                showPopup('✅ Sign-up recorded successfully!');
            });</script>";
    }

   
}
?>

  </div>
 <script src="js_folder/sign-up.js"></script>
 
</body>
</html>