<!DOCTYPE html>
<html>
<head>
	<title>General Usage</title>
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
					<h3>Enter Your Products Consumption Here</h3>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="electrical">Electrical ($/yr)</label>
							<input type="number" name="electrical" class="form-control" value="<?php echo $_POST['electrical']?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="households">Households ($/yr)</label>
							<input type="number" name="households" class="form-control" value="<?php echo $_POST['households']?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="clothes">Clothes ($/yr)</label>
							<input type="number" name="clothes" class="form-control" value="<?php echo $_POST['clothes']?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="medical">Medical ($/yr)</label>
							<input type="number" name="medical" class="form-control" value="<?php echo $_POST['medical']?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="recreational">Recreational ($/yr)</label>
							<input type="number" name="recreational" class="form-control" value="<?php echo $_POST['recreational']?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="others">Others ($/yr)</label>
							<input type="number" name="others" class="form-control" value="<?php echo $_POST['others']?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Product Waste Usage (kg/yr)</label>
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
	$electrical = $_POST['electrical'];
	$households = $_POST['households'];
	$clothes =$_POST['clothes'];
	$medical = $_POST['medical'];
	$recreational = $_POST['recreational'];
	$other = $_POST['others'];
	$waste = $_POST['waste_usages'];
	$user = $_POST['name_user'];
	if($electrical===""){
		echo "Enter Electrical Amount";
	}
	if($households===""){
		echo "Enter Households Amount";
	}
	if($clothes===""){
		echo "Enter Clothes Amount";
	}
	if($medical===""){
		echo "Enter Medical Amount";
	}
	if($recreational===""){
		echo "Enter Recreational Amount";
	}
	if($other===""){
		echo "Enter Others Spend";
	}
	if($user===""){
		echo "Enter Name";
	}	
	$conn = mysqli_connect("localhost","root","","carbonFootprint"); 
	if ($conn->connect_error)
	{
		die("connection failed");
	}
	$sql = "select electrical_ef, household_ef, clothes_ef, medical_ef, recreational_ef,
	others_ef,waste_ef from ef_values";
	$result = $conn->query($sql);
	$electrical_ef = $household_ef = $clothes_ef = $medical_ef = "";
	$recreational_ef = $others_ef = $waste_ef = "";
	if($result->num_rows>0)
	{
		while($row = $result->fetch_assoc()) {
			$electrical_ef= $row["electrical_ef"];
			$household_ef= $row["household_ef"];
			$clothes_ef = $row["clothes_ef"];
			$medical_ef = $row["medical_ef"];
			$recreational_ef = $row["recreational_ef"];
			$others_ef = $row["others_ef"];
			$waste_ef = $row['waste_ef'];
		  }
		  
	$electrical_emmision = $electrical* $electrical_ef ;
	$households_emmision = $households * $household_ef ;
	$clothes_emmision = $clothes * $clothes_ef ;
	$medical_emmision = $medical * $medical_ef ;
	$reccreational_emmision = $recreational * $recreational_ef ;
	$other_emmision = $other * $others_ef ;
	$waste_emmision = $waste_ef * $waste;
	//$total_emmision = $electricity_emmision+$natural_gas_emmision+$fuel_oil_emmision+$lpg_emmision+$waste_emmision+$water_emmision;
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
		echo "Electrical: ".$electrical_emmision." "; 
		echo $unit;
		echo "<br>";
		echo "Households: ".$households_emmision. " "; echo $unit;
		echo "<br>";
		echo "Clothes: ".$clothes_emmision. " "; echo $unit;
		echo "<br>";
		echo "Medical: ".$medical_emmision." "; echo $unit;
		echo "<br>";
		echo "Recreational: ".$reccreational_emmision." ";echo $unit;
		echo "<br>";
		echo "Others: ".$other_emmision." "; echo $unit;
		echo "<br>";
		echo "Products Waste: ".$waste_emmision." "; echo $unit;
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