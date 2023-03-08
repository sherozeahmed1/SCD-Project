
<?php

$con = mysqli_connect('localhost', 'root');

if($con){
    echo "Connection Successful";
}else{
    echo "No Connection";
}

mysqli_select_db($con, 'scdproject');

$username = $_POST['email'];
$Email = $_POST['pass'];


$query = "INSERT INTO `data2`(email, pass) 
VALUES ('$email','$pass')";

mysqli_query($con, $query);

?>