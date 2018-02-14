<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
	<script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</head>
<body>
	<style type="text/css">
	.btn-xs {
		font-size: 10px;
	}
	.sambutan {
		margin-bottom: 40px;
		font-weight: bolder;
	}
	.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
		padding: 5px;
		font-size: 11px;
	}
	</style>
	<SCRIPT TYPE="text/javascript">
	function close_window() {
		window.close();
	}
	</SCRIPT>	
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="#">Halaman Admin PSB Online SMAN 05</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="javascript:close_window()"><span class="glyphicon glyphicon glyphicon-remove-circle"></span> CLOSE</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="alert alert-info">
			<strong>Perhatian :</strong>
			<ul>
				<li>Resume dari pada pendaftar dapat Anda lihat dari tabel dibawah</li>
				<li>Anda dapat melakukan penghapusan data pendaftar apabila diperlukan dengan klik tombol "Hapus"</li>
				<li>Untuk menyimpan data pendaftar silahkan klik tombol "Simpan Database" pada bagian bawah tabel</li>
			</ul>
		</div>
	</div>

	<div class="container-fluid">
		<table class="table table-hover table-bordered">
			<caption>Data seluruh pendaftar hingga tanggal <?php print date('d-m-Y'); ?> (sebagian tidak ditampilkan) :</caption>
			<thead>
				<tr>
					<th>No.</th>
					<th>Nama Lengkap</th>
					<th>Kelamin</th>
					<th>Agama</th>
					<th>SMP Asal</th>
					<th>Alamat SMP</th>
					<th>Total UN</th>
					<th>Hp/Telpon</th>
					<th>ID Terdaftar</th>
					<th>Tanggal Daftar</th>
					<th>Hapus <span class="glyphicon glyphicon-question-sign" title="Berfungsi untuk menghapus data"></span></th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no=1;
				foreach ($data->result() as $row) { 
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $row->nama; ?></td>
						<td><?php echo $row->kelamin; ?></td>
						<td><?php echo $row->agama; ?></td>
						<td><?php echo $row->smp_asal; ?></td>
						<td><?php echo $row->alamat_smp; ?></td>
						<td><?php echo $row->un_total; ?></td>
						<td><?php echo $row->telpon; ?></td>
						<td><?php echo $row->id; ?></td>
						<td><?php echo $row->tanggal;?></td>
						
						<td><a href="<?php echo base_url() ?>index.php/admin/delete_data/<?php echo $row->id; ?>" class="btn btn-xs btn-link" onclick="return confirm('Anda yakin ingin menghapus data? Data yang dihapus akan hilang dari database')"> <span class="glyphicon glyphicon-trash"></span> Hapus</a></td>
					</tr>
				</tbody>
				<?php } ?>
			</table>
			<a href="<?php echo base_url() ?>index.php/admin/cetak_excel" class="btn btn-default btn-sm">Simpan Database <i class="fa fa-database"></i></a>
			<!-- <button type="button" class="btn btn-default btn-sm">Simpan Database <i class="fa fa fa-database"></i></button> -->
		</div>
		<!-- Modal Confirm

		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<strong>Hapus Data?</strong>
					</div>
					<div class="modal-body">
						Apakah Anda yakin menghapus data ini? Data yang dihapus akan hilang dari database
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
						<a class="btn btn-danger btn-ok">Hapus</a>
					</div>
				</div>
			</div>
		</div>
		<SCRIPT TYPE="text/javascript">
		$('#confirm-delete').on('show.bs.modal', function(e) {
			$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
		});
		</SCRIPT>
	-->

</body>