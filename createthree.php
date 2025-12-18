<?php

   include 'data.php';
   if(isset($_POST['checks'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];


    $a="INSERT INTO formthree(name,email,message)VALUES('$name','$email','$message')";
    $b=$connect->query($a);
    
    if($b){
       
     header ("location:tablethree.php");
        
    }
    else{
        echo "Error";
    }

   }



?>