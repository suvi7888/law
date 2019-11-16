<?php echo $map['js']; ?>
<script>
var namaKota = '';
function newLocation(newLat,newLng){
	map.panTo({
		lat : newLat,
		lng : newLng
	});
	map.setZoom(17);
}

$(function() {
	$('#kota').change(function(coba){
        console.log(coba);
		kota = $(this).val();
		kantor_grup = $('#grup').val();
		$.ajax({
			type: 'POST',
			dataType: 'json',
			url: '<?php echo site_url('front/contact/getGrup'); ?>',
			data: {
				kota: kota
			},
			success: function(data) {
				option = '';
				for (var i = 0; i < data.dataGrup.length; i++) {
					if (data.dataGrup[i].id == parseInt(kantor_grup))
						option = option + '<option value="'+data.dataGrup[i].id+'" selected>'+data.dataGrup[i].nama_grup+'</option>';
					else 
						option = option + '<option value="'+data.dataGrup[i].id+'">'+data.dataGrup[i].nama_grup+'</option>';
					
				}
				$('#grup').html(option);
				$('#grup').change();
			},
			beforeSend: function() {
				$('.overlaySs').css('display', 'block');
			},
			complete: function() {
				$('.overlaySs').css('display', 'none');
			},
		});
	});
	$('#grup').change(function(){
		kantor_grup = $(this).val();
		kota = $('#kota').val();
		$.ajax({
			type: 'POST',
			url: '<?php echo site_url('front/contact/getKantor'); ?>',
			data: {
				kota: kota,
				kantor_grup: kantor_grup
			},
			success: function(data) {
				$('#allResultOffice').html(data);
			},
			beforeSend: function() {
				$('.overlaySs').css('display', 'block');
			},
			complete: function() {
				$('.overlaySs').css('display', 'none');
			},
		});
	});
	$('#kota').change();
	
function displayLocation(latitude,longitude){
	/* var request = new XMLHttpRequest();

	var method = 'GET';
	var url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='+latitude+','+longitude+'&sensor=true';
	var async = true;

	request.open(method, url, async);
	request.onreadystatechange = function(){
		if(request.readyState == 4 && request.status == 200){
			var data = JSON.parse(request.responseText);
			namaKota = data.results[0].address_components[6].long_name;
			console.log(namaKota);
			// namaKota = namaKota.toUpperCase();
			namaKota = namaKota.replace("Kota ", "");
			namaKota = namaKota.replace("Kabupaten ", "");
			console.log(namaKota);
			$("#kota").val(namaKota);
			$('#kota').change();
		}
	};
	request.send(); */
	$.ajax({
		type: 'POST',
		url: 'http://maps.googleapis.com/maps/api/geocode/json?latlng='+latitude+','+longitude+'&sensor=true',
		success: function(data) {
			namaKota = data.results[0].address_components[6].long_name;
			// console.log(namaKota);
			namaKota = namaKota.replace("Kota ", "");
			namaKota = namaKota.replace("Kabupaten ", "");
			
            map.panTo({
                lat : latitude,
                lng : longitude
            });
            map.setZoom(13);
            
			$("#kota").val(namaKota);
			$('#kota').change('satu');
		},
		beforeSend: function() {
			$('.overlaySs').css('display', 'block');
		},
		complete: function() {
			$('.overlaySs').css('display', 'none');
		},
		error: function(){
			alert('salah');
		}
	});
};

var successCallback = function(position){
	var x = position.coords.latitude;
	var y = position.coords.longitude;
	displayLocation(x,y);
};
var errorCallback = function(position){
	// $('#kota').change();
};

navigator.geolocation.getCurrentPosition(successCallback, errorCallback);

});

</script>

<style>
.boxSs > .overlaySs,
.boxSs > .loading-img{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
.boxSs .overlaySs{
	z-index: 50;
	background: rgba(255, 255, 255, 0.7);
	border-radius: 3px;
}
.boxSs .overlaySs > .fa{
	position: absolute;
	top: 50%;
	left: 50%;
	margin-left: -15px;
	margin-top: -15px;
	color: #000;
	font-size: 30px;
}
</style>
 <!-- Full Screen Slider -->
 <header>
 	<div class="fs-slider">
 		<div id="fs-slider-nav" class="carousel slide carousel-fade scale" data-ride="carousel">
 			<div class="carousel-inner">
 				<div class="active item bg" style="background-image:url(<?php echo base_url("assets/assets_frontend/images//background/header-contact.jpg"); ?>)">
 					<div class="hero-caption caption-left caption-height-center">
 						<!-- <h2 class="hero-heading-alt ls-1 lh-1-5 hero-divider-left text-white">Welcome to <span class="hero-heading">SERA</span></h2> -->
 					</div>
 					<!--/ hero-caption --> 
 				</div>
 				<!-- /item -->

 				<div class="item bg" style="background-image:url(<?php echo base_url("assets/assets_frontend/images//background/header-contact.jpg"); ?>)">
 					<div class="hero-caption caption-left caption-height-center">
 						<!-- <h2 class="hero-heading-alt ls-1 lh-1-5 hero-divider-left text-white">Welcome to <span class="hero-heading">SERA</span></h2> -->
 					</div>
 					<!-- /hero-caption -->
 				</div>
 				<!-- /item -->

 				<div class="item" style="background-image:url(<?php echo base_url("assets/assets_frontend/images//background/header-contact.jpg"); ?>)">
 					<div class="hero-caption caption-left caption-height-center">
 						<!-- <h2 class="hero-heading-alt ls-1 lh-1-5 hero-divider-left text-white">Welcome to <span class="hero-heading">SERA</span></h2> -->
 					</div>
 					<!-- /hero-caption -->
 				</div>
 				<!-- /item -->
 				<a href="#contact" class="tohash scroll-to"><i class="ti-angle-down"></i> </a>
 			</div>
 			<!-- /carousel-inner -->

 		</div>
 		<!-- /carousel -->
 	</div>
 	<!-- /fs-slider -->
 </header>
 <!--/#Full Screen Slider -->

 <!-- Contact -->

<script src='https://www.google.com/recaptcha/api.js'></script>


 <section id="contact" class="section">
 	<div class="container">
 		
 		<?php 
		// 
 		echo $this->session->flashdata('pesan'); 
		// ?>

		<div class="row">
			<div class="title-big mrg-btm-30" align="center">
				<h2 class="hero-heading text-purple text-center">CONTACT US</h2>
				<img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images//border-center.png"); ?>" alt="">
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 ">
				<div class="border btm pdd-vertical-15">
					<h3>VISIT US</h3>
					<p class="font-weight-normal">GRHA SERA, Jl. Mitra Sunter Boulevard Kav 90/C2, Sunter Jaya - Jakarta Utara 14350</p>
				</div>
				<!-- /border -->

				<div class="border btm pdd-vertical-15">
					<h3>CALL US</h3>
					<p class="font-weight-normal">(62-21) 26605333</p>
				</div>
				<!-- /border -->

			</div>
			<!-- /column -->

			<div class="col-md-7 col-md-offset-1">



				<?php echo validation_errors(); ?>

				
				<form class="contact-form-wrapper mrg-top-30" name="contactForm" id="contact_form" method="post" action="<?php echo site_url('contact'); ?>">

					<div class="row">
						<div class="form-group col-sm-12">
							<input type="text" class="form-control" name="nama" id="exampleInputName" placeholder="Nama" required="" value="<?php echo set_value('nama'); ?>">
						</div>
						<!-- /form-group -->

						<div class="form-group col-sm-12">
							<input type="email" class="form-control" name="email" id="exampleInputEmail" placeholder="Email" required="" value="<?php echo set_value('email'); ?>">
						</div>
						<!-- /form-group -->

						<div class="form-group col-sm-12">
							<input type="text" class="form-control" name="telepon" id="exampleInputEmail" placeholder="Telepon" required="" value="<?php echo set_value('telepon'); ?>">
						</div>
						<!-- /form-group -->

						<div class="form-group col-sm-12">
							<select name="pekerjaan" id="pekerjaan" class="form-control" required="">
								<option value="0" selected=""> Pekerjaan </option>
								<option value="1"> Karyawan </option>
								<option value="2">Investor</option>
								<option value="3">Wartawan</option>
								<option value="4">Pelajar / Mahasiswa</option>
								<option value="5">Lain-Lain</option>
							</select>
						</div>
						<!-- /form-group -->

						<div class="form-group col-sm-12">
							<input type="text" class="form-control" name="perusahaan" id="exampleInputEmail" placeholder="Perusahaan" required="" value="<?php echo set_value('perusahaan'); ?>">
						</div>
						<!-- /form-group -->

						<div class="form-group col-sm-12">
							<select name="kategori" id="kategori" class="form-control" required="">
								<option value="0" selected=""> Kategori </option>
								<option value="1">Investor Relation </option>
								<option value="2">Media Relation</option>
								<option value="3">Human Resource</option>
								<option value="4">Lain-Lain</option>
							</select>
						</div>
						<!-- /form-group -->

						<div class="form-group col-sm-12">
							<input type="text" class="form-control" name="subjek" id="exampleInputEmail" placeholder="Subjek" required="" value="<?php echo set_value('subjek'); ?>">
						</div>
						<!-- /form-group -->


						<div class="form-group col-sm-12">
							<textarea class="form-control" name="pesan" rows="3" id="exampleInputMessage" placeholder="Pesan"><?php echo set_value('pesan'); ?></textarea>
						</div>
						<!-- /form-group --> 
						
						<div class="form-group col-sm-12">
						<div class="g-recaptcha" data-sitekey="6LeYAxkUAAAAALLC4DvsLuVjxNorBfjU_GP1cXgM"></div>
						</div>
						<div class="form-group col-sm-12" id="submit"> 
							<input class="btn btn-md btn-style-2 btn-style-purple" type="submit" value="SUBMIT">
						</div>
						<!-- /form-group --> 
					</div>
					<!-- /row -->

					


				</form>
			</div>
			<!-- /column -->

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</section>
<!-- /Contact -->

<!-- Contact -->
<section id="contact-business" class="mrg-vertical-20">
	<div class="container">
		<div class="row">
			<div class="title-big mrg-btm-30" align="center">
				<h2 class="hero-heading text-purple text-center">GET IN TOUCH WITH OUR BUSINESS UNIT</h2>
				<img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images//border-center.png"); ?>" alt="">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped custab">
					<thead>
						<tr>
							<th>BUSINESS UNIT</th>
							<th>ADDRESS</th>
							<th>PHONE NUMBER</th>
						</tr>
					</thead>
					<tbody>
							<!-- tr>
								<td>TRAC-Astra Rent a Car <span class="text-orange">Corporate Rental</span></td>
								<td>GRHA TRAC Jl. Condet Raya No. 15, Gedong, Pasar Rebo - Jakarta Timur 13760</td>
								<td>(62-21) 8404040</td>
							</tr>
							<tr>
								<td>TRAC-Astra Rent a Car <span class="text-orange">Personal Rental</span></td>
								<td>GRHA TRAC Jl. Condet Raya No. 15, Gedong, Pasar Rebo - Jakarta Timur 13760</td>
								<td>(62-21) 8404040</td>
							</tr>
							<tr>
								<td>TRAC-Bus Services</td>
								<td>Jl. Raya Bogor Km 22 No. 90,  Pasar Rebo - Jakarta TImur 13880</td>
								<td>(62-21) 29838888</td>
							</tr>
							<tr>
								<td>O-RENZ Taxi</td>
								<td>Jl. Wonorejo Timur No. 99, Surabaya</td>
								<td>(62-31) 8711818</td>
							</tr>
							<tr>
								<td>mobil88</td>
								<td>GRHA SERA, Jl. Mitra Sunter Boulevard Kav 90/C2, Sunter Jaya - Jakarta Utara 14350</td>
								<td>(62-21) 26605333</td>
							</tr>
							<tr>
								<td>IBID-Balai Lelang Serasi</td>
								<td>Jl. Bintaro Mulia I No.3 Bintaro Pesanggrahan - Jakarta Selatan 12250</td>
								<td>(62-21) 7355999</td>
							</tr>
							<tr>
								<td>SELOG</td>
								<td>Jl. Pontianak Blok C2-01 KBN Marunda - Jakarta Utara 14120</td>
								<td>(62-21) 44850099</td>
							</tr -->
							<?php foreach($listKantor as $row){ ?>
							<tr>
								<td><?php echo $row['nama_grup']; ?></td>
								<td><?php echo @$row['alamat']; ?></td>
								<td><?php echo @$row['tlp']; ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<!-- /column -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</section>
	<!-- /Contact -->



	<section id="get-in-touch">
		<div class="block-get-in-touch">
			<div class="row">
				<div class="get-in-touch">
					<div class="title-get" align="center">
						<h3 class="hero-heading text-purple">FIND OUR LOCATION</h3>
						<img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images//border-center.png"); ?>" alt="">
					</div>
					<div class="content-location mrg-top-50 col-md-12" align="left">
						<div class="col-md-3">
							<div class="row">
								<div class="block-search-location boxSs">
									<div class="head-search" align="center">
										<div class="icon-marker">
											<i class="ti-location-pin text-white"></i>
										</div>
										<h5 class="text-white">FIND OUR LOCATION NEAR YOUR PLACE</h5>
										<form class="location">
											<select id="kota" class="form-control">
												<?php for($idxKota=0; $idxKota<count(@$arrKota); $idxKota++){ ?>
												<option value="<?php echo @$arrKota[$idxKota]; ?>" <?php echo strtoupper(@$arrKota[$idxKota]) == 'JAKARTA UTARA' ? 'selected' : ''; ?>><?php echo strtoupper(@$arrKota[$idxKota]); ?></option>
												<?php } ?>
												<!-- option value="jakarta">DKI JAKARTA</option>
												<option value="bandung">BANDUNG</option>
												<option value="surabaya">SURABAYA</option -->
											</select>
										</form>
										<form class="location">
											<select id="grup" class="form-control">
											<!-- option value="trac-cor">TRAC-Astra Rent a Car Corporate Rental</option>
											<option value="trac-per">TRAC-Astra Rent a CarPersonal Rental</option>
											<option value="trac-bus">TRAC-Bus Services</option>
											<option value="orenz">O-RENZ Taxi</option>
											<option value="mobil88">Mobil88</option>
											<option value="ibid">IBID-Balai Lelang Serasi</option>
											<option value="selog">SELOG</option -->
											</select>
										</form>
									</div>
									<div class="result-search">
										<div class="col-md-12">
											<div class="row" id="allResultOffice">

												<?php $idx=1; foreach($listKantor as $row){ ?>
												<div class="result-list <?php echo ($idx % 2 == 0 ) ? '' : 'bg-gray'; ?>">
													<h4>
														<button class="btn btn-link" onclick="newLocation(<?php echo $row['lat']; ?>,<?php echo $row['long']; ?>)" style="margin:0; padding:0;">
															<b class="text-purple"><?php echo $row['nama_kantor']; ?></b>
														</button>
													</h4>
													<p><?php echo $row['alamat']; ?></p>
												</div>
												<?php $idx++; } ?>
												<div class="result-list bg-gray">
													<h4><a href="#"><b class="text-purple">TRAC-Astra Rent a Car</b> Corporate Rental</a></h4>
													<p>Jl. Mitra Sunter Boulevard Kav 90 <br>Blok C2 Sunter Agung Tanjung Priok <br>Daerah Khusus Ibukota Jakarta 14350</p>
												</div>
												<div class="result-list">
													<h4><a href="#"><b class="text-purple">TRAC-Astra Rent a Car</b> Corporate Rental</a></h4>
													<p>Jl. Mitra Sunter Boulevard Kav 90 <br>Blok C2 Sunter Agung Tanjung Priok <br>Daerah Khusus Ibukota Jakarta 14350</p>
												</div>
												<div class="result-list bg-gray">
													<h4><a href="#"><b class="text-purple">TRAC-Astra Rent a Car</b> Corporate Rental</a></h4>
													<p>Jl. Mitra Sunter Boulevard Kav 90 <br>Blok C2 Sunter Agung Tanjung Priok <br>Daerah Khusus Ibukota Jakarta 14350</p>
												</div>
												<div class="result-list">
													<h4><a href="#"><b class="text-purple">TRAC-Astra Rent a Car</b> Corporate Rental</a></h4>
													<p>Jl. Mitra Sunter Boulevard Kav 90 <br>Blok C2 Sunter Agung Tanjung Priok <br>Daerah Khusus Ibukota Jakarta 14350</p>
												</div>
												<div class="result-list bg-gray">
													<h4><a href="#"><b class="text-purple">TRAC-Astra Rent a Car</b> Corporate Rental</a></h4>
													<p>Jl. Mitra Sunter Boulevard Kav 90 <br>Blok C2 Sunter Agung Tanjung Priok <br>Daerah Khusus Ibukota Jakarta 14350</p>
												</div>
												<div class="result-list">
													<h4><a href="#"><b class="text-purple">TRAC-Astra Rent a Car</b> Corporate Rental</a></h4>
													<p>Jl. Mitra Sunter Boulevard Kav 90 <br>Blok C2 Sunter Agung Tanjung Priok <br>Daerah Khusus Ibukota Jakarta 14350</p>
												</div>
											</div>
										</div>
									</div>
									<div id="overlay" class="overlaySs" style="display: none;">
										<i class="fa fa-refresh fa-spin"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-9">
							<div class="row">
								<div class="content-maps boxSs">
									
									<?php echo $map['html']; ?>
									<!-- iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15867.422539664172!2d106.8855687!3d-6.1500822!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc70c45c10bf6b6d7!2sPT.+Serasi+Autoraya!5e0!3m2!1sid!2sid!4v1480650500649" width="100%" height="600" frameborder="0" style="border:0; vertical-align:middle;" allowfullscreen></iframe -->
									<div id="overlay" class="overlaySs" style="display: none;">
										<i class="fa fa-refresh fa-spin"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
						
				</div>
			</div>
		</div>
	</section>
		
