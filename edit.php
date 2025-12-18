<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>



 <?php

   include ("update.php");

   if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $edit=editdata($connect,$id);
   }

   function editdata($connect,$id){
    $a="SELECT * FROM formone WHERE ID=$id";
    $b=$connect->query($a);
    $c=mysqli_fetch_assoc($b);
    return $c;
   }


   if(isset($_POST['prevs'])){
    header("location: table.php");
    exit();
   }
?>







  <style>

  .trcxxj{
    position: absolute;margin-top: 15px;margin-left: 450px;font-weight: bold;
     font-family: "Roboto", sans-serif;width: 200px;height: 55px;color:white;
     background-color: black;border-radius: 30px;border: 1px solid black;  
    overflow: hidden;
    cursor: pointer;
    z-index: 1;
    transition: color 0.4s ease;
}

.trcxxj::before {
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
.trcxxj:hover::before {
    width: 100%;
    height: 100%;
}
.trcxxj:hover {
     border-color: rgb(53, 70, 252);
    color: white;
}



body {
  overflow-y: hidden;
}
  

    .lo{
      position: relative;
    }
    .sivaji{
      position: absolute;
    }
    .msivaji{
      position: absolute;margin-top: 140px;margin-left: 250px;width: 1060px;height:500px; background-color: #fffffff9; border-radius:20px;border:1px solid black;
    }
    .vid{
      position: absolute;
      top:0%;
      object-fit:cover;
    }
   
    .nutral{
      position: absolute;
      top:0%;
     width: 900px;
     height:900px;
     border:1px solid lightgreen;
     margin-left:300px;background:transparent;backdrop-filter:blur(20px);background-color: rgba(0, 0, 0, 0.25);
     margin-top:170px;border-radius:10px;
    }
     .hiis{
      margin-left:100px;margin-top:40px;font-family:Arial, Helvetica, sans-serif;color:white;font-size:16px;
    }
    .hii{
      margin-left:100px;margin-top:20px;font-family:Arial, Helvetica, sans-serif;color:white;font-size:16px;
    }

    .wik{
      width: 300px;margin-top:20px;height:43px;background: transparent;background-color: rgba(0, 5, 6, 0.47);color:yellow;border:1px solid skyblue;
    }
    .wik:focus{
      color:yellow;
    background-color: rgba(0, 5, 6, 0.47);
    }
    .one{
      margin-top:30px;
      width: 100px;height:44px;background-color:green;border-radius:5px;font-weight:bold;border:1px solid  rgba(0, 128, 2, 0.74);background-color: rgba(0, 128, 2, 0.8);transition:0.5s ease;color:black;
    }
    .one:hover{
      background-color: green;
    }
    .log{
      position:absolute;
      top:0%;margin-top:50px; left:710px;
    }
    .onti{
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      color:skyblue;
      text-align:center;font-size:45px;margin-top:50px;
    }
     .thr{
       font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      color:skyblue;margin-left:330px;margin-top:30px;
    }

    .locat{
    font-size: 13.5px; font-family:Arial, Helvetica, sans-serif; color: black;margin-top: 40px;margin-left: 70px;
}
.synd{
    margin-top: 10px;
    width: 290px;height: 60px;background-color: rgba(211, 211, 211, 0.458);border-radius: 10px;border:0.5px solid  rgba(211, 211, 211, 0.458);
    font-weight: bold;font-size: 14px;padding-left: 20px;transition: 0.5s ease;
}
.synd:focus{
    border-color: rgb(53, 70, 252);outline: none;background-color: white;
}
.synd::placeholder{
    color: rgb(149, 149, 149);
}
.locatt{
    font-size: 13.5px; font-family:Arial, Helvetica, sans-serif; color: black;margin-top: 40px;margin-left: 20px;
}
.synds{
    margin-top: 10px;   color: rgb(149, 149, 149);
    width: 290px;height: 60px;background-color: rgba(211, 211, 211, 0.458);border-radius: 10px;border:0.5px solid  rgba(211, 211, 211, 0.458);
    font-weight: 100;font-size: 14px;padding-left: 20px;transition: 0.5s ease;
}
.synds:focus{
    border-color: rgb(53, 70, 252);outline: none;background-color: white;
}
.kgisl{
     color: black;transition: 0.5s ease;
}
.locatp{
    font-size: 13.5px; font-family:Arial, Helvetica, sans-serif; color: black;margin-top: 30px;margin-left: 70px;
}
.locatps{
    font-size: 13.5px; font-family:Arial, Helvetica, sans-serif; color: black;margin-top: 30px;margin-left: 20px;
}
.syndv{
    margin-top: 10px;color:black;
    width: 445px;height: 60px;background-color: rgba(211, 211, 211, 0.458);border-radius: 10px;border:0.5px solid  rgba(211, 211, 211, 0.458);
    font-weight: bold;font-size: 14px;padding-left: 20px;transition: 0.5s ease;
}
.kgisl:hover{
    background-color:  rgba(211, 211, 211, 0.458);
}
.syndv:focus{
    border-color: rgb(53, 70, 252);outline: none;background-color: white;
}
.trcxx{
    position: absolute;margin-top: 40px;margin-left: 80px;font-weight: bold;
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
.sedptg{
    margin-top: 40px;margin-left: 360px;
    padding: 17px;border-radius: 50%;background-color:rgb(53, 70, 252);
    color: white;
}

.morgans{
 margin-top: 1px;margin-left: 430px;
 color:black;cursor: pointer;width: 400p;
  font-size: 19px;font-family: Arial, Helvetica, sans-serif;font-weight: bold;transition: 0.5s ease;
}

.boults{
margin-top: -30px;margin-left: 430px;
  width: 0.01px;height:0.01px;background-color:black;transition: 0.5s ease;
}

.arch:hover .morgans{
    color:black;
}
.arch:hover .boults{
  width: 180px;height: 0.5px;margin-top: -30px;margin-left: 430px;
}
.supportv{
    margin-left: 430px;margin-top: -50px;
    font-size: 15px;color: dimgray;
}
.nbvat{
    font-size: 15.3px;color: dimgray; margin-left: 80px;margin-top: 40px;
}



  </style>


  




 


<div class="lo" >

   

   <img class="sivaji" src="images/Gemini_Generated_Image_1ikldi1ikldi1ikl.png" width="1528px" height="800px" alt="">















<div class="msivaji">  

<form   method="post">
<div class="d-flex">


<label class="locat" for=""><b>From</b> (Your Location) <br>
   <input class="synd" type="text" name="name" id="" placeholder="Sydney,Australia" value="<?php  echo isset($edit) ? $edit['name'] :'';?>" required >
</label>

<label class="locatt" for=""><b>To</b> (Another Location) <br>
   <input class="synd" type="text" name="location" id="" placeholder="Melbourne,Australia" value="<?php  echo isset($edit) ? $edit['location'] :'';?>" required ></label>

<label class="locatt" for=""><b>Weight</b> (Kilogram)<br>
   
   <select class="synds" name="weight" id=""value="<?php  echo isset($edit) ? $edit['weight'] :'';?>" required >
    <option class="kgisl"   value="2kg">2kg</option>
    <option class="kgisl"  value="4kg">4kg</option>
    <option class="kgisl"  value="6kg">6kg</option>
    <option class="kgisl"  value="8kg">8kg</option>
    <option class="kgisl"  value="10kg">10kg</option>
   </select>
</label>   

</div>
<div class="d-flex">
<label class="locatp" for=""><b>Total Unit</b> <br>
   <input  class="syndv" type="number" name="unit" id="" placeholder="Melbourne,Australia" value="<?php  echo isset($edit) ? $edit['unit'] :'';?>" required  ></label>

<label class="locatps" for=""><b>Shipment Type</b> <br>
    <select class="syndv" name="shipment" id=""value="<?php  echo isset($edit) ? $edit['shipment'] :'';?>" required >>
    <option class="kgisl"  value="Air Freight">Air Freight</option>
    <option class="kgisl"  value="Ocean Freight">Ocean Freight</option>
    <option class="kgisl"  value="Road Freight">Road Freight</option>
    <option class="kgisl"  value="Rail Freight">Rail Freight</option>
    <option class="kgisl"  value="Reverse Freight">Reverse Freight</option>
    <option  class="kgisl" value="Door to Door Freight">Door to Door Freight</option>
   </select>
</label> 
</div>

  <button id="btns" onclick="btnsColor()"  name="update" type="submit"class="trcxx">Update + </button>

</form>
      <i class="fa-solid fa-phone sedptg"></i>

      <div class="arch">
        <h3 class="supportv">Always-On Support</h3>
        <h4 class="morgans">+1 (99) 656 786 534</h4><br>
        <h4 class="boults"></h4>
      </div>

      <h5 class="nbvat">N: B- <b class="vatk">VAT(1.5%)</b> are included in country-wise & internationally.</h5>


<form action="" method="post">
  <button id="btns" onclick="btnsColor()"  name="prevs" type="submit"class="trcxxj">Back + </button>
</form>

  </div>
   </div>
   </div>
    


</div>














    </div>





















   
</body>
</html>





 







