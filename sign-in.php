<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="SignInAndSignUp/sign-in.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

  <title>Reconime - Sign In</title>
</head>

<body>
  <div class="container">
  

    <form class="form" method="POST">
      <img class="logo" src="sign-in-myAnimeLogo.png">

    <h1 class="sign-up-text">Welcome Back!</h1>

   <div class="input-container">
    <label class="email">EMAIL ADDRESS</label>
    <input class="input" name="email" type="text" placeholder="username@gmail.com" required> 
    <label class="password">PASSWORD</label>
    <input class="input" name="pass_word" type="password" id="password" placeholder="Password" required>
    <img class="password-icon" src="SignInAndSignUp/hide-eye-icon.png" onclick="pass()" id="password-icon">
   </div>

   <input class="sign-up-button" type="submit" name="signin" value="Sign in">
   <p>Don't have an account? <a class="log-in-portal" href="sign-up.php">Sign up here.</a></p>
    </form>

  </div>

  <!-- Popup Modal -->
  <div id="popupModal" class="modal">
    <div class="modal-content">
      <span id="closeBtn" class="close">&times;</span>
      <p id="popupMessage"></p>
    </div>
  </div>

<script src="js_folder/sign-in.js"></script>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signin'])) {
      $email = $_POST['email'];
      $pass_word = $_POST['pass_word'];

      // Connect to database
      $conn = mysqli_connect("localhost", "root", "", "signup");

      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }

      // Check if email and password match a user in the database
      $sql = "SELECT * FROM signup WHERE email='$email' AND pass_word='$pass_word'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        
         echo "<script>showPopup('✅ Login successful! Welcome back.'); setTimeout(function() { window.location.href = 'anime.html'; }, 2000);</script>";

      } else {
          echo "<script>showPopup('❌ Account doesn\\'t exist. Please sign up first.');</script>";

      }
  }
  ?>

  
</body>


</html>