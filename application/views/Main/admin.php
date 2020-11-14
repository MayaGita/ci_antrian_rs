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
      background-color: #cf3c88;
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


    <h1 Align="center" class="h1" style="font-weight: bold;margin-top: 15PX;color: white " >Daftar admin</h1>

	<center>
	<table style ="width:70% " border="1px" cellpadding="10PX">
 <tr class="table2">
<th>no</th>
<th>Nama</th>
<th>password</th>
<th>aksi</th>
</tr>

<?php
$i =0;
   foreach ($pasien as $key => $value) {
  $i++;  
?>

<tr class="table">
<td><?php echo $i ?></td>
<td><?php echo $pasien[$key]->username; ?></td>
<td><?php echo $pasien[$key]->password;?></td>
<td>
	    <?php echo anchor('Main/hapusadmin/'.$pasien[$key]->id_user,'delete'); ?>
      <?php echo anchor('Main/editadmin/'.$pasien[$key]->id_user,'edit'); ?>
</td>
</tr>
	
   


<?php } ?>

 </table>   



</table>
</center>

</body>
</html>