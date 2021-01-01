

<!DOCTYPE html>
<html lang="en">

<?php include 'head.php';?>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <?php include 'menu.php';?>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Lorem ipsum dolor sit amet</h4>
              <h2>Fleet</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">

        <?php include 'list.php';?>

          <div class="col-md-12">
            <ul class="pages">
              <li><a href="#">1</a></li>
              <li ><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <?php include 'footer.php';?>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Booking</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">


            <?php

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["typerent"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["typerent"]);
  }
    
  if (empty($_POST["member"])) {
    $website = "";
  } else {
    $website = test_input($_POST["member"]);
  }

  if (empty($_POST["checkin"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["checkin"]);
  }

  if (empty($_POST["phone"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["phone"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php
if (isset($_POST["submit"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . connect_error());
}

$sql = "INSERT INTO test (ten,email,sdt,gender) VALUES ('".$name."', '".$comment."', '".$website."','".$gender."')";

if ($name!='' && $email!=null){
  if ($conn->query($sql) === TRUE) {
    echo "New ";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
$conn->close();
}
?>
<h2 id="demo">Im here</h2>
                          
              <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" name="typerent"  placeholder="Type rent" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input  class="form-control" id="demo" name="room" placeholder="Room" required="">
                          </fieldset>
                         
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="date" class="form-control" name="checkin" title="Check in" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="date" class="form-control" name="checkout" title="Check out" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" name="name" placeholder="Full name" required="">
                  <input type="text" class="form-control" name="CI" placeholder="Citizen identification" required="">
                  <input type="text" class="form-control" name="age" placeholder="Ages" required="">
                  

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" name="vehicle" placeholder="Vehicle" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" name="phone" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                  <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <input type="submit" name="submit" class="btn btn-primary"  value="Submit">
            

            
          </div>
                  </div>

              </form>
              
              
           </div>
          </div>
          
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
  </body>

</html>
