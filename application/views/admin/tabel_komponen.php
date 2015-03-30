<div class="col-md-12">
<h3>Data Komponen</h3>
<hr>
	<table>
		<tr>
			<td>

			<form method="post" action="<?php echo site_url('admin/kelola_komponen/tambah');?>">
			<div class="input-group">

				<select class="form-control" required name="kode_produk">
				<option value="">-Pilih Produk-</option>
					<?php foreach ($produk->result() as $row):?>
						<option  value="<?php echo $row->kode_produk;?>"> <?php echo $row->nama_produk;?></option>
					<?php endforeach;?>	
				</select>
				<span class="input-group-btn">
				<button class="btn btn-info" type="submit"> <i class="glyphicon glyphicon-plus"></i> Tambah</button>
				<a href="" class="btn btn-info">
					<i class="glyphicon glyphicon-refresh"></i> Refesh</a>
				</span>
				</div><!-- /input-group -->
			</form>	 
			</td>
		</tr>
		<tr><td><br></td></tr>
	</table>
	<div class="text-center">
	<?php echo $this->session->flashdata('pesan');?>
	</div>
	<table class="table table-condensed table-hover table-bordered table-striped">
		<thead class="bg-info">
			<th>No</th>
			<th>Kode Produk</th>
			<th>ID Koponen</th>
			<th>Nama Komponen</th>
			<th>Jumlah (Pcs)</th>
			<th>Aksi</th>
		</thead>
		<tbody>
		<?php $no=1; foreach($komponen->result() as $row):?>
			<tr>
				<td><?php echo($no++);?></td>
				<td><?php echo($row->kode_produk);?></td>
				<td><?php echo($row->id_komponen);?></td>
				<td><?php echo($row->nama_komponen);?></td>
				<td><?php echo($row->jumlah);?></td>
				<td class="text-center">
							<a class="text-success" href="<?php echo site_url("admin/kelola_komponen/form_edit_komponen/$row->id_komponen");?>"><i class="glyphicon glyphicon-edit"></i> </a>
							<a class="text-danger" href="<?php echo site_url("admin/kelola_komponen/hapus/$row->id_komponen");?>"><i class="glyphicon glyphicon-remove"></i> </a>
				</td>
			</tr>
		</tbody>
	<?php endforeach;?>
	</table>
</div>
		