<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    
<style>

  table{
        border-collapse:collapse;
    }
    
    table,th,td{
        border: 0.5px solid white;background:transparent;backdrop-filter:blur(5px);background-color: rgba(0, 0, 0, 0.23);
        color:white;
    }
    table,th{
      color:orange;
    }
    .a{
      position:relative;
    }
    .b{
      position:absolute;
       margin-top:-80px;margin-left:-10px;
      overflow:hidden;
    }
    .c{
      position:absolute;
      top:0%;
      margin-top:100px;
      text-align:center;margin-left:230px;
    }
    .siz{
      width: 150px;height:60px;
    }
    .an{
      text-decoration:none;color:red;
    }
    .ann{
      text-decoration:none;color:pink;
    }
    .ans{
      text-decoration:none;color:yellow;
    }
    .dn{
      height:60px;
    }
      .thr{
        position:absolute;
       font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      color:lightgreen;margin-left:640px;
    }
        .trcxx{
    position: absolute;margin-top: 20px;margin-left: 900px;font-weight: bold;
     font-family: "Roboto", sans-serif;width: 200px;height: 55px;color:white;
     background-color: black;border-radius: 30px;border: 1px solid black;  
    overflow: hidden;
    cursor: pointer;
    z-index: 1;
    transition: color 0.4s ease;
}

.trcxx::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 0;   
    height: 0;
    border-color:  rgb(53, 70, 252);  
    background-color: rgb(53, 70, 252);  
    z-index: -1;
    transition: all 0.45s ease;
    border-radius: inherit;
}
.trcxx:hover::before {
    width: 100%;
    height: 100%;
}
.trcxx:hover {
     border-color: rgb(53, 70, 252);
    color: white;
}
</style>


<div class="a">

   <img class="b" width="1530px" height="804px" src="images/blog-1.webp" alt="">
   <h1 class="thr">Server Details</h1>


<table class="c" >



<tr>
    <th class="siz" >Id</th>
    <th class="siz" >Name</th>
    <th class="siz" >Email</th>
    <th class="siz" >Message</th>
    <th class="siz" >Delete</th>
    <th class="siz" >Edit</th>
    <th class="siz" >View</th>
    
</tr>

<?php

  if(isset($_POST['prevs'])){
    header("location: index.php");
    exit();
}



   include 'data.php';

   $a="SELECT*FROM formthree";
   $b=$connect->query($a);
   while($all=mysqli_fetch_assoc($b)){


    


  
?>

<tr>

  <td class="dn" ><?php echo $all['ID'] ?></td>
  <td><?php echo $all['name'] ?></td>
  <td><?php echo $all['email'] ?></td>
  <td><?php echo $all['message'] ?></td>
  
    <td><a class="an" href="deletethree.php?delete=<?php echo $all['ID'] ?>"><i class="fa-solid fa-trash" style="color: #e30202;"></i></a></td>
   <td><a class="ann" href="editthree.php?edit=<?php echo $all['ID'] ?>"><i class="fa-regular fa-pen-to-square"></i></a></td>
  <td><a class="ans" href="viewthree.php?view=<?php echo $all['ID'] ?>"><i class="fa-regular fa-eye"></i></a></td>


</tr>

<?php
   }
?>



</table>



<form action="" method="post">
  <button id="btns" onclick="btnsColor()"  name="prevs" type="submit"class="trcxx">Back + </button>
</form>




  </div>






</body>
</html>