
<div class="content-wrapper">

<div class="breadcrumb-wrap bg-f br-1" style="margin-top: -70px!important;">>
<div class="container">
<div class="breadcrumb-title">
<h2><?php echo $page_contact['contact_page_title']; ?></h2>
<ul class="breadcrumb-menu list-style">
<li><a href="index-2.html">Home </a></li>
<li><?php echo $page_contact['contact_page_title']; ?></li>
</ul>
</div>
</div>
</div>


<section class="contact-us-wrap ptb-100" id="location">
<div class="container">
<div class="row justify-content-center"  >
<div class="col-xl-4 col-lg-6 col-md-6">
<div class="contact-item">
<span class="contact-icon">
<i class="ri-map-pin-line"></i>
</span>
<div class="contact-info">

    <h3><?php echo $page_contact['address_title']; ?></h3>
    <?php if(!empty($page_contact['address_2'])){ echo "<p>".$page_contact['address_1']."</p><hr>";}else{ echo "<p>".$page_contact['address_1']."</p>"; }?>
    <?php if(!empty($page_contact['address_3'])){ echo "<p>".$page_contact['address_2']."</p><hr>";}else{ echo "<p>".$page_contact['address_2']."</p>"; }?>
    <?php echo "<p>".$page_contact['address_3']."</p>"; ?>

</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-6">
<div class="contact-item">
<span class="contact-icon">
<i class="ri-mail-send-line"></i>
</span>
<div class="contact-info">

    <?php 

        $emails = array(
            $page_contact['email_1'],
            $page_contact['email_2'],
            $page_contact['email_3'],
            $page_contact['email_4'],
            $page_contact['email_5'],
        );
    
    ?>
    <h3><?php echo $page_contact['emails_title']; ?></h3>
    <?php foreach($emails as $email): ?>
        <?php if(!empty($email)){ ?>
        <a href="mailto:<?php echo $email; ?>"><span class="__cf_email__" ><?php echo $email; ?></span></a>
        <?php } ?>
    <?php endforeach; ?>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-6">
<div class="contact-item">
<span class="contact-icon">
<i class="ri-phone-line"></i>
</span>
<div class="contact-info">

    <?php 

    $phones = array(
        $page_contact['phone_1'],
        $page_contact['phone_2'],
        $page_contact['phone_3'],
        $page_contact['phone_4'],
        $page_contact['phone_5'],
    );

    ?>

    <h3><?php echo $page_contact['phones_title']; ?></h3>
    <?php foreach($phones as $phone): ?>
        <?php if(!empty($phone)){ ?>
        <a href="tel:<?php echo $phone; ?>"><span class="__cf_email__" ><?php echo $phone; ?></span></a>
        <?php } ?>
    <?php endforeach; ?>


</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-7">
<div class="contact-form">
<form class="form-wrap" id="contactForm">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input type="text" name="name" placeholder="Name*" id="name" required data-error="Please enter your name">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="email" name="email" id="email" required placeholder="Email*" data-error="Please enter your email">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="text" name="phone_number" placeholder="Phone*" id="phone_number" required data-error="Please enter your phone number">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="text" name="msg_subject" placeholder="Subject*" id="msg_subject" required data-error="Please enter your subject">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12">
<div class="form-group v1">
<textarea name="message" id="message" placeholder="Your Messages.." cols="30" rows="10" required data-error="Please enter your message"></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="form-group">
<div class="form-check checkbox">
<input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required>
<label class="form-check-label" for="gridCheck">
I agree to the <a class="link style1" href="terms-of-service.html">Terms &amp; Conditions</a> and <a class="link style1" href="privacy-policy.html">Privacy Policy</a>
</label>
<div class="help-block with-errors gridCheck-error"></div>
</div>
</div>
<div class="col-md-12">
<button type="submit" class="btn style1">SEND MESSAGE<i class="ri-arrow-right-s-line"></i></button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</div>
<div class="col-lg-5">
<div class="comp-map" style="border:8px solid #EEEEEE; border-radius:6px;">
 <?php echo $page_contact['contact_map']; ?>
</div>
</div>
</div>
</div>
</section>

</div>
