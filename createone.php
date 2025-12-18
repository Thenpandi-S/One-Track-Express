<?php

   include 'data.php';
   if(isset($_POST['checks'])){

    $name=$_POST['name'];
    $cname=$_POST['cname'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $message=$_POST['message'];


    $a="INSERT INTO formtwo(name,cname,email,number,message)VALUES('$name','$cname','$email','$number','$message')";
    $b=$connect->query($a);
    
    if($b){
       
     header ("location:tableone.php");
        
    }
    else{
        echo "Error";
    }

   }



?>