<!DOCTYPE html>
<html>
<head>
	<title>Data Penawaran-Bersama Jaya Utama</title>
  <script type="text/javascript">
    $(document).ready(function  () {
        $('#print').click(function  () {
            $('#nav').hide();
            window.print();
            return false;
        })
    })
  </script>
</head>
<body>

<div class="container">
	<div class="row-clearfix">
		<div class="col-md-12">
    <nav id="nav" class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
           <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> 
           <a class="navbar-brand" href="#"> <i class="glyphicon glyphicon-signal"></i> Aplikasi Penawaran</a>
        </div>
        <div class="pull-right">
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group pull-right">
            <a  id="print" type="submit" class="btn btn-info"> <i class="glyphicon glyphicon-print"></i> Cetak</a >
            </div> 
          </form>
        </div>
        
      </nav>
		<table width="100%">
			<tr>
				<td width="30%"><img class="img img-responsive" src="<?php echo base_url('src/img/BJU.PNG');?>"></td>
				<td>
					<h3>CV. Bersama Jaya Utama</h3>
			<small class="text-justify">

			OFFICE / FACTORY : Jl. Situraja - Cikadu. Sumedang, Telp. 0852 1845 7289, Fax (0261) 201013 -
				www.bersamajayautama.com
			</small>
				</td>
			</tr>
		</table>
		<div class="col-md-2">
		
		</div>
		<div class="col-md-7">
			
		</div>
				
		
	</div>
<div class="col-md-12">

<hr class="onepixel" >
<table width="100%">
  <tr>
    <th colspan="2">Perihal : Penawaran Produk</th>
    <th></th>
    <th></th>
    <th class="text-right">Tanggal : <?php echo dateindo(date('Y-m-d'));?></th>
  </tr>
  <tr>
    <td>
    <br>
    <br>
    <?php foreach ($member->result() as $row):?>
    	<b>Kepada Yth,<br>Bpk/Ibu <?php echo $row->nama_pemesan;?><br><?php echo $row->nama_perusahaan;?><br>di tempat</td><b>
     <?php endforeach;?> 
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>
    <br>
    <br>
    <b>Dengan Hormat, </b></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="5">
    	&nbsp;&nbsp;&nbsp;
    	&nbsp;&nbsp;&nbsp;
    Sesuai dengan permintaan Bapak / Ibu, bersama ini kami ajukan penawaran harga produk kami sebagai berikut :</td>
  </tr>
  <tr>
  <?php foreach ($produk->result() as $row) : ?> 
    <td colspan="5">
    <br>
    1. <?php echo($row->nama_produk);?> </td>
  <?php endforeach ;?>  
  </tr>
  <tr>
    <td colspan="5">
    <table class="table table-condensed table-bordered">
				<thead class="bg-info ">
					<th class="text-center" width="5%">No</th><th class="text-center">Nama Komponen</th><th class="text-center">Jumlah</th>
				</thead>
				<tbody>
        <?php $no=1; foreach ($komponen->result() as $row):?>
					<tr>
						<td><?php echo($no++);?></td>
						<td><?php echo($row->nama_komponen);?></td>
						<td class="text-center"><?php echo($row->jumlah);?></td>	
					</tr>
         <?php endforeach;?>
         <tr>
           <td colspan="2" class="text-center"> <b>Harga Produk</b></td>
            <?php foreach ($harga->result() as $row):?>
           <td class="text-center"><b>Rp. <?php echo number_format("$row->harga",2,",",".");?></b></td>
         <?php endforeach;?>
         </tr> 
				</tbody>
	</table>
	</td>
  </tr>
  <tr>
    <td colspan="5">Condition :<br>PEMBAYARAN,: Transaksi Dilakukan Secara Tunai.<br>Demikian Penawaran kami, terima kasih atas perhatian dan kerjasamanya.</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="2" class="text-right">
    	<br>
    	<br>
    	<br>

    Sumedang, <?php echo dateindo(date('Y-m-d'));?> <br><br>CV.BERSAMA JAYA UTAMA,<br> <img height="200" width="300" src="<?php echo base_url();?>src/img/cap_bju.PNG"><br> IWAN GUNAWAN</td>
  </tr>
  
</table>
	</div>		
	</div>
</div>

</body>
</html>
