<?php session_start(); ?>
<?php include_once("./c_config_mysql.php"); 
    include_once("./c_user.php");
    include_once("./c_variables.php");
    $active_page = 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php include_once("./style.php"); ?>
</head>
<body>
    <!-- navbar  -->
    <?php 
    include_once("./nav.php");
    include_once("./home_header.php");
    include_once("./home_categories.php");
    include_once("./home_cat.php");
    include_once("./home_join.php");

    

    include_once("./footer.php") ?>
    
    <?php include_once("./script.php"); ?>

   

</body>
</html>