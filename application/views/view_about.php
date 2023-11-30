
<div class="content-wrapper" >
<div class="breadcrumb-wrap bg-f br-1" style="margin-top: -70px!important;">
<div class="container">
<div class="breadcrumb-title">
<h2><?php echo $about_content['about_heading']; ?></h2>
<ul class="breadcrumb-menu list-style">
<li><a href="<?php echo base_url(); ?>">Home </a></li>
<li><?php echo $about_content['about_heading']; ?></li>
</ul>
</div>
</div>
</div>


<div class="partner-wrap ptb-100">
<div class="container">
<div class="row">
<div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
<div class="section-title text-center mb-40">
<h2><?php echo $about_content['page_top_header']; ?></h2>
</div>
</div>
</div>
<div class="partner-slider owl-carousel">

    <?php foreach($partner_logos as $logo): ?>
        <div class="partner-item">
        <img src="<?php echo base_url(); ?>assets/site/img/partner/<?php echo $logo->partner_logo; ?>" alt="Image">
        </div>
    <?php endforeach; ?>

</div>
</div>
</div>


<section class="about-wrap style1 pb-100">
<div class="container">
<div class="row gx-5 align-items-center">
<div class="col-lg-6">
<div class="row">
<div class="col-6 about-img-wrap">
<img src="<?php echo base_url(); ?>assets/site/img/about/<?php echo $about_content['main_image_animated_bg']; ?>" alt="Image" class="about-shape-one bounce">
<div class="about-img">
<img src="<?php echo base_url(); ?>assets/site/img/about/<?php echo $about_content['main_image_1']; ?>" alt="Image">
</div>
<div class="about-img">
<img src="<?php echo base_url(); ?>assets/site/img/about/<?php echo $about_content['main_image_2']; ?>" alt="Image">
</div>
</div>
<div class="col-6 about-img-wrap lgm-70">
<img src="<?php echo base_url(); ?>assets/site/img/<?php echo $about_content['main_image_animated']; ?>" alt="Image" class="about-shape-two moveHorizontal">
<div class="about-img">
<img src="<?php echo base_url(); ?>assets/site/img/about/<?php echo $about_content['main_image_3']; ?>" alt="Image">
</div>
<div class="about-img">
<img src="<?php echo base_url(); ?>assets/site/img/about/<?php echo $about_content['main_image_4']; ?>" alt="Image">
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="about-content">
<div class="content-title style1">
<span class="text text-uppercase"><?php echo $about_content['about_heading']; ?></span>
<h2><?php echo $about_content['page_services_header']; ?></h2>
<p><?php echo $about_content['page_services_description']; ?></p>
</div>
<div class="feature-item-wrap">
<div class="feature-item">
<div class="feature-icon">
<i class="flaticon-clicking"></i>
</div>
<div class="feature-text">
<h3><?php echo $about_content['page_service_1_header']; ?></h3>
<p><?php echo $about_content['page_service_1_description']; ?></p>
 </div>
</div>
<div class="feature-item">
<div class="feature-icon">
<i class="flaticon-alarm"></i>
</div>
<div class="feature-text">
<h3><?php echo $about_content['page_service_2_header']; ?></h3>
<p><?php echo $about_content['page_service_2_description']; ?></p>
</div>
</div>
</div>
<a href="<?php echo $about_content['page_button_url']; ?>" class="btn style1"><?php echo $about_content['page_button_text']; ?><i class="ri-arrow-right-s-line"></i></a>
</div>
</div>
</div>
</div>
</section>



<section class="wh-wrap style3 ptb-100">
<div class="container">
<div class="row gx-5 align-items-center">
<div class="col-lg-6 order-lg-1 order-md-2 order-2">
<div class="wh-content">
<div class="content-title style1">
<span><?php echo $about_content['what_we_offer_main']; ?></span>
<h2><?php echo $about_content['what_we_offer_heading']; ?></h2>
<p>
<?php echo $about_content['what_we_offer_description']; ?>
</p>
</div>
<div class="feature-item-wrap">
<div class="feature-item">
<div class="feature-icon">
<i class="flaticon-tick"></i>
</div>
<div class="feature-text">
<h3><?php echo $about_content['offered_service_1_title']; ?></h3>
<p><?php echo $about_content['offered_service_1_description']; ?></p>
</div>
</div>
<div class="feature-item">
<div class="feature-icon">
<i class="flaticon-tick"></i>
</div>
<div class="feature-text">
<h3><?php echo $about_content['offered_service_2_title']; ?></h3>
<p><?php echo $about_content['offered_service_2_description']; ?></p>
</div>
</div>
<div class="feature-item">
 <div class="feature-icon">
<i class="flaticon-tick"></i>
</div>
<div class="feature-text">
<h3><?php echo $about_content['offered_service_3_title']; ?></h3>
<p><?php echo $about_content['offered_service_3_description']; ?></p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 order-lg-2 order-md-1 order-1">
<div class="wh-img-wrap">
<img src="<?php echo base_url(); ?>assets/site/img/<?php echo $about_content['sub_image_animated']; ?>" alt="Image" class="wh-shape-one animationFramesTwo">
<img src="<?php echo base_url(); ?>assets/site/img/why-choose-us/<?php echo $about_content['sub_image_1']; ?>" alt="Image">
</div>
</div>
</div>
</div>
</section>



</div>