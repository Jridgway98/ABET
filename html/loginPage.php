<?php
include("dbconnect.php");


if($_SERVER["REQUEST_METHOD"] == "POST") {

   $username = mysqli_real_escape_string($db,$_POST['username']);
   $password = mysqli_real_escape_string($db,$_POST['password']);

   $sql = "SELECT id FROM User WHERE username = '$username' and password = '$password'";
   $result = mysqli_query($db, $sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $active = $row['active'];

   $count = mysqli_num_rows($result);

   echo $count; 
   // if($count == 1) {
   //    echo "Success!"
   // }

   // else{

   //   $error = "Invalid username or password."
   // }

 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="loginPage.css">
  <script defer src="login-page.js"></script>
</head>

<body>
  
  <!--<div class="sidenav-left"></div>-->
  <!--<div class="sidenav-right"></div>-->

  <main id="main-holder">
    <h1 id="login-header">WKU ABET Materials Database Login</h1>
    
    <div id="login-error-msg-holder">
      <p id="login-error-msg">Invalid email <span id="error-msg-second-line">and/or password</span></p>
    </div>
    
    <form id="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" "method="post">
      <input type="text" name="username" id="email-field" class="login-form-field" placeholder="Username">
      <input type="password" name="password" id="password-field" class="login-form-field" placeholder="Password">
      <input type="submit" value="Login" id="login-form-submit">
    </form>
  
  </main>
</body>

</html>
