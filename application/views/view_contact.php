
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




<?php echo form_open_multipart(base_url().'contact/send_email' ,array('class' => 'comment-form', 'id' => 'contactus')); ?>
<div class="row">
<?php 

    if($this->session->flashdata('error')) {
            echo '<div class="col-lg-12 alert alert-danger">'.$this->session->flashdata('error').'</div>';
    }
    if($this->session->flashdata('success')) {
            echo '<div class="col-lg-12 alert alert-success">'.$this->session->flashdata('success').'</div>';
    }

?>

<div class="col-md-6">
<div class="form-group">
    <label for="">Name <span class="link style1">*</span></label>
<input type="text" name="name" class="form-control" id="name" required="required" data-error="Please enter your name" style="border-radius: 0px;">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="">Email <span class="link style1">*</span></label>
<input type="email" name="email" class="form-control" id="email" required="required" data-error="Please enter your email" style="border-radius: 0px;">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="">Phone <span class="link style1">*</span></label>
<input type="text" name="phone" class="form-control" id="phone_number" required="required" data-error="Please enter your phone number" style="border-radius: 0px;">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="">Subject <span class="link style1">*</span></label>
<input type="text" name="subject" class="form-control" id="msg_subject" required="required" data-error="Please enter your subject" style="border-radius: 0px;">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label for="">Message <span class="link style1">*</span></label>
<textarea name="message" class="form-control" id="message" cols="30" rows="10"  required="required" data-error="Please enter your message" style="border-radius: 0px; padding: 10px;"></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="form-group">
<div class="form-check checkbox">
<input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required="required">
<label class="form-check-label" for="gridCheck">
I agree to the <a class="link style1" href="">Terms &amp; Conditions</a> and <a class="link style1" href="privacy-policy.html">Privacy Policy</a>
</label>
<div class="help-block with-errors gridCheck-error"></div>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
    <label for="">Confirm you're human.  2 + 3 = ?</label>
<input type="text" name="confirm" class="form-control" placeholder="Enter your answer here" maxlength="2" id="confirm" required="required" data-error="Please enter your answer" style="border-radius: 0px;">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label for=""></label>
    <button type="submit" name="form_contact" class="btn style1 bg-link">SEND MESSAGE<i class="ri-arrow-right-s-line"></i></button>
    </div>
<div class="clearfix"></div>
</div>
</div>
<?php echo form_close(); ?>





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

<!-- <script>
    var contact = document.getElementById('contact');
    var confirm = document.getElementById('confirm');
        contact.onsubmit = function(){
            if(confirm.value != 5){
                // Redirect to another page
                window.location.href = "<?php //echo base_url();?>contact";
            }
        }
</script> -->
