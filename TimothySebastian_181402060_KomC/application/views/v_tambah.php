<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/gaya.css">	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/signup-form.css">
	<script src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<center>
<!-- 		<h2 class="jdlatas">CRUD Data Pegawai</h2>
 -->		

	</center>
	<center>
		<h2 class="jdlatas">Form Data Mahasiswa</h2>
	<h3>Tambah Data Baru</h3>
				<a href="<?php echo site_url('masuk'); ?>" class="btn btn-info">Lihat Semua Data</a><br><br>
	</center>
	
	<div class="well">

		<div align="left">
			<form role="form" method="post" action="<?php echo site_url('masuk/tambah_aksi'); ?>">
				<div class="form-group">
					<label>NIM</label>
					<input type="text" name="nip"  class="form-control">
				</div>
				<div class="form-group">
					<label>NAMA</label>
					<input type="text" name="nama"  class="form-control">
				
				<div class="form-group">
					<label>JENIS KELAMIN</label>
					        <div class="form-group" ">
					        	<select class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="" data-placeholder="--Jenis Kelamin--">
					        		<option value="Pria">Pria </option>
					        		<option value="Wanita">Wanita </option>
					        	</select>
					        </div>	

			

				<div class="form-group">
					<label>ALAMAT</label>
					<input type="text" name="alamat"  class="form-control">
				</div>			
				<div class="form-group">
					<input type="submit" style="width:100%" value="Tambah Data" type="button" class="btn btn-primary btn-lg">
				</div>
				<div class="form-group">
									</div>		
			</form>

		</div>
	</div>
	
</div>
</body>
</html>