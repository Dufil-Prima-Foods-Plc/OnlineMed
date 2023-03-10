<!DOCTYPE html>
<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
<html>
<head>
	<title>Medic::Approval</title>
	<link rel="stylesheet" type="text/css" href="boots/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="boots/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="boots/css/bootstrap-grid.css">
<link rel="stylesheet" type="text/javascript" href="boots/jquery/jquery-ui.js">
<link rel="stylesheet" type="text/javascript" href="boots/jquery/external/jquery/jquery.js">
<link rel="stylesheet" type="text/css" href="boots/jquery/jquery-ui.structure.css">
</head>
<body 
	style="
		background-image: url('onlineMed/../Image/medicback.png');
		background-repeat: no-repeat;
		background-size: cover;

	" 
>
	
	<div class="row col-lg-12">
		<div class="col-lg-4 offset-lg-4" style="margin-top: 150px; height: 500px; background-image: url('onlineMed/../Image/medicformback.png');  border-radius: 10px 10px 10px 10px;">
			<div>
				<label style="font-weight: bold; font-size: 30px;">Medical Form</label>
			</div>
			<div class="form-group">
				<input type="text" name="" class="form-control" placeholder="Enter your full name here" readonly>
				
			</div>
			<div class="form-group">
				<input type="text" name="" class="form-control" placeholder="Enter your staff ID" readonly>
				
			</div>
			<div class="form-group">

				<select class="form-control">
					<optgroup>Department</optgroup>
					<option></option>
					<option>Production</option>
					<option>Engineering</option>
					<option>Warehouse</option>
					<option>MIS</option>
					<option>Purchase</option>
					<option>Account</option>
					<option>FMO</option>
					<option>PPIC</option>
				</select>
				
			</div>
			<div class="form-group">
				<select class="form-control" Placeholder="">
					<option>  </option>
					<option>Morning Shift</option>
					<option>Afternoon Shift</option>
					<option>Night Shift</option>
					<option>No shift</option>

				</select>
				
			</div>
			<div class="form-group">
				<input type="text" name="" placeholder=" Enter Supervisor's name" class="form-control">
				
			</div>
			<div class="form-group">
				<button class="form-control btn btn-danger" name="">Submit</button>
				
			</div>
				<div class="form-group alert alert-info" align="center"><a href="med.php">Click to approve as a supervisor </a></div>
		</div>
	</div>
	<div class=" col-sm-4 offset-sm-4" align="center">Copyright of Dufil MIS Ota</div>
</body>
</html>