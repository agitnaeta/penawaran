<div class="col-md-12">
<h4>Edit Data Komponen</h4>
<?php echo $this->session->flashdata('pesan');?>
<?php foreach ($komponen->result() as $row):?>
<div class="panel panel-info">
	<div class="panel-heading">Form Tambah</div>
	<div class="panel-body">
	<form method="POST" action="<?php echo site_url('admin/kelola_komponen/update_data');?>"  class="form-group">
	<label>Kode Produk</label>
	<input class="form-control" value="<?php echo($row->kode_produk);?>" readonly name="kode_produk" id="kode_produk">
	<label>Id Komponen</label>
	<input class="form-control" value="<?php echo($row->id_komponen);?>" readonly name="id_komponen" id="id_komponen">
	<label>Nama Komponen</label>
	<input class="form-control" value="<?php echo($row->nama_komponen);?>"    name="nama_komponen" id="nama_komponen">
	<label>Jumlah</label>
	<input class="form-control" value="<?php echo($row->jumlah);?>" type="number" name="jumlah" id="jumlah">
	<br>
	<button type="submit" class="btn btn-info">Simpan</button>
	<a href="<?php echo site_url('admin/kelola_komponen');?>" class="btn btn-warning">Batal</a>
	</form>	
	</div>
</div>
<?php endforeach;?>
</div>