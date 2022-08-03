<?php
session_start();


if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: homebeforelogin.php");
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css">

  <script src="https://kit.fontawesome.com/8fb8e03dbe.js" crossorigin="anonymous"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lemonada&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch&family=Lobster&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
  <title>semp project</title>
</head>

<body>


  <header>
    <div class=" top-header p-xl-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-6 p-2 mx-auto txt" style="font-weight: 600;font-size: 20px; width: 50p; color:white">
          B2 BED AND BREAKFAST
          </div>
          <!-- <div class="col-3"> -->
          <!-- <a href="" style="text-decoration: none; color: white;"> <i class="fas fa-phone"></i>9851234567</a> -->
          <!-- </div> -->
          <div class="col-6">
            <!-- <button type="button" class="btn btn-light  " style="margin-right: 7rem; margin-top: 5px; float: right;"
              onclick="document.getElementById('id1').style.display='block'">Login/Register</button> -->

              <!-- <h4 style="color: white;">welcome to sample</h4> -->
              
              <h4 style="float: right;"> <i class="far fa-user"></i> <?php echo "  ". $_SESSION['username'] ?> </h4>




          </div>
        

        </div>

      </div>

    </div>
    <!-- <div class="modal" id="id1">
      <form action="" class="modal-content animate" method="POST">
        <div>
          <span onclick="document.getElementById('id1').style.display='none'" class="close"
            title="close modal">&times;</span>
        </div>
        <div class="containerfirst">
          <label for="uname"><b>Username</b></label>
          <input type="text" class="form-control" placeholder="Enter Username" name="uname" required>
          <label for="pswd"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="pswd" required class="form-control">
          <button class=" btn btn-dark" type="submit">Submit</button>
        </div>
      </form>
    </div> -->

    <div class="bottom-header">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="homeafterlogin.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactus.html">Support</a>

              <li class="nav-item">
                <a href="aboutus.html" class="nav-link">AboutUS</a>
              </li>


              <li class="nav-item">
                <a class="nav-link" href="faq.html">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="TERMS.HTML">Terms and Conditions</a>
              </li>
            </ul>
            <!-- <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
          </div>
        </div>
      </nav>
    </div>
  </header>

  <section class="carousel1">
    <div class="container-fluid" style="margin-left:60px">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/car6.jpg" class="d-block w-100 " style="height: 400px; width: 100%;" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <!-- <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p> -->
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/car7.jpg" class="d-block w-100" style="height: 400px;" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <!-- <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p> -->
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/car.jpg" class="d-block w-100" style="height: 400px;" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <!-- <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p> -->
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>


  <br>
  <section class="findus">
    <div class="container">
      <div class="row text-center">
        <div class="col-12">
          <h2>FIND US AT <span class="auto-input"></span></h2>
        </div>
      </div>
    </div>
  </section>
  <hr>

  <section class="cities">
    <div class="container">
      <div class="row text-center">
        <div class="col-4">
          <a href="del.html">
            <img src="images/delhi.jpg" style="width: 400px; height:250px;" class="rounded" alt=""></img>
          </a>
          <h4>HOTELS IN DELHI</h4>
        </div>
        <div class="col-4">
          <a href="ka.html">
            <img src="images/bangalore.jpg" style="width: 400px; height: 250px;" class="rounded" alt=""></img>
          </a>
          <h4>HOTELS IN BANGALORE</h4>
        </div>
        <div class="col-4">
          <a href="ap.html">
            <img src="images/vskp.jpg" style="width: 400px; height: 250px;" class="rounded" alt=""></img>
          </a>
          <h4>HOTELS IN VISAKHAPATNAM</h4>

        </div>
      </div>
      <br>
      <div class="row text-center">
        <div class="col-4">
          <a href="tn.html">
            <img src="images/chennai.png" style="width: 400px; height: 250px;" class="rounded" alt=""></img>
          </a>
          <h4>HOTELS IN CHENNAI</h4>
        </div>
        <div class="col-4">
          <a href="ts.html">
            <img src="images/hyderabad.jpeg" style="width: 400px; height: 250px;" class="rounded" alt=""></img>
          </a>
          <h4>HOTELS IN HYDERABAD</h4>
        </div>
        <div class="col-4">
          <a href="ka.html">
            <img src="images/mumbai.jpg" style="width: 400px; height: 250px;" class="rounded" alt=""></img>
          </a>
          <h4>HOTELS IN MUMBAI</h4>

        </div>
      </div>

    </div>
  </section>
  <br>

  <section class="subscribe" style="background-color: rgb(196, 193, 193); padding: 20px;">
    <div class="container">

      <div class="row text-center ">
        <h3>WANT TO GET LATEST UPDATES ?</h3>
        <br>
        <div class="inputgrp">

          <input type="email" class="form-control" name="update" id="" required>
          <div class="inputgrp-btn">
            <!-- <button onclick="document.getElementById('id2').style.display='block'"
              class="btn btn-dark">SUBSCRIBE</button> -->
              <button class="btn btn-dark" id="bt">SUBSCRIBE</button>
          </div>

          <div class="modal2" id="id2">
            <img src="images/successblack.jpg" alt="">
          </div>

        </div>
        </div>
        </div>
  </section>
  <script>
   let b= document.getElementById("bt")
   b.addEventListener("click",function(){
    
    document.getElementById('id2').style.display='block'
  
    console.log("clicked");
   })
  </script>

  <footer class="fullfooter">
    <div class="container-fluid topfooter">
      <div class="row">
        <div class="col-3 pt-3 text-center ">
          <p style="margin: 0px;">
            Registered: </p>
          <p> Eastern street,Eluru,W.G Dst,Eluru </p>
          <p>Company Reg: 582764,registered in India. Cookie Policy - Privacy Notice
            <a href="">read more</a>
          </p>
          <a style="color:silver;" href="https://www.facebook.com/satwik.srk" class="p-1"><i
              class="fab fa-2x fa-facebook-square"></i></a>
          <a style="color:silver;" href="https://in.linkedin.com/in/satwik-tatikonda-b5949a194" class="p-1"><i
              class="fab fa-2x fa-linkedin"></i></a>
          <a style="color:silver;" href="https://www.youtube.com/channel/UCrkt6e6e0nCWPw_sQbT61jA" class="p-1"><i
              class="fab fa-2x fa-youtube"></i></a>
          <a style="color:silver;" href="https://www.instagram.com/world_of_tunes_/" class="p-1"><i
              class="fab fa-2x fa-instagram-square"></i></a>

        </div>
        <div class="col-3 pt-3 text-center">
          <h3>Top Cities</h3>
          <a href="del.html">DELHI</a><br>
          <a href="ap.html">VISAKHAPATNAM</a><br>
          <a href="mh.html">MUMBAI</a><br>
          <a href="ts.html">HYDERABAD</a><br>
          <a href="tn.html">CHENNAI</a><br>
          <a href="ka.html">BANGALORE</a><br>
        </div>
        <div class="col-3 pt-3 text-center">
          <h3>Visit the page you like</h3>
          <a href="contactus.html">Support</a><br>
          <a href="aboutus.html">About us</a><br>
          <a href="TERMS.HTML">Terms and Conditions</a><br>
          <!-- <a href="webdev.html">Web developement</a><br> -->

        </div>
        <div class="col-3 pt-3">
          <h3>Contact us</h3>
          <a class="p-1" href=""> <i class="fas fa-phone"></i> +(91) 9851234567 </a><br>
          <a class="p-1" href=""> <i class="fas fa-envelope"></i> sample@gmail.com </a>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243208.17099333327!2d83.12250426152357!3d17.73862250347033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39431389e6973f%3A0x92d9c20395498468!2sVisakhapatnam%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1636019967251!5m2!1sen!2sin"
              frameborder="0"></iframe>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid bottomfooter">
      <div class="row">
        <div class="col-12 text-center pt-2">
          <p>copyrights All Rights Reserved to </p>
        </div>
      </div>
    </div>
  </footer>



  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="bootstrap/js/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>


  <script type="text/javascript">
    var clockElement = document.getElementById('clock');

    function clock() {
      clockElement.textContent = new Date().toString();
    }

    setInterval(clock, 1000);
  </script>

  <script>

    var modal2 = document.getElementById('id2');

    window.onclick = function (event) {
      if (event.target == modal2) {
        document.getElementById('id2').style.display = "none";
      }
    }
// document.addEventListener('click',function(event){
//   var isclickinside = modal2.contains(event.target);
//   if(!isclickinside){
//     modal2.style.display = "none";
//   }
// });
  </script>

  <script>
    var typed = new Typed(".auto-input", {
      strings: ["DELHI", "VISAKHPATNAM", "MUMBAI", "CHENNAI", "HYDERABAD", "BANGALORE"],
      typeSpeed: 100,
      backSpeed: 100,

      loop: true,
    })

  </script>

  <button onclick="topFunction()" id="mybtn" title="gototop"><i class="fas fa-arrow-up"></i></button>

  <script>

    var mybutton = document.getElementById("mybtn");


    window.onscroll = function () { scrollFunction() };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }


    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
</body>

</html>