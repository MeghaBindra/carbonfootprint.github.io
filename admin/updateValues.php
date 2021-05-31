<!DOCTYPE html>
<html>
<head>
	<title>Update EFs</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		.card_value{
			border: solid 2px #5F9EA0;
			width: 70%;
			height: auto;
			margin-top: 40px;
		}
	</style>
</head>
<body>
<div class="container">
		<center>
			<form method="post" action="admin_setvalues.php">
			<div class="card card_value">
				<div class="container">
					<div class="card-header">
					<h3>Update all EF values here</h3>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="electricity">Electricity EF (kCal/yr)</label>
							<input type="number" name="electricity" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="natural_gas">Natural Gas EF (kCal/yr)</label>
							<input type="number" name="natural_gas" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="fuel">Fuel EF (kCal/yr)</label>
							<input type="number" name="fuel" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="lpg">LPG EF  (kCal/yr)</label>
							<input type="number" name="lpg" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="waste">Waste EF (kCal/yr)</label>
							<input type="number" name="waste" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="water">Water EF (kCal/yr)</label>
							<input type="number" name="water" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="vehicle">Vehicle EF (kCal/yr)</label>
							<input type="number" name="vehicle" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="bus">Bus EF (kCal/yr)</label>
							<input type="number" name="bus" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="metro">Metro EF(kCal/yr)</label>
							<input type="number" name="metro" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="taxi">Taxi EF  (kCal/yr)</label>
							<input type="number" name="taxi" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="rail">Rail EF(kCal/yr)</label>
							<input type="number" name="rail" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="flying">Flying EF  (kCal/yr)</label>
							<input type="number" name="flying" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="red_meat">Red Meat EF(kCal/yr)</label>
							<input type="number" name="red_meat" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="white_meat">White Meat EF  (kCal/yr)</label>
							<input type="number" name="white_meat" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="dairy">Dairy EF(kCal/yr)</label>
							<input type="number" name="dairy" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="cereals">Cereals EF  (kCal/yr)</label>
							<input type="number" name="cereals" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="vegetables">Vegetables EF(kCal/yr)</label>
							<input type="number" name="vegetables" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="fruits">Fruits EF  (kCal/yr)</label>
							<input type="number" name="fruits" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="oil">Oil EF(kCal/yr)</label>
							<input type="number" name="oil" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="snacks">Snacks EF  (kCal/yr)</label>
							<input type="number" name="snacks" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="drinks">Drinks EF(kCal/yr)</label>
							<input type="number" name="drinks" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="electrical">Electrical EF (kCal/yr)</label>
							<input type="number" name="electrical" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="household">Household EF(kCal/yr)</label>
							<input type="number" name="household" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="clothes">Clothes EF  (kCal/yr)</label>
							<input type="number" name="clothes" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="medical">Medical EF(kCal/yr)</label>
							<input type="number" name="medical" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="recreational">Recreational EF  (kCal/yr)</label>
							<input type="number" name="recreational" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="others">Others EF(kCal/yr)</label>
							<input type="number" name="others" class="form-control">
						</div>
					</div>
				</div>
				<div class="">
					<center><input type="submit" value="Update" name="Submit" class="btn btn-secondary" style="margin-top: 30px;"></center>
				</div>
				</div>
			</div>
		</form>
		</center>
	</div>
</body>
</html>
