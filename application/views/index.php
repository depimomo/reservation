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
	
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

	<!--buat menu
	<link rel="stylesheet" href="jasny-bootstrap/dist/css/jasny-bootstrap.min.css">
	<script type="text/javascript" src="jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>-->
	
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