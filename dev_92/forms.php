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
<?php

$street = $_GET["street"];
$city = $_GET["city"];
$date = $_GET["date"];
$comm = $_GET["comment"];
?>



  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img class="navbar-brand rounded-circle" src="includes/logo.png" href="#" >
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
      </ul>
           <form class="form-inline mx-auto  my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        <li class="nav-item">
            <img class=' rounded-circle float-right' src='includes/ride.jpg' style='height:100px' href='#'>
          </li>



    </div>
  </nav>
      

      </nav> 


<br>






<div class="container">

    <div class="card-columns">
     
        <div class="card shadow p-3 mb-5 bg-white rounded" >
            <span class="close" >&times;</span>

            <a href="#" target="">
            <img class="card-img-top" data-toggle="modal" data-target="#repoModal" data-city="Holon Sokolov 45" data-time="20.12.1993" data-comment="The city has a severe lack of bins relative to even developing cities around the world. I think it stems from the old fear of IRA bombs in trash bins...this sort of breeds a mentality that just dumping rubbish on the ground is acceptable amongst certain people." src="includes/trash1.jpg" alt="Card image"> </a>
            <div class="card-body">
              <h5 class="card-title ">Sokolov 45</h5>
              <p class="card-text">Holon</p>
              <p class="card-text text-black-50 small float-right"> 20.12.1993 </p>
            </div>
          </div> 
          
          <div class="card shadow p-3 mb-5 bg-white rounded" >
              <span class="close" >&times;</span>
            <a href="#" target="">
            <img class="card-img-top" data-toggle="modal" data-target="#repoModal" data-city="Tel Aviv Ibn Gvirol 32" data-time="20.12.1993" data-comment="I never litter but I do recall once trying to bin some rubbish around Shoreditch High Street...on my walk down through the city I absolutely COULD not find any bins and by the time my walk was finished, I still had it with me by the time I got on the bus, and just ended up throwing it out at home (which is fine, but you see just how annoying it can be for residents)" src="includes/trash2.jpg" alt="Card image">
          </a>
              <div class="card-body">
              <h4 class="card-title">Ibn Gvirol 32</h4>
              <p class="card-text">Tel Aviv</p>
              <p class="card-text text-black-50 small float-right"> 20.12.1993 </p>
            </div>
          </div>

          <div class="card shadow p-3 mb-5 bg-white rounded" >
              <span class="close" >&times;</span>

              <a href="#" target="">
            <img class="card-img-top fluid" data-toggle="modal" data-target="#repoModal" data-city="Bat Yam KKL 100" data-time="20.12.1993" data-comment="We know trash, we know clean don’t last Never last when we load trash Face down, trash begets trash We know trash, we know clean don’t last Never last when we load trash We upload trash Face down, trash begets trash" src="includes/trash3.jpg" alt="Card image"> </a>
            <div class="card-body">
              <h4 class="card-title">KKL 100</h4>
              <p class="card-text">Bat Yam</p>
              <p class="card-text text-black-50 small float-right"> 20.12.1993 </p>
            </div>
          </div>


          <div class="card shadow p-3 mb-5 bg-white rounded">
              <span class="close" >&times;</span>

              <a href="#" target="">
            <img class="card-img-top " data-toggle="modal" data-target="#repoModal" data-city="Ramat Gan Ben Gurion 130" data-time="20.12.1993" data-comment="I'm cloaked trash
            Poker-fucking polygraphs
            My dirt so baked, man menstruate
            After each take test, say I passed
            That’s trash, I’m trash
            Kind you mine to trade for cash
            You’re trash, born trash" src="includes/trash4.jpg" alt="Card image"> </a>
            <div class="card-body">
              <h4 class="card-title">Ben Gurion 130</h4>
              <p class="card-text">Ramat Gan</p>
              <p class="card-text text-black-50 small float-right"> 20.12.1993 </p>
            </div>
          </div>
        
          <div class="card shadow p-3 mb-5 bg-white rounded" >
              <span class="close" >&times;</span>

              <a href="#" target="">
            <img class="card-img-top " data-toggle="modal" data-target="#repoModal"  data-city="Holon Shenkar 67" data-time="20.12.1993" data-comment="This side of my machette
            Fall out mercury confetti
            Ebony skies, I died already
            Liquor store counting pennies
            I’m in motion, do you savvy?
            I exhume ‘cause it relax me
            Watch you think ‘bout that? Don’t fight it
            Smell me though, fucker quiet
            Cyclone in a gortex shell
            Audio input for my spell
            Show up for what?" src="includes/trash5.jpg" alt="Card image">  </a>
            <div class="card-body">
              <h4 class="card-title">Shenkar 67</h4>
              <p class="card-text">Holon</p>
              <p class="card-text text-black-50 small float-right"> 20.12.1993 </p>
            </div>
          </div>


          <div class="card shadow p-3 mb-5 bg-white rounded" >
              <span class="close" >&times;</span>

              <a href="#" target="">
            <img class="card-img-top " data-toggle="modal" data-target="#repoModal"  data-city="<?php echo $city . $street; ?>" data-time="20.12.1993" data-comment="
            <?php echo $comm; ?> 
            " src="includes/trash6.jpg" alt="Card image">  </a>
            <div class="card-body">
              <h4 class="card-title"><?php echo  $street; ?></h4>
              <p class="card-text"><?php echo $city; ?></p>
              <p class="card-text text-black-50 small float-right"><?php echo $date; ?> </p>
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
