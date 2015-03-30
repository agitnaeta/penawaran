<div class="col-md-12">
<h4>Komponen Produk <?php foreach($produk->result() as $row):  echo $row->nama_produk; endforeach;?></h4>
<?php echo $this->session->flashdata('pesan');?>
<div class="panel panel-info">
	<div class="panel-heading">Form Tambah</div>
	<div class="panel-body">
	<form method="POST" action="<?php echo site_url('admin/kelola_komponen/tambah_data');?>"  class="form-group">
	<label>Kode Produk</label>
	<input class="form-control" value="<?php echo($row->kode_produk);?>" readonly name="kode_produk" id="kode_produk">
	<label>Nama Komponen</label>
	<input class="form-control"   name="nama_komponen" id="nama_komponen">
	<label>Jumlah</label>
	<input min="1" class="form-control" type="number" name="jumlah" id="jumlah">
	<br>
	<button type="submit" class="btn btn-info">Simpan</button>
	<a href="<?php echo site_url('admin/kelola_komponen');?>" class="btn btn-warning">Batal</a>
	</form>	
	</div>
</div>
</div>