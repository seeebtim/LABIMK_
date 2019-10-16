<!DOCTYPE html>
<html>
<head>
	<title>Sistem Data Pegawai</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/gaya.css">	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/signup-form.css">
	<script src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
</head>
<body> 
	

		
	<center>
		<div class="container">
		<h2 class="jdlatas">Sistem Data Pegawai</h2>
		<h3>Edit Data</h3>
<a href="<?php echo site_url('masuk'); ?>" class="btn btn-info">Lihat Daftar Data</a><br><br>
	<div class="well">

		<div align="left">
			<?php foreach($data as $u){ ?>
			<form role="form" method="post" action="<?php echo site_url('masuk/update'); ?>">
				<div class="form-group">
					<label>NIM</label>
					<input type="text" name="nip" value="<?php echo $u->nip ?>" class="form-control" readonly>
				</div>
				<div class="form-group">
					<label>NAMA</label>
					<input type="text" name="nama" value="<?php echo $u->nama ?>" class="form-control">
				</div>
				<div class="form-group">
					<label>JENIS KELAMIN</label>
<!-- 					<input type="text" name="nama" value="<?php echo $u->jenis_kelamin ?>" class="form-control">
 -->							 <div class="form-group" ">
					        	<select class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="" data-placeholder="--Jenis Kelamin--">
					        		<option value="Pria">Pria </option>
					        		<option value="Wanita">Wanita </option>
					        	</select>
					        </div>	
				</div>
				<div class="form-group">
					<label>Alamak</label>
					<input type="text" name="alamat" value="<?php echo $u->alamat ?>" class="form-control">
				</div>			
				<div class="form-group">
					<input type="submit" style="width:100%" value="Simpan Perubahan" type="button" class="btn btn-success btn-lg">
				</div>	
			</form>
				<?php } ?>

		</div>
	</div>
</div>
	</center>
</body>
</html>