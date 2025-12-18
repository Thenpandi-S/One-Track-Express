<style>

 .a{
      position:relative;
    }
    .b{
      position:absolute;
      top:0%;object-fit:cover;margin-top:-80px;margin-left:-10px;
    }
    .c{
      position:absolute;
      top:0%;
      margin-top:100px;background:transparent;backdrop-filter:blur(3px);
      margin-left:300px;border-radius:10px;background-color:rgba(0, 0, 0, 0.71);
          font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
          width: 900px;height:500px;border:1px solid yellow;

    }
    .nq{
      margin-left:220px;
      margin-top:30px;font-size:16px;color:yellow;font-weight:100;font-family:Arial, Helvetica, sans-serif;
    }
    .nqn{
      margin-left:220px;color:yellow;font-weight:100;font-family:Arial, Helvetica, sans-serif;
      margin-top:50px;font-size:16px;
    }
    .sq{
      margin-left:206px;font-size:16px;color:yellow;
    }
     .sqq{
      margin-left:173px;font-size:16px;color:yellow;
    }
     .sqw{
      margin-left:100px;font-size:16px;color:yellow;
    }
      .sqe{
      margin-left:177px;font-size:16px;color:yellow;
    }
       .sqr{
      margin-left:160px;font-size:16px;color:yellow;
    }
       .sqt{
      margin-left:158px;font-size:16px;color:yellow;
    }
       .sqy{
      margin-left:177px;font-size:16px;color:yellow;
    }
        .squ{
      margin-left:110px;font-size:16px;color:yellow;
    }
          .sqi{
      margin-left:122px;font-size:16px;color:yellow;
    }
    .sqo{
      margin-left:110px;font-size:16px;color:yellow;
    }
    .sqp{
      margin-left:186px;font-size:16px;color:yellow;
    }
    .sqa{
      margin-left:206px;font-size:16px;color:yellow;
    }
    .sqs{
      margin-left:142px;font-size:16px;color:yellow;
    }
    .kl{
      margin-left:100px;font-weight:500;   font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;color:white;

    }
    .thr{
       font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      color:pink;margin-left:370px;
    }

    .trcxx{
    position: absolute;margin-top: 510px;margin-left: 660px;font-weight: bold;
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

<?php 

   include 'data.php';

   if(isset($_GET['view'])){
    $id=$_GET['view'];
    $view_=view($connect,$id);
   }

   function view($connect,$id){
    $a="SELECT*FROM formthree WHERE ID=$id";
    $b=$connect->query($a);
    $c=mysqli_fetch_assoc($b);
    return $c;
   }


   if(isset($_POST['prevs'])){
    header("location: tablethree.php");
    exit();
}

?>



<div class="a">
 
   <img width="1515px" height="805px" class="b" src="images/g2.webp">


<div class="c">
   <h1 class="thr">Your Details</h1>
  <h4 class="nqn" ><b>Id</b><b class="sq">:</b><b class="kl"><?php  echo $view_['ID'] ; ?> </b></h4>
  <h4 class="nq"><b>Name</b> <b class="sqq">:</b><b class="kl"> <?php  echo $view_['name'];  ?></b> </h4>
  <h4 class="nq"><b>Email</b> <b class="sqe">:</b><b class="kl"> <?php  echo $view_['email'] ; ?></b> </h4>
  <h4 class="nq"><b>Message</b><b class="sqt">:</b><b class="kl"> <?php  echo $view_['message'] ; ?></b> </h4>
</div>

<form action="" method="post">
  <button id="btns" onclick="btnsColor()"  name="prevs" type="submit"class="trcxx">Back + </button>
</form>










</div>
