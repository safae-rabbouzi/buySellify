<!-- <?php session_start(); ?> -->
<?php include_once("./c_config_mysql.php"); 
    include_once("./c_user.php");
    include_once("./c_variables.php");
    $active_page = ''
?>

<?php
if( isset($_POST['email']) && isset($_POST['password']) )
{
    foreach( $users as $user)
    {
        if($user['email'] == $_POST['email'] &&
            $user['password'] == $_POST['password']
        )
        {
            $logged_user= [
                'email' =>$user['email'],
            ];
            /**
             * Cookie qui expire dans un an
             */
            setcookie(
                'LOGGED_USER',
                $logged_user['email'],
                [
                    'expires' => time() + 365*24*3600,
                    'secure' => true,
                    'httponly' => true,
                ]
            );
            $_SESSION['logger_user'] = $user['name'];
        }
        else
        {
            $error_message = sprintf('les informations envoyées sont incorrectes : (%s,%s)', $_POST['email'], $_POST['password']);
        }
        
    }
}
if(isset($_GET['signUp'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
     
    //préparation
    $insert_user = $my_sql_client->prepare('INSERT INTO e_com.users(name,email, phone,password) VALUES(:name, :email, :phone, :password)');
    
    //execution
    $insert_user->execute([
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'password' => $password,
    ])or die(print_r($my_sql_client->errorInfo()));
    
    
}

?>



<?php if(!isset($_SESSION['logger_user'])): ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include_once("./style.php"); ?>
</head>

<body>
    <!-- navbar  -->
    <?php include_once("./nav.php"); ?>

    <div class="login">
        <form method="post" action="./login.php">
            <div class="logo">
                <img src="./images/logo_small.png" />
            </div>
            <input type="email" name="email" id="email" placeholder="E-mail" size="20" maxlength="20" required>
            <input type="password" name="password" id="password" placeholder="Password" required size="20">
            <button class="login">Log in</button>
            <p class="signup">Don't have an account ? <a href="./SignUp.php"><span>Sign up</span></a></p>
        </form>
    </div>


    <?php  include_once("./footer.php") ?>

    <?php include_once("./script.php"); ?>
</body>

</html>

<?php else: ?>
        
        <div class="container alert alert-dismissible fade show alert_succes" role="alert">
        Bonjour <?php echo $_SESSION['logger_user']; ?>
            et bienvenue sur le site 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        <?php include_once("./shop.php"); ?>
<?php endif; ?>