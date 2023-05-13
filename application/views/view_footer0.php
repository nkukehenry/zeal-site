


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
                        <h3><?php echo $setting['footer_col1_title']; ?></h3>
                        <div class="newsletter" style="border:none!important">
                            
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



    <!--Scroll-Top-->
    <div class="scroll-top">
        <i class="fa fa-angle-up"></i>
    </div>
    <!--Scroll-Top-->

    <!--Js-->
    <script src="<?php echo base_url(); ?>public/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.meanmenu.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.filterizr.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/viewportchecker.js"></script>
    <script src="<?php echo base_url(); ?>public/js/custom.js"></script>

</body>
</html>