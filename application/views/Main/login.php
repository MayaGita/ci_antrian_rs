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
		 background-image:url(<?php echo base_url('Aset/bg2.gif');?>);
		 background-size:100%:
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
		background-color: #0d6b33;

	}
	
    img{
		width: 62px
	}

	
</style>
<body>
	<nav class="navbar navbar-expand-sm   open-edit fixed-top" >
  <!-- Brand/logo -->
  <a class="navbar-brand" href="" style="color: #0d6b33;font-family: 'Poiret One', cursive; "><img src="<?php echo base_url('Aset/logo.gif');?>"> ASAN MEDICAL CENTRE</a>
  <ul>
  	
  </ul>
 
</nav>
<br>
<br>


    <h1 Align="center" class="h1" >Admin login</h1>
	
	
   <CENTER><div class="card opa"  style="width: 30rem;height:auto; ; ">     
	<?php echo form_open_multipart('main/aksi_login'); ?>

	<label>username</label>
		 <input type="text" name="username"  placeholder="masukan nama"><br>
				
			<br>
	<label>password</label>
		 <input type="password" name="password"  placeholder="masukan password"><br>
				
			<br>

			 <button  type="submit" value="tambah" class="btn btn-danger" style="width: 150px;margin-bottom: 10px">login</button > 
		</form>
		<h6 align="center" style="margin-bottom: 50px">dont have any account?	<a href="#" style="text-decoration: none">Register</a> here</h6>
	</div>
		</CENTER>


</body>
</html