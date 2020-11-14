<!DOCTYPE html>
<html>
<head>
	<title>Siswa</title>
	 <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Racing+Sans+One&display=swap" rel="stylesheet">
</head>
 <style type="text/css">
    
       body{
       background-image:url(<?php echo base_url('Aset/bg2.gif');?>);
       background-size:cover;
       background-repeat: no-repeat;
       }
   .table{
       margin-top: 50px;
      padding-top: 15px;
      background-color: pink;
      opacity: 0.9;
      margin-top: 5px;
      color: white;
      margin-right: 500px;
      width: 50%;
      border: 2px solid white;
      border-radius: 10px;
      box-shadow:0 0 10px rgba(0,0,0,.50); 
    }
     .table2{
       margin-top: 50px;
      padding-top: 15px;
      background-color: skyblue;
      opacity: 0.9;
      margin-top: 5px;
      color: white;
      margin-right: 500px;
      width: 100%;
      border: 2px solid white;
      border-radius: 10px;
      box-shadow:0 0 10px rgba(0,0,0,.50); 
    }
    div{
      height: 35px;
      width: 100%;
      background-color: black;
      opacity: 0.8;
    }
  img{
    width: 62px
  }

   .nav-custom{
      background-color: #bf4163;
  }

</style>
<body>
    <nav class="navbar navbar-expand-sm   open-edit fixed-top" >
  <!-- Brand/logo -->
  <a class="navbar-brand" href="<?php echo site_url('main/index'); ?>" style="color: white;font-family: 'Poiret One', cursive; "><img src="<?php echo base_url('Aset/logo.gif');?>"> ASAN MEDICAL CENTRE</a>
  <div class="collapse navbar-collapse nav-custom" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('main/to_pasien'); ?>" style="text-decoration: none;color: white;font-family: 'Poiret One', cursive;">pasien <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('main/to_pendaftaran'); ?>" style="text-decoration: none;color: white;font-family: 'Poiret One', cursive;"> pendaftaraan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('main/admin'); ?>" style="text-decoration: none;color: white;font-family: 'Poiret One', cursive;">user</a>
      </li>
    
    </ul>
  </div>
</nav>
<br>
<br>


    <h1 align="center" style="margin-top: 15PX;font-weight: bold;color: white">DAFTAR PASIEN</h1>

<center>
	<table style ="width:100s% " border="1px" cellpadding="10PX">
 <tr class="table2">
<th>no</th>
<th>Nama pasien</th>
<th>no identitas</th>
<th>jenis kelamin</th>
<th>tanggal lahir</th>
<th>nomor telepon</th>
<th>alamat</th>
<th>Nama wali</th>
<th>No telp wali</th>
<th>tanggal kunjung</th>
<th>kode poli</th>
<th>aksi</th>
</tr>

<?php
$i =0;
   foreach ($pasien as $key => $value) {
  $i++;  
?>

<tr class="table">
<td><?php echo $i ?></td>
<td><?php echo $pasien[$key]->nama_pasien; ?></td>
<td><?php echo $pasien[$key]->no_identitas;?></td>
<td><?php echo $pasien[$key]->jk_pasien;?></td>
<td><?php echo $pasien[$key]->tgl_lahir;?></td>
<td><?php echo $pasien[$key]->no_telp;?></td>
<td><?php echo $pasien[$key]->alamat;?></td>
<td><?php echo $pasien[$key]->nama_wali;?></td>
<td><?php echo $pasien[$key]->no_telp_wali;?></td>
<td><?php echo $pasien[$key]->tgl_kunjung;?></td>
<td><?php echo $pasien[$key]->kode_poli;?></td>
<td>
	
     <?php echo anchor('Main/hapus/'.$pasien[$key]->id_pasien,'delete'); ?>
      <?php echo anchor('Main/edit/'.$pasien[$key]->id_pasien,'edit'); ?>
     </td>
</tr>

<?php } ?>

 </table>   
      

   </div>
    </center>
</body>
</html>