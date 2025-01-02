<?php
session_start();


$host = "localhost";
$dbusername ="root";
$dbpassword ="";
$dbname ="smarttproject";

$connection = mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(!$connection){     ////connect
    // echo "connection error";
    die("connection field" .mysqli_connect_error());
}
if(isset($_POST['submit'])){
    
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM signup WHERE email ='$email' and password ='$password'";
$result = mysqli_query($connection, $sql); //database
// $num = mysqli_num_rows($result);

 if(mysqli_num_rows($result)> 0){
    $row =mysqli_fetch_assoc($result);
$_SESSION['fname'] = $row['fname'];  //  $_SESSION['name'] = $row['username'];
$_SESSION['lname'] = $row['lname'];
$_SESSION['email'] = $row['email'];
// $_SESSION['image'] = $row['image'];
header("location: index.html");
exit;
}else{
    echo "invalid email or password";
}
}
?>