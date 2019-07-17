<?php session_start();
include('db.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>IClean</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>




      <script>
     
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});




      </script>
      


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img class="navbar-brand rounded-circle" src="includes/logo.png"   href="#" >
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="forms.php" >Reports</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Settings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="uset_tbl.php">Manage Users</a>
        </li>

      </ul>
           <form class="form-inline mx-auto  my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search">
          <button  class="btn btn-outline-success my-2 my-sm-0" >Search</button>
        </form>


        <li>
          <a class="float-right"  >  Welcome, <strong><?php echo $_SESSION["username"];?></strong> </a>
        </li>

        <li>
          <a href="#"></a>
            <img class=' nav-link rounded-circle float-right'  data-toggle="popover" data-placement="bottom" data-content="" src='includes/<?php echo $_SESSION["userID"];?>.jpg' style='height:100px' href='#'>
        </li>



<form action="form.php">
</form>

    </div>
  </nav>
      

      </nav> 


<br>

<script>
    $(document).ready(function(){
      $("#myBtn").click(function(){
        $("#myModal").modal();
      });
    });
    </script>
    
<div class="container" >


    <img  src="includes/garb.jpg" href="#" >
          </div>
      </body>

      <footer class="page-footer font-small bg-light">

          <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="#"> Benjamin Koren </a>
          </div>

        
        </footer>
</html>

