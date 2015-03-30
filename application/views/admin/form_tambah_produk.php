<div class="col-md-12">
<h3>Data Produk</h3>
<hr>
<form class="from-group" method="post" action="<?php echo site_url('admin/kelola_produk/tambah_data');?>">
	<div class="panel panel-info">
		<div class="panel-heading">
			Tambah Produk
		</div>
		<div class="panel-body">
			<label>Kode Produk</label>
			<input class="form-control" type="text" name="kode_produk">
			<label>Nama Produk</label>
			<input class="form-control" type="text" name="nama_produk">
		</div>
		<div class="panel-footer">
			<button type="submit" class="btn btn-info">Simpan</button>
			<a class="btn btn-danger" href="<?php echo site_url('admin/kelola_produk');?>">Batal</a>
		</div>
	</div>
</form>	
</div>