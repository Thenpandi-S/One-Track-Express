<?php


  include 'data.php';

  if(isset($_POST['update']) && isset($_GET['edit'])){
    $id=$_GET['edit'];
    rot($connect,$id);
  }

  function rot($connect,$id){
 
     $name=$_POST['name'];
     $location=$_POST['location'];
     $weight=$_POST['weight'];
     $unit=$_POST['unit'];
     $shipment=$_POST['shipment'];
 


   $str="UPDATE formone SET
   
   Name = '$name',
   location = '$location',
   weight = '$weight',
   unit = '$unit',
   shipment = '$shipment'

   WHERE ID=$id";

   $ft=$connect->query($str);

   if($ft){
    header('location:table.php');
   }
   else{
    echo 'error';
   }

  }


?>