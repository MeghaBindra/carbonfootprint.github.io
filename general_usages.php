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
					<h3>Enter Your General Consumption here</h3>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Electricity Usage (kWh/yr)</label>
							<input type="number" name="electricity_usages" class="form-control" value="<?php echo $_POST['electricity_usages']?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Natural Gas Usage (therms/yr)</label>
							<input type="number" name="naturalgas_usages" class="form-control" value="<?php echo $_POST['naturalgas_usages']?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Fuel Oil Usage (litres/yr)</label>
							<input type="number" name="fuel_usages" class="form-control" value="<?php echo $_POST['fuel_usages']?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>LPG Usage (litres/yr)</label>
							<input type="number" name="lpg_usages" class="form-control" value="<?php echo $_POST['lpg_usages']?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>General Waste Usage (kg/yr)</label>
							<input type="number" name="waste_usages" class="form-control" value="<?php echo $_POST['waste_usages']?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="water_usages">Water Usage (lites/yr)</label>
							<input type="number" name="water_usages" class="form-control" value="<?php echo $_POST['water_usages']?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Enter your name</label>
							<input type="text" name="name_user" class="form-control">
						</div>
					</div>
				</div>
				<div class="">
					<center><input type="submit" value="Calculate" name="add" class="btn btn-secondary" style="margin-top: 30px; font-size:25px"></center>
				</div>
				</div>
			</div>
		</form>
		</center>
	</div>

<?php 
	if(isset($_POST['add'])){
	$electricity = $_POST['electricity_usages'];
	$natural_gas = $_POST['naturalgas_usages'];
	$fuel_oil =$_POST['fuel_usages'];
	$lpg = $_POST['lpg_usages'];
	$waste = $_POST['waste_usages'];
	$water = $_POST['water_usages'];
	$user = $_POST['name_user'];

	$conn = mysqli_connect("localhost","root","","carbonFootprint"); 
	if ($conn->connect_error)
	{
		die("connection failed");
	}
	$sql = "select electricity_ef, natural_ef,fuel_ef,lpg_ef,waste_ef,water_ef from ef_values";
	$result = mysqli_query($conn, $sql);
	$electricity_ef = $natural_gas_ef = $fuel_oil_ef = "";
	$lpg_ef = $waste_ef = $water_ef = $total_ef = "";
	if($result->num_rows>0)
	{
		
		while($row = mysqli_fetch_array($result)) {
			$electricity_ef= (int)$row["electricity_ef"];
			$natural_gas_ef= $row["natural_ef"];
			$fuel_oil_ef = $row["fuel_ef"];
			$lpg_ef = $row["lpg_ef"];
			$waste_ef = $row["waste_ef"];
			$water_ef = $row["water_ef"];

			$electricity_emmision = $electricity* $electricity_ef;
			$natural_gas_emmision = $natural_gas * $natural_gas_ef;
			$fuel_oil_emmision = $fuel_oil * $fuel_oil_ef;
			$lpg_emmision = $lpg * $lpg_ef;
			$waste_emmision = $waste * $waste_ef;
			$water_emmision = $water * $water_ef;
			$total_emmision = $electricity_emmision+$natural_gas_emmision+$fuel_oil_emmision+$lpg_emmision+$waste_emmision+$water_emmision; 

		}	
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
		echo "Electricity: ".$electricity_emmision." "; 
		echo $unit;
		echo "<br>";
		echo "Natural Gas: ".$natural_gas_emmision. " "; echo $unit;
		echo "<br>";
		echo "Fuel Oil: ".$fuel_oil_emmision. " "; echo $unit;
		echo "<br>";
		echo "LPG: ".$lpg_emmision." "; echo $unit;
		echo "<br>";
		echo "Waste: ".$waste_emmision." ";echo $unit;
		echo "<br>";
		echo "Water: ".$water_emmision." "; echo $unit;
		echo "<br>";
		echo "Total Emission: ".$total_emmision." "; echo $unit;
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