<!DOCTYPE html>

<html lang="en">
<!--<![endif]-->
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	
	<?php

    $CI =& get_instance();
    $CI->load->model('Model_common');

    $language = $CI->Model_common->get_language_data();

    foreach ($language as $lang) {
        define($lang['name'], $lang['value']);
    }

     echo '<meta name="description" content="'.$page_home['meta_description'].'">';
     echo '<meta name="keywords" content="'.$page_home['meta_keyword'].'">';
     echo '<title>'.$page_home['title'].'</title>';
   

    ?>
	<!-- Mobile Specific Meta
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	 <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon']; ?>">
	<!--All Css-->
	<link rel="stylesheet" href="<?=HOME_ASSETS?>css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?=HOME_ASSETS?>css/font-awesome.min.css" type="text/css" />
	<link rel="stylesheet" href="<?=HOME_ASSETS?>css/et-line.css" type="text/css" />
	<link rel="stylesheet" href="<?=HOME_ASSETS?>css/themefy-icon.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?=HOME_ASSETS?>css/animate.min.css">
	<!--Revolution slider-->
	<link rel="stylesheet" href="<?=HOME_ASSETS?>css/settings.css" type="text/css" />
	<link rel="stylesheet" href="<?=HOME_ASSETS?>css/dynamic-captions.css" type="text/css" />
	<link rel="stylesheet" href="<?=HOME_ASSETS?>css/static-captions.css" type="text/css" />
	<!--Owl Carousel-->
	<link rel="stylesheet" href="<?=HOME_ASSETS?>css/owl.carousel.css" type="text/css" />
	<link rel="stylesheet" href="<?=HOME_ASSETS?>css/owl.theme.css" type="text/css" />
	<link rel="stylesheet" href="<?=HOME_ASSETS?>css/owl.transitions.css" type="text/css" />
	
	<link rel="stylesheet" type="text/css" href="<?=HOME_ASSETS?>css/skins/blue-layout.css">
	<link rel="stylesheet" type="text/css" href="<?=HOME_ASSETS?>css/style.css">
	<!--Jquery-->
	<script src="<?=HOME_ASSETS?>js/jQuery.js" type="text/javascript"></script>

	<style type="text/css">
		
		#list-feature{
			max-height: 450px;
		}
		.text-alt{
			color:#EC1C24;
		}
	</style>
</head>
<body>
<section class="wrapper off-canvas-menu-wrap">
	<div class="body-innerwrapper">
		<!--Header-->
		<header id="sp-header" class="menu-fixed-out header-five" data-spy="affix" data-offset-top="1">
			<div class="container">
				<div class="row">
					<div id="sp-logo" class="col-xs-8 col-sm-3 col-md-3">
						<h1 class="logo">
							<a href="<?php echo base_url(); ?>"><img class="sp-default-logo" src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" alt="CheetahNet" width="200px" style="margin-bottom: 10px;"></a>
						</h1>
					</div>
					<div id="sp-menu" class="col-xs-4 col-sm-9 col-md-9">
						<div class="sp-column ">
							<div class="sp-megamenu-wrapper">
								<a id="offcanvas-toggler" class="visible-sm visible-xs" href="#"><i style="color: #ffffff;" class="fa fa-bars"></i></a>
								<ul class="sp-megamenu-parent menu-slide-down hidden-sm hidden-xs">
									 <li class="sp-menu-item "><a href="<?php echo base_url(); ?>"><?php echo HOME; ?></a></li>
                            <li class="sp-menu-item "><a href="<?php echo base_url(); ?>about"><?php echo ABOUT; ?></a></li>
                            <li class="sp-menu-item "><a href="<?php echo base_url(); ?>service"><?php echo SERVICE; ?></a></li>
                            <li class="sp-menu-item "><a href="<?php echo base_url(); ?>news"><?php echo NEWS; ?></a></li>
                            <li class="sp-menu-item "><a href="<?php echo base_url(); ?>faq"><?php echo FAQ; ?></a></li>
                            <li class="sp-menu-item "><a href="<?php echo base_url(); ?>contact"><?php echo CONTACT; ?></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--Banner-->

		<section id="banner">
			<div class="container-fluid">
				<div class="row">
					<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:400px;">
						<div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;max-height:350px;height:400px;">
							<ul>

						 <?php
					        foreach ($sliders as $slider) {

					        	?>
								<!-- SLIDE  1-->
								<li data-transition="random" data-slotamount="7" data-masterspeed="300" data-thumb="<?php echo base_url(); ?>public/uploads/<?php echo $slider['photo']; ?>" data-saveperformance="off" data-title="Slide">
									<!-- MAIN IMAGE -->
									<img src="<?php echo base_url(); ?>public/uploads/<?php echo $slider['photo']; ?>" alt="project-3" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
									<!-- LAYERS -->
									<!-- LAYER NR. 1 -->
									<div class="tp-caption excerpt sft tp-resizeme" data-x="264" data-y="198" data-speed="800" data-start="1300" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
										<center>
										<?php if($slider['heading']!=''): 
											echo "<h1 class='text-white'>".$slider['heading']."<h1>"; 
										endif; ?>
										</center>
									</div>
									<!-- LAYER NR. 3 -->
									<div class="tp-caption excerpt sfb tp-resizeme" data-x="264" data-y="270" data-speed="800" data-start="2700" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">
										<center>
										<?php if($slider['content']!=''): 
											echo $slider['content']; 
										endif; ?>
									</center>
									</div>
								</li>

							<?php } ?>
							</ul>
							<div class="tp-bannertimer"></div>
						</div>
						<script type="text/javascript">
							/******************************************
							 -	PREPARE PLACEHOLDER FOR SLIDER	-
							 ******************************************/


							var setREVStartSize = function() {
								var tpopt = new Object();
								tpopt.startwidth = 960;
								tpopt.startheight = 550;
								tpopt.container = jQuery('#rev_slider_1_1');
								tpopt.fullScreen = "off";
								tpopt.forceFullWidth = "off";

								tpopt.container.closest(".rev_slider_wrapper").css({
									height: tpopt.container.height()
								});
								tpopt.width = parseInt(tpopt.container.width(), 0);
								tpopt.height = parseInt(tpopt.container.height(), 0);
								tpopt.bw = tpopt.width / tpopt.startwidth;
								tpopt.bh = tpopt.height / tpopt.startheight;
								if (tpopt.bh > tpopt.bw) tpopt.bh = tpopt.bw;
								if (tpopt.bh < tpopt.bw) tpopt.bw = tpopt.bh;
								if (tpopt.bw < tpopt.bh) tpopt.bh = tpopt.bw;
								if (tpopt.bh > 1) {
									tpopt.bw = 1;
									tpopt.bh = 1
								}
								if (tpopt.bw > 1) {
									tpopt.bw = 1;
									tpopt.bh = 1
								}
								tpopt.height = Math.round(tpopt.startheight * (tpopt.width / tpopt.startwidth));
								if (tpopt.height > tpopt.startheight && tpopt.autoHeight != "on") tpopt.height = tpopt.startheight;
								if (tpopt.fullScreen == "on") {
									tpopt.height = tpopt.bw * tpopt.startheight;
									var cow = tpopt.container.parent().width();
									var coh = jQuery(window).height();
									if (tpopt.fullScreenOffsetContainer != undefined) {
										try {
											var offcontainers = tpopt.fullScreenOffsetContainer.split(",");
											jQuery.each(offcontainers, function(e, t) {
												coh = coh - jQuery(t).outerHeight(true);
												if (coh < tpopt.minFullScreenHeight) coh = tpopt.minFullScreenHeight
											})
										} catch (e) {}
									}
									tpopt.container.parent().height(coh);
									tpopt.container.height(coh);
									tpopt.container.closest(".rev_slider_wrapper").height(coh);
									tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);
									tpopt.container.css({
										height: "100%"
									});
									tpopt.height = coh;
								} else {
									tpopt.container.height(tpopt.height);
									tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);
									tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);
								}
							};

							/* CALL PLACEHOLDER */
							setREVStartSize();


							var tpj = jQuery;
							tpj.noConflict();
							var revapi1;



							tpj(document).ready(function() {



								if (tpj('#rev_slider_1_1').revolution == undefined) {
									revslider_showDoubleJqueryError('#rev_slider_1_1');
								} else {
									revapi1 = tpj('#rev_slider_1_1').show().revolution({

										dottedOverlay: "none",
										delay: 9000,
										startwidth: 960,
										startheight: 550,
										hideThumbs: 200,

										thumbWidth: 100,
										thumbHeight: 50,
										thumbAmount: 3,

										simplifyAll: "off",
										navigationType: "bullet",
										navigationArrows: "solo",
										navigationStyle: "preview1",
										touchenabled: "on",
										onHoverStop: "off",
										nextSlideOnWindowFocus: "off",

										swipe_threshold: 75,
										swipe_min_touches: 1,
										drag_block_vertical: false,

										panZoomDisableOnMobile: "on",

										keyboardNavigation: "off",

										navigationHAlign: "center",
										navigationVAlign: "bottom",
										navigationHOffset: 0,
										navigationVOffset: 20,

										soloArrowLeftHalign: "left",
										soloArrowLeftValign: "center",
										soloArrowLeftHOffset: 20,
										soloArrowLeftVOffset: 0,

										soloArrowRightHalign: "right",
										soloArrowRightValign: "center",
										soloArrowRightHOffset: 20,
										soloArrowRightVOffset: 0,

										shadow: 0,
										fullWidth: "on",
										fullScreen: "off",

										spinner: "off",

										stopLoop: "off",
										stopAfterLoops: -1,
										stopAtSlide: -1,

										shuffle: "off",

										autoHeight: "off",
										forceFullWidth: "off",



										hideThumbsOnMobile: "on",
										hideBulletsOnMobile: "on",
										hideArrowsOnMobile: "on",
										hideThumbsUnderResolution: 0,

										hideSliderAtLimit: 0,
										hideCaptionAtLimit: 0,
										hideAllCaptionAtLilmit: 0,
										startWithSlide: 0,
										isJoomla: true
									});



								}
							}); /*ready*/
						</script>
					</div>
					<!-- END REVOLUTION SLIDER -->
				</div>
			</div>
		</section>
		<!--action-->

		<section id="action" style="border-top:2px #EC1C24 solid; border-bottom:2px #EC1C24 solid; background-image:url(<?php echo base_url(); ?>public/images/dotted.svg); background-repeat:repeat-x; background-position:center;">
			<div class="container" style="padding-top:5px; padding-bottom:5px;">
				<div class="row">
					<div class="col-lg-9 action-block text-white col-sm-12 ">
						<h2 style="padding-top:5px; padding-bottom:5px;"> 
							<?php echo $page_home['home_welcome_title']; ?>
						</h2>
						<small>CURRENCY EXCHANGE <span class="text-danger">|</span> MONEY TRANSFERS <span class="text-danger">|</span> BANKING</small>
					</div>
					<div class="col-lg-3 col-sm-12 action-block text-right">
						<a href="<?php echo base_url(); ?>service" class="sppb-btn sppb-btn-info sppb-btn-btn-one">Our Services</a>
					</div>
				</div>
			</div>
		</section>

		

		<!--Services List-->
		<section id="services-list" class="space-40" style="padding-top:70px!important; padding-bottom: 10px!important;">
			<div class="container">
			
				<div class="row">

				<?php
            	foreach ($features as $feature) {
                ?>
					<div class="col-sm-4 service-block" style="">
						<div class="icon">
							<i class="<?php echo $feature->icon;  ?> text-alt"></i>
						</div>
						<div class="service-content">
							<h5>
								<a class="text-primary text-alt" data-toggle="collapse" href="#<?php echo $feature->id; ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
								<?php echo $feature->name; ?>
								</a> 
							</h5>
							<p><?php echo $feature->content; ?></p>
						</div>
						
						<div class="collapse service-block" id="<?php echo $feature->id; ?>" >
							<hr> 
								<!-- <h4><a class="pull-right"  data-toggle="collapse" href="#<?php echo $feature->id; ?>" style="color: #01123c;">x</a></h4> -->
								<div class="service-content">
								
								<?php if(!empty($feature->sate)) { 

                                    foreach ($feature->sate as $row){ ?>
                                        <ul >
                                          <li>
                                            <a href="<?php echo base_url(); ?>service/view/<?php echo $row->id; ?>" style="color: #01123c;"> > &nbsp;&nbsp; <?php echo $row->name; ?></a>
                                          </li>
                                        </ul>

                                <?php  }  } ?>
									
						    	</div>
						  
						</div>

					</div>

					<?php } ?>
				
				</div>

			</div>
		</section> 

		<section class="space-30" style="padding-top:70px!important; padding-bottom: 10px!important;">
			<div class="container">
			
				<div class="row">
					<div class="col-sm-12 heading-block ">
						<div class="morphext-text heading" style="color:#EC1C24;">
							<!-- <h5><?php echo $page_home['home_welcome_title']; ?></h5> -->
							<span class="js-rotating"><?php echo $page_home['home_welcome_subtitle']; ?> </span> </div>
						    <p><?php echo $page_home['home_welcome_text']; ?></p>
					</div>
				
				</div>
			</div>
		</section> 

		<!--service-->
		<section id="service" class="space-30" style="padding-top:70px!important;">
			<div class="container">
				<div class="row">


					<?php
            	foreach ($services as $row) {  ?>
					<div class="col-sm-4 service-block">
						<div class="inner">
							<img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="service">
							<div class="service-content">
								<h5><?php echo $row['name']; ?></h5>
								<p><?php echo $row['short_description']; ?></p>

								
								<a href="<?php echo base_url(); ?>service/view/<?php echo $row['id']; ?>" class="simple">Read More</a>
							</div>
						</div>
					</div>

				<?php } ?>
			</div>
		</section> 



		<!--About-->
		<section id="about" class="space-30 bg-color border">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 about-block">

						<h5><?php echo $page_home['home_booking_form_title']; ?></h5>
						
						<form>
                            <div class="form-row row">
                                <div class="form-group ">
                                    <input type="text" class="form-control" placeholder="<?php echo FIRST_NAME; ?>">
                                </div>
                                <div class="form-group ">
                                    <input type="text" class="form-control" placeholder="<?php echo PHONE_NUMBER; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="<?php echo EMAIL_ADDRESS; ?>">
                                </div>
                                <div class="form-group col-12">
                                    <input type="text" class="form-control" placeholder="<?php echo ADDRESS; ?>">
                                </div>
                                <div class="form-group col-12">
                                    <textarea class="form-control" placeholder="<?php echo MESSAGE; ?>"></textarea>
                                </div>

                                <div class="form-button col-12">
                                    <button type="submit" class="btn btn2"><?php echo SUBMIT; ?></button>
                                </div>

                            </div>
                        </form>

					</div>
					<div class="col-sm-6 about-block">
						<div class="panel-group" id="accordion">

							<h5><?php echo $page_home['home_booking_faq_title']; ?></h5>

							     <?php
                            $i=0;
                            foreach($home_faq as $row) {
                                $i++;
                                ?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle <?php if($i!==1) {echo 'collapsed';} ?> " data-toggle="collapse" data-parent="#accordion" href="#panel<?php echo $i; ?>"><?php echo $row['faq_title']; ?><i class="fa fa-minus" aria-hidden="true"></i></a>
									</h4>
								</div>
								<div id="panel<?php echo $i; ?>" class="panel-collapse collapse in">
									<div class="panel-body">
										 <?php echo nl2br($row['faq_content']); ?>
									</div>
								</div>
							</div>

						<?php } ?>

						</div>
					</div>
				</div>
			</div>
		</section>


		<!--Footer upper-->
		<section id="footer-upper" class="space-30" >
			<div class="container">
				<div class="row">
						<div class="col-sm-3 footer-block">
							<a href="<?php echo base_url(); ?>" class="logo">
								<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" width="200px" alt="logo" style="margin-top: 2em;">
							</a>
						</div>

						<div class="col-sm-3 footer-block">
						<p><?php echo nl2br($setting['footer_address']); ?>
						<ul class="contact">
							<li><a href="mailto:<?php echo nl2br($setting['footer_email']); ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo nl2br($setting['footer_email']); ?></a></li>
							<li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo nl2br($setting['footer_phone']); ?></a></li>
							
						</ul>
						<ul class="corporate-social">
							<li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
							    <?php
                            foreach ($social as $row)
                            {
                                if($row['social_url']!='')
                                {
                                    echo '<li><a href="'.$row['social_url'].'"><i class="'.$row['social_icon'].'"></i></a></li>';
                                }
                            }
                            ?>
						</ul>
					</div>
				
					<div class="col-sm-3 footer-block">
						
						<div class="newsletter" style="border:none!important">
							<h3><?php echo $setting['footer_col1_title']; ?></h3>
							<p><?php echo nl2br($setting['newsletter_text']); ?></p>


							 <?php
                        if($this->session->flashdata('error')) {
                            echo '<div class="error-class">'.$this->session->flashdata('error').'</div>';
                        }
                        if($this->session->flashdata('success')) {
                            echo '<div class="success-class">'.$this->session->flashdata('success').'</div>';
                        }
                        ?>
							<?php echo form_open(base_url().'newsletter/send',array('class' => '')); ?>
								<div class="form-group">
									<input type="email" class="form-control" name="email_subscribe" id="email" placeholder="<?php echo EMAIL_ADDRESS; ?>">
									<button type="submit" class="sppb-btn">Send</button>
								</div>
							 <?php echo form_close(); ?>
						</div>
					</div>
					<div class="col-sm-3 footer-block">
                            <h3>USEFUL LINKS</h3>
                            <ul class="contact">
                                <li><a href="">Privacy Policy</a></li>
                                <li><a href="#">Terms Of Use</a></li>
                                 <li><a href="#">Blog Post</a></li>
                            </ul>
                            
                    </div>
					</div>
				</div>
			</div>
		</section>
		<!--Footer-->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center copyrights">
						<p><?php echo $setting['footer_copyright']; ?></p>
					</div>
				</div>
			</div>
		</footer>
	</div>
</section>
<!--Off canvas-->
<div class="offcanvas-menu">
	<a href="#" class="close-offcanvas"><i class="fa fa-remove"></i></a>
	<div class="offcanvas-inner">
		<div class="sp-module ">
			<div class="sp-module-content">
				<ul class="nav menu">

					 <li><a href="<?php echo base_url(); ?>"><?php echo HOME; ?></a></li>
                            <li><a href="<?php echo base_url(); ?>about"><?php echo ABOUT; ?></a></li>
                         
                            <li ><a href="<?php echo base_url(); ?>service"><?php echo SERVICE; ?></a></li>
                            <li><a href="<?php echo base_url(); ?>faq"><?php echo FAQ; ?></a></li>
                            
                            <li><a href="<?php echo base_url(); ?>news"><?php echo NEWS; ?></a></li>
                            <li><a href="<?php echo base_url(); ?>contact"><?php echo CONTACT; ?></a></li>
					 
				</ul>
			</div>
		</div>
	</div>
</div>

<!--All Script-->
<script src="<?=HOME_ASSETS?>js/bootstrap.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=HOME_ASSETS?>js/appear.js"></script>
<script src="<?=HOME_ASSETS?>js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
<script src="<?=HOME_ASSETS?>js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<script src="<?=HOME_ASSETS?>js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
<script src="<?=HOME_ASSETS?>js/smoothscroll.js" type="text/javascript"></script>
<script src="<?=HOME_ASSETS?>js/owl.carousel.js" type="text/javascript"></script>
<script src="<?=HOME_ASSETS?>js/featherlight.min.js" type="text/javascript"></script>
<script src="<?=HOME_ASSETS?>js/main.js" type="text/javascript"></script>
</body>

</html>
