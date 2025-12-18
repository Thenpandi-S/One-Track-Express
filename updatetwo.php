<?php


  include 'data.php';

  if(isset($_POST['update']) && isset($_GET['edit'])){
    $id=$_GET['edit'];
    rot($connect,$id);
  }

  function rot($connect,$id){
 
     $name=$_POST['name'];
     $cname=$_POST['cname'];
     $email=$_POST['email'];
     $number=$_POST['number'];
     $message=$_POST['message'];
 


   $str="UPDATE formtwo SET
   
   name = '$name',
   cname = '$cname',
   email = '$email',
   number = '$number',
   message = '$message'

   WHERE ID=$id";

   $ft=$connect->query($str);

   if($ft){
    header('location:tableone.php');
   }
   else{
    echo 'error';
   }

  }


?>