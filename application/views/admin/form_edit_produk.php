<div class="col-md-12">
<h3>Data Produk</h3>
<hr>
<?php foreach($produk->result() as $row):?>
<form class="from-group" method="post" action="<?php echo site_url('admin/kelola_produk/update_data');?>">
	<div class="panel panel-info">
		<div class="panel-heading">
			Edit Data Produk
		</div>
		<div class="panel-body">
			<label>Kode Produk</label>
			<input readonly  value="<?php echo $row->kode_produk;?>" class="form-control" type="text" name="kode_produk">
			<label>Nama Produk</label>
			<input value="<?php echo $row->nama_produk;?>" class="form-control" type="text" name="nama_produk">
		</div>
		<div class="panel-footer">
			<button type="submit" class="btn btn-info">Simpan</button>
			<a class="btn btn-danger" href="<?php echo site_url('admin/kelola_produk');?>">Batal</a>
		</div>
	</div>
</form>	
<?php endforeach;?>
</div>