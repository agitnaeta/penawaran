<html>
	<script type="text/javascript">
		$(document).ready(function  () {
			$('#kode_produk').change(function  () {
			var kode_produk=$(this).val();
			$.post('<?php echo site_url('welcome/cari');?>',{kode_produk:kode_produk},function  (data) 
				{
					var obj=JSON.parse(data);

					$('#hasil').html(obj[0].kode_produk);
					$('#hasil_nama').html(obj[0].nama_produk);

				}
				);
			});
			$('#email').change(function  () {
			var email=$(this).val();
			$.post('<?php echo site_url('welcome/cekEmail');?>',{email:email},function  (data) 
				{
					var obj=JSON.parse(data);

					$('#id_pelanggan').val(obj[0].id_pelanggan);
					$('#nilai_penawaran').val(obj[0].nilai_penawaran);
					$('#nama_perusahaan').val(obj[0].nama_perusahaan);
					$('#nama_pemesan').val(obj[0].nama_pemesan);

					//review
					$('#hasil_perusahaan').html(obj[0].nama_perusahaan);
					$('#hasil_pemesan').html(obj[0].nama_pemesan);
					$( '#nilai_penawaran' ).focus();

				}
				);
			});
			$('#email').change(function  () {
				var email=$(this).val();
				$.post('<?php echo site_url('welcome/email');?>',{email:email},function  (data) {
					$('#hasil_email').html(data);
				});
			});
			
			$('#nama_perusahaan').keyup(function  () {
				var nama_perusahaan=$(this).val();
				$.post('<?php echo site_url('welcome/nama_perusahaan');?>',{nama_perusahaan:nama_perusahaan},function  (data) {
					$('#hasil_perusahaan').html(data);
				});
			});
			$('#nama_pemesan').keyup(function  () {
				var nama_pemesan=$(this).val();
				$.post('<?php echo site_url('welcome/nama_pemesan');?>',{nama_pemesan:nama_pemesan},function  (data) {
					$('#hasil_pemesan').html(data);
				});
			});
			$("#produk_lain").change(function() {
			    if(this.checked) {
			      $('#hasil_check').load('<?php echo site_url('welcome/check');?>');
			      	var isi=1;
			      	$('#input_produk_lain').val(isi);
			    }
			    else
			    {
			    	$('#hasil_check').load('<?php echo site_url('welcome/no');?>');
			    	var isi=0;
			      	$('#input_produk_lain').val(isi);
			    }
			});

			$( "#hide" ).click(function() {

				  $( "#konten" ).toggle( "fast" );
				});
		});
	</script>
</html>