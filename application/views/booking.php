<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<title>ROOMATES | BOOKING</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<!-- datatabel-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/dataTables.bootstrap.min.css">
	<script src="<?php echo base_url();?>assets/js/jquery.dataTables.js"></script>
	<script src="<?php echo base_url();?>assets/js/dataTables.bootstrap.js"></script>

	<!-- buat datetime piker
	<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="screen"
	href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
	
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

	<?php //if(isset($_SESSION['logged_in'])) echo $_SESSION['logged_in'];?>

	<div class="hidden-xs">
		<div class="container-fluid" style="margin-top:0px;padding:0px;margin-left:-15px">

			<!-- menu menu yang ada di samping -->
			<div class="col-lg-1 kolomkiri" style="background-color:#424242;width:85px;padding:0px;height: 100vh;" id="kolom1">
				<div class="col-lg-12 text-center active menuitem">
					<i class="fa fa-plus fa-lg putih" aria-hidden="true" style="margin-bottom:2px"></i>
					<h5 class="navitem"> Booking </h5>
				</div>
				<a href="<?php echo base_url();?>index.php/Login/logout">
					<div class="col-lg-12 text-center menuitem">
						<i class="fa fa-sign-out fa-lg putih" aria-hidden="true" style="margin-bottom:4px"></i>
						<h5 class="navitem"> Sign Out </h5>
					</div>
				</a>
			</div>

			<!-- isi halamannya -->
			<div class="col-lg-3 kolomtengah" style="background-color:#F5F5F5;padding-left:40px;height: 100vh;" id="kolom2">
				<h1> PERIOD </h1>
				<div class="barbar" style="margin: 15px 10px 20px 0px"></div>

				<!-- Form check availability -->
				<form method="POST" action="<?php echo base_url();?>index.php/Booking/setContent">

					<!-- Tanggal -->
					<div class="row" style="padding:14px;padding-top:5px;padding-bottom:0px">
						<div class="form-group">
							<h4 class="konten"> Date  </h4>
						</div>
					</div>
					<div class="row" style="padding-left:14px;padding-top:0px;padding-bottom:15px;width:265px">
						<div class="form-group">
			                <div class='input-group date' id='datetimepicker1'>
			                    <input type='text' class="form-control" name="datebook" id="datebook"/>
			                    <span class="input-group-addon">
			                        <span class="glyphicon glyphicon-calendar"></span>
			                    </span>
			                </div>
			            </div>
					</div>

					<!-- From and To -->
					<div class="row" style="padding:14px;padding-top:0px;padding-bottom:15px;">
						<div class="col-lg-5" style="padding:0px">
							<div class="form-group">
								<h4 class="konten"> From </h4>
								<select class="form-control" id="jammulai" name="from" style="width:100%">
									<option value ="8"> 08.00 </option>
									<option value ="10"> 10.00 </option>
									<option value ="13"> 13.00</option>
									<option value ="15"> 15.00 </option>
								</select>
							</div>
						</div>
						<div class="col-lg-5" style="padding:0px;margin-left:10px">
							<div class="form-group">
								<h4 class="konten"> To </h4>
								<select class="form-control" id="jamakhir" name="to" style="width:100%">
									<option value ="10"> 10.00 </option>
									<option value ="12"> 12.00 </option>
									<option value ="15"> 15.00 </option>
									<option value ="17"> 17.00 </option>
								</select>
							</div>
						</div>
					</div>

					<!-- Submit -->
					<div class="col-lg-12" style="padding:0px;padding-right:40px">
						<button type="submit" class="btn btn-biru" style="height:37px;width:100%"> CHECK AVAILABILITY </button>
					</div>
				</form>
			</div>

			<div class="col-lg-8 kolomkanan" style="padding-left:40px;">
				<h1> AVAILABILITY </h1>
				<div class="barbar" style="margin: 15px 10px 20px 0px"></div>
				<div class="row" style="padding-left:15px;padding-top:0px;">
					<h4 class="konten" style="padding-bottom:5px;"> Floor Plan </h4>
					<div class="col-lg-12" style="padding:0px">
						<div id="denah">
							<div class="text-center kelas1 aktif" id="B501">
								<h5>  B501 </h5>
							</div>
							<div class="text-center kelas1 aktif" id="B502">
								<h5>  B502 </h5>
							</div>
							<div class="text-center kelas1 aktif" id="B503">
								<h5>  B503 </h5>
							</div>
							<div class="text-center kelas1 aktif" id="B504">
								<h5>  B504 </h5>
							</div>
							<div class="text-center kelas1 aktif" id="B505">
								<h5>  B505 </h5>
							</div>
							<div class="text-center kelas1 aktif" id="B506">
								<h5>  B506 </h5>
							</div>
							<div class="text-center kelas1 aktif" id="B507">
								<h5>  B507 </h5>
							</div>
							<div class="text-center kelas1 aktif" id="B508">
								<h5>  B508 </h5>
							</div>
							<div class="text-center kelas1 aktif" id="B509">
								<h5>  B509 </h5>
							</div>
							<div class="text-center kelas1 aktif" id="B510">
								<h5>  B510 </h5>
							</div>
							<div class="text-center kelas1 aktif" style="border-right:none" id="B511">
								<h5>  B511 </h5>
							</div>
						</div>
					</div>

					<div class="col-lg-8" style="padding:0px;margin-left:0px;margin-top:12px">
						<div id="denah2">
							<div class="text-center kelas1 aktif" id="B512">
								<h5>  B512 </h5>
							</div>
							<div class="text-center kelas1 aktif" id="B513">
								<h5>  B513 </h5>
							</div>
							<div class="text-center kelas1 aktif" id="B514">
								<h5>  B514 </h5>
							</div>
							<div class="text-center kelas1 aktif" id="B515">
								<h5>  B515 </h5>
							</div>
							<div class="text-center kelas1 aktif" id="B516">
								<h5>  B516 </h5>
							</div>
							<div class="text-center kelas1 aktif" id="B517">
								<h5>  B517 </h5>
							</div>
							<div class="text-center kelas1 aktif" style="border-right:none" id="B518">
								<h5>  B518 </h5>
							</div>
						</div>
					</div>
					<div class="col-lg-4" style="padding:0px;margin-top:12px">
						<div id="denah4">
							<div class="text-center kelas3 aktif" id="B519">
								<h5>  B519 </h5>
							</div>
							<div class="text-center kelas3 aktif" style="border-right:none" id="B520">
								<h5>  B520 </h5>
							</div>
						</div>	
					</div>
				</div>
				<div class="col-lg-10" style="padding-left:0px;padding-top:20px;padding-right:15px;">
					<h4 class="konten" style="padding-bottom:5px;"> Available Rooms </h4>
					<table class="table table-striped" style="border:1px solid #E0E0E0" id="example">
						<thead style="background-color:white">
							<tr>
								<th>No</th>
								<th>Room ID</th>
								<th>Room Name</th>
								<th> Book Room </th>
							</tr>
						</thead>
						<tbody class="warnatbl" id="list_avail">
							<tr class="temp">
								<td></td>
								<td></td>
								<td>Select Date and Time First</td>
								<td>
									<button type='button' class='btn btn-primary' name='book'><span class='glyphicon glyphicon-plus'></span> Book Now </button>
								</td>
							</tr>
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
	
	//buat bikin waktu akhir ga bisa > waktu mulai
	var ubah = 0;
	var selectBox = document.getElementById("jammulai");
	var selectBox2 = document.getElementById("jamakhir");
	selectBox.onchange = function(){
		var angka = selectBox.options[selectBox.selectedIndex].value;
		//console.log(angka);
		ubah = parseInt(angka);
		ubah = ubah;
		//console.log(ubah);
		
		if(ubah === 8)
		{
			selectBox2.value = "";
			//window.alert(ubah);
			document.getElementById("jamakhir").options[0].disabled = false;
			document.getElementById("jamakhir").options[1].disabled = false;
			document.getElementById("jamakhir").options[2].disabled = false;
			document.getElementById("jamakhir").options[3].disabled = false;
		}
		
		if(ubah === 10)
		{
			selectBox2.value = "";
			//window.alert(ubah);
			document.getElementById("jamakhir").options[0].disabled = true;
			document.getElementById("jamakhir").options[1].disabled = false;
			document.getElementById("jamakhir").options[2].disabled = false;
			document.getElementById("jamakhir").options[3].disabled = false;
		}
		
		if(ubah === 13)
		{
			selectBox2.value = "";
			//window.alert(ubah);
			document.getElementById("jamakhir").options[0].disabled = true;
			document.getElementById("jamakhir").options[1].disabled = true;
			document.getElementById("jamakhir").options[2].disabled = false;
			document.getElementById("jamakhir").options[3].disabled = false;
			
		}
		
		if(ubah === 15)
		{
			selectBox2.value = "";
			//window.alert(ubah);
			document.getElementById("jamakhir").options[0].disabled = true;
			document.getElementById("jamakhir").options[1].disabled = true;
			document.getElementById("jamakhir").options[2].disabled = true;
			document.getElementById("jamakhir").options[3].disabled = false;
			
		}
	};

	var dateToday = new Date();

	$(function () {
          $('#datetimepicker1').datetimepicker({
            daysOfWeekDisabled: [0],
			format: 'DD/MM/YYYY',
			minDate: dateToday
			<?php
				if(isset($_SESSION['datebook']))
					{
						echo ",useCurrent: false";
					}
			?>
        });
    });	

	function SelectFrom(valueToSelect)
	{    
	    var element = document.getElementById('jammulai');
	    element.value = valueToSelect;
	}

	function SelectTo(valueToSelect)
	{    
	    var element = document.getElementById('jamakhir');
	    element.value = valueToSelect;
	}

</script>

<?php

	//liat session booked classnya udah ada belom, kalo ada lakukan hal berikut

	if(isset($booked_class))
	{
		echo "<script>";

		//matiin kelas yang udah ke book
		foreach ($booked_class as $row) {

			echo "document.getElementById('".$row['class_id']."').className = document.getElementById('".$row['class_id']."').className.replace ( /(?:^|\s)aktif(?!\S)/g , ' gaaktif' );";
		}

		echo "</script>";
	}

	if(isset($_SESSION['datebook']))
	{
		echo "<script> document.getElementById('datebook').value ='".$_SESSION['datebook']."'</script>";
	}

	if(isset($_SESSION['from']) && isset($_SESSION['to']))
	{
		echo "<script>SelectFrom('".$_SESSION['from']."');SelectTo('".$_SESSION['to']."');</script>";
	}

	if(isset($unbooked_class))
	{
		echo "<script>";
		echo "$('.temp').remove();";

		$mycode = "";

		$n = 0;

		//tampilin kelas available ke tabel
		foreach ($unbooked_class as $row) {

			$n++;

			$mycode = $mycode."<tr class='temp'><td>".$n."</td><td>".$row['id']."</td><td>".$row['nama_kelas']."</td><td><a href ='".base_url()."index.php/AddNew/autoFill/".$row['id']."'><button type='button' class='btn btn-primary' id='".$row['id']."'><span class='glyphicon glyphicon-plus'></span> Book Now </button></a></td></tr>";
		}

		//echo $mycode;

		echo 'var isi = "'.$mycode.'";';

		echo "$('#list_avail').append(isi);";

		echo "</script>";
	}

?>

</body>
</html>