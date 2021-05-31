<!DOCTYPE html>
<html>
<head>
	<title>Food Usage</title>
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
					<h3>Enter Your Food Consumption Here</h3>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="red_meat">Red Meat (kCal/year)</label>
							<input type="number" name="red_meat" class="form-control" value="<?php echo $_POST['red_meat']?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="white_meat">White Meat (kCal/yr)</label>
							<input type="number" name="white_meat" class="form-control" value="<?php echo $_POST['white_meat']?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="dairy">Dairy (kCal/yr)</label>
							<input type="number" name="dairy" class="form-control" value="<?php echo $_POST['dairy']?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="cereals">Cereals (kCal/yr)</label>
							<input type="number" name="cereals" class="form-control" value="<?php echo $_POST['cereals']?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="vegetables">Vegetables (kCal/yr)</label>
							<input type="number" name="vegetables" class="form-control" value="<?php echo $_POST['vegetables']?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="fruits">Fruits (kCal/yr)</label>
							<input type="number" name="fruits" class="form-control" value="<?php echo $_POST['fruits']?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="oil">Oil (kCal/yr)</label>
							<input type="number" name="oil" class="form-control" value="<?php echo $_POST['oil']?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="snacks">Snacks (kCal/yr)</label>
							<input type="number" name="snacks" class="form-control" value="<?php echo $_POST['snacks']?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="drinks">Drinks(kCal/yr)</label>
							<input type="number" name="drinks" class="form-control" value="<?php echo $_POST['drinks']?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Food Waste Usage (kg/yr)</label>
							<input type="number" name="waste_usages" class="form-control" value="<?php echo $_POST['waste_usages']?>">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="name_user">Enter your name</label>
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
	$redmeat_com = $_POST['red_meat'];
	$whitemeat_com = $_POST['white_meat'];
	$dairy_com =$_POST['dairy'];
	$cereals_com = $_POST['cereals'];
	$vegetables_com = $_POST['vegetables'];
	$fruits_com = $_POST['fruits'];
	$oil_com = $_POST['oil'];
	$snacks_com = $_POST['snacks'];
	$drinks_com = $_POST['drinks'];
	$waste_com = $_POST['waste_usages'];
	$user = $_POST['name_user'];
	if($redmeat_com===""){
		echo "Enter Red Meat Combustion";
	}
	if($whitemeat_com===""){
		echo "Enter White Meat combustion";
	}
	if($dairy_com===""){
		echo "Enter Dairy Combution";
	}
	if($cereals_com===""){
		echo "Enter Cereals Combustion";
	}
	if($vegetables_com===""){
		echo "Enter Vegetables combustion";
	}
	if($fruits_com===""){
		echo "Enter Fruits Combustion";
	}
	if($oil_com===""){
		echo "Enter Oil Combustion";
	}
	if($snacks_com===""){
		echo "Enter Snacks combustion";
	}
	if($drinks_com===""){
		echo "Enter Drinks Combustion";
	}
	if($user===""){
		echo "Enter Name";
	}
	$conn = mysqli_connect("localhost","root","","carbonFootprint"); 
	if ($conn->connect_error)
	{
		die("connection failed");
	}
	$sql = "select redmeat_ef, whitemeat_ef,dairy_ef,cereals_ef,vegetables_ef,
	fruits_ef, oil_ef, snacks_ef, drinks_ef,waste_ef from ef_values";
	$result = $conn->query($sql);
	$redmeat_ef = $whitemeat_ef = $dairy_ef = $oil_ef = "";
	$cereals_ef = $vegetables_ef = $fruits_ef = $snacks_ef =  $drinks_ef= $water_ef="";
	if($result->num_rows>0)
	{
		while($row = $result->fetch_assoc()) {
			$redmeat_ef= $row["redmeat_ef"];
			$whitemeat_ef= $row["whitemeat_ef"];
			$dairy_ef = $row["dairy_ef"];
			$cereals_ef = $row["cereals_ef"];
			$vegetables_ef = $row["vegetables_ef"];
			$fruits_ef = $row["fruits_ef"];
			$oil_ef = $row["oil_ef"];
			$snacks_ef = $row["snacks_ef"];
			$drinks_ef = $row["drinks_ef"];
			$waste_ef = $row['waste_ef'];
		  }
		  $redmeat_emmision = $redmeat_com* $redmeat_ef ;
		  $whitemeat_emmision = $whitemeat_com * $whitemeat_ef;
		  $dairy_emmision = $dairy_com * $dairy_ef ;
		  $cereals_emmision = $cereals_com * $cereals_ef;
		  $vegetables_emmision = $vegetables_com * $vegetables_ef ;
		  $fruits_emmision = $fruits_com * $fruits_ef ;
		  $oil_emmision = $oil_com * $oil_ef ;
		  $snacks_emmision = $snacks_com * $snacks_ef ;
		  $drinks_emmision = $drinks_com * $drinks_ef ;
		  $waste_emmision = $waste_com * $waste_ef;
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
		echo "Red Meat: ".$redmeat_emmision." "; 
		echo $unit;
		echo "<br>";
		echo "White Meat: ".$whitemeat_emmision. " "; echo $unit;
		echo "<br>";
		echo "Dairy: ".$dairy_emmision. " "; echo $unit;
		echo "<br>";
		echo "Cereals: ".$cereals_emmision." "; echo $unit;
		echo "<br>";
		echo "Vegetables: ".$vegetables_emmision." ";echo $unit;
		echo "<br>";
		echo "Fruits: ".$fruits_emmision." "; echo $unit;
		echo "<br>";
		echo "Oil: ".$oil_emmision." "; echo $unit;
		echo "<br>";
		echo "Snacks: ".$snacks_emmision." "; echo $unit;
		echo "<br>";
		echo "Drinks: ".$drinks_emmision." "; echo $unit;
		echo "<br>";
		echo "Food Waste: ".$waste_emmision." "; echo $unit;
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