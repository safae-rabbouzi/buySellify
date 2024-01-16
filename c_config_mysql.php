
<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$base = "e_com";
try
{
   $my_sql_client = new PDO
   (
   "mysql:host=localhost;bdname=e_com",
   'root',
   '',
   [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
   );

}catch(PDOException $e){
        echo "erreur : " . $e->getMessage();
}

?> 



