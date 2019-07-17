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




  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img class="navbar-brand rounded-circle" src="includes/logo.png" href="index.php" >
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Reports</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Settings</a>
        </li>
        </li>
        <?php


      if ($_SESSION["user_type"]== 'ADMIN'){

       echo ' <li class="nav-item">';
       echo'   <a class="nav-link" href="uset_tbl.php">Manage Users</a>';

       echo ' </li>';}
        ?> 

      </ul>
           <form class="form-inline mx-auto  my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search">
          <button  class="btn btn-outline-success my-2 my-sm-0" >Search</button>
        </form>

        <li>
          <a class="float-right"  >  Welcome, <strong><?php echo $_SESSION["username"];?></strong> </a>
        </li>


        <li class="nav-item">
          <a href="#"></a>
            <img class=' nav-link rounded-circle float-right'  data-toggle="popover" data-placement="bottom" data-html ="true" data-content='  <a href="index.php">  <b> LOG OUT </b> </a>' src='includes/<?php echo $_SESSION["userID"];?>.jpg' style='height:100px' href='#'>
          </li>




    </div>
  </nav>
      

      </nav> 


<br>


<script>

    $(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});
    $(document).ready(function(){
      $("#myBtn").click(function(){
        $("#myModal").modal();
      });
    });
    </script>


<style>
p:first-child {
  background-color: yellow;
}
</style>

<div class="container">





    <div class="card-columns ">
     
    <?php
$sql = "SELECT * FROM tbl_cards_92";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo '<div class="card shadow p-3 mb-5 bg-white rounded" >';
          echo '  <span class="close" >&times;</span>';
           echo '    <a href="#" target="">';
            echo ' <img class="card-img-top" data-toggle="modal" data-target="#repoModal" data-city=" ' . $row[address], $row[city].' " data-time=" '.$row[reg_date]. '" data-comment="' .$row[comm].' " src="includes/trash'.$row[cardID].'.jpg" alt="Card image"> </a>';
             echo ' <div class="card-body">';
            echo '  <h5 class="card-title"> '.$row[address].'</h5> ';
            echo '  <p class="card-text">'. $row[city].'</p>';
            echo '  <p class="card-text text-black-50 small float-right">' . $row[reg_date] .' </p>';
            echo '</div>';
            echo '</div> ';
          }
        } else {
            echo "0 results";
        }
  
          ?>
         

        
  
  <br>
  <br>
</div>
</div>

</div>

  
<div class="modal fade" id="repoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          


        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>



              
              <!-- The Modal -->
              <div class="modal" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">
              
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Report form</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
              
                    <div class="modal-body">
                        <form action="index.php">
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text">Full name</span>
                                      </div>
                                      <input type="text" class="form-control" placeholder="MC" > 
                                      <input type="text" class="form-control" placeholder="Ride"> 
                                    </div>  
                                    <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text">Address</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Street and number" name="street">
                                    
                                            <input type="text" class="form-control" placeholder="City" name="city">
                                          </div>  


                                          <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text">Time and date</span>
                                                </div>
                                                <input type="time" class="form-control" value="" name="time" >
                                                <input type="date" class="form-control" value="" name="date">
                                              </div>  


                                              <div class="form-group">
                                                    <input type="file" class="form-control-file border" name="file" placeholder="Your image">
                                                  </div>


                                      
                                              <div class="form-group">
                                                    <label for="comment">Comment:</label>
                                                    <textarea class="form-control" rows="5" name="comment"></textarea>
                                                  </div> 

                                                  <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>
                   </div>

              

                   
              
                  </div>
              </div>
   </div>
 </div>
 <script>
    var closebtns = document.getElementsByClassName("close");
    var i;
    
    for (i = 0; i < closebtns.length; i++) {
      closebtns[i].addEventListener("click", function() {






        this.parentElement.style.display = 'none';

      });
    }


    $('#repoModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var city = button.data('city') 
  var comm = button.data('comment')
  var date = button.data('time')// Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text(city)
  
  modal.find('.modal-body ').text(comm)
  



})

</script>
</body>
<footer class="page-footer font-small bg-light">

          <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="#"> Benjamin Koren </a>
          </div>

        
        </footer>
</html>
