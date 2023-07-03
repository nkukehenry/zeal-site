
<footer class="footer-wrap">
<div class="container">
<div class="row pt-100 pb-75">
<div class="col-xl-3 col-lg-5 col-md-5 col-sm-6">
<div class="footer-widget">
<a href="index-2.html" class="footer-logo">
<img src="<?php echo base_url(); ?>assets/site/img/<?php echo $setting['logo']; ?>" alt="Image">
</a>
<p class="comp-desc">
    <?php echo $setting['newsletter_text']; ?>
</p>
<ul class="social-profile style1 list-style">

<?php foreach($social as $media): ?>
<li>
<a href="<?php echo $media['social_url']; ?>">
<i class="<?php echo $media['social_icon']; ?>"></i>
</a>
</li>
<?php endforeach; ?>
</ul>
</div>
</div>

<div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
<div class="footer-widget">
<h3 class="footer-widget-title">Resources</h3>
<ul class="footer-menu list-style">
<li>
    <a href="<?php echo base_url(); ?>">
    Home
    </a>
</li>
<li>
    <a href="<?php echo base_url('about'); ?>">
    About Us
    </a>
</li>
<li>
    <a href="<?php echo base_url('contact'); ?>">
    Contact Us
    </a>
</li>
<li>
    <a href="<?php echo base_url('faq'); ?>">
    FAQ's
    </a>
</li>
</ul>
</div>
</div>

<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
<div class="footer-widget">
<h3 class="footer-widget-title">Contact Us</h3>
<ul class="contact-info list-style">
<li>
    <i class="ri-map-pin-fill"></i>
    <h6>Location</h6>
    <p><?php echo $setting['footer_address']; ?></p>
</li>
<li>
    <i class="ri-mail-open-fill"></i>
    <h6>Email</h6>
    <a href="mailto:<?php echo $setting['footer_email']; ?>"><?php echo $setting['footer_email']; ?></a>
</li>
<li>
    <i class="ri-phone-fill"></i>
    <h6>Phone</h6>
    <a href="tel:13454567877"><?php echo $setting['footer_phone']; ?></a>
 </li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<p class="copyright-text"><i class="ri-copyright-line"></i> <span><?php echo $setting['footer_copyright']; ?></span>. All Rights Reserved</p>
</div>
</div>

</div>
</footer>

</div>


<!-- <a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a> -->

<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-099fe50e-de90-4bf6-a42a-9cfbf49d1926"></div>


<script src="<?php echo base_url(); ?>assets/site/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/site/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/site/js/form-validator.min.js"></script>
<script src="<?php echo base_url(); ?>assets/site/js/contact-form-script.js"></script>
<script src="<?php echo base_url(); ?>assets/site/js/aos.js"></script>
<script src="<?php echo base_url(); ?>assets/site/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/site/js/odometer.min.js"></script>
<script src="<?php echo base_url(); ?>assets/site/js/jquery.countdown.min.js"></script>
<script src="<?php echo base_url(); ?>assets/site/js/fancybox.js"></script>
<script src="<?php echo base_url(); ?>assets/site/js/jquery.appear.js"></script>
<script src="<?php echo base_url(); ?>assets/site/js/tweenmax.min.js"></script>
<script src="<?php echo base_url(); ?>assets/site/js/main.js"></script>


<!-- Hakim loaded this for converter and currency slider -->
<script type="rocketlazyloadscript" data-rocket-src="<?php echo base_url(); ?>assets/site/custom/js/jquery.magnific-popup.min.js?v=1.03" defer></script>
<script type="rocketlazyloadscript" data-rocket-src="<?php echo base_url(); ?>assets/site/custom/js/slick.min.js" defer></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-src="<?php echo base_url(); ?>assets/site/custom/css/js/script.js?ver=1683622252" defer></script>

<script src="<?php echo base_url(); ?>assets/site/custom/js/country.js"></script>
<script src="<?php echo base_url(); ?>assets/site/custom/js/converter.js"></script>
<script src="<?php echo base_url(); ?>assets/site/custom/js/home_converter.js"></script>
<script src="<?php echo base_url(); ?>assets/site/custom/js/custom.js"></script>
<!-- Hakim loaded this for converter and currency slider -->


</body>
</html>