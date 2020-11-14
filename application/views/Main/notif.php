<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Racing+Sans+One&display=swap" rel="stylesheet">
	 
	<title>siswa</title>

	
</head>
<style>
	body{
		 background-image:url(<?php echo base_url('Aset/gambar.jpg');?>);
		 background-size:cover;
		 background-repeat:2;
		 background-position: center;
	}
	form{
		margin:100px 100px 75px 100px;
		color:black;
		font-size:20px;
		font-family: 'times new roman';
	}
	
	h1{
		color:white;
		font-family: 'times new roman', cursive;
		font-size: 48px;
	}

	.opa{
		opacity: 0.9;
		border-style: 2px solid black;
		border-radius: 15px;
		background-color: white;

	}
	img{
		width: 62px
	}
	


	
</style>
<body>
	<nav class="navbar navbar-expand-sm   open-edit fixed-top" >
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#" style="color: white;font-family: 'Poiret One', cursive; "><img src="<?php echo base_url('Aset/logo.gif');?>"> ASAN MEDICAL CENTRE</a>
  <ul>
  	
  </ul>
 
</nav>
<br>
<br>


    <h1 Align="center" class="h1" style="font-weight: bold;" >pendaftaran pasien baru</h1>
	
	
   <CENTER>
    <div class="opa">
   <h3>Pendaftaran berhasil</h3>

   <h4 align="center">Kode pendaftaran: <?php echo $kodedaftar; ?> </h4>

   <article><strong>Harap masukan kode  pendaftaran diatas  pada saat registrasi  di rumah sakit sesuai dengan  tanggal kunjungan yang telah ditentukan</strong></article>    
	</div>
		</CENTER>
    <center><a href="<?php echo site_url('main/home'); ?>" ><div class="opa" style="width: 50px; color: black; font-weight: bold;" align="center" > back</div></a></center>

</body>
</html