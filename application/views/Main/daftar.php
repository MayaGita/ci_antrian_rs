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
		 background-image:url(<?php echo base_url('Aset/hi.gif');?>);
		 background-size:100%;
		 background-repeat:2;
		 
	}
	form{
		margin:100px 100px 75px 100px;
		color:black;
		font-size:20px;
		font-family: 'times new roman';
	}
	
	h1{
		color:#43f071;
		font-family: 'Poiret One', cursive;
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
  <a class="navbar-brand" href="<?php echo site_url('main/index'); ?>" style="color: #0d6b33;font-family: 'Poiret One', cursive; "><img src="<?php echo base_url('Aset/logo.gif');?>"> ASAN MEDICAL CENTRE</a>
  <ul>
  	
  </ul>
 
</nav>
<br>
<br>


    <h1 Align="center" class="h" >Pendaftaran pasien baru</h1>
	
	
   <CENTER><div class="card opa"  style="width: 30rem;height:auto; ; ">     
	<form class="form-container" action="<?php echo base_url('index.php/main/proses_tambah');?>" method="POST">
	<label>Nama :</label>
		<input type="text" name="nama_pasien" placeholder="Masukan nama" ><br>
			<br>
	<label>Nomor identitas</label>
		 <input type="text" name="no_identitas"  placeholder="masukan nomor identitas"><br>
				
			<br>
		 <label >janis kelamin  :</label><br>
	       <input type="radio" name="jk_pasien" value="laki-laki">
		   laki-laki
		   <input type="radio" name="jk_pasien" value="perempuan" checked>
		   perempuan<br>
		  
			<br>
			
	
	      <label>tanggal lahir</label>
		 <input type="date" name="tgl_lahir" ><br>
				
			<br>
			
         <label>Nomor telepon</label>
		 <input type="text" name="no_telp"  placeholder="masukan nomor telepon"><br>
				
			<br>

	     <label>alamat tempat tinggal</label>
		 <textarea name="alamat" placeholder="masukan alamat"></textarea><br>
		    <br>
        
	<label>Nama wali</label>
		 <input type="text" name="nama_wali"  placeholder="masukan nama wali"><br>
				
			<br>	
			<label>No telpon wali</label>
		 <input type="text" name="no_telp_wali"  placeholder="masukan no telpon wali"><br>
				
			<br>
			 <label>tanggal kunjungan</label>
		 <input type="date" name="tgl_kunjung" ><br>
				
			<br>
			<label>poliklinik</label>
		 <select name="kode_poli">
         <option value="P01">Dokter umum</option>
         <option value="P02">kebidanan</option>
         <option value="P03">Dokter poli anak</option>
         <option value="P04">Dokter spesialis gigi dan mulut</option>
         <option value="P05">Dokter spesialis mata</option>
         <option value="P06">Dokter spesialis penyakit dalam</option>
         <option value="P07">Dokter spesialis syaraf</option>
         <option value="P08">Dokter spesialis kesehatan jiwa</option>
         </select><br>
				
			<br>				    

			<button  type="submit" value="tambah" class="btn btn-primary" style="width: 150px;margin-bottom: 10px">submit</button > 
            <br>

			
		</form>
	
	</div>
		</CENTER>


</body>
</html