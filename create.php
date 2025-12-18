<?php

   include 'data.php';
   if(isset($_POST['check'])){

    $name=$_POST['name'];
    $location=$_POST['location'];
    $weight=$_POST['weight'];
    $unit=$_POST['unit'];
    $shipment=$_POST['shipment'];


    $a="INSERT INTO formone(Name,location,weight,unit,shipment)VALUES('$name','$location','$weight','$unit','$shipment')";
    $b=$connect->query($a);
    
    if($b){
       
     header ("location:table.php");
        
    }
    else{
        echo "Error";
    }

   }




?>