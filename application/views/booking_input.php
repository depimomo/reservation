<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <title>ROOMATES | DETAIL BOOKING</title>
	
	<!-- datatabel-->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<script src="js/jquery.dataTables.js"></script>
	<script src="js/dataTables.bootstrap.js"></script>
	<!-- buat datetime piker-->
	<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
	 
	 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	 
	<!--dari eli-->
	<link rel="stylesheet" href="css/pembantu.css">
	
	<style>
	</style>
  </head>
</head>
<body>
<!--
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <!--<a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>-->
<div class="hidden-xs">
<div class="container-fluid" style="margin-top:0px;padding:0px">
	<div class="col-lg-1" style="background-color:#424242;width:85px;padding:0px;height: 100vh;">
		<div class="col-lg-12 text-center active menuitem">
			 <i class="fa fa-plus fa-lg putih" aria-hidden="true" style="margin-bottom:2px"></i>
			 <h5 class="navitem"> Booking </h5>
		</div>
		<!--<div class="col-lg-12 text-center menuitem">
			 <i class="fa fa-list-ul fa-lg putih" aria-hidden="true" style="margin-bottom:4px"></i>
			 <h5 class="navitem"> List Book </h5>
		</div>-->
		<div class="col-lg-12 text-center menuitem">
			 <i class="fa fa-sign-out fa-lg putih" aria-hidden="true" style="margin-bottom:4px"></i>
			 <h5 class="navitem"> Sign Out </h5>
		</div>		
	</div>
	
	<div class="col-lg-11" style="padding-left:40px;height: 100vh;">
		<h1> BOOKING </h1>
		<div class="barbar" style="margin: 15px 10px 20px 0px"></div>
		<form method="POST" action="">
		<div class="row" style="padding:14px;padding-top:5px;padding-bottom:0px;">
			<div class="col-lg-2" style="padding:0px">
				<div class="form-group">
					<h4 class="konten"> Date  </h4>
				</div>
			</div>
			<div class="col-lg-3" style="margin-top:5px">
				<div class="form-group">
				<div id="datetimepicker" class="input-append date" style="height:28px;">
				<input data-format="dd/MM/yyyy" type="text"></input>
				<span class="add-on">
				<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
				</span>
				</div>
				</div>
			</div>	
		</div>
		<div class="row" style="padding:14px;padding-top:0px;padding-bottom:0px;height:45px;">
			<div class="col-lg-2" style="padding:0px">
				<div class="form-group">
					<h4 class="konten"> Time  </h4>
				</div>
			</div>
			<div class="col-lg-10" style="margin-top:5px">
				<div class="form-group">
					<input class="form-control" style="width:26%">
				</div>
			</div>	
		</div>
		<div class="row" style="padding:14px;padding-top:0px;padding-bottom:0px;height:45px;">
			<div class="col-lg-2" style="padding:0px">
				<div class="form-group">
					<h4 class="konten"> Room ID </h4>
				</div>
			</div>
			<div class="col-lg-10">
				<div class="form-group">
					<input class="form-control" style="width:26%">
				</div>
			</div>	
		</div>
		<div class="row" style="padding:14px;padding-top:0px;padding-bottom:0px;height:45px">
			<div class="col-lg-2" style="padding:0px">
				<div class="form-group">
					<h4 class="konten"> Room Name </h4>
				</div>
			</div>
			<div class="col-lg-10">
				<div class="form-group">
					<input class="form-control" style="width:26%">
				</div>
			</div>	
		</div>
		<div class="row" style="padding:14px;padding-top:0px;padding-bottom:0px;height:45px">
			<div class="col-lg-2" style="padding:0px">
				<div class="form-group">
					<h4 class="konten"> Booker Name </h4>
				</div>
			</div>
			<div class="col-lg-10">
				<div class="form-group">
					<input class="form-control" style="width:26%">
				</div>
			</div>	
		</div>
		<div class="row" style="padding:14px;padding-top:0px;padding-bottom:0px;height:45px">
			<div class="col-lg-2" style="padding:0px">
				<div class="form-group">
					<h4 class="konten"> Purposes </h4>
				</div>
			</div>
			<div class="col-lg-10">
				<div class="form-group">
					<textarea class="form-control" style="width:26%"></textarea>
				</div>
			</div>	
		</div>
		<div class="row">
			<div class="col-lg-5 text-right" style="padding-right:30px;padding-top:20px">
				<button class="btn btn-biruout" style="height:40px;width:100px"> CANCEL </button>
				<button class="btn btn-biru" style="height:40px;width:150px" data-toggle="modal" data-target="#myModal"> BOOK ROOM </button>
			</div>	
		</div>
	</div>
</div>

	<!-- Modal -->
<div id="myModal" class="modal fade text-center" role="dialog" style="width:100%">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color:#2196F3">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="putih">Booking Invoice</h4>
      </div>
      <div class="modal-body">
        <p> A new room has booked. Do you want to print booking invoice now? </p>
      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-biruout" data-dismiss="modal">LATER</button>
        <a href=""><button type="button" class="btn btn-biru" style="width:120px">PRINT NOW</button></a>
      </div>
    </div>

  </div>
</div>	
	
</div>	

 <script type="text/javascript"
     src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
    </script> 
    <script type="text/javascript"
     src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>
    <script type="text/javascript">
      $('#datetimepicker').datetimepicker({
        format: 'dd/MM/yyyy',
        language: 'en',
		pickTime: false
      });
	  
	  $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>


</body>
</html>