<div class="col-md-12">
	<h3>Data Produk</h3>
	<hr>
</div>
		<div class="col-md-12">
		<div class="text-center">
		<?php echo $this->session->flashdata('pesan');?>
		</div>
			<table class="table table-bordered table-condensed">
				<thead class="bg-success">
					<th colspan="4">
					<a href="" class="btn btn-info">
					<i class="glyphicon glyphicon-refresh"></i> Refesh</a>
					<a href="<?php echo site_url('admin/kelola_produk/tambah');?>" class=" btn btn-info">
					<i class="glyphicon glyphicon-plus"></i> Tambah</a>
					</th>
				</thead>
				<thead class="bg-info">
					<th>NO</th>
					<th>Kode Produk</th>
					<th>Nama Produk</th>
					<th class="text-center">Aksi</th>
				</thead>
				<tbody>
				<?php $no=1; foreach ($produk->result() as $row) :?>
					<tr>
						<td><?php echo($no++);?></td>
						<td><?php echo($row->kode_produk);?></td>
						<td><?php echo($row->nama_produk);?></td>
						<td class="text-center">
							<a title="Lihat Detail" class="text-success" href="<?php echo site_url("admin/kelola_produk/lihat_detail/$row->kode_produk");?>"><i class="glyphicon glyphicon-eye-open"></i> </a>
							<a title="Edit Produk" class="text-success" href="<?php echo site_url("admin/kelola_produk/form_edit_produk/$row->kode_produk");?>"><i class="glyphicon glyphicon-edit"></i> </a>
							<a title="Hapus Priduk" class="text-danger" href="<?php echo site_url("admin/kelola_produk/hapus/$row->kode_produk");?>"><i class="glyphicon glyphicon-remove"></i> </a>
						</td>
					</tr>
				<?php endforeach;?>	
				</tbody>
			</table>
		</div>
