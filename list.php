<?php
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

$sql = "SELECT * FROM room where floor = 1";
$result = $conn->query($sql);
echo '<div class="col-md-12">
  <div class="section-heading">
    <h2>Floor 1</h2>
    <a href="rent.php">view more <i class="fa fa-angle-right"></i></a>
  </div>
</div>';
//INSERT INTO `room`(`nameroom`, `typeroom`, `rentday`, `renthour`, `number`, `lug`, `door`, `status`) VALUES ('103','B',20,4,2,3,2,'Hire')
if ($result->num_rows > 0) {
  
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
   

    echo '<div class="col-md-4">
    <div class="product-item">
      <img src="assets/images/tang1_1.jpg" alt="">

      <div class="down-content">
        <h4>Large: Premium</h4>
        <h3> Room : ' .$row["nameroom"].'</h3>
        <h6><small>from</small> $' .$row["rentday"].' <small>per day</small></h6>
        <h6><small>from</small> $' .$row["renthour"].' <small>per hour</small></h6>
        

        <p>ALH Properties is so pleased to bring to the Market the Ultra luxury and Dubai`s highest End Serviced apartments in Sofitel The Obelisk </p>

        <small>
            <strong title="Passegengers"><i class="fa fa-user"></i> ' .$row["number"].'</strong> &nbsp;&nbsp;&nbsp;&nbsp;
            <strong title="Luggages"><i class="fa fa-briefcase"></i> ' .$row["lug"].'</strong> &nbsp;&nbsp;&nbsp;&nbsp;
            <strong title="Windows"><i class="fa fa-sign-out"></i> ' .$row["door"].'</strong> &nbsp;&nbsp;&nbsp;&nbsp;
            <strong title="Transmission"><i class="fa fa-cog"></i> ' .$row["typeroom"].'</strong>
        </small>

        <span>
          <a style="font-size:25px" href="#" data-toggle="modal" onclick="myFunction('.$row["nameroom"].')" data-target="#exampleModal">' .$row["status"].'</a>
        </span>
        
      </div>
    </div>
  </div>';
  }
} else {
  echo "0 results";
}

$sql2 = "SELECT * FROM room where floor = 2";
$result = $conn->query($sql2);
echo '<div class="col-md-12">
    <div class="section-heading">
      <h2>Floor 2</h2>
      <a href="rent.php">view more <i class="fa fa-angle-right"></i></a>
    </div>
  </div>';
//INSERT INTO `room`(`nameroom`, `typeroom`, `rentday`, `renthour`, `number`, `lug`, `door`, `status`) VALUES ('103','B',20,4,2,3,2,'Hire')
if ($result->num_rows > 0) {
  
  // output data of each row
  while($row = $result->fetch_assoc()) {
    

    echo '<div class="col-md-4">
    <div class="product-item">
      <img src="assets/images/tang1_1.jpg" alt="">

      <div class="down-content">
        <h4>Large: Premium</h4>
        <h3> Room : ' .$row["nameroom"].'</h3>
        <h6><small>from</small> $' .$row["rentday"].' <small>per day</small></h6>
        <h6><small>from</small> $' .$row["renthour"].' <small>per hour</small></h6>

        <p>ALH Properties is so pleased to bring to the Market the Ultra luxury and Dubai`s highest End Serviced apartments in Sofitel The Obelisk </p>

        <small>
            <strong title="Passegengers"><i class="fa fa-user"></i> ' .$row["number"].'</strong> &nbsp;&nbsp;&nbsp;&nbsp;
            <strong title="Luggages"><i class="fa fa-briefcase"></i> ' .$row["lug"].'</strong> &nbsp;&nbsp;&nbsp;&nbsp;
            <strong title="Windows"><i class="fa fa-sign-out"></i> ' .$row["door"].'</strong> &nbsp;&nbsp;&nbsp;&nbsp;
            <strong title="Transmission"><i class="fa fa-cog"></i> ' .$row["typeroom"].'</strong>
        </small>

        <span>
          <a style="font-size:25px" href="#" data-toggle="modal" onclick="myFunction('.$row["nameroom"].')" data-target="#exampleModal">' .$row["status"].'</a>
        </span>
      </div>
    </div>
  </div>';
  }
} else {
  echo "0 results";
}


$sql3 = "SELECT * FROM room where floor = 3";
$result = $conn->query($sql3);
echo '<div class="col-md-12">
    <div class="section-heading">
      <h2>Floor 3</h2>
      <a href="rent.php">view more <i class="fa fa-angle-right"></i></a>
    </div>
  </div>';
//INSERT INTO `room`(`nameroom`, `typeroom`, `rentday`, `renthour`, `number`, `lug`, `door`, `status`) VALUES ('103','B',20,4,2,3,2,'Hire')
if ($result->num_rows > 0) {
  
  // output data of each row
  while($row = $result->fetch_assoc()) {
    

    echo '<div class="col-md-4">
    <div class="product-item">
      <img src="assets/images/tang1_1.jpg" alt="">

      <div class="down-content">
        <h4>Large: Premium</h4>
        <h3> Room : ' .$row["nameroom"].'</h3>
        <h6><small>from</small> $' .$row["rentday"].' <small>per day</small></h6>
        <h6><small>from</small> $' .$row["renthour"].' <small>per hour</small></h6>

        <p>ALH Properties is so pleased to bring to the Market the Ultra luxury and Dubai`s highest End Serviced apartments in Sofitel The Obelisk </p>

        <small>
            <strong title="Passegengers"><i class="fa fa-user"></i> ' .$row["number"].'</strong> &nbsp;&nbsp;&nbsp;&nbsp;
            <strong title="Luggages"><i class="fa fa-briefcase"></i> ' .$row["lug"].'</strong> &nbsp;&nbsp;&nbsp;&nbsp;
            <strong title="Windows"><i class="fa fa-sign-out"></i> ' .$row["door"].'</strong> &nbsp;&nbsp;&nbsp;&nbsp;
            <strong title="Transmission"><i class="fa fa-cog"></i> ' .$row["typeroom"].'</strong>
        </small>

        <span>
          <a style="font-size:25px" href="#" data-toggle="modal" onclick="myFunction('.$row["nameroom"].')" data-target="#exampleModal">' .$row["status"].'</a>
        </span>
      </div>
    </div>
  </div>';
  }
} else {
  echo "0 results";
}

$sql4 = "SELECT * FROM room where floor = 4";
$result = $conn->query($sql4);
echo '<div class="col-md-12">
    <div class="section-heading">
      <h2>Floor 4</h2>
      <a href="rent.php">view more <i class="fa fa-angle-right"></i></a>
    </div>
  </div>';
//INSERT INTO `room`(`nameroom`, `typeroom`, `rentday`, `renthour`, `number`, `lug`, `door`, `status`) VALUES ('103','B',20,4,2,3,2,'Hire')
if ($result->num_rows > 0) {
  
  // output data of each row
  while($row = $result->fetch_assoc()) {
    

    echo '<div class="col-md-4">
    <div class="product-item">
      <img src="assets/images/tang1_1.jpg" alt="">

      <div class="down-content">
        <h4>Large: Premium</h4>
        <h3> Room : ' .$row["nameroom"].'</h3>
        <h6><small>from</small> $' .$row["rentday"].' <small>per day</small></h6>
        

        <p>ALH Properties is so pleased to bring to the Market the Ultra luxury and Dubai`s highest End Serviced apartments in Sofitel The Obelisk </p>

        <small>
            <strong title="Passegengers"><i class="fa fa-user"></i> ' .$row["number"].'</strong> &nbsp;&nbsp;&nbsp;&nbsp;
            <strong title="Luggages"><i class="fa fa-briefcase"></i> ' .$row["lug"].'</strong> &nbsp;&nbsp;&nbsp;&nbsp;
            <strong title="Windows"><i class="fa fa-sign-out"></i> ' .$row["door"].'</strong> &nbsp;&nbsp;&nbsp;&nbsp;
            <strong title="Transmission"><i class="fa fa-cog"></i> ' .$row["typeroom"].'</strong>
        </small>

        <span>
          <a style="font-size:25px" href="#" data-toggle="modal"  onclick="myFunction('.$row["nameroom"].')"  data-target="#exampleModal">' .$row["status"].'</a>
        </span>

        
      </div>
    </div>
  </div>';
  }
} else {
  echo "0 results";
}


$conn->close();

?>

<script>
function myFunction(tenphong) {
  document.getElementById('demo').innerHTML ="Room : "+ tenphong;
}
</script>