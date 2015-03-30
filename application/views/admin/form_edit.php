<div class="container">
	<div class="row clearfix">
		<div class="panel panel-info">
			<div class="panel-heading">
				From Pelanggan
			</div>
			<div class="panel-body">
			<form method="post" action="<?php echo site_url('admin/kelola_pelanggan/update_data')?>">
			<?php foreach($member->result() as $row):?>
				<label>ID</label>
				<input value="<?php echo($row->id_pelanggan);?>" class="form-control" type="text" readonly name="id_pelanggan">
				<label>Nama Perusahaan</label>
				<input value="<?php echo($row->nama_perusahaan);?>" class="form-control" type="text" name="nama_perusahaan">
				<label>Nama Pelanggan</label>
				<input value="<?php echo($row->nama_pemesan);?>" class="form-control" type="text" name="nama_pemesan">
				<label>Email</label>
				<input value="<?php echo($row->email);?>"  class="form-control"  type="text" name="email">
				<br>
				<button type="submit" class="btn btn-info">Edit</button>
				<a href="<?php echo site_url('admin/kelola_pelanggan/tabel_pelanggan');?>" class="btn btn-warning">Batal</a>
			<?php endforeach;?>	
			</form>
			</div>
		</div>
	</div>
</div>