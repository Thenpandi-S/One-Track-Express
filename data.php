<?php


   $servername="localhost";
   $username="root";
   $password="";
   $database="fone";

   $connect=new mysqli($servername,$username,$password,$database);

   if($connect){
   //  echo "Connected Succesfully";
   }

   else{
    echo "Error";
   }
?>