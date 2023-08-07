
<style type="text/css">
    
.modal-dialog {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}

.modal-content {
  height: auto;
  min-height: 100%;
  border-radius: 0;
}

</style>


<div class="preloader advert" style="background-image:url(<?php echo base_url('assets/site/img/advert.webp'); ?>); ">


    <h2 class="mb-30 text-center">
        <span class="text-main">Send money to your loved ones in India with </span>
        <span class="text-alt">a better rate & low transfer fees</span>
    </h2>


  <a href="#" class="btn style1 hide-advert advert-btn" onclick="hideAdvert()">
    CONTINUE TO HOME PAGE <i class="ri-arrow-right-s-line"></i> </a>

</div>


<section class="hero-wrap style2"  style="background-image:url(<?php echo base_url('assets/site/img/banner.webp'); ?>); background-size:cover; background-repeat:no-repeat; padding:10px!important;">
<div class="container">
<div class="hero-shape" data-speed="0.06" data-revert="true">
<img src="<?php echo base_url(); ?>assets/site/img/hero/hero-shape-4.png"  class="hero-shape-one">
<img src="<?php echo base_url(); ?>assets/site/img/hero/hero-shape-5.png"  class="hero-shape-two">
<img src="<?php echo base_url(); ?>assets/site/img/hero/hero-shape-6.png"  class="hero-shape-three">
</div>
<div class="row align-items-center gx-5" style="padding: 20px; padding-top:0px;">

<div class="col-lg-6">
<div class="hero-content">
<span data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" class="text-white text-bold"><?php echo $currency_section_headers['top_header'];?></span>
<h3 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" class="text-white"><?php echo $currency_section_headers['second_header'];?></h3>
<p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" class="text-main text-bold"><?php echo $currency_section_headers['third_header'];?></p>

<div class="hero-btn" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
<a href="<?php echo base_url(); ?>contact" class="btn style1"><?php echo $currency_section_headers['contact_us_button_text'];?><i class="ri-arrow-right-s-line"></i></a>

</div>

</div>
</div>

<div class="col-lg-6"  style=" overflow-y:hidden;">

<div class="row">

<div class="col-lg-6">
        <div class="row card glass-box">

         <div class="col-lg-12">
                <div class="form-group mt-2">
                    <label  class="text-white">Send Money</label>
                    <label style="padding-bottom:5px;" class="text-white">Choose Country</label>
                    <select class="form-control"  id="country_name"> 
                        <?php foreach($currency_sending as $send): ?>
                            <option value="<?php echo $send['we_sell']; ?>"><?php echo $send['country_name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="col-lg-12 mt-2">
                    <div class="from-group">
                        <label class="text-white">Amount (UGX) </label>
                        <input type="number" class="form-control" value="1" style="color: grey;" id="send_amount">
                    </div>
            </div>

            <div class="col-lg-12 mt-2">
                    <div class="from-group">
                        <label class="text-white">They receive</label>
                        <input id="receive_amount" type="text" class="form-control" disabled>
                    </div>
            </div>
        </div>

</div>

<div class="col-lg-6">
    <div class="row card glass-box">

            <div class="col-lg-12">
                <div class="row">
                <label class="col-lg-12 text-white" style="padding-bottom:10px;" >Exchange Money</label>
                <div class="form-group col-lg-6">
                    <label class="text-white">I have</label>
                    <select class="form-control" id="convert_from"> 
                        <?php foreach($currency_sending as $send): ?>
                            <option data-set="<?php echo $send['currency']; ?>" value="<?php echo $send['we_sell']; ?>"><?php echo $send['currency']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group col-lg-6">
                    <label class="text-white">I want</label>
                    <select class="form-control" id="convert_to"> 
                        <?php foreach($currency_sending as $send): ?>
                            <option data-set="<?php echo $send['currency']; ?>" value="<?php echo $send['we_sell']; ?>"><?php echo $send['currency']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                </div>
            </div>
            <div class="col-lg-12 mt-2">
                <div class="from-group">
                    <label class="text-white">Amount </label>
                    <input id="convert_amount" type="number" class="form-control" value="1" style="color: grey;">
                </div>
            </div>
            <div class="col-lg-12 mt-2">
                <div class="from-group">
                    <label class="text-white">You get</label>
                    <input id="convert_output" type="text" class="form-control" value="1" style="color: grey;" disabled>
                </div>
            </div>
        </div>
 
           
    </div>
    </div>

</div>
</div>

</div>
</section>

<div class="partner-wrap pb-30 pt-10 pb-20" >
<div class="row">
<div class="partner-slider owl-carousel">

<!-- Hakim Modifications --Currency slider -->

<?php foreach($currency_slider as $slider): ?>
<div class="partner-item partnerStyle forex-item" style="border: solid 1px; padding: 0px; border-radius: 12px; text-align: center;">
    <p class="p"><i class="fi fi-<?php echo $slider['currency_icon']; ?>"></i> <strong style="padding-right: 12px;" class="currency_code"> <?php echo $slider['currency']; ?>  </strong>
        <small>
            <table>
                <tr>
                    <td style="font-size: 10px; font-weight: bold;">
                        <small> WE SELL: UGX </small><?php echo $slider['we_sell']; ?> 
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 10px; font-weight: bold;">
                        <small> WE BUY : UGX </small><?php echo $slider['we_buy']; ?> 
                    </td>
                </tr>
            </table>
            
        </small> 
    </p>
</div>
<?php endforeach; ?>
</div>

</div>
</div>
</div>





<!-- Hakim Modifications -- Home About Us Content -->
<section class="about-wrap style2 pb-70">
<div class="container">
<div class="row gx-5 align-items-center justify-content-center">


<!-- Hakim Modifications --Currency Converter -->
<div class="col-lg-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
    
<div class="hero-img-wrap">
    
    <div class="hero-img-two">
    <img src="<?php echo base_url(); ?>assets/site/img/<?php echo $about_section['about_us_image'];?>">
    </div>
</div>

</div>

<div class="col-lg-8" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
<div class="about-content">
<div class="content-title style1">
<span><?php echo $about_section['about_us_top_header'];?></span>
<h2><?php echo $about_section['about_us_second_header'];?></h2>
<p><?php echo $about_section['about_us_description'];?></p>
</div>
<div class="feature-item-wrap">
<div class="feature-item">
<div class="feature-icon">
<i class="flaticon-application"></i>
</div>
<div class="feature-text">
<h3><?php echo $about_section['about_us_rates_header'];?></h3>
<p><?php echo $about_section['about_us_rates_description'];?></p>
</div>
</div>
<div class="feature-item">
<div class="feature-icon">
<i class="flaticon-speedometer"></i>
</div>
<div class="feature-text">
<h3><?php echo $about_section['about_us_attention_header'];?></h3>
<p><?php echo $about_section['about_us_attention_description'];?></p>
</div>
</div>
</div>
<a href="<?php echo base_url('contact'); ?>" class="btn style1"><?php echo $about_section['about_us_button_text'];?><i class="ri-arrow-right-s-line"></i></a>
</div>
</div>
</div>
</div>
</section>


<!-- Hakim Modification We Are Flexible Section -->
<div class="feature-wrap style1 ptb-100 bg-whisper">
<div class="container">
<div class="row">
<div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1">
<div class="section-title style1 text-center mb-40">
<span><?php echo $we_are_flexible_headers['home_we_are_flexible_top_header']; ?></span>
<h2><?php echo $we_are_flexible_headers['home_we_are_flexible_second_header']; ?></h2>
</div>
</div>
 </div>


<div class="feature-slider-one owl-carousel">
    <?php foreach($we_are_flexible_content as $flexible): ?>
        <div class="feature-card style3">
            <div class="feature-title">
                <span>
                    <i class="<?php echo $flexible['content_icon']; ?>"></i>
                </span>
                    <h3><a href="send-money.html"><?php echo $flexible['content_header']; ?></a></h3>
            </div>
                <p><?php echo $flexible['content_description']; ?></p>
                <a href="<?php echo $flexible['content_button_url']; ?>" class="link style1"><?php echo $flexible['content_button_text']; ?><i class="ri-arrow-right-s-line"></i></a>
        </div>
    <?php endforeach; ?>
</div>
</div>
</div>
<!-- Hakim Modification We Are Flexible Section -->


<section class="wh-wrap style2 ptb-100">
<div class="container">
<div class="row gx-5 align-items-center">
<div class="col-lg-6 order-lg-1 order-md-2 order-2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
<div class="wh-content">   
<div class="content-title style1">
<span><?php echo $why_choose_us_header_content['main_header']; ?></span> 
<h2><?php echo $why_choose_us_header_content['second_header']; ?></h2>
<p><?php echo $why_choose_us_header_content['main_description']; ?></p>
</div>
<div class="feature-item-wrap">
    
    <?php foreach($why_choose_us_services_content as $service): ?>
    <div class="feature-item">
        <div class="feature-icon">
        <i class="<?php echo $service['service_icon']; ?>"></i>
        </div>
        <div class="feature-text">
        <h3><?php echo $service['service_header']; ?></h3>
        <p><?php echo $service['service_description']; ?></p>
        </div>
    </div>
    <?php endforeach; ?>

</div>
</div>
</div>
<div class="col-lg-6 order-lg-2 order-md-1 order-1" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
<div class="row align-items-end">
<div class="col-6 wh-img-wrap">
<img src="<?php echo base_url(); ?>assets/site/img/<?php echo $why_choose_us_images_and_shapes['shape_2']; ?>"  class="wh-shape-one moveHorizontal">
<div class="wh-img">
<img src="<?php echo base_url(); ?>assets/site/img/why-choose-us/<?php echo $why_choose_us_images_and_shapes['choose_image_1']; ?>" >
</div>
<div class="wh-img">
<img src="<?php echo base_url(); ?>assets/site/img/why-choose-us/<?php echo $why_choose_us_images_and_shapes['choose_image_2']; ?>" >
</div>
</div>
<div class="col-6 wh-img-wrap">
<div class="wh-img">
<img src="<?php echo base_url(); ?>assets/site/img/<?php echo $why_choose_us_images_and_shapes['shape_1']; ?>"  class="wh-shape-two bounce">
<img src="<?php echo base_url(); ?>assets/site/img/why-choose-us/<?php echo $why_choose_us_images_and_shapes['choose_image_3']; ?>" >
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<div class="feature-wrap style1 pt-100 pb-75 bg-whisper">
<div class="container">
<div class="row">
<div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
<div class="section-title style1 text-center mb-40">
<span><?php echo $home_more_benefits_headers['benefits_main_header']; ?></span>
    <h2><?php echo $home_more_benefits_headers['benefits_second_header']; ?></h2>
</div>
</div>
</div>
<div class="row justify-content-center">


<?php foreach($home_more_benefits_content as $benefit): ?>
<div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="<?php echo $benefit['benefits_content_duration']; ?>" data-aos-delay="<?php echo $benefit['benefits_content_delay']; ?>">
<div class="feature-card style4">
<div class="feature-icon">
 <i class="<?php echo $benefit['benefits_content_icon']; ?>"></i>
</div>
<div class="feature-info">
<h3><a href="#"><?php echo $benefit['benefits_content_header']; ?></a></h3>
<p><?php echo $benefit['benefits_content_description']; ?></p>
</div>
</div>
</div>
<?php endforeach; ?>



</div>
</div>
</div>


<section class="testimonial-wrap ptb-100">
<div class="container">
<div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
<div class="section-title style1 text-center mb-40">
<span><?php echo $home_reviews_headers['our_review_main_header']; ?></span>
<h2><?php echo $home_reviews_headers['our_review_second_header']; ?></h2>
</div>
</div>
<div class="testimonial-slider-two owl-carousel">

<?php foreach($home_reviews_content as $comment): ?>
    <div class="testimonial-card style3">
    <div class="client-info-area">
    <div class="client-info-wrap">
    <div class="client-img">
    <img src="<?php echo base_url(); ?>assets/site/img/testimonials/<?php echo $comment['our_review_client_image']; ?>" >
    </div>
    <div class="client-info">
    <h3><?php echo $comment['our_review_client_name']; ?></h3>
    <span><?php echo $comment['our_review_client_roll']; ?></span>
    </div>
    </div>
    <div class="quote-icon">
    <i class="flaticon-quotation-mark"></i>
    </div>
    </div>
    <p class="client-quote"><?php echo $comment['our_review_client_comment']; ?></p>
    </div>
<?php endforeach; ?>


</div>
</div>
</section>


<section class="blog-wrap pt-100 pb-75 bg-whisper">
<div class="container">
<div class="row">
<div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
<div class="section-title style1 text-center mb-40">
<span>OUR BLOG</span>
 <h2>Here's a curated list of articles we think are interesting</h2>
</div>
</div>
</div>
<div class="row justify-content-center">


<?php foreach($get_news as $news): ?>
<div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
<div class="blog-card style2">
<div class="blog-img">
<img src="<?php echo base_url(); ?>public/uploads/<?php echo $news['photo']; ?>" >
<a href="<?php echo base_url(); ?>news/view/<?php echo $news['news_id']; ?>" class="blog-cat">Read More</a>
</div>
<div class="blog-info">
<ul class="blog-metainfo  list-style">
<li><i class="ri-calendar-2-line"></i><a href="posts-by-date.html"><?php echo $news['news_date']; ?></a></li>
<li><i class="ri-chat-3-line"></i>No Comment</li>
</ul>
<h3><a href="<?php echo base_url(); ?>news/view/<?php echo $news['news_id']; ?>"><?php echo $news['news_title']; ?></a></h3>
</div>
</div>
</div>
<?php endforeach; ?>


</div>
</div>
</section>

<div class="partner-wrap ptb-100">
<div class="container">
<div class="partner-slider owl-carousel">
    <!-- Hakim Modifications - Partners Slider -->
        <?php foreach($partner_slider as $slider): ?>
        <div class="partner-item">
            <img src="<?php echo base_url(); ?>assets/site/img/partner/<?php echo $slider['partner_logo']; ?>" >
        </div>
        <?php endforeach; ?>
    <!-- Hakim Modifications - Partners Slider -->
</div>

<h6 class="text-center pt-5 text-muted"><small>We partner with numerous reputable financial service providers to serve you better!</small></h6>


</div>
</div>
</div>
