
<!-- Full Screen Slider -->
<header>
	<div class="fs-slider">
		<div id="fs-slider-nav" class="carousel slide carousel-fade scale" data-ride="carousel">
			<div class="carousel-inner">
				<div class="active item bg" style="background-image:url(<?php echo base_url("uploads/contents/".$allContent[0]['photo']);?>)">
					<div class="hero-caption caption-left caption-height-center">
						<!-- <h2 class="hero-heading-alt ls-1 lh-1-5 hero-divider-left text-white">Welcome to <span class="hero-heading">SERA</span></h2> -->
					</div>
					<!--/ hero-caption -->
				</div>
				<!-- /item -->

				<a href="#report" class="tohash scroll-to"><i class="ti-angle-down"></i> </a>
			</div>
			<!-- /carousel-inner -->

		</div>
		<!-- /carousel -->
	</div>
	<!-- /fs-slider -->
</header>
<!--/#Full Screen Slider -->

<!-- Heading Style 1 -->
<section class="header">
	<div class="block-second-menu menu col-md-12 hidden-xs hidden-sm hidden-xs hidden-sm">
		<div class="breadcrumb pull-left mrg-top-10">
			<ul>
				<li><a href="<?php echo base_url('investor-report'); ?>"><b>Investor</b></a></li>
			</ul>
		</div>
		<!-- /pull-left -->
		<div class="breadcrumb pull-right mrg-top-10">
			<ul>
				<?php foreach($submenu as $row){ ?>
				<li><a class="<?php echo $row['slug'] == 'investor-'.$activeMenu ? 'active' : ''; ?>" href="<?php echo site_url($row['slug']) ?>"><?php echo $row['menu_detail_name']; ?></a></li>
				<?php } ?>
			</ul>
		</div>
		<!-- /breadcrumb -->
	</div>
	<div class="menu-mobile hidden-lg hidden-md">
		<ul class="nav navbar-nav">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">INVESTOR &nbsp;<span class="glyphicon glyphicon-chevron-down pull-right"></span></a>
				<ul class="dropdown-menu">
					<?php foreach($submenu as $row){ ?>
					<li class="">

						<a  href="<?php echo site_url($row['slug']) ?>">
							<?php echo $row['slug'] == 'investor-'.$activeMenu ? '<span class="glyphicon glyphicon-chevron-right"></span>' : ''; ?>

							<?php echo $row['menu_detail_name']; ?></a></li>
							<li class="divider"></li>
							<?php } ?>
						</ul>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
			<!-- /container -->
		</section>
		<!-- /Heading Style 1 -->

		<!-- Contact -->
		<section id="report" class="investor pdd-vertical-20">
			<div class="container">
				<div class="row">
					<div class="title-big mrg-btm-30" align="center">
						<h2 class="hero-heading text-purple text-center"><?php echo strtoupper($menuDetail['menu_detail_name']); ?></h2>
						<img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-center.png"); ?>" alt="">
					</div>
				</div>
				<div class="row">
					<div class="content">
						<div class="col-md-12">
							<div class="title-big mrg-btm-30">

								<?php if ($this->agent->is_mobile()) { ?>
								<div align="center">
									<h4 class="hero-heading text-purple "><?php echo $allContent[1]['title']; ?></h4>
									<img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-center.png"); ?>" alt="">
								</div>
								<?php } else { ?>
								<h4 class="hero-heading text-purple"><?php echo $allContent[1]['title']; ?></h4>
								<img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-left.png"); ?>" alt="">
								<?php } ?>

								<?php echo $allContent[1]['content']; ?>


							</div>

							<div class="table-report">
								<table class="table table-striped custab table-bordered">
									<thead>
										<tr>
											<th rowspan="2" style="vertical-align: middle;">Stated in milion Rupiah, unless stated differently</th>
											<th colspan="<?php echo count($arrPeriode); ?>" style="text-align: center;">Year</th>
										</tr>
										<tr>
											<?php for($i=0; $i<count($arrPeriode); $i++){ ?>
											<th style="text-align: center; width: 100px;"><?php echo $arrPeriode[$i]; ?></th>
											<?php } ?>
										</tr>
									</thead>
									<tbody>
										<?php 
										$kategori = 1;
										for($i=0; $i<count($allRow[$kategori]); $i++){ ?>
										<tr>
											<td><?php echo $allRow[$kategori][$i]['kepala'] == '0' ? '<b>'.$allRow[$kategori][$i]['nama'].'</b>' : '&nbsp;&nbsp;'.$allRow[$kategori][$i]['nama']; ?></td>
											<?php for($thn=0; $thn<count($arrPeriode); $thn++){ ?>
											<td align="right">
												<?php echo $allRow[$kategori][$i][$arrPeriode[$thn]] != '' ? number_format($allRow[$kategori][$i][$arrPeriode[$thn]]) : ''; ?>
											</td>
											<?php } ?>
										</tr>
										<?php } ?>
									</tbody>
								</table>
								
								<!--
								<table class="table table-striped custab table-bordered">
<thead>
<tr>
<th rowspan="2" style="vertical-align: middle;">(Dinyatakan dalam milyar rupiah, kecuali dinyatakan lain)</th>
<th colspan="3" style="text-align: center;">Tahun</th>
</tr>
<tr>
<th style="text-align: center;">2015</th>
<th style="text-align: center;">2014</th>
<th style="text-align: center;">2013</th>
</tr>
</thead>
<tbody>
<tr>
<td><b>Laporan Laba Rugi
</b></td>
<td align="right">
</td>
<td align="right">
</td>
<td align="right">
</td>
</tr>
<tr>
<td>->Pendapatan Bersih
</td>
<td align="right">
6.799</td>
<td align="right">
7.124</td>
<td align="right">
6.607</td>
</tr>
<tr>
<td>->Laba Bruto
</td>
<td align="right">
1.017</td>
<td align="right">
1.150</td>
<td align="right">
1.249</td>
</tr> 
<tr>
<td><b>Laporan Posisi keuangan
</b></td>
<td align="right">
</td>
<td align="right">
</td>
<td align="right">
</td>
</tr>
<tr>
<td><b>Jumlah Aset
</b></td>
<td align="right">
7.237</td>
<td align="right">
7.602</td>
<td align="right">
7.829</td>
</tr> 
<tr>
<td><b>Jumlah Liabilitas
</b></td>
<td align="right">
5.216</td>
<td align="right">
5.580</td>
<td align="right">
5.868</td>
</tr> 
<tr>
<td><b>Jumlah Ekuitas
</b></td>
<td align="right">
2.021</td>
<td align="right">
2.021</td>
<td align="right">
1.961</td>
</tr> 
</tbody>
</table>
-->
							</div>
							<div class="table-report">
								<table class="table table-striped custab table-bordered">
									<thead>
										<tr>
											<th rowspan="2"></th>
											<th colspan="<?php echo count($arrPeriode); ?>" style="text-align: center;">Tahun</th>
										</tr>
										<tr>
											<?php for($i=0; $i<count($arrPeriode); $i++){ ?>
											<th style="text-align: center; width: 100px;"><?php echo $arrPeriode[$i]; ?></th>
											<?php } ?>
										</tr>
									</thead>
									<tbody>
										<?php 
										$kategori = 2;
										for($i=0; $i<count($allRow[$kategori]); $i++){ ?>
										<tr>
											<td><?php echo $allRow[$kategori][$i]['kepala'] == '0' ? '<b>'.$allRow[$kategori][$i]['nama'].'</b>' : '&nbsp;&nbsp;'.$allRow[$kategori][$i]['nama']; ?></td>
											<?php for($thn=0; $thn<count($arrPeriode); $thn++){ ?>
											<td align="right">
												<?php echo $allRow[$kategori][$i][$arrPeriode[$thn]] != '' ? ($allRow[$kategori][$i][$arrPeriode[$thn]]) : ''; ?>
												<?php echo $allRow[$kategori][$i]['satuan'] == 'percen' ? '%' : ''; ?>
											</td>
											<?php } ?>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							
<!--
<table class="table table-striped custab table-bordered">
<thead>
<tr>
<th rowspan="2"></th>
<th colspan="3" style="text-align: center;">Tahun</th>
</tr>
<tr>
<th style="text-align: center;">2015</th>
<th style="text-align: center;">2014</th>
<th style="text-align: center;">2013</th>
</tr>
</thead>
<tbody>
<tr>
<td><b>Analisa Rasio dan Informasi Lain
</b></td>
<td align="right">
</td>
<td align="right">
</td>
<td align="right">
</td>
</tr> 
<tr>
<td>->Marjin Laba Bruto
</td>
<td align="right">
15.00	%</td>
<td align="right">
16.10	%</td>
<td align="right">
18.90	%</td>
</tr>
<tr>
<td>->Rasio Liabilitas terhadap Jumlah Aset (x)
</td>
<td align="right">
0.70	%</td>
<td align="right">
0.70	%</td>
<td align="right">
0.70	%</td>
</tr>
<tr>
<td>->Rasio Liabilitas terhadap Jumlah Ekuitas (x)
</td>
<td align="right">
2.60	%</td>
<td align="right">
2.80	%</td>
<td align="right">
3.00	%</td>
</tr>  
</tbody>
</table>
							-->
							</div>
							  

							<div class="desc-table mrg-top-50">
								<?php //echo @$allContent[2]['content']; ?>
							</div>
						</div>
					</div>
				</div>
                <div class="row">
                <div class="col-md-12">
                	<?php 
					if (count(@$allContent) > 2){ 
						
						$kelompok = array();
						for($idxAllContent=2; $idxAllContent < count($allContent); $idxAllContent++) {
							$kelompokName = substr($allContent[$idxAllContent]['position'],0,1);
							if (!in_array($kelompokName, $kelompok)) {
								$kelompok[] = $kelompokName;
							}
							$allReport[$kelompokName][] = $allContent[$idxAllContent];
						}
						
						for($idxKelompok=0; $idxKelompok<count($kelompok); $idxKelompok++){
							$kelompokName = $kelompok[$idxKelompok];
							$thisTitle = @$allReport[$kelompokName][0]['title'];
							?>
					<div class="content mrg-top-50">
                        <div class="row">
                            <div class="title-big mrg-btm-30">
                                <h4 class="hero-heading text-purple"><?php echo @$thisTitle; ?></h4>
                                <img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images/border-left.png"); ?>" alt="">
                            </div>
                            <div class="btn mrg-top-30">
								<?php for($i=0; $i<count($allReport[$kelompokName]); $i++){ ?>
                                <a href="<?php echo base_url('uploads/contents/'.@$allReport[$kelompokName][$i]['photo']); ?>" class="btn btn-md btn-style-purple" target="_blank">READ <?php echo @$allReport[$kelompokName][$i]['subtitle']; ?>.PDF</a>
								<?php } ?>
                            </div>
                        </div>
                    </div>
							<?php
						}
					}
					?>
                   </div> 
                </div>
			</div>
		</section>
		<!-- /Contact -->

		<div class="modal fade pdd-vertical-100" id="investormodal" tabindex="-1" role="dialog" aria-labelledby="investormodalLabel" aria-hidden="true">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<!-- button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button -->
						<h4 class="text-dark" id="investormodalLabel"><b>thank you for entry into the investor page!</b></h4>
					</div>
					<div class="modal-body">
						<p class="text-dark">Before you enter the investor page, you can read its <a class="text-orange" href="<?php echo site_url('privacy'); ?>">terms and conditions.</a> if you agree click the button below.<p>
						</div>
						<div class="modal-footer text-dark" align="left">
							<input type="checkbox" id="chkAgg" name="check-box" class="text-dark" /> <span>I Agree term and coditions</span>
							<div class="clearfix"></div>
							<button type="button" class="btn purple text-white mrg-top-20" id="btnAgg" >Agree</button>
						</div>
					</div>
				</div>
			</div>

			<?php if(!isset($_COOKIE['serawebInvestor'])) { ?>
			<script>
				$(document).ready(function () {
					$('#investormodal').modal({
						backdrop: 'static',
						keyboard: false,
						show: true,
					});
					$('#btnAgg').click(function(){
						if($("#chkAgg").is(':checked')){
			// alert('masuk');
			var date = new Date();
			console.log(date);
			console.log(date.getTime());
			date.setTime(date.getTime() + (1 * 24 * 60 * 60 * 1000));
			console.log(date.toGMTString());
			document.cookie = "serawebInvestor=setujucookies;expires=" + date.toGMTString() + "";
			$('#investormodal').modal('hide');
		}
	});
				});
			</script>
			<?php } ?>