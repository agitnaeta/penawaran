<div class="container">
	<div class="row clearfix">
		<div class="panel panel-info">
			<div class="panel-heading">
				From Pelanggan
			</div>
			<div class="panel-body">
			<form method="post" action="<?php echo site_url('admin/kelola_pelanggan/tambah')?>">
				<label>Nama Perusahaan</label>
				<input  class="form-control" type="text" name="nama_perusahaan">
				<label>Nama Pelanggan</label>
				<input  class="form-control" type="text" name="nama_pemesan">
				<label>Email</label>
				<input   class="form-control"  type="text" name="email">
				<br>
				<button type="submit" class="btn btn-info">Simpan</button>
				<a href="<?php echo site_url('admin/kelola_pelanggan/tabel_pelanggan');?>" class="btn btn-warning">Batal</a>
			
			</form>
			</div>
		</div>
	</div>
</div>