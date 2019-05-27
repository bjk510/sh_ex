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

    <div class="container">

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header" >
                <button type="button" class="close" data-dismiss="modal">&times;</button>

              </div>
              <div class="modal-body" style="padding:40px 50px;">
                <form role="form" action="index.php">
                  <div class="form-group">
                    <label for="usrname"></span> Username</label>
                    <input type="text" class="form-control" id="usr" placeholder="Enter username">
                  </div>
                  <div class="form-group">
                    <label for="psw"></span> Password</label>
                    <input type="text" class="form-control" id="psw" placeholder="Enter password">
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" value="" checked>Remember me</label>
                  </div>
                    <button type="submit" class="btn btn-success btn-block"> Login</button>
                </form>
              </div>
              <div class="modal-footer">
                <p>Not a member? <a href="#">Sign Up</a></p>
              </div>
            </div>
            
          </div>
        </div> 
      </div>
       
      <script>
      $(document).ready(function(){
        $("#myBtn").click(function(){
          $("#myModal").modal();
        });
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
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="forms.html" >Reports</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Settings</a>
        </li>
      </ul>
           <form class="form-inline mx-auto  my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search">
          <button  class="btn btn-outline-success my-2 my-sm-0" >Search</button>
        </form>

    <?php  
    $usr = $_GET["usr"];
        if ($usr == "hello"){
            echo  " <li class='nav-item'> ";
        echo "<h4> Welcome aboard &nbsp &nbsp " .$usr. "&nbsp &nbsp";

          echo  " <img class=' rounded-circle float-right' src='includes/ride.jpg' style='height:100px' href='#' >";
          echo  "</li>" ;}
            
     ?>
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

