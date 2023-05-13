

<!--Single-Service Start-->
<div class="single-service-area pt_0 pb_0">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-4">
                <div class="service-sidebar">
                    
                    <div class="single-ser-carousel owl-carousel">
                        <div class="event-photo-item">
                            <img src="<?php echo base_url(); ?>public/uploads/<?php echo $service['photo']; ?>" alt="Service Photo">
                        </div>
                    </div>
                    

                    <div class="service-sidebar-item headstyle">
                        <h4><?php echo $setting['sidebar_service_heading_service']; ?></h4>
                        <ul>
                            <?php
                            foreach ($services as $row) {
                                ?>
                                <li><a href="<?php echo base_url(); ?>service/view/<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col-lg-8">
                <div class="service-info">
                    
                    <h2><?php echo $service['name']; ?></h2>
                    <?php echo $service['description']; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Single-Service End-->