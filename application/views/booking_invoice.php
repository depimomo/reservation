<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <title>ROOMATES | INVOICE</title>

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <style type="text/css">
    @media print
    {    
        .no-print, .no-print *
        {
            display: none !important;
        }
    }
  </style>

</head>

<body style="padding:2%;" onload="window.print();">

  <?php if(!isset($_SESSION['logged_in'])) echo "<script>window.location='".base_url()."';</script>";?>

  <?php

    foreach ($hasil as $row) {

      $datenow = $row['date_now'];
      $datebook = $row['date_book'];
      $username = $row['username'];
      $class_id = $row['class_id'];
      $nama_kelas = $row['nama_kelas'];
      $booker_name = $row['booker_name'];
      $purpose = $row['purpose'];
      $jam[] = $row['nama_slot'];
    }


  ?>
  <table style="width: 80%;border:collapse;margin:auto;">
    <thead>
      <tr>
        <th> Roomates </th>
        <th> </th>
        <th> </th>
      </tr>
    </thead>
    <tbody>
      <tr>
       <td colspan="3" style="text-align:center"> <b>Surat Peminjaman Ruangan </b> </td>
     </tr>
     <tr>
      <td colspan="3"> Serpong, <?php echo $datenow;?> </td>
    </tr>
    <tr>
      <td colspan="3" style="height: 40px"> </td>
    </tr>
    <tr>
      <td colspan="3"> Kami, pihak Roomates, menerbitkan surat ijin peminjaman ruangan seperti yang tertulis untuk memfasilitasi kegiatan yang tercantum yakni: </td>
    </tr>
    <tr>
      <td style=""> Tanggal</td>
      <td colspan="2">: <?php echo $datebook;?></td>
    </tr>
    <tr>
      <td> Waktu </td>
      <td colspan="2">: <?php echo implode(", ", $jam);?></td>
    </tr>
    <tr>
      <td> Ruangan </td>
      <td colspan="2">: <?php echo $class_id;?> - <?php echo $nama_kelas;?> </td>
    </tr>
    <tr>
      <td> Atas nama </td>
      <td colspan="2">: <?php echo $booker_name;?> </td>
    </tr>
    <tr>
      <td> Keperluan </td>
      <td colspan="2">: <?php echo $purpose;?> </td>
    </tr>
    <tr>
      <td colspan="3"> Demikian surat peminjaman ruangan ini dibuat. Atas perhatian dan kerjasamanya, kami ucapkan terima kasih.</td>
    </tr>
    <tr>
      <td colspan="3" style="text-align:right;padding-right: 9%"> Mengetahui, </td>
    </tr>
    <tr>
      <td colspan="3" style="height: 60px"> </td>
    </tr>
    <tr>
      <td colspan="3" style="text-align:right;padding-right: 9%"> <?php echo $username;?> </td>
    </tr>
    <tr>
      <td colspan="3" style="text-align:right;padding-right: 9%"> Admin </td>
    </tr>
  </tbody>
</table>

<a href='<?php echo base_url()."index.php/booking";?>' class="btn btn-primary no-print pull-right" style="margin-right: 17%;margin-top: 2%;text-align:center">Back</a>

</body>
</html>