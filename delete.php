<?php

  include 'data.php';

  if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    sent($connect,$id);
  }

  function sent($connect,$id){
    $a="DELETE FROM formone WHERE ID=$id";
    $b=$connect->query($a);
   
    if($b){
        header("location:table.php");
    }
    else{
        echo "Error";
    }
  }