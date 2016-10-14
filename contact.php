<?php
require_once 'conn.php';
$connectionId = mysqli_connect($dbhost, $dbuser, $dbpass);
mysqli_select_db($connectionId,$db);

if($_SERVER["REQUEST_METHOD"]== "POST") {
        
        $name = $_POST["fullname"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $phone=$_POST["phone"];
        $description=$_POST["description"];
        
   $info = "INSERT INTO details(name,email,message,phone,description) 
            VALUES('$name', '$email', '$message','$phone','$description');";  
   var_dump(info); die();
mysqli_query($connectionId,$info) or die(mysqli_error($connectionId));  
// echo"Thank you. We will contact you shortly.";
 header ('Location: message.php');
}
$query = "SELECT * FROM details ORDER BY dates;";
$result = mysqli_query($connectionId,$query);
?>


