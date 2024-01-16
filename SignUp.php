<?php session_start(); ?>
<?php include_once("./c_config_mysql.php"); 
    include_once("./c_user.php");
    include_once("./c_variables.php");
    $active_page = ''

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once("./style.php"); ?>
</head>
<body>
    <!-- navbar  -->
    <?php 
    include_once("./nav.php"); ?>
    
    <div class="login">
        <form method="post" action="./login.php?signUp=sign">
          <div class="logo">
            <img src="./images/logo_small.png"/>
          </div>
          <input type="text" name="name" id="name" placeholder="Username" size="20" maxlength="20" required>
          <input type="text" name="phone" id="phone" placeholder="Phone" size="20" maxlength="20" required>
          <input type="email" name="email" id="email" placeholder="E-mail" size="20" maxlength="20" required>
          <input type="password" name="password" id="password" placeholder="Password" required size="20">
          <p class="signup py-3">By clicking the "Sign Up" button, you are creating a <a href="./home.php"><span>buysellify</span></a> account.</p>
          <button class="login">Sign Up</button>
        </form>
      </div>
    

    <?php include_once("./footer.php") ?>
    
    <?php include_once("./script.php"); ?>
</body>
</html>