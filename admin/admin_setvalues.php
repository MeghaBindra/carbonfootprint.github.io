<?php  
	if (isset($_POST['Submit']) ){
		$electricity_ef = $_POST['electricity'];
	$naturalgas_ef =$_POST['natural_gas'];
	$fuel_ef = $_POST['fuel'];
	$lpg_ef = ($_POST['lpg']);
	$waste_ef = ($_POST['waste']);
	$water_ef = ($_POST['water']);

	$vehicle_ef = ($_POST['vehicle']);
	$bus_ef = ($_POST['bus']);
	$metro_ef = ($_POST['metro']);
	$taxi_ef = ($_POST['taxi']);
	$rail_ef = ($_POST['rail']);
	$flying_ef = ($_POST['flying']);

	$redmeat_ef = ($_POST['red_meat']);
	$whitemeat_ef = ($_POST['white_meat']);
	$dairy_ef = ($_POST['dairy']);
	$cereals_ef = ($_POST['cereals']);
	$vegetables_ef = ($_POST['vegetables']);
	$fruits_ef = ($_POST['fruits']);
	$oil_ef = ($_POST['oil']);
	$snacks_ef = ($_POST['snacks']);
	$drinks_ef = ($_POST['drinks']);

	$electrical_ef= ($_POST['electrical']);
	$households_ef= ($_POST['household']);
	$clothes_ef= ($_POST['clothes']);
	$medical_ef= ($_POST['medical']);
	$recreational_ef= ($_POST['recreational']);
	$other_ef = ($_POST['others']);
	$conn = mysqli_connect("localhost","root","","carbonFootprint"); 
	if ($conn->connect_error)
	{
		die("connection failed".$conn -> connect_error);
	}
	$sql = "update ef_values set electricity_ef = '$electrical_ef', natural_ef='$naturalgas_ef', fuel_ef = '$fuel_ef', lpg_ef = '$lpg_ef', waste_ef = '$waste_ef', water_ef = '$water_ef', vehicle_ef = '$vehicle_ef', bus_ef = '$bus_ef', metro_ef = '$metro_ef',
	 taxi_ef = '$taxi_ef', rail_ef = '$rail_ef', flying_ef = '$flying_ef', redmeat_ef = '$redmeat_ef', whitemeat_ef = '$whitemeat_ef', dairy_ef = '$dairy_ef', cereals_ef = '$cereals_ef', 
	 vegetables_ef = '$vegetables_ef', fruits_ef = '$fruits_ef', oil_ef = '$oil_ef', snacks_ef = '$snacks_ef', 
	 drinks_ef = '$drinks_ef', electrical_ef = '$electrical_ef', household_ef = '$households_ef', clothes_ef = '$clothes_ef', 
	 medical_ef = '$medical_ef', recreational_ef = '$recreational_ef', others_ef = '$other_ef' where id = 1";

	if(mysqli_query($conn, $sql)){
		echo "data updated successfully";
	}else{
		echo "error in updating values".$conn ->error;
	}
	mysqli_close($conn);
	}
	
 	//echo "<a href='../general_usages.php?para=".$name."'>PASSM</a>";

?>
