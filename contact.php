<?php
require_once 'conn.php';
$connectionId = mysqli_connect($dbhost, $dbuser, $dbpass);
mysqli_select_db($connectionId,$db);

if($_SERVER["REQUEST_METHOD"]== "POST") {
        
        $name = $_POST["fullname"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        
   $info = "INSERT INTO nsarai(name,email,message) 
            VALUES('$name', '$email', '$message');";  
mysqli_query($connectionId,$info) or die(mysqli_error($connectionId));  
echo"Thank you. Your message has been submitted.";
}
$query = "SELECT * FROM nsarai ORDER BY dates;";
$result = mysqli_query($connectionId,$query);
?>


