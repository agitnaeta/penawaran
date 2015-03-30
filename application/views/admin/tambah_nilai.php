
<div class="col-md-12">
	<h3>Tambah Nilai Pelanggan</h3>
	<hr>
	<div class="panel panel-info">
		<div class="panel-heading">
			Data Pelanggan
		</div>
		<div class="panel-body">
			<?php foreach($member->result() as $row):?>
			<label>Nama Perusahaan</label>
			<p><?php echo($row->nama_perusahaan);?></p>
			<label>Nama Pelanggam</label>
			<p><?php echo($row->nama_pemesan);?></p>
			<label>E-Mail</label>
			<p><?php echo($row->email);?></p>
			<?php endforeach;?>
			<?php foreach($nilai->result() as $row):?>
			<label>Nilai</label>
			<form method="post" action="<?php echo site_url('admin/kelola_pelanggan/nilai');?>">
			<input min="0" class="form-control" value="<?php echo($row->nilai_penawaran);?>" type="number" name="nilai_penawaran">
			<input type="hidden" name="id_pelanggan" value="<?php echo($row->id_pelanggan);?>">
			
			
		</div>
		<div class="panel-footer">
			<button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-plus"></i> Tambahkan</button>
			<a href="<?php echo site_url('admin/kelola_pelanggan/tabel_pelanggan');?>" class="btn btn-warning">Kembali</a>
			</form>	
		<?php endforeach;?>
		</div>
	</div>
</div>