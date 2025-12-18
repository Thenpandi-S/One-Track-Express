<?php


  include 'data.php';

  if(isset($_POST['update']) && isset($_GET['edit'])){
    $id=$_GET['edit'];
    rot($connect,$id);
  }

  function rot($connect,$id){
 
     $name=$_POST['name'];
     $email=$_POST['email'];
     $message=$_POST['message'];
 


   $str="UPDATE formthree SET
   
   name = '$name',
   email = '$email',
   message = '$message'

   WHERE ID=$id";

   $ft=$connect->query($str);

   if($ft){
    header('location:tablethree.php');
   }
   else{
    echo 'error';
   }

  }


?>