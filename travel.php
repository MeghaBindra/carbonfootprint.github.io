<!DOCTYPE html>
<html>
<head>
	<title>Travel Usage</title>
	<link rel="shortcut icon" type="image/png" href="images/footprint.png"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<style type="text/css">
		.card_value{
			border: solid 2px #5F9EA0;
			width: 70%;
			height: auto;
			margin-top: 40px;
			background-color: #3CB371;
		}
		#secondnav{
	background-color: #228B22;
}
#logo{
	height: 100px;
	width: auto;
}
	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light " id="secondnav">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.html">
    	<img src="images/logocarbon.png" id="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.html" style="color:white;"><b>Home</b></a>
        </li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" style="color:white;" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			  <b>Calculate</b>
			</a>
			<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			  <li><a class="dropdown-item" href="general_usages.php">General Usages</a></li>
			  <li><a class="dropdown-item" href="travel.php">Travel</a></li>
			  <li><a class="dropdown-item" href="food.php">Food</a></li>
			  <li><a href="products.php" class="dropdown-item">Products</a></li>
			</ul>
		  </li>  
		  <li class="nav-item">
			<a class="nav-link " aria-current="page"style="color:white;" href="offset.html"><b>Offset</b></a>
		  </li>     
	  <li class="nav-item">
          <a class="nav-link" href="business.html" style="color:white;"><b>Business</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " style="color:white;" href="about.html"><b>About US</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:white;" href="contact.html"><b>Contact US</b></a>
        </li>
		<li class="nav-item">
			<a class="nav-link " aria-current="page"  style="color:white;"href="admin/login.php"><b>Admin</b></a>
		  </li>
      </ul>
    </div>
  </div>
</nav>
	<div class="container">
		<center>
			<form method="post">
			<div class="card card_value">
				<div class="container">
					<div class="card-header" style="background-color: green;">
					<h3>Enter Your Travel Consumption Here</h3>
				</div>
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label>Vehicle Distance (km/yr)</label>
							<input type="number" name="vehicle_distance" class="form-control" value="<?php echo $_POST['vehicle_distance']?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Bus Distance (km/yr)</label>
							<input type="number" name="bus_distance" class="form-control" value="<?php echo $_POST['bus_distance']?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Metro (km/yr)</label>
							<input type="number" name="metro_distance" class="form-control" value="<?php echo $_POST['metro_distance']?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Taxi Distance (km/yr)</label>
							<input type="number" name="taxi_destance" class="form-control" value="<?php echo $_POST['taxi_destance']?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Rail Distance (km/yr)</label>
							<input type="number" name="rail_distance" class="form-control" value="<?php echo $_POST['rail_distance']?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="flying_distance">Flying Distance (km/yr)</label>
							<input type="number" name="flying_distance" class="form-control" value="<?php echo $_POST['flying_distance']?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Fuel Waste Usage (kg/yr)</label>
							<input type="number" name="waste_usages" class="form-control" value="<?php echo $_POST['waste_usages']?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Enter your name</label>
							<input type="text" name="name_user" class="form-control">
						</div>
					</div>
				</div>
				<div class="">
					<center><input type="submit" value="Calculate" name="Submit" class="btn btn-secondary" style="margin-top: 30px; font-size:25px"></center>
				</div>
				</div>
			</div>
		</form>
		</center>
	</div>

<?php 
	if(isset($_POST['Submit'])){
	$vehicle = $_POST['vehicle_distance'];
	$bus = $_POST['bus_distance'];
	$metro =$_POST['metro_distance'];
	$taxi = $_POST['taxi_destance'];
	$rail = $_POST['rail_distance'];
	$flying = $_POST['flying_distance'];
	$waste = $_POST['waste_usages'];
	$user = $_POST['name_user'];
	if($vehicle===""){
		echo "Enter Vehicle Distance";
	}
	if($bus===""){
		echo "Enter bus Distance";
	}
	if($metro===""){
		echo "Enter Metro Distance";
	}
	if($taxi===""){
		echo "Enter Taxi Distance";
	}
	if($rail===""){
		echo "Enter Rail Distance";
	}
	if($flying===""){
		echo "Enter Flying Distance";
	}
	if($user===""){
		echo "Enter Name";
	}

	$conn = mysqli_connect("localhost","root","","carbonFootprint"); 
	if ($conn->connect_error)
	{
		die("connection failed");
	}
	$sql = "select vehicle_ef, bus_ef, metro_ef, taxi_ef, rail_ef,
	flying_ef, waste_ef from ef_values";
	$result = $conn->query($sql);
	$vehicle_ef = $bus_ef = $metro_ef = $taxi_ef = "";
	$rail_ef = $flying_ef = $waste_ef = "";
	if($result->num_rows>0)
	{
		while($row = $result->fetch_assoc()) {
			$vehicle_ef= $row["vehicle_ef"];
			$bus_ef= $row["bus_ef"];
			$metro_ef = $row["metro_ef"];
			$taxi_ef = $row["taxi_ef"];
			$rail_ef = $row["rail_ef"];
			$flying_ef = $row["flying_ef"];
			$waste_ef  = $row["waste_ef"];
		  }
		  
		  $vehicle_emmision = $vehicle* $vehicle_ef;
		  $bus_emmision = $bus * $bus_ef;
		  $metro_emmision = $metro * $metro_ef;
		  $taxi_emmision = $taxi * $taxi_ef;
		  $rail_emmision = $rail * $rail_ef;
		  $flying_emmision = $flying * $flying_ef*1.09;
		  $waste_emmision = $waste_ef * $waste;
		  //$total_emmision = $vehicle_emmision+$bus_emmision+$taxi_emmision+$rail_emmision+$metro_emmision+$flying_emmision;
	}

?>
<div class="container">
	<center>
		<div class="card card_value">
		<h3>
			Dear <u><?php echo ucfirst($user);?></u> Your Annual Carbon Emissions Are Here
		</h3> 
		<?php
		$unit = "kg CO2e/yr";
		echo "Vehicle: ".$vehicle_emmision." ".$unit;
		echo "<br>";
		echo "Bus: ".$bus_emmision." ".$unit;
		echo "<br>";
		echo "Metro: ".$metro_emmision." ".$unit;
		echo "<br>";
		echo "Taxi: ".$taxi_emmision." ".$unit;
		echo "<br>";
		echo "Rail: ".$rail_emmision." ".$unit;
		echo "<br>";
		echo "Flying: ".$flying_emmision." ".$unit;
		echo "<br>";
		echo "Fuel Waste: ".$waste_emmision." ".$unit;
	}
	?>
		</div>
	</center>
</div>
<div class="" style="background-color: #CFE1E2; margin-top: 30px;">
	<div class="container">
		<div class="row">
		<div class="col-md-4">
			<h4><i>CARBON OFFSETTING</i></h4>
			<ul>
				<li>CARBON NEUTRAL</li>
				<li>CARBON OFFSET</li>
				<li>GOLD STANDARD VER</li>
			</ul>
		</div>
		<div class="col-md-4">
			<h4><i>IMPORTANT LINKS</i></h4>
			<ul>
				<li><a style="color: black;" href="general_usages.php">General Usages</a></li>
				<li><a style="color: black;" href="travel.php">Travel</a></li>
				<li><a style="color: black;" href="food.php">Food</a></li>
				<li><a style="color: black;" href="products.php">Products</a></li>
			</ul>
		</div>
		<div class="col-md-4">
			<h4><i>CONTACT US</i></h4>
			<ul>
					<li>+91-7069070990</li>
					<li>Address: Plot No. B-20/3, Road No. 13, 14, Palsana-Baleshwar Rd,
Hoziwala Industrial Estate, Sachin, Surat, Gujarat 394230, India</li>
			</ul>
		</div>
	</div>
	<center><p><b>&copy 2021 NAVITAS GREEN SOLUTIONS PVT LTD</b></p></center>
	</div>
</div>

</body>
</html>