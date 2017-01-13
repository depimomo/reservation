<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Bagian head ga ada urusan sama koding, abaikan -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
	<meta name="description" content="">
	<meta name="author" content="">

	<title>ROOMATES | LOGIN</title>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<!-- datatabel-->
	<link rel="stylesheet" href="assets/css/dataTables.bootstrap.min.css">
	<script src="assets/js/jquery.dataTables.js"></script>
	<script src="assets/js/dataTables.bootstrap.js"></script>
	
	<!--dari eli-->
	<link rel="stylesheet" href="assets/css/pembantu.css">
	<style>
		html { 
			background: url(assets/img/bg2.jpg) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			background-color: transparent;
		}
	</style>
</head>
<body style="background-color:transparent">

	<?php if(isset($_SESSION['logged_in'])) echo "<script>window.location='".base_url()."index.php/booking';</script>";?>
	<div class="center boxlogin">
		<h1> LOGIN </h1>
		<div class="barbar" style="margin: 15px 10px 20px 2px"></div>
		<form action="index.php/Login/lets_login" method="POST">
			<div class="form-group" style="padding:2px;margin-bottom:10px">
				<input type="text" class="form-control" id="usr" placeholder="Username" name="username"/>
			</div>
			<div class="form-group" style="padding:2px">
				<input type="password" class="form-control" id="usr" placeholder="Password" name="password"/>
			</div>

			<?php 
			echo validation_errors(); 
			if(isset($_SESSION['invalid']))
			{
				echo $_SESSION['invalid'];
				$_SESSION['invalid'] ="";
			}
			?>
			<input class="col-lg-12 text-center btn btn-birulebar" style="padding:2px; padding-top:2.5%;" type="submit" value="LOGIN"/>
		</form>
</div>



</body>