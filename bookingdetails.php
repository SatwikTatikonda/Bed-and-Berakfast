
<?php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$mail=$_POST["mail"];
$guest=$_POST["guests"];
$date1=$_POST["date1"];
$date2=$_POST["date2"];
$num=$_POST["phnnum"];
$rtype=$_POST["rtype"];
$days=((int)substr($date2,-1,1)-(int)substr($date1,-1,1));
$req=(int)substr($rtype,-6,4);
$tprice=($days*$req);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">

  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    
    <script
      src="https://kit.fontawesome.com/8fb8e03dbe.js"
      crossorigin="anonymous"  ></script>

    <title>php page</title>

</head>

<body style="display:flex;align-items: center;justify-content:center; height:690px">
<!-- <body class="bdy"> -->
<div class="container-fluid square" style="background-color: white; height:500px;width:500px;">
<div class="row">

    <h3 style="text-align:center; font-size: 30px; font-family: 'Permanent Marker', cursive;">BOOKING DETAILS</h3><br><br><br>
</div>
<div class="row">
    
    <div class="col-12">

        <h5 style="margin-left:20px; margin-top:10px ; font-size:20px; font-family: 'Ubuntu Mono', monospace;">Name :<?php echo $fname." ". $lname ?> <br> </h5>
    </div>
</div>
<div class="row">
   
    <div class="col-12">

        <h5 style="margin-left:20px ;  margin-top:10px ; font-size:20px; font-family: 'Ubuntu Mono', monospace;">Contact Number :<?php echo $num ?> <br></h5>
      
    </div>
</div>
<div class="row">
    
    <div class="col-12">

        <h5 style="margin-left:20px ; margin-top:10px ;  font-size:20px; font-family: 'Ubuntu Mono', monospace;">Guests Count :<?php echo $guest?> <br></h5>
        
        
    </div>
</div>
<div class="row">
    
    <div class="col-12">
        
        <h5 style="margin-left:20px ; margin-top:10px ;  font-size:20px; font-family: 'Ubuntu Mono', monospace;">Check-in Date :<?php echo $date1 ?> <br></h5>
       
    </div>
</div>
<div class="row">
    
    <div class="col-12">

       
        <h5 style="margin-left:20px ; margin-top:10px ;  font-size:20px; font-family: 'Ubuntu Mono', monospace;">Check-out Date :<?php echo $date2 ?> <br> </h5>
    </div>
</div>
<div class="row">
    
    <div class="col-12">

       
        <h5 style="margin-left:20px ; margin-top:10px ;  font-size:20px; font-family: 'Ubuntu Mono', monospace;">Nights :<?php echo $days ?> <br> </h5>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h5 style="margin-left:20px ;  margin-top:10px ;  font-size:20px; font-family: 'Ubuntu Mono', monospace;">Total Price :<?php  echo $tprice ?></h5>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h5 style="margin-left:20px ;  margin-top:10px ;  font-size:20px; font-family: 'Ubuntu Mono', monospace;">Discount Applied :<?php echo " -1000" ?></h5>
    </div>
</div>
<div class="row">
  
    <div class="col-12">

        <h5 style="margin-left:20px ;  margin-top:10px ;  font-size:25px; font-family: 'Ubuntu Mono', monospace;">Payable Amout :<?php echo $tprice-1000  ?></h5>

</div><br><br>
</div>

<div class="row d-flex btncls ">
    <button type="button" class=" btn btn-dark d-flex" id="alertbtn"
     style="padding: 2px;width: 112px;"> Proceed to Pay</button>
</div>

</div>


<script>
    const b=document.getElementById('alertbtn');
    b.addEventListener("click",function(){
        alert("Payment Successful" +"\n"+"Order ID : "+ Math.trunc(10000000000000*(Math.random())));
    })
</script>




<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
</body>

</html>