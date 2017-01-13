<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<title>ROOMATES | BOOKING LIST</title>

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

	<style>
	.kolomkiri, .kolomtengah, .kolomkanan {
    float: none;
    padding: 20px;
    vertical-align: top;
	display: table-cell;
    }
	.container-fluid {
    display: table;
	margin:0px;
	
	}
	html,body{
		margin:0px;
	}
	</style>

</head>

<body>

	<?php if(!isset($_SESSION['logged_in'])) echo "<script>window.location='".base_url()."';</script>";?>

	<div class="hidden-xs">
		<div class="container-fluid" style="margin-top:0px;padding:0px;margin-left:-15px">

			<!-- menu menu yang ada di samping -->
			<div class="col-lg-1 kolomkiri" style="background-color:#424242;width:85px;padding:0px;height: 100vh;" id="kolom1">
				<a href="<?php echo base_url();?>index.php/Booking">
					<div class="col-lg-12 text-center menuitem">
						<i class="fa fa-plus fa-lg putih" aria-hidden="true" style="margin-bottom:2px"></i>
						<h5 class="navitem"> Booking </h5>
					</div>
				</a>
				<div class="col-lg-12 text-center active menuitem">
					<i class="fa fa-list fa-lg putih" aria-hidden="true" style="margin-bottom:2px"></i>
					<h5 class="navitem"> List </h5>
				</div>
				<a href="<?php echo base_url();?>index.php/Login/logout">
					<div class="col-lg-12 text-center menuitem">
						<i class="fa fa-sign-out fa-lg putih" aria-hidden="true" style="margin-bottom:4px"></i>
						<h5 class="navitem"> Sign Out </h5>
					</div>
				</a>
			</div>

			<!-- isi halamannya -->
			<div class="col-lg-3 kolomtengah" style="background-color:#F5F5F5;padding-left:40px;padding-right:70px;height: 100vh;" id="kolom2">
				<h1> FILTER </h1>
				<div class="barbar" style="margin: 15px 10px 20px 0px"></div>

				<!-- Form check availability -->
				<form method="POST" action="<?php echo base_url();?>index.php/ListBooking/filter">

					<!-- Tanggal -->
					<div class="row" style="padding:14px;padding-top:5px;padding-bottom:0px">
						<div class="form-group">
							<h4 class="konten"> From  </h4>
						</div>
					</div>
					<div class="row" style="padding-left:14px;padding-top:0px;padding-bottom:15px;width:265px">
						<div class="form-group">
			                <div class='input-group date datetimepicker' id="from">
			                    <input type='text' class="form-control" name="date1" id="date1" readonly="true" />
			                    <span class="input-group-addon">
			                        <span class="glyphicon glyphicon-calendar"></span>
			                    </span>
			                </div>
			            </div>
					</div>

					<!-- Tanggal2 -->
					<div class="row" style="padding:14px;padding-top:5px;padding-bottom:0px">
						<div class="form-group">
							<h4 class="konten"> To </h4>
						</div>
					</div>
					<div class="row" style="padding-left:14px;padding-top:0px;padding-bottom:15px;width:265px">
						<div class="form-group">
			                <div class='input-group date datetimepicker' id="to">
			                    <input type='text' class="form-control" name="date2" id="date2" readonly="true" />
			                    <span class="input-group-addon">
			                        <span class="glyphicon glyphicon-calendar"></span>
			                    </span>
			                </div>
			            </div>
					</div>

					<!-- Submit -->
					<div class="col-lg-12" style="padding:0px;padding-right:40px">
						<button type="submit" class="btn btn-biru" style="height:37px;width:130%"> SHOW LIST </button>
					</div>
				</form>
			</div>

			<div class="col-lg-8 kolomkanan" style="padding-left:40px;">
				<h1> BOOKING LIST </h1>
				<div class="barbar" style="margin: 15px 10px 20px 0px"></div>

				<div class="col-lg-12" style="padding-left:0px;padding-top:20px;padding-right:15px;">
					<table class="table table-striped" style="border:1px solid #E0E0E0" id="example">
						<thead style="background-color:white">
							<tr>
								<th>No</th>
								<th>Date</th>
								<th>Room ID</th>
								<th>Room Name</th>
								<th>Booker</th>
								<th width="20%">Purpose</th>
								<th>Print Invoice</th>
							</tr>
						</thead>
						<tbody class="warnatbl" id="list_avail">

							<?php
								//di sini, kita sudah menerima $data dari controller
								//pas di controller kita kirimmnya $data['namanya']
								//di sini kita panggilnya cukup $namanya (gausah $data lagi)

								//sekarang, cek dulu udah ada belom datanya
								if(isset($filtered_results))
								{
									if($filtered_results == false)
									{
										//tadi di model kan kalo ga ada ruangannya kita kasi false
										//sekarang kalo kosong, yang kita tampilin adalah sbb
										?>

										<tr class="temp">
											<td></td>
											<td></td>
											<td></td>
											<td>No Class Booked On This Range Time</td>
											<td></td>
											<td></td>
											<td>
												<button type='button' class='btn btn-primary' name='book'><span class='glyphicon glyphicon-print' style="padding-right: 15px;"></span>Print</button>
											</td>
										</tr>

										<?php
									}
									else
									{
										$no = 0;

										foreach ($filtered_results as $row) 
										{
											$no++;
											//kalau ada, yang kita cetak adalah sbb
											?>
												<tr class="temp">
													<td><?php echo $no;?></td>
													<td><?php echo $row['date_book'];?></td>
													<td><?php echo $row['class_id'];?></td>
													<td><?php echo $row['nama_kelas'];?></td>
													<td><?php echo $row['booker_name'];?></td>
													<td><?php echo $row['purpose'];?></td>
													<td>
														<a type='button' class='btn btn-primary' name='book' href='<?php echo base_url()."index.php/Invoice/invoicelagi/".$row["TRH_id"];?>'><span class='glyphicon glyphicon-print' style="padding-right: 15px;"></span>Print</a>
													</td>
												</tr>
											<?php

										}
									}
								}
								else
								{
									?>

									<tr class="temp">
										<td></td>
										<td></td>
										<td></td>
										<td>Select Date Range First</td>
										<td></td>
										<td></td>
										<td>
											<button type='button' class='btn btn-primary' name='book'><span class='glyphicon glyphicon-print' style="padding-right: 15px;"></span>Print</button>
										</td>
									</tr>

									<?php
								}

							?>
							
						</tbody>
					</table>
				</div>
			</div>

		</div>

	</div>	
	
	
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
</script> 

<script type="text/javascript" src="<?php echo base_url();?>assets/js/bower_components/jquery/dist/jquery.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/bower_components/moment/min/moment.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript">

	$(function () 
	{
	    $('.datetimepicker').datetimepicker({
			format: 'DD/MM/YYYY',
			daysOfWeekDisabled: [0],
			ignoreReadonly: true
			<?php
				if(isset($_SESSION['date1']) && isset($_SESSION['date2']))
					{
						echo ",useCurrent: false";
					}
			?>
        });


        $('#from').datetimepicker();
        $('#to').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#from").on("dp.change", function (e) {
            $('#to').data("DateTimePicker").minDate(e.date);
        });
        $("#to").on("dp.change", function (e) {
            $('#from').data("DateTimePicker").maxDate(e.date);
        });


    });	

    


	<?php
		if(isset($_SESSION['date1']) && isset($_SESSION['date2']))
		{
			echo "document.getElementById('date1').value ='".$_SESSION['date1']."';";
			echo "document.getElementById('date2').value ='".$_SESSION['date2']."';";
		}
	?>

	//buat nampilin tabel book now yang di bawah
	$(document).ready(function() {
		$('#example').DataTable();
	});

	var table = document.getElementById("example");
	var tinggi = table.offsetHeight;
	var tinggifixed1 = tinggi + 350;
	//var tinggifixed2 = tinggi + 350;
	document.getElementById("kolom1").style.paddingBottom = tinggifixed1 + "px";
	document.getElementById("kolom2").style.paddingBottom = tinggifixed1 + "px";	

	var dateToday = new Date();

</script>
</body>
</html>