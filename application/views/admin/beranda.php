<title>Aplikasi Penawaran</title>
<div class="container-fluid">
	<div class="row clearfix">
	<div class="col-md-12">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> 
					 <a class="navbar-brand" href="#"><i class="glyphicon glyphicon-signal"></i> Aplikasi Penawaran</a>
				</div>
				<div class="pull-right panel-body">
			<a class="btn-default btn btn-sm" href=""><i class="glyphicon glyphicon-refresh"></i> Refesh Aplikasi </a>	
			<a class="btn-warning btn btn-sm" href=""><i class="glyphicon glyphicon-info-sign"></i> Bantuan</a>	
		</div>			
		</nav>
			<br>
			<br>
			<br>
	</div>
	<div class="col-md-12">
	<table>
		<tr>
		<td><img class="img img-responsive" src="<?php echo base_url();?>src/img/bju.jpg"></td>
		<td><h3>Aplikasi Penawaran</h3></td>
		</tr>
	</table>
		<hr>
		
		
	</div>
		<div class="col-md-3 column">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="glyphicon glyphicon-tasks"></i> Selamat Datang <?php echo($nama);?>
					</h3>
					
				</div>
				<div class="panel-body">
					<ul class="nav">
						<li><a id="km" href="<?php echo site_url('admin/kelola_pelanggan/tabel_pelanggan');?>"> <i class="glyphicon glyphicon-user"></i> Kelola Pelanggan</a></li>
						<li><a id="kp" href=""> <i class="glyphicon glyphicon-briefcase"></i> Kelola Produk</a></li>
						<li><a id="kk" href=""> <i class="glyphicon glyphicon-list-alt"></i> Kelola Komponen</a></li>
					</ul>
				</div>
				<div class="panel-footer">
					<ul class="nav">
						<li>
							<a href="<?php echo base_url('login/logout');?>"><i class="glyphicon glyphicon-off"></i> Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-9 column">
		<iframe id="kelola_pelanggan" height="100%" width="100%" border='0' src="<?php echo site_url('admin/kelola_pelanggan/tabel_pelanggan');?>"></iframe>
		<iframe id="kelola_produk" height="100%" width="100%" border='0' src="<?php echo site_url('admin/kelola_produk');?>"></iframe>
		<iframe id="kelola_komponen" height="100%" width="100%" border='0' src="<?php echo site_url('admin/kelola_komponen');?>"></iframe>
		</div>
	</div>
	
</div>
<div class="nav navbar-inverse navbar-nav navbar-fixed-bottom">
		<div class=" pull-right">
			<a href="http://naetalab.com">Created By : 
			<i class="glyphicon glyphicon-copyright-mark"></i> NaetaLab</a>
		</div>
<script type="text/javascript">
	$(document).ready(function  () {
		$("#kelola_komponen").hide();
			$("#kelola_produk").hide();
		$("#km").click(function  () {
			$("#kelola_komponen").hide();
			$("#kelola_produk").hide();
			$("#kelola_pelanggan").show();
			return false;
		})
		$("#kp").click(function  () {
			$("#kelola_pelanggan").hide();
			$("#kelola_komponen").hide();
			$("#kelola_produk").show();
			return false;
		})
		$("#kk").click(function  () {
			$("#kelola_komponen").show();
			$("#kelola_produk").hide();
			$("#kelola_pelanggan").hide();
			return false;
		})
	})
</script>