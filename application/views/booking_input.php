<!--
*******************************************************
TO DO LIST

Bikin biar pas diklik tombol BOOK ROOM bakal keinput
otomatis ke tabel TRH dan TRD sesuai data-data yang dimasukkan.

name-name yang digunakan pada inputan:
- datebook
- selected_class_id
- selected_class_name
- booker_name
- purposes
- checkbox dengan value 8to10, 10to12, 13to15, 15to17
- $_SESSION['logged_in'] (isinya username yang lagi login)
- $_SESSION['id_logged_id'] (isinya id yang lagi login)

-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<title>ROOMATES | DETAIL BOOKING</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<!-- datatabel-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/dataTables.bootstrap.min.css">
	<script src="<?php echo base_url();?>assets/js/jquery.dataTables.js"></script>
	<script src="<?php echo base_url();?>assets/js/dataTables.bootstrap.js"></script>

	<link rel="stylesheet" href="<?php echo base_url();?>assets/js/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>   
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>


	<!--dari eli-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/pembantu.css">
</head>

<body>

	<div class="hidden-xs">
		<div class="container-fluid" style="margin-top:0px;padding:0px">
			<div class="col-lg-1" style="background-color:#424242;width:85px;padding:0px;height: 100vh;">
				<div class="col-lg-12 text-center active menuitem">
					<i class="fa fa-plus fa-lg putih" aria-hidden="true" style="margin-bottom:2px"></i>
					<h5 class="navitem"> Booking </h5>
				</div>
				<a href="<?php echo base_url();?>index.php/ListBooking">
					<div class="col-lg-12 text-center menuitem">
						<i class="fa fa-list fa-lg putih" aria-hidden="true" style="margin-bottom:2px"></i>
						<h5 class="navitem"> List </h5>
					</div>
				</a>
				<a href="<?php echo base_url();?>index.php/Login/logout">
					<div class="col-lg-12 text-center menuitem">
						<i class="fa fa-sign-out fa-lg putih" aria-hidden="true" style="margin-bottom:4px"></i>
						<h5 class="navitem"> Sign Out </h5>
					</div>
				</a>	
		</div>

		<div class="col-lg-11" style="padding-left:40px;height: 100vh;">
			<h1> BOOKING </h1>
			<div class="barbar" style="margin: 15px 10px 20px 0px"></div>

			<!--FORM MULAI DARI SINI-->
			<form method="POST" action="<?php echo base_url();?>index.php/AddNew/addReservation">

				<!--BAGIAN DATE YANG HARUS AUTOFILL-->
				<div class="row" style="padding:14px;padding-top:5px;padding-bottom:0px;">
					<div class="col-lg-2" style="padding:0px">
						<div class="form-group">
							<h4 class="konten"> Date</h4>
						</div>
					</div>
					<div class="col-lg-10" style="margin-top:5px">
						<div class="form-group">
							<!--VALUE DATENYA-->
							<input class="form-control" style="width:35%" value="<?php echo $_SESSION['datebook'];?>" readonly="true" name="datebook" required="yes"/>
						</div>
					</div>	
				</div>

				<!--BAGIAN WAKTU (SLOT WAKTU)-->
				<div class="row" style="padding:14px;padding-top:0px;padding-bottom:0px;height:45px;">
					<div class="col-lg-2" style="padding:0px">
						<div class="form-group">
							<h4 class="konten"> Time</h4>
						</div>
					</div>

					<!--TAMPILIN CHECKBOX SESUAI SLOT WAKTU YANG SUDAH DIPILIH-->
					<div class="col-lg-10" style="margin-top:5px">
						<div class="form-group">
						<?php
							if($_SESSION['slot'])
							{
								$keterangan = "";

								foreach ($_SESSION['slot'] as $row) 
								{
									switch ($row) {
										case '8to10':
											$keterangan = "08.00 - 10.00";
											break;

										case '10to12':
											$keterangan = "10.00 - 12.00";
											break;
										
										case '13to15':
											$keterangan = "13.00 - 15.00";
											break;

										default:
											$keterangan = "15.00 - 17.00";
											break;
									}
									echo "<div class='checkbox'>";
									echo "<label><input type='checkbox' checked='checked' readonly='true' onclick='return false;' name='".$row."' value='".$row."'>".$keterangan."</label>";
									echo "</div>";
								}
							}
						?>
						</div>
					</div>	
				</div>

				<!--BAGIAN ROOM ID-->
				<div class="row" style="padding:14px;padding-top:0px; padding-bottom:0px; height:45px;">
					<div class="col-lg-2" style="padding:0px">
						<div class="form-group">
							<h4 class="konten"> Room ID</h4>
						</div>
					</div>
					<div class="col-lg-10">
						<div class="form-group">
							<!--TAMPILIN SESUAI SAMA DATA YANG UDAH DIKIRIM-->
							<input readonly="true" class="form-control" style="width:35%" value="<?php echo $selected_class_id; ?>" name="selected_class_id" required="yes">
						</div>
					</div>	
				</div>

				<!--BAGIAN ROOM NAME-->
				<div class="row" style="padding:14px;padding-top:0px;padding-bottom:0px;height:45px">
					<div class="col-lg-2" style="padding:0px">
						<div class="form-group">
							<h4 class="konten"> Room Name </h4>
						</div>
					</div>
					<div class="col-lg-10">
						<div class="form-group">
							<!--TAMPILIN SESUAI SAMA DATA YANG UDAH DIKIRIM-->
							<input readonly="true" class="form-control" style="width:35%" value="<?php echo $selected_class_name; ?>" name="selected_class_name" required="yes">
						</div>
					</div>	
				</div>

				<!--BAGIAN NAMA PEMESAN-->
				<div class="row" style="padding:14px;padding-top:0px;padding-bottom:0px;height:45px">
					<div class="col-lg-2" style="padding:0px">
						<div class="form-group">
							<h4 class="konten"> Booker Name </h4>
						</div>
					</div>
					<div class="col-lg-10">
						<div class="form-group">
							<input name="booker_name" class="form-control" style="width:35%" required="yes">
						</div>
					</div>	
				</div>

				<!--BAGIAN KETERANGAN-->
				<div class="row" style="padding:14px;padding-top:0px;padding-bottom:0px;height:45px">
					<div class="col-lg-2" style="padding:0px">
						<div class="form-group">
							<h4 class="konten"> Purposes </h4>
						</div>
					</div>
					<div class="col-lg-10">
						<div class="form-group">
							<textarea name="purposes" class="form-control" style="width:35%" required="yes"></textarea>
						</div>
					</div>	
				</div>

				<!--BAGIAN TOMBOL-->
				<div class="row">
					<div class="col-lg-5 text-right" style="padding-right:30px;padding-top:20px">
						<a href="<?php echo base_url();?>index.php/Booking" class="btn btn-biruout" style="height:40px;width:100px;padding-top: 10px"> CANCEL </a>
						<button class="btn btn-biru" style="height:40px;width:150px" type="submit"> BOOK ROOM </button>
					</div>	
				</div>
			</form>
			<!--FORM BERAKHIR DI SINI-->

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
	src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> 
	<script type="text/javascript" src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js"></script>

</body>
</html>