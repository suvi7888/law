
<!-- Full Screen Slider -->
<header>
	<div class="fs-slider">
		<div id="fs-slider-nav" class="carousel slide carousel-fade scale" data-ride="carousel">
			<div class="carousel-inner">
				<div class="active item bg" style="background-image:url(<?php 
					echo @$allContent[0]['photo'] != '' ? base_url("uploads/contents/".$allContent[0]['photo']) : base_url("assets/assets_frontend/images/background/header-business.jpg"); 
					?>)">
					<div class="hero-caption caption-left caption-height-center">
						<!-- <h2 class="hero-heading-alt ls-1 lh-1-5 hero-divider-left text-white">Welcome to <span class="hero-heading">SERA</span></h2> -->
					</div>
					<!--/ hero-caption -->
				</div>
				<!-- /item -->

				<a href="#shareholder" class="tohash scroll-to"><i class="ti-angle-down"></i> </a>
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
				<li><a class="<?php echo $row['slug'] == 'investor-'.$activeMenu ? 'active' : ''; ?>" href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.$row['slug']) ?>"><?php echo $row['menu_detail_name']; ?></a></li>
				<?php } ?>
			</ul>
		</div>
		<!-- /breadcrumb -->
	</div>
	<div class="menu-mobile hidden-lg hidden-md">
		<ul class="nav navbar-nav">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">PROFILE &nbsp;<span class="glyphicon glyphicon-chevron-down pull-right"></span></a>
				<ul class="dropdown-menu">
					<?php foreach($submenu as $row){ ?>
					<li class="">
						<a href="<?php echo site_url(strtolower($this->session->userdata('SS_LANG')).'/'.$row['slug']) ?>">
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
		<section id="shareholder" class="media-page pdd-vertical-20">
			<div class="container">
				<div class="row">
					<div class="title-big mrg-btm-30" align="center">
						<h2 class="hero-heading text-purple text-center">SHAREHOLDER</h2>
						<img class="img-responsive mrg-btm-15" src="<?php echo base_url("assets/assets_frontend/images//border-center.png"); ?>" alt="">  
					</div>
				</div>
				<div class="row">
					<div class="content">

						<?php if ($this->agent->is_mobile()) {  ?>

						 
						<div class="col-md-6" align="center"> 
							<script src="https://code.highcharts.com/highcharts.js"></script>  
							<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div> 
							<br><br>

							<script type="text/javascript">						
							$(document).ready(function () {

							    // Build the chart
							    Highcharts.chart('container', {
							        chart: {
							            plotBackgroundColor: null,
							            plotBorderWidth: null,
							            plotShadow: false,
							            plotHover:true,
							            type: 'pie'
							        },
							        credits: {
							        enabled:false,
							        },
							        title: {
							            text: ''
							        },
							        tooltip: {
							            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
							        },
							        plotOptions: {
							            pie: {
							                allowPointSelect: true,
							                cursor: 'pointer',
							                dataLabels: {
							                    enabled: false
							                },
							                showInLegend: true
							            }
							        },
							        legend:{ enabled : false, },
							        series: [{
							            name: 'Brands',
							            colorByPoint: true,
							            data: [{
							                name: 'PT Astra International,Tbk',
							                y: 99,
							                color: '#2E3192',
							            }, {
							                name: 'PT Arya Kharisma,Tbk',
							                y: 1,
							                color: '#F26522',
							                hover: true
							            } ]
							        }]
							    });
							});


							</script>
						</div>
						<div class="col-md-6">
							<div class="block-desc-shareholder mrg-top-120">
								<h3><i class="ti-layout-width-full text-purpl purple"></i>&nbsp; PT Astra International,Tbk</h3>
								<h3><i class="ti-layout-width-full text-orange orange"></i>&nbsp; PT Arya Kharisma</h3>
							</div>
						</div>

						<?php } else { ?>

						<div class="col-md-6" align="center">
							<div style="width: 100%">
								<div id="pieChart" class="chart" align="center"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="block-desc-shareholder mrg-top-120">
								<h3><i class="ti-layout-width-full text-purpl purple"></i>&nbsp; PT Astra International,Tbk</h3>
								<h3><i class="ti-layout-width-full text-orange orange"></i>&nbsp; PT Arya Kharisma</h3>
							</div>
						</div> 

						<?php } ?>
					</div>
				</div>


				

			</div>
		</section>
		<!-- /Contact -->


		<?php if (!$this->agent->is_mobile()) { ?>

		<script type="text/javascript">
			$(function(){
				$("#pieChart").drawPieChart([
					{ title: "PT Astra International,Tbk 99.9995%",              value : 99,  color: "#2E3192" },
					{ title: "PT Arya Kharisma,Tbk 0.0005%",      value : 1,   color: "#F26522" }
					]);
			});

			;(function($, undefined) {
				$.fn.drawPieChart = function(data, options) {
					var $this = this,
					W = $this.width(),
					H = $this.height(),
					centerX = W/2,
					centerY = H/2,
					cos = Math.cos,
					sin = Math.sin,
					PI = Math.PI,
					settings = $.extend({
						segmentShowStroke : true,
						segmentStrokeColor : "#fff",
						segmentStrokeWidth : 1,
						baseColor: "#fff",
						baseOffset: 15,
				edgeOffset: 30,//offset from edge of $this
				pieSegmentGroupClass: "pieSegmentGroup",
				pieSegmentClass: "pieSegment",
				lightPiesOffset: 12,//lighten pie's width
				lightPiesOpacity: .3,//lighten pie's default opacity
				lightPieClass: "lightPie",
				animation : true,
				animationSteps : 90,
				animationEasing : "easeInOutExpo",
				tipOffsetX: -15,
				tipOffsetY: -45,
				tipClass: "pieTip",
				beforeDraw: function(){  },
				afterDrawed : function(){  },
				onPieMouseenter : function(e,data){  },
				onPieMouseleave : function(e,data){  },
				onPieClick : function(e,data){  }
			}, options),
					animationOptions = {
						linear : function (t){
							return t;
						},
						easeInOutExpo: function (t) {
							var v = t<.5 ? 8*t*t*t*t : 1-8*(--t)*t*t*t;
							return (v>1) ? 1 : v;
						}
					},
					requestAnimFrame = function(){
						return window.requestAnimationFrame ||
						window.webkitRequestAnimationFrame ||
						window.mozRequestAnimationFrame ||
						window.oRequestAnimationFrame ||
						window.msRequestAnimationFrame ||
						function(callback) {
							window.setTimeout(callback, 1000 / 60);
						};
					}();

					var $wrapper = $('<svg width="' + 400 + '" height="' + 400 + '" viewBox="0 0 ' + W + ' ' + H + '" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"></svg>').appendTo($this);
					var $groups = [],
					$pies = [],
					$lightPies = [],
					easingFunction = animationOptions[settings.animationEasing],
					pieRadius = Min([H/2,W/2]) - settings.edgeOffset,
					segmentTotal = 0;

			//Draw base circle
			var drawBasePie = function(){
				var base = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
				var $base = $(base).appendTo($wrapper);
				base.setAttribute("cx", centerX);
				base.setAttribute("cy", centerY);
				base.setAttribute("r", pieRadius+settings.baseOffset);
				base.setAttribute("fill", settings.baseColor);
			}();

			//Set up pie segments wrapper
			var pathGroup = document.createElementNS('http://www.w3.org/2000/svg', 'g');
			var $pathGroup = $(pathGroup).appendTo($wrapper);
			$pathGroup[0].setAttribute("opacity",0);

			//Set up tooltip
			var $tip = $('<div class="' + settings.tipClass + '" />').appendTo('body').hide(),
			tipW = $tip.width(),
			tipH = $tip.height();

			for (var i = 0, len = data.length; i < len; i++){
				segmentTotal += data[i].value;
				var g = document.createElementNS('http://www.w3.org/2000/svg', 'g');
				g.setAttribute("data-order", i);
				g.setAttribute("class", settings.pieSegmentGroupClass);
				$groups[i] = $(g).appendTo($pathGroup);
				$groups[i]
				.on("mouseenter", pathMouseEnter)
				.on("mouseleave", pathMouseLeave)
				.on("mousemove", pathMouseMove)
				.on("click", pathClick);

				var p = document.createElementNS('http://www.w3.org/2000/svg', 'path');
				p.setAttribute("stroke-width", settings.segmentStrokeWidth);
				p.setAttribute("stroke", settings.segmentStrokeColor);
				p.setAttribute("stroke-miterlimit", 2);
				p.setAttribute("fill", data[i].color);
				p.setAttribute("class", settings.pieSegmentClass);
				$pies[i] = $(p).appendTo($groups[i]);

				var lp = document.createElementNS('http://www.w3.org/2000/svg', 'path');
				lp.setAttribute("stroke-width", settings.segmentStrokeWidth);
				lp.setAttribute("stroke", settings.segmentStrokeColor);
				lp.setAttribute("stroke-miterlimit", 2);
				lp.setAttribute("fill", data[i].color);
				lp.setAttribute("opacity", settings.lightPiesOpacity);
				lp.setAttribute("class", settings.lightPieClass);
				$lightPies[i] = $(lp).appendTo($groups[i]);
			}

			settings.beforeDraw.call($this);
			//Animation start
			triggerAnimation();

			function pathMouseEnter(e){
				var index = $(this).data().order;
				$tip.text(data[index].title).fadeIn(200);
				if ($groups[index][0].getAttribute("data-active") !== "active"){
					$lightPies[index].animate({opacity: .8}, 180);
				}
				settings.onPieMouseenter.apply($(this),[e,data]);
			}
			function pathMouseLeave(e){
				var index = $(this).data().order;
				$tip.hide();
				if ($groups[index][0].getAttribute("data-active") !== "active"){
					$lightPies[index].animate({opacity: settings.lightPiesOpacity}, 100);
				}
				settings.onPieMouseleave.apply($(this),[e,data]);
			}
			function pathMouseMove(e){
				$tip.css({
					top: e.pageY + settings.tipOffsetY,
					left: e.pageX - $tip.width() / 2 + settings.tipOffsetX
				});
			}
			function pathClick(e){
				var index = $(this).data().order;
				var targetGroup = $groups[index][0];
				for (var i = 0, len = data.length; i < len; i++){
					if (i === index) continue;
					$groups[i][0].setAttribute("data-active","");
					$lightPies[i].css({opacity: settings.lightPiesOpacity});
				}
				if (targetGroup.getAttribute("data-active") === "active"){
					targetGroup.setAttribute("data-active","");
					$lightPies[index].css({opacity: .8});
				} else {
					targetGroup.setAttribute("data-active","active");
					$lightPies[index].css({opacity: 1});
				}
				settings.onPieClick.apply($(this),[e,data]);
			}
			function drawPieSegments (animationDecimal){
			  var startRadius = -PI/2,//-90 degree
			  rotateAnimation = 1;
			  if (settings.animation) {
				rotateAnimation = animationDecimal;//count up between0~1
			}

			$pathGroup[0].setAttribute("opacity",animationDecimal);

			  //draw each path
			  for (var i = 0, len = data.length; i < len; i++){
				var segmentAngle = rotateAnimation * ((data[i].value/segmentTotal) * (PI*2)),//start radian
				endRadius = startRadius + segmentAngle,
				largeArc = ((endRadius - startRadius) % (PI * 2)) > PI ? 1 : 0,
				startX = centerX + cos(startRadius) * pieRadius,
				startY = centerY + sin(startRadius) * pieRadius,
				endX = centerX + cos(endRadius) * pieRadius,
				endY = centerY + sin(endRadius) * pieRadius,
				startX2 = centerX + cos(startRadius) * (pieRadius + settings.lightPiesOffset),
				startY2 = centerY + sin(startRadius) * (pieRadius + settings.lightPiesOffset),
				endX2 = centerX + cos(endRadius) * (pieRadius + settings.lightPiesOffset),
				endY2 = centerY + sin(endRadius) * (pieRadius + settings.lightPiesOffset);
				var cmd = [
				  'M', startX, startY,//Move pointer
				  'A', pieRadius, pieRadius, 0, largeArc, 1, endX, endY,//Draw outer arc path
				  'L', centerX, centerY,//Draw line to the center.
				  'Z'//Cloth path
				  ];
				  var cmd2 = [
				  'M', startX2, startY2,
				  'A', pieRadius + settings.lightPiesOffset, pieRadius + settings.lightPiesOffset, 0, largeArc, 1, endX2, endY2,//Draw outer arc path
				  'L', centerX, centerY,
				  'Z'
				  ];
				  $pies[i][0].setAttribute("d",cmd.join(' '));
				  $lightPies[i][0].setAttribute("d", cmd2.join(' '));
				  startRadius += segmentAngle;
				}
			}

			var animFrameAmount = (settings.animation)? 1/settings.animationSteps : 1,//if settings.animationSteps is 10, animFrameAmount is 0.1
			animCount =(settings.animation)? 0 : 1;
			function triggerAnimation(){
				if (settings.animation) {
					requestAnimFrame(animationLoop);
				} else {
					drawPieSegments(1);
				}
			}
			function animationLoop(){
			  animCount += animFrameAmount;//animCount start from 0, after "settings.animationSteps"-times executed, animCount reaches 1.
			  drawPieSegments(easingFunction(animCount));
			  if (animCount < 1){
			  	requestAnimFrame(arguments.callee);
			  } else {
			  	settings.afterDrawed.call($this);
			  }
			}
			function Max(arr){
				return Math.max.apply(null, arr);
			}
			function Min(arr){
				return Math.min.apply(null, arr);
			}
			return $this;
		};
	})(jQuery);
</script>

<?php } ?>