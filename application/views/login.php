<title>Halaman Login</title>
<div class="container">
	<div class="row clearfix">
	<div class="col-md-12 text-center">
	<br>

	<h1>
		<i class="glyphicon glyphicon-signal"></i> Aplikasi Penawaran
	</h1>
	<hr>
	</div>
		<div class="col-md-4 column">
		</div>
		<div class="col-md-4 column">
			<div class="panel panel-info">
				<div class="panel-heading">
					Silakan Login!
				</div>
				<div class="panel-body">
				<form role="form" action="<?php echo site_url('login/cek_login');?>" method="post">
				<div class="form-group">
					 <label for="exampleInputEmail1"><i class="glyphicon glyphicon-user"></i> Username</label>
					 <input type="text" class="form-control" name="username" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1"><i class="glyphicon glyphicon-lock"></i> Password</label>
					 <input type="password" class="form-control" name="password" />
				</div>
				<button type="submit" class="btn btn-default btn-block"> <i class="glyphicon glyphicon-log-in"></i>  Login</button>
				</form>
				</div> 
				</div>
			</div>
		</div>
		<div class="col-md-4 column">
		</div>
		<div class="nav navbar-inverse navbar-nav navbar-fixed-bottom">
		<div class=" pull-right">
			<a href="http://naetalab.com">Created By : 
			<i class="glyphicon glyphicon-copyright-mark"></i> NaetaLab</a>
		</div>
				
		</div>
</div>
</div>