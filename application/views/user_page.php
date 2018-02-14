<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pendaftar PSB Online</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
	<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</head>
<body>

	<STYLE TYPE="text/css">
	body {
		background-image: url('/psb/assets/images/indigo_textured.jpg');
	}
	.alert {
		padding: 10px;
	}
	.container {
		background-color: white;
		padding: 15px;
	}
	.table {
		font-size: 13px;
	}
	.table>tbody>tr>td {
		padding: 5px;
	}
	</STYLE>
	
	<?php 

	foreach ($data as $row) {

	?>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="#">PSB Online SMAN 05 </a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a>Hai , <span style="text-transform: uppercase; font-weight: bold"><?php echo $row->nama; ?></span></a></li>
					<li><a href="<?php echo base_url() ?>index.php/user/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>


	<div class="container">
		<div class="alert alert-info">** Data pada laman ini adalah hasil input formulir pada laman <u>pendaftaran</u> yang telah diisi sebelumnya.</div>
		<div class="row">
			<div class="col-sm-2 text-center">
				<img src="<?php echo base_url() ?>uploads/<?php echo $row->foto; ?>" width="150px" height="190px" class="img-thumbnail">
			</div>
			<div class="col-sm-5">
				<table class="table table-hover">
					<thead>
						<th colspan="3"><span class="glyphicon glyphicon-pushpin"></span> Data Pribadi Calon Siswa</th>
					</thead>
					<tbody>
						<tr>
							<td width="40%">Nama Lengkap</td>
							<td>:</td>
							<td><?php echo $row->nama; ?></td>
						</tr>
						<tr>
							<td>Tempat Lahir</td>
							<td>:</td>
							<td><?php echo $row->tempat_lahir; ?></td>
						</tr>
						<tr>
							<td>Tanggal Lahir</td>
							<td>:</td>
							<td><?php echo $row->tanggal_lahir; ?></td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td>
							<td>:</td>
							<td><?php echo $row->kelamin; ?></td>
						</tr>
						<tr>
							<td>Agama</td>
							<td>:</td>
							<td><?php echo $row->agama; ?></td>
						</tr>
						<tr>
							<td>No. Telpon/HP</td>
							<td>:</td>
							<td><?php echo $row->telpon; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-sm-5">
				<table class="table table-hover">
					<thead>
						<th colspan="3"><span class="glyphicon glyphicon-pushpin"></span> Data Sekolah Calon Siswa</th>
					</thead>
					<tbody>
						<tr>
							<td width="40%">Asal SMP</td>
							<td>:</td>
							<td><?php echo $row->smp_asal; ?></td>
						</tr>
						<tr>
							<td>Alaman SMP Asal</td>
							<td>:</td>
							<td><?php echo $row->alamat_smp; ?></td>
						</tr>
						<tr>
							<td>Total Nilai UN</td>
							<td>:</td>
							<td><?php echo $row->un_total; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-5 col-sm-offset-2">
				<table class="table table-hover">
					<thead>
						<th><span class="glyphicon glyphicon-pushpin"></span> Data Orang Tua/Wali</th>
					</thead>
					<tbody>
						<tr>
							<td  width="40%">Nama bapak</td>
							<td>:</td>
							<td><?php echo $row->nama_bpk; ?></td>
						</tr>
						<tr>
							<td>Pendidikan bapak</td>
							<td>:</td>
							<td><?php echo $row->pendidikan_bpk; ?></td>
						</tr>
						<tr>
							<td>Pekerjaan bapak</td>
							<td>:</td>
							<td><?php echo $row->pekerjaan_bpk; ?></td>
						</tr>
						<tr>
							<td>Penghasilan bapak</td>
							<td>:</td>
							<td><?php echo $row->penghasilan_bpk; ?></td>
						</tr>
						<tr>
							<td>Nama Ibu</td>
							<td>:</td>
							<td><?php echo $row->nama_ibu; ?></td>
						</tr>
						<tr>
							<td>Pendidikan ibu</td>
							<td>:</td>
							<td><?php echo $row->pendidikan_ibu; ?></td>
						</tr>
						<tr>
							<td>Pekerjaan</td>
							<td>:</td>
							<td><?php echo $row->pekerjaan_ibu; ?></td>
						</tr>
						<tr>
							<td>Penghasilan</td>
							<td>:</td>
							<td><?php echo $row->penghasilan_ibu; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-sm-5 data-login">
				<table class="table table-bordered">
					<thead>
						<th colspan="3"><span class="glyphicon glyphicon-hdd"></span> Data Login</th>
					</thead>
					<tbody>
						<tr>
							<td>Email</td>
							<td class="text-success"><strong><?php echo $row->email; ?></strong></td>
						</tr>
						<tr>
							<td>Password</td>
							<td class="text-success"><strong><?php echo $row->password; ?></strong></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="text-center">
				<a href="<?php echo base_url() ?>index.php/user/cetak_pdf/<?php echo $row->id; ?>" class="btn btn-default pull-right" style="margin-right: 50px">Cetak Bukti Pendaftaran <span class="glyphicon glyphicon-print"> </span></a>
				<!-- <button class="btn btn-default pull-right" style="margin-right: 50px" data-toggle="modal" data-target="#modal-cetak">Cetak Bukti Pendaftaran <span class="glyphicon glyphicon-print"> </span></button> -->

				<!-- Menampilkan modal

				<div class="modal" id="modal-cetak" tabindex="-1" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
								Kartu tidak dapat dicetak<br>Belum memasuki masa pendaftaran
							</div>
						</div>
					</div>
				</div>

			-->
			</div>
		</div>
	</div>
	
	<?php } ?>
	<!-- Footer -->
	<footer class="container-fluid">
		<p class="text-center">&copy 2016 - <a href="#">SMAN 05 </a></p>
		<p class="text-center kecil">Seleksi Pendaftaran Siswa Baru Online SMAN 05 </p>
	</footer>
</body>
</html>