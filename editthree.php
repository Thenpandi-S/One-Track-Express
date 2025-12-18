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

   include ("updatethree.php");

   if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $edit=editdata($connect,$id);
   }

   function editdata($connect,$id){
    $a="SELECT * FROM formthree WHERE ID=$id";
    $b=$connect->query($a);
    $c=mysqli_fetch_assoc($b);
    return $c;
   }


   if(isset($_POST['prevs'])){
    header("location: tablethree.php");
    exit();
   }
?>







  <style>

  .trcxxj{
    position: absolute;margin-top: 550px;margin-left: 600px;font-weight: bold;
     font-family: "Roboto", sans-serif;width: 150px;height: 52px;color:white;
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

.nuclure{
    margin-left: 455px;margin-top: 30px;
    position: absolute;width: 640px;height: 690px;background-color:rgb(4, 51, 90);;border-radius: 20px;border: 1px solid white;
}
.gone{
    margin-left: 37px;color: white;font-weight: bold;font-size: 15px;font-family: Arial, Helvetica, sans-serif;
}
.gones{
    margin-left: 20px;color: white;font-weight: bold;font-size: 15px;font-family: Arial, Helvetica, sans-serif;
}
.ggone{
    width: 270px;height:60px; font-weight: bold;border-radius: 10px;border: 1px solid white;font-size: 15px;
    padding-left: 20px;color: black;margin-top:8px;
}
.ggone::placeholder{
    color: rgb(169, 169, 169);
}
.ggone:focus{
    border-color: white;outline: none;
}
.gonesd{
    margin-left: 40px;color: white;font-weight: bold;font-size: 15px;font-family: Arial, Helvetica, sans-serif;margin-top: 20px;
}
.ggoned{
    width: 550px;padding-bottom:160px; font-weight: bold;border-radius: 10px;border: 1px solid white;font-size: 15px;
    padding-left: 20px;color: black;margin-top:8px;padding-top: 20px;
}
.ggoned::placeholder{
    color: rgb(169, 169, 169);
}
.ggoned:focus{
    border-color: white;outline: none;
}
.tikin{
    cursor: pointer;
    width: 11px;height: 11px;margin-left: 50px;background-color: white;border: 0.1px solid dimgray;border-radius: 2px;
}
.fucer{
    color:white;font-size: 7px;margin-left: -8px;margin-top: 2.5px;
}
.fucer:focus{
    color: black;
}
.browse{
    font-size: 14px;color:white;margin-left: 10px;margin-top: -4px;
}
.browser{
    font-size: 14px;color:white;margin-left: 10px;margin-top: -4px;
}
.trcxkp{
    position: absolute;margin-top: 30px;margin-left: 40px;font-weight: bold;
     font-family: "Roboto", sans-serif;width: 220px;height: 60px;color:white;
     background-color: black;border-radius: 30px;border: 1px solid black;  
    overflow: hidden;font-size: 14px;
    cursor: pointer;
    z-index: 1;
    transition: color 0.4s ease;
}

.trcxkp::before {
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
.trcxkp:hover::before {
    width: 100%;
    height: 100%;
}
.thajavu{
    margin-left: 330px;border-radius:10px;margin-top: 100px;
    position: absolute; width: 870px;height:550px;background:transparent;border:1px solid white;backdrop-filter:blur(10px);
}

.fgver{
    margin-top: 20px;margin-left: 50px;font-weight: bold;font-size: 15px;color:white;
}
.named{

    width: 365px;height: 57px;border-radius: 10px;border: 1px solid rgba(211, 211, 211, 0.327);margin-top: 10px;padding-left: 20px;font-family: Arial, Helvetica, sans-serif;font-weight: 500;
   
}
.named::placeholder{
    color: rgba(105, 105, 105, 0.47);
}
.named:focus{
    border-color: rgba(211, 211, 211, 0.327);outline: none;
}
.fgverr{
    margin-top: 20px;margin-left: 20px;font-weight: bold;font-size: 15px;color:white;
}
.tikin{
    cursor: pointer;
    width: 11px;height: 11px;margin-left: 50px;background-color: white;border: 0.1px solid dimgray;border-radius: 2px;
}
.fucer{
    color:white;font-size: 7px;margin-left: -8px;margin-top: 2.5px;
}
.fucer:focus{
    color: black;
}
.browse{
    font-size: 14px;color: rgba(0, 0, 0, 0.912);margin-left: 10px;margin-top: -4px;
}
.nameds{

    padding-top: 20px;
    width: 750px;padding-bottom:130px;border-radius: 10px;border: 1px solid rgba(211, 211, 211, 0.327);margin-top: 10px;padding-left: 20px;font-family: Arial, Helvetica, sans-serif;font-weight: 500;
   
}
.nameds::placeholder{
    color: rgba(105, 105, 105, 0.47);
}
.trcxk{
    position: absolute;margin-top:250px;margin-left: -700px;font-weight: bold;
     font-family: "Roboto", sans-serif;width: 160px;height: 49px;color:white;
     background-color: rgb(53, 70, 252);border-radius: 30px;border: 1px solid rgb(53, 70, 252);  
    overflow: hidden;
    cursor: pointer;
    z-index: 1;
    transition: color 0.4s ease;
}

.trcxk::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 0;   
    height: 0;
    border-color:  black;  
    background-color: black;  
    z-index: -1;
    transition: all 0.45s ease;
    border-radius: inherit;
}
.trcxk:hover::before {
    width: 100%;
    height: 100%;
}
.trcxk:hover {
     border-color:black;
    color: white;
}
.deterrko{
     margin-left: 110px;margin-top: 100px;
     position: relative;
}
.jackson{
    position: absolute;border-radius: 20px;
}
.sision{
    margin-top: 135px;margin-left: 330px;
    position: absolute;width: 640px;height: 305px;background-color: white;border-radius: 10px;border: 1px solid lightgray;
}
.hesuta{
    position: absolute;
    font-size: 16px;color:rgb(53, 70, 252) ;padding-top: 5px;padding-bottom: 5px;padding-left: 15px;padding-right: 15px;border-radius: 30px;border: 1px solid lightgray;
    margin-top: 185px;margin-left: 540px;
}
.assisty{

    position: absolute;font-size: 28px;color: black;
    margin-left: 450px;margin-top: 230px;font-weight: bold;
}
.touew{
    position: absolute;font-size: 28px;color: black;
    margin-left: 490px;margin-top: 265px;font-weight: bold;
}
.hyden{
    position: absolute;font-size: 28px;color:rgb(53, 70, 252) ;
    margin-left: 640px;margin-top: 265px;font-weight: bold;
}
.trcxkk{
    position: absolute;margin-top:350px;margin-left: 570px;font-weight: bold;
     font-family: "Roboto", sans-serif;width: 180px;height: 49px;color:white;
     background-color: black;border-radius: 30px;border: 1px solid black;  
    overflow: hidden;
    cursor: pointer;
    z-index: 1;
    transition: color 0.4s ease;
}

.trcxkk::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 0;   
    height: 0;
    border-color:  rgb(53, 70, 252);  
    background-color:rgb(53, 70, 252);  
    z-index: -1;
    transition: all 0.45s ease;
    border-radius: inherit;
}
.trcxkk:hover::before {
    width: 100%;
    height: 100%;
}
.trcxkk:hover {
     border-color:rgb(53, 70, 252);
    color: white;
}


  </style>


  




 


<div class="lo" >

   

   <img class="sivaji" src="images/Gemini_Generated_Image_1ikldi1ikldi1ikl.png" width="1528px" height="800px" alt="">


















    





















<form class="thajavu"  method="post">

<div class="d-flex mt-5">


<label for="" class="fgver">Full Name* <br>
    
    <input class="named" name="name" type="text" name="" id="" placeholder="Enter your name" value="<?php  echo isset($edit) ? $edit['name'] :'';?>" required  >

</label>

<label for="" class="fgverr">Your Email* <br>
    
    <input class="named" name="email" type="text" name="" id="" placeholder="Enter your Email" value="<?php  echo isset($edit) ? $edit['email'] :'';?>" required  >

</label>

</div>


<div class="d-flex mt-4">
 <div class="tikin"></div><i  class="fa-solid fa-check fucer"></i>
 <h3 class="browser">Save my name, email in this browser for the next time I comment.</h3>
</div>


<label for="" class="fgver">Message* <br>
    
    <input class="nameds" name="message" type="text" name="" id="" placeholder="Your Message" value="<?php  echo isset($edit) ? $edit['message'] :'';?>" required  >

</label>




<button id="btns" onclick="btnsColor()" name="update"   class="trcxk">Update + </button>

</form>


<form action="" method="post">
  <button id="btns" onclick="btnsColor()"  name="prevs" type="submit"class="trcxxj">Back + </button>
</form>










    </div>



   
</body>
</html>





 



