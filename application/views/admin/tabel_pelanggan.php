<div class="col-md-12">
	<h3>Data Pelanggan</h3>
	<hr>

<div class="text-center">
	<?php echo $this->session->flashdata('pesan');?>
</div>
<table class="table table-bordered table-condensed">
				<thead class="bg-info">
				<tr class="bg-success"><th colspan="5">
				<a href="" class="btn btn-info">
					<i class="glyphicon glyphicon-refresh"></i> Refesh</a> 
				<a href="<?php echo site_url("admin/kelola_pelanggan/form_tambah");?>" class="btn btn-info"><i class="glyphicon glyphicon-plus"></i>  Tambah Pelanggan</a>
				</th></tr>
					<tr>
						<th>
							NO
						</th>
						<th>
							Nama Perusahaan
						</th>
						<th>
							Nama Pelanggan
						</th>
						<th>
							Email
						</th>
						<th class="text-center">
							Aksi
						</th>
					</tr>
				</thead>
				<tbody>
				<?php $no=1;foreach($member->result() as $row):?>
					<tr>
						<td>
							<?php echo($no++);?>
						</td>
						<td>
							<?php echo ($row->nama_perusahaan);?>
						</td>
						<td>
							<?php echo ($row->nama_pemesan);?>
						</td>
						<td>
							<?php echo ($row->email);?>
						</td>
						<td class="text-center">

							<a class="text-success" href="<?php echo site_url("admin/kelola_pelanggan/tambah_nilai/$row->id_pelanggan");?>"><i class="glyphicon glyphicon-plus"></i> </a>
							<a class="text-success" href="<?php echo site_url("admin/kelola_pelanggan/form_edit/$row->id_pelanggan");?>"><i class="glyphicon glyphicon-edit"></i> </a>
							<a class="text-danger" href="<?php echo site_url("admin/kelola_pelanggan/hapus/$row->id_pelanggan");?>"><i class="glyphicon glyphicon-remove"></i> </a>
						</td>
					</tr>
				<?php endforeach ;?>	
				</tbody>
			</table>
			</div>