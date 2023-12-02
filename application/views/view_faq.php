
<div class="content-wrapper">

<div class="breadcrumb-wrap bg-f br-1" style="margin-top: -70px!important;">
<div class="container">
<div class="breadcrumb-title">
<h2><?php echo $page_content['faq_main_header']; ?></h2>
<ul class="breadcrumb-menu list-style">
<li><a href="<?php base_url(); ?>">Home </a></li>
<li><?php echo $page_content['faq_page_title']; ?></li>
</ul>
</div>
</div>
</div>


<div class="faq-wrap style1 ptb-100">
<div class="container">
<div class="row gx-5 align-items-center">
<div class="col-lg-6">
<div class="faq-img">
<img src="<?php echo base_url(); ?>assets/site/img/about/<?php echo $page_content['faq_main_shape']; ?>" alt="Image" class="faq-shape-one ">
<img src="<?php echo base_url(); ?>assets/site/img/about/<?php echo $page_content['faq_main_image']; ?>" alt="Image" class="moveHorizontal">
</div>
</div>
<div class="col-lg-6">
<div class="faq-content">
<div class="content-title style1 mb-30">
<span><?php echo $page_content['faq_page_title']; ?></span>
<h2><?php echo $page_content['faq_main_header']; ?></h2>
</div>
 <div class="accordion" id="accordionExample">


 <?php foreach($faqs as $faq): ?>
<div class="accordion-item">
<h2 class="accordion-header" id="headingTwo">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo<?php echo $faq->faq_id; ?>" aria-expanded="false" aria-controls="collapseTwo">
<span>
<i class="ri-add-line plus"></i>
<i class="ri-subtract-line minus"></i>
</span>
<?php echo $faq->faq_title; ?>
</button>
</h2>
<div id="collapseTwo<?php echo $faq->faq_id; ?>" class="accordion-collapse collapse <?php //echo $faq->collapse; ?>" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
<div class="accordion-body">
<p><?php echo $faq->faq_content; ?></p>
</div>
</div>
</div>
<?php endforeach; ?>

</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
