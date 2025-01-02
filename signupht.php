<?php
session_start();
 $fname = filter_input(INPUT_POST ,"fname");
 $email = filter_input(INPUT_POST ,"email");  ///connectiveity
 $password = filter_input(INPUT_POST ,"password");
 $state =filter_input(INPUT_POST,"state");
//  $file =filter_input(INPUT_POST, "file");
 $lname = filter_input(INPUT_POST ,"lname");
 $pnumber = filter_input(INPUT_POST ,"pnumber");  ///connectiveity
 $cpassword = filter_input(INPUT_POST ,"cpassword");
 $country =filter_input(INPUT_POST,"country");
 //image uploded
 $image= $_FILES['image']['name'];
 $image_tmp=$_FILES['image']['tmp_name'];
 $image_size = $_FILES['image']['size'];
// $_SESSION['lname'] =$lname;
 if (!empty($fname)){
     if(!empty($password)){
         $host = "localhost";
         $dbusername = "root";   ///server
         $dbpassword = "";
         $dbname = "smarttproject";
         
         $connection = new mysqli($host,$dbusername,$dbpassword,$dbname);
         if(mysqli_connect_error()){     ////connect
             echo "connection error";
         }
         else{
            move_uploaded_file($image_tmp , "images/$image");
             $sql = "INSERT INTO signup(fname,lname,email,password,state,country,pnumber)
             VALUES('$fname','$lname','$email','$password','$state','$country','$pnumber')";
        
             if($connection->query($sql)){
                $_SESSION['fname'] =$fname ;
                $_SESSION['lname'] =$lname ;
                $_SESSION['email'] =$email ;
                // $_SESSION['image']['name'] =$image ;
                // $_SESSION['image']['tmp_name']=$image_tmp;
                 header("location:login.php");
             }
            
             $connection->close();
             
             
            //  echo"your registation is completed <br>";
         }
     }
     else{
         echo'<script>alert("password must be required")</script>';
         die();
     }
 }
 
 else{
     echo'<script>alert("username must be required")</script>';
    //  header("location:signupht.php");
         die();
 }
 
 



 //image uplode----->

//  if(isset($_FILES['img'])){
//     echo "<pre>";
//     print_r($_FILES);
//     echo "</pre>";


//  $_SESSION['img'] =$img;

//  }
?> 