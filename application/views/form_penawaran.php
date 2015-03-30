<?php include 'proses_jquery.php';?>
<div class="container-fluid">
<div class="row clearfix">
	<div class="col-md-12">
	<div class="col-md-2">
		<div class="panel panel-info">
			<div id="hide"  class="panel-heading"><i class="glyphicon glyphicon-info-sign"></i> Produk Tersedia 
			<div class="pull-right">
				<i id="hide" class="glyphicon glyphicon-eject"></i>	
			</div>
			</div>
		<div id="konten" class="panel-body">
			<table class="table table-bordered table-hover">
				<tr class="bg-success">
					<td>Kode</td>
					<td>Nama Produk</td>
				</tr>	
			<?php foreach ($produk->result() as $row):?>
				<tr>
					<td><a id="kode"><?php echo $row->kode_produk;?></a></td>
					<td><a ><?php echo $row->nama_produk;?></a></td>
				</tr>
			<?php endforeach;?>	
				</table>
		</div>
		</div>
	</div>
		<div class="col-md-6">

		<form class="form-horizontal" method="post" action="<?php echo site_url('welcome/print_data');?>">
			<fieldset>
			
			<!-- Form Name -->
			<legend>Form Penawaran</legend>

			<!-- Text input-->
			
			<div class="form-group">
			  <label class="col-md-4 control-label" for="kode_produk">Kode Produk</label>  
			  <div class="col-md-5">
			  <input id="kode_produk" name="kode_produk" type="text" placeholder="Misal 1460" class="form-control input-md" required="">
			    
			  </div>
			</div>

			<!-- Multiple Checkboxes (inline) -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="produk_lain"></label>
			  <div class="col-md-4">
			    <label class="checkbox-inline" for="produk_lain-0">
			      <input type="checkbox" name="produk_lain" id="produk_lain" value="Minta Produk Lain">
			     <input hidden type="text" id="input_produk_lain" value="0">
			      Sisipkan Produk Lain
			    </label>
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="email">Email</label>  
			  <div class="col-md-5">
			  <input required id="email" name="email" type="text" placeholder="Email anda..." class="form-control input-md">
			    
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="nama_perusahaan">Nama Perusahaan </label>  
			  <div class="col-md-5">
			  <input required id="nama_perusahaan" name="nama_perusahaan" type="text" placeholder="Nama Perusahaan Anda.." class="form-control input-md">
			   <input hidden  name="nilai_penawaran" id="nilai_penawaran" type="number">
			   <input  hidden type="text" id="id_pelanggan" name="id_pelanggan"> 

			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="nama_pemesan">Nama Pemesan</label>  
			  <div class="col-md-5">
			  <input required id="nama_pemesan" name="nama_pemesan" type="text" placeholder="Nama Anda" class="form-control input-md">
			    
			  </div>
			</div>

			<!-- Button (Double) -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="simpan"></label>
			  <div class="col-md-8">
			    <button id="simpan" name="simpan" class="btn btn-info">Minta Penawaran</button>
			    <a href="<?php echo site_url();?>" title="Reset Penawaran" class="btn btn-danger">
				<i class="glyphicon glyphicon-refresh"></i> Reset</a>
			  </div>
			</div>

			</fieldset>
		</form>
		<div class="panel-body">
			<div class="alert alert-success">
				<p> Versi Trial </p><br>
				<p> Coba Email : karoseri@gmail.com</p>
			</div>
		</div>

		</div>
		<div class="col-md-4">
		
			<legend>Riview Penawaran 
			<div class="pull-right">
			<a href="<?php echo site_url();?>" title="Reset Penawaran" class="btn btn-info">
			<i class="glyphicon glyphicon-refresh"></i> </a>
			</div>
			</legend>
			<table class="table">
				<tr class="bg-success"><td colspan="2">Produk</td></tr>
				<tr><td>Kode Produk</td><td>: <a id="hasil"></a></td></tr>
				<tr><td>Nama Produk</td><td>: <a id="hasil_nama"></a></td></tr>
				<tr><td>Produk Lain</td><td>: <a id="hasil_check">NO</a></td></tr>
				<tr class="bg-success"><td colspan="2">Data Pemesan</td></tr>
				<tr><td>Email Pemesan</td><td>: <a id="hasil_email"></a></td></tr>
				<tr><td>Nama Perusahaan</td><td>: <a  id="hasil_perusahaan"></a></td></tr>
				<tr><td>Nama Pemesan</td><td>: <a  id="hasil_pemesan"></td></tr>
				<tr><td>Tanggal</td><td>: <?php echo date('d-m-Y');?></td></tr>
			</table>
		</div>
	</div>
</div>
</div>
<div class="nav navbar-inverse navbar-nav navbar-fixed-bottom">
	
<div class="pull-right">

	<a class="btn btn-info btn-sm" href="http://naetalab.com">Created By : 
	<i class="glyphicon glyphicon-copyright-mark"></i> NaetaLab</a>
</div>