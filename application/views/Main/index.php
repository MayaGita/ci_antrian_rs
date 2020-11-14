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
  <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
	 
	<title>siswa</title>

	
</head>
<style>
	body{
		 background-image:url(<?php echo base_url('Aset/bg3.gif');?>);
		 background-size:cover;
		 background-repeat:no-repeat;
		 background-position: center;
		 padding-top: 550px;
	}
	form{
		margin:100px 100px 75px 100px;
		color:black;
		font-size:20px;
		font-family: 'times new roman';
	}
	
	h1{
		color:white;
		font-family: 'Poiret One', cursive;
		font-size: 48px;
	}

	.opa{
		opacity: 0.9;
		border-style: 2px solid black;
		border-radius: 15px;
		background-color: #0d6b33;

	}
	.img{
		width: 62px
	}
	.img2{
		padding-left: 0px;
		background-position: center;
		width: 100%;
        padding-bottom:-10px;

	}
    .btn-custom{
    	background-color:red;
    	color: white; 
    	border: 2px solid red;
        border-radius: 25px;
        margin-top: 20px;
    }
  
   
	
</style>
<body>
	<nav class="navbar navbar-expand-sm   open-edit fixed-top" >
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#" style="color: #0d6b33;font-family: 'Poiret One', cursive; ">
  	<img class="img" src="<?php echo base_url('Aset/logo.gif');?>" > ASAN MEDICAL CENTRE</a>
  <ul>
  	<a  href="<?php echo site_url('main/user'); ?>"><h4 style="margin-left:900px; color:#0d6b33 ">LOGIN</h4></a>
  	
  </ul>
 
</nav>



<footer>
<center><a href="<?php echo site_url('main/home'); ?>"><button  type="submit" value="tambah" class="btn btn-custom" style="width: 150px;margin-bottom: 10px;">
	DAFTAR</button ></a> </center>
</footer>

</body>

</html>