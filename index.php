<!DOCTYPE html>
<html>
   <head>
      <title>Membuat Formulir Order Checkout Ke Pesan WhatsApp - AkioFolio Demo</title>
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </head>
<body>
	<div class="container">
		<div class="col-lg-6 col-lg-offset-3">
			<h4>Demo Formulir Order Checkout Ke Pesan WhatsApp - AkioFolio</h4>
			<div class="panel panel-success">
				<div class="panel-heading">
					Checkout Ke WhatsApp
				</div>
				<div class="panel-body">
                  <div class="form-group">
						<label>No Pesanan</label>
						<input type="text" name="no" class="form-control" placeholder="No pesanan" id="no">
					</div>
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="name" class="form-control" placeholder="Nama" id="name">
					</div>
                  <div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" class="form-control" placeholder="Alamat" id="alamat">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" placeholder="Email" id="email">
					</div>
					<div class="form-group">
						<label>Nomor Kontak / WhatsApp</label>
						<input type="text" name="phone" class="form-control" placeholder="Nomor Kontak / WhatsApp" id="phone">
					</div>
					<div class="form-group">
						<label>Pilih Produk</label>
						<select name="product" class="form-control" id="product">
							<option value="">-- Pilih Produk --</option>
							<option value="produk_1">Sepatu Pria</option>
							<option value="produk_2">Sandal Pria</option>
							<option value="produk_3">Sepatu Wanita</option>
                          <option value="produk_3">Sandal Wanita</option>
						</select>
					</div>
                   <div class="form-group">
						<label>Metode Pembayaran</label>
						<select name="metode" class="form-control" id="metode">
							<option value="">-- Pilih Metode Pembayaran --</option>
							<option value="Cash">Cash</option>
							<option value="Credit">Credit</option>
						</select>
					</div>
               <div class="form-group">
						<label>Pembayaran</label>
						<select name="pembayaran" class="form-control" id="pembayaran">
							<option value="">-- Pilih Pembayaran --</option>
							<option value="COD">COD</option>
							<option value="Transfer">Transfer</option>
							<option value="OVO">OVO</option>
                          <option value="Dana">Dana</option>
						</select>
					</div>
					<div class="form-group">
						<label>Catatan</label>
						<textarea name="description" class="form-control" rows="3" id="description"></textarea>
					</div>
					<div class="form-group">
						<button class="btn btn-success send">Pesan via WhatsApp</button>
					</div>

					<div id="text-info"></div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(document).on('click','.send', function(){
			/* Inputan Formulir */
			var input_no     		= $("#no").val(),
                input_name 			= $("#name").val()
                input_alamat 		= $("#alamat").val()
			    input_email 		= $("#email").val(),
			    input_phone 		= $("#phone").val(),
			    input_product 		= $("#product").val(),
                input_metode		= $("#metode").val(),
                input_pembayaran	= $("#pembayaran").val(),
			    input_description 	= $("#description").val();

			/* Pengaturan Whatsapp */
			var walink 		= 'https://wa.me/628123456789?text=Isi Pesan',
			    phone 		= '628123456789',
			    text 		= 'Halo saya ingin memesan ',
			    text_yes	= 'Pesanan Anda berhasil terkirim.',
			    text_no 	= 'Isilah formulir terlebih dahulu.';

			/* Smartphone Support */
			if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
				var walink = 'whatsapp://send';
			}

			if(input_name != "" && input_phone != "" && input_product != ""){
				/* Whatsapp URL */
				var checkout_whatsapp = walink + '?phone=' + phone + '&text=' + text + '%0A%0A' +
                    '*No Pesanan* : ' + input_no + '%0A' +
				    '*Nama* : ' + input_name + '%0A' +
                    '*Alamat* : ' + input_alamat + '%0A' +
				    '*Email* : ' + input_email + '%0A' +
				    '*Nomor Kontak / Whatsapp* : ' + input_phone + '%0A' +
				    '*Produk* : ' + input_product + '%0A' +
                    '*Metode Pembayaran* : ' + input_metode + '%0A' +
                    '*Pembayaran* : ' + input_pembayaran + '%0A' +
				    '*Catatan* : ' + input_description + '%0A';

				/* Whatsapp Window Open */
				window.open(checkout_whatsapp,'_blank');
				document.getElementById("text-info").innerHTML = '<div class="alert alert-success">'+text_yes+'</div>';
			} else {
				document.getElementById("text-info").innerHTML = '<div class="alert alert-danger">'+text_no+'</div>';
			}
		});
	</script>
  <div class="cleared"></div>
										<div class="art-footer">
											<div class="art-footer-body">

														<div class="art-footer-text">
                                                          <center>	   <p>Copyright &copy;  2021 AkioFolio. All rights reserved.</p></center>
															<div class="cleared"></div>
															<p class="art-page-footer">&nbsp;</p>
														</div>
												<div class="cleared"></div>
											</div>
										</div>
</body>
  <script>
<!--
//Disable right click script - By www.malasngeblog.com//
var message="Function Disabled";
////////////////
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers)
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}
document.oncontextmenu=new Function("return false")
// -->
</script>
</html>