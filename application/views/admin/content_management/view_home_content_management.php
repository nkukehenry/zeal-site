<?php
if(!$this->session->userdata('id')) {
    redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1><?= $title; ?></h1>
	</div>
</section>

<section class="content" style="min-height:auto;margin-bottom: -30px;">
	<div class="row">
		<div class="col-md-12">
			<?php
            if($this->session->flashdata('error')) {
                ?>
                <div class="callout callout-danger">
                    <p><?php echo $this->session->flashdata('error'); ?></p>
                </div>
                <?php
            }
            if($this->session->flashdata('success')) {
                ?>
                <div class="callout callout-success">
                    <p><?php echo $this->session->flashdata('success'); ?></p>
                </div>
                <?php
            }
            ?>
		</div>
	</div>
</section>


<section class="content">

    <div class="row">
        <div class="col-md-12">
                            
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Home</a></li>
                        <!-- <li><a href="#tab_2" data-toggle="tab">About</a></li>
                        <li><a href="#tab_4" data-toggle="tab">FAQ</a></li>
                        <li><a href="#tab_5" data-toggle="tab">Service</a></li>
                        <li><a href="#tab_7" data-toggle="tab">Testimonial</a></li>
                        <li><a href="#tab_8" data-toggle="tab">News</a></li>
                        <li><a href="#tab_16" data-toggle="tab">Event</a></li>
                        <li><a href="#tab_9" data-toggle="tab">Contact</a></li>
                        <li><a href="#tab_10" data-toggle="tab">Search</a></li>
                        <li><a href="#tab_11" data-toggle="tab">Terms</a></li>
                        <li><a href="#tab_12" data-toggle="tab">Privacy</a></li>
                        <li><a href="#tab_14" data-toggle="tab">Team</a></li>
                        <li><a href="#tab_15" data-toggle="tab">Portfolio</a></li> -->

                    </ul>
                    <div class="tab-content">
                        

                        <div class="tab-pane active" id="tab_1">

                            <!-- Home Content Management Header Section start -->
                            <h3 class="sec_title">Home Content Management - Header Section</h3>
                            <?php echo form_open(base_url().'admin/home_content_management/update_home_content/'.$home_currency_section_headers['id'],array('class' => 'form-horizontal')); ?>
                                <!-- Hidden input holds the table -->
                                <input type="hidden" name="hidden_table" value="tbl_home_currency_section_headers">
                                <!-- Hidden input holds the table -->

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"> Top Header </label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" name="top_header" style="height:60px;"><?php echo $home_currency_section_headers['top_header']; ?></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <blockquote class="blockquote">
                                            <header> <small class="text text-primary"> Current Top Header </small></header>
                                            <p><?php echo $home_currency_section_headers['top_header']; ?></p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"> Secont Header </label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" name="second_header" style="height:60px;"><?php echo $home_currency_section_headers['second_header']; ?></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <blockquote class="blockquote">
                                            <header> <small class="text text-primary"> Current Second Header </small></header>
                                            <p><?php echo $home_currency_section_headers['second_header']; ?></p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"> Third Header </label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" name="third_header" style="height:60px;"><?php echo $home_currency_section_headers['third_header']; ?></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <blockquote class="blockquote">
                                            <header> <small class="text text-primary"> Current Third Header </small></header>
                                            <p><?php echo $home_currency_section_headers['third_header']; ?></p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"> Button Text </label>
                                    <div class="col-sm-4">
                                        <input type="text" name="contact_us_button_text" class="form-control" value="<?php echo $home_currency_section_headers['contact_us_button_text']; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <blockquote class="blockquote">
                                            <header> <small class="text text-primary"> Current Button </small></header>
                                            <p><?php echo $home_currency_section_headers['contact_us_button_text']; ?></p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"> Button Text </label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" name="contact_us_button_url" style="height:60px;"><?php echo $home_currency_section_headers['contact_us_button_url']; ?></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <blockquote class="blockquote">
                                            <header> <small class="text text-primary"> Current Button Link </small></header>
                                            <p><?php echo $home_currency_section_headers['contact_us_button_url']; ?></p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home">Update</button>
                                    </div>
                                </div> 

                            <?php echo form_close(); ?>


                            <!-- Home Content Management About Us Section start -->
                            <h3 class="sec_title">Home Content Management - About Us Section</h3>
                            <?php echo form_open_multipart(base_url().'admin/home_content_management/update_home_content/'.$home_about_us_section['id'].'/'.$home_about_us_section['about_us_image'],array('class' => 'form-horizontal')); ?>

                                <!-- Hidden input holds the table -->
                                <input type="hidden" name="hidden_table" value="tbl_home_about_section">
                                <!-- Hidden input holds the table -->

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"> Top Header </label>
                                    <div class="col-sm-4">
                                        <input type="text" name="about_us_top_header" class="form-control" value="<?php echo $home_about_us_section['about_us_top_header']; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <blockquote class="blockquote">
                                            <header> <small class="text text-primary"> Current Top Header </small></header>
                                            <p><?php echo $home_about_us_section['about_us_top_header']; ?></p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"> Second Header </label>
                                    <div class="col-sm-4">
                                        <input type="text" name="about_us_second_header" class="form-control" value="<?php echo $home_about_us_section['about_us_second_header']; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <blockquote class="blockquote">
                                            <header> <small class="text text-primary"> Current Second Header </small></header>
                                            <p><?php echo $home_about_us_section['about_us_second_header']; ?></p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"> About Us Description </label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" name="about_us_description" style="height:60px;"><?php echo $home_about_us_section['about_us_description']; ?></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <blockquote class="blockquote">
                                            <header> <small class="text text-primary"> Current About Us Description </small></header>
                                            <p><?php echo $home_about_us_section['about_us_description']; ?></p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"> Rates Header </label>
                                    <div class="col-sm-4">
                                        <input type="text" name="about_us_rates_header" class="form-control" value="<?php echo $home_about_us_section['about_us_rates_header']; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <blockquote class="blockquote">
                                            <header> <small class="text text-primary"> Current Rates Header </small></header>
                                            <p><?php echo $home_about_us_section['about_us_rates_header']; ?></p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"> Rates Description </label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" name="about_us_rates_description" style="height:60px;"><?php echo $home_about_us_section['about_us_rates_description']; ?></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <blockquote class="blockquote">
                                            <header> <small class="text text-primary"> Current Rates Description </small></header>
                                            <p><?php echo $home_about_us_section['about_us_rates_description']; ?></p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"> Attention Header </label>
                                    <div class="col-sm-4">
                                        <input type="text" name="about_us_attention_header" class="form-control" value="<?php echo $home_about_us_section['about_us_attention_header']; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <blockquote class="blockquote">
                                            <header> <small class="text text-primary"> Current Attention Header </small></header>
                                            <p><?php echo $home_about_us_section['about_us_attention_header']; ?></p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"> Attention Description </label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" name="about_us_attention_description" style="height:60px;"><?php echo $home_about_us_section['about_us_attention_description']; ?></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <blockquote class="blockquote">
                                            <header> <small class="text text-primary"> Current Attention Description </small></header>
                                            <p><?php echo $home_about_us_section['about_us_attention_description']; ?></p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"> About Us Image </label>
                                    <div class="col-sm-4">
                                        <input type="file" name="userfile" class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <blockquote class="blockquote">
                                            <header> <small class="text text-primary"> Current Image </small></header>
                                            <p><img src="<?php echo base_url();?>assets/site/img/hero/<?php echo $home_about_us_section['about_us_image']; ?>" alt="" width="80px"></p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"> Button Text </label>
                                    <div class="col-sm-4">
                                        <input type="text" name="about_us_button_text" class="form-control" value="<?php echo $home_about_us_section['about_us_button_text']; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <blockquote class="blockquote">
                                            <header> <small class="text text-primary"> Current Button Text </small></header>
                                            <p><?php echo $home_about_us_section['about_us_button_text']; ?></p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"> Button Link </label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" name="about_us_button_link" style="height:60px;"><?php echo $home_about_us_section['about_us_button_link']; ?></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <blockquote class="blockquote">
                                            <header> <small class="text text-primary"> Current Button Link </small></header>
                                            <p><?php echo $home_about_us_section['about_us_button_link']; ?></p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home">Update</button>
                                    </div>
                                </div> 
                            <?php echo form_close(); ?>


                            <!-- Home Content Management We are Flexible Section Headers start -->
                            <h3 class="sec_title">Home Content Management - We are flexible Section Headers</h3>
                            <?php echo form_open_multipart(base_url().'admin/home_content_management/update_home_content/'.$home_about_us_section['id'], array('class' => 'form-horizontal')); ?>

                                <!-- Hidden input holds the table -->
                                <input type="hidden" name="hidden_table" value="tbl_home_we_are_flexible_headers">
                                <!-- Hidden input holds the table -->

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"> Top Header </label>
                                    <div class="col-sm-4">
                                        <input type="text" name="home_we_are_flexible_top_header" class="form-control" value="<?php echo $home_we_are_flexible_headers['home_we_are_flexible_top_header']; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <blockquote class="blockquote">
                                            <header> <small class="text text-primary"> Current Top Header </small></header>
                                            <p><?php echo $home_we_are_flexible_headers['home_we_are_flexible_top_header']; ?></p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"> Second Header </label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" name="home_we_are_flexible_second_header" style="height:60px;"><?php echo $home_we_are_flexible_headers['home_we_are_flexible_second_header']; ?></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <blockquote class="blockquote">
                                            <header> <small class="text text-primary"> Current Second Header </small></header>
                                            <p><?php echo $home_we_are_flexible_headers['home_we_are_flexible_second_header']; ?></p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home">Update</button>
                                    </div>
                                </div> 
                            <?php echo form_close(); ?>


                            <!-- Home Content Management We are Flexible Section Content start -->
                            <h3 class="sec_title">Home Content Management - We are flexible Section Content</h3>
                            <div class="row">

                                <div class="col-lg-6"  id="add_form">
                                    <?php echo form_open_multipart(base_url().'admin/home_content_management/add_home_content/' ,array('class' => 'form-horizontal')); ?>

                                        <!-- Hidden input holds the table -->
                                        <input type="hidden" name="hidden_table" value="tbl_home_we_are_flexible_content">
                                        <!-- Hidden input holds the table -->

                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label"> Content Header </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="content_header" class="form-control" value="" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label"> Content Description </label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" name="content_description" style="height:60px;" required></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label"> Button Text </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="content_button_text" class="form-control" value="" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label"> Content Icon </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="content_icon" class="form-control" value="" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label"> Button url </label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" name="content_button_url" style="height:60px;" required></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-4"></label>
                                            <div class="col-sm-8">
                                                <button type="submit" class="btn btn-success pull-left" name="form_home">Add One</button>
                                            </div>
                                        </div> 
                                    <?php echo form_close(); ?>
                                </div>

                                <div class="col-lg-12">
                                    <table class="table table-striped" id="table">
                                        <?php foreach($home_we_are_flexible_content as $content): ?>
                                            <?php echo form_open_multipart(base_url().'admin/home_content_management/update_home_content/'.$content['id'], array('class' => 'form-horizontal')); ?>
                                                    
                                                    <!-- Hidden input holds the table -->
                                                    <input type="hidden" name="hidden_table" value="tbl_home_we_are_flexible_content">
                                                    <!-- Hidden input holds the table -->

                                                <tr class="table-header" id="table_row<?php echo $content['id']; ?>">
                                                    <td id="content_header">
                                                        <div class="form-group">
                                                            <!-- <div class="col-sm-8"> -->
                                                                <input type="text" name="content_header" id="form_content_header" class="form-control" value="<?php echo $content['content_header']; ?>">
                                                            <!-- </div> -->
                                                        </div>
                                                    </td>
                                                    <td id="content_description" style="width: 250px;">
                                                        <div class="form-group">
                                                            <!-- <div class="col-sm-8"> -->
                                                                <textarea class="form-control" name="content_description" id="form_content_button_url" style="height:60px;"><?php echo $content['content_description']; ?></textarea>
                                                            <!-- </div> -->
                                                        </div>
                                                    </td>
                                                    <td id="content_icon">
                                                        <div class="form-group">
                                                            <!-- <div class="col-sm-8"> -->
                                                                <input type="text" name="content_icon" id="form_content_header" class="form-control" value="<?php echo $content['content_icon']; ?>">
                                                            <!-- </div> -->
                                                        </div>
                                                    </td>
                                                    <td id="content_button_text">
                                                        <div class="form-group">
                                                            <!-- <div class="col-sm-8"> -->
                                                                <input type="text" name="content_button_text" id="form_content_header" class="form-control" value="<?php echo $content['content_button_text']; ?>">
                                                            <!-- </div> -->
                                                        </div>
                                                    </td>
                                                    <td id="content_button_url">
                                                        <div class="form-group">
                                                            <!-- <div class="col-sm-8"> -->
                                                                <textarea class="form-control" name="content_button_url" id="form_content_button_url" style="height:60px;"><?php echo $content['content_button_url']; ?></textarea>
                                                            <!-- </div> -->
                                                        </div>
                                                    </td>
                                                    <td><button data-content="<?php echo $content['id']; ?>" class="btn btn-info btn-xs show-update-form">Update</button></td>
                                                    <td><a href="<?php echo base_url(); ?>admin/home_content_management/delete_home_content/<?php echo $content['id'].'/tbl_home_we_are_flexible_content'; ?>" class="btn btn-danger btn-xs">Delete</a></td>
                                                </tr>
                                            <?php echo form_close(); ?>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                            </div>



                            <!-- Home Content Management Why Choose Us Section Top Content Start -->
                            <h3 class="sec_title">Home Content Management - Why Choose Us Section Top Content</h3>
                            <?php echo form_open_multipart(base_url().'admin/home_content_management/update_home_content/'.$home_why_choose_us_top_content['id'], array('class' => 'form-horizontal')); ?>

                                <!-- Hidden input holds the table -->
                                <input type="hidden" name="hidden_table" value="tbl_home_why_choose_us_top_content">
                                <!-- Hidden input holds the table -->

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"> Main Header </label>
                                    <div class="col-sm-4">
                                        <input type="text" name="main_header" class="form-control" value="<?php echo $home_why_choose_us_top_content['main_header']; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <blockquote class="blockquote">
                                            <header> <small class="text text-primary"> Current Main Header </small></header>
                                            <p><?php echo $home_why_choose_us_top_content['main_header']; ?></p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"> Second Header </label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" name="second_header" style="height:60px;"><?php echo $home_why_choose_us_top_content['second_header']; ?></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <blockquote class="blockquote">
                                            <header> <small class="text text-primary"> Current Second Header </small></header>
                                            <p><?php echo $home_why_choose_us_top_content['second_header']; ?></p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"> Main Description </label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" name="main_description" style="height:60px;"><?php echo $home_why_choose_us_top_content['main_description']; ?></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <blockquote class="blockquote">
                                            <header> <small class="text text-primary"> Current Main Description </small></header>
                                            <p><?php echo $home_why_choose_us_top_content['main_description']; ?></p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home">Update</button>
                                    </div>
                                </div> 
                            <?php echo form_close(); ?>



                            <!-- Home Content Management Why Choose Us Section Services Start -->
                            <h3 class="sec_title">Home Content Management - Why Choose Us Section Services</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <table class="table table-striped" id="table">
                                        <?php foreach($home_why_choose_us_services as $service): ?>
                                            <?php echo form_open_multipart(base_url().'admin/home_content_management/update_home_content/'.$service['id'], array('class' => 'form-horizontal')); ?>
                                                    
                                                    <!-- Hidden input holds the table -->
                                                    <input type="hidden" name="hidden_table" value="tbl_home_why_choose_us_services">
                                                    <!-- Hidden input holds the table -->

                                                <tr class="table-header">
                                                    <td>
                                                        <div class="form-group">
                                                            <!-- <div class="col-sm-8"> -->
                                                                <input type="text" name="service_header" id="form_content_header" class="form-control" value="<?php echo $service['service_header']; ?>">
                                                            <!-- </div> -->
                                                        </div>
                                                    </td>
                                                    <td style="width: 500px;">
                                                        <div class="form-group">
                                                            <!-- <div class="col-sm-8"> -->
                                                                <textarea class="form-control" name="service_description" id="form_content_button_url" style="height:60px;"><?php echo $service['service_description']; ?></textarea>
                                                            <!-- </div> -->
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <!-- <div class="col-sm-8"> -->
                                                                <input type="text" name="service_icon" id="form_content_header" class="form-control" value="<?php echo $service['service_icon']; ?>" disabled>
                                                            <!-- </div> -->
                                                        </div>
                                                    </td>
    
                                                    <td><button class="btn btn-info btn-xs show-update-form">Update</button></td>
                                                    <td><a href="<?php echo base_url(); ?>admin/home_content_management/delete_home_content/<?php echo $service['id'].'/tbl_home_why_choose_us_services'; ?>" class="btn btn-danger btn-xs">Delete</a></td>
                                                </tr>
                                            <?php echo form_close(); ?>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                            </div>




                            <!-- Home Content Management Why Choose Us Section Images Start -->
                            <h3 class="sec_title">Home Content Management - Why Choose Us Section Images</h3>

                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"> Choose Image </label>
                                        <div class="col-sm-4">
                                            <select id="choose_image" class="form-control">
                                                <option selected disabled>Choose Image To Update</option>
                                                <option value="1" class="text text-info">Image One</option>
                                                <option value="2" class="text text-info">Image Two</option>
                                                <option value="3" class="text text-info">Image Three</option>
                                            </select>

                                            <div id="form_1" style="display: none;">
                                            <?php echo form_open_multipart(base_url().'admin/home_content_management/update_home_content/'.$home_why_choose_us_images['id'].'/'.$home_why_choose_us_images['choose_image_1'], array('class' => 'form-horizontal')); ?>
                                                <!-- Hidden input holds the table -->
                                                <input type="hidden" name="hidden_table" value="tbl_home_why_choose_us_images_and_shapes">
                                                <input type="hidden" name="hidden_image" value="1">
                                                <!-- Hidden input holds the table -->

                                                <div class="form-group">
                                                    <div class="col-sm-4">
                                                        <br>
                                                        <input type="file" name="userfile" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="" class="col-sm-2"></label>
                                                    <div class="col-sm-6">
                                                        <button type="submit" class="btn btn-success pull-left" name="form_home">Update</button>
                                                    </div>
                                                </div> 
                                            <?php echo form_close(); ?>
                                            </div>

                                            <div id="form_2" style="display: none;">
                                            <?php echo form_open_multipart(base_url().'admin/home_content_management/update_home_content/'.$home_why_choose_us_images['id'].'/'.$home_why_choose_us_images['choose_image_2'], array('class' => 'form-horizontal')); ?>
                                                <!-- Hidden input holds the table -->
                                                <input type="hidden" name="hidden_table" value="tbl_home_why_choose_us_images_and_shapes">
                                                <input type="hidden" name="hidden_image" value="2">
                                                <!-- Hidden input holds the table -->

                                                <div class="form-group">
                                                    <div class="col-sm-4">
                                                        <br>
                                                        <input type="file" name="userfile" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="" class="col-sm-2"></label>
                                                    <div class="col-sm-6">
                                                        <button type="submit" class="btn btn-success pull-left" name="form_home">Update</button>
                                                    </div>
                                                </div> 
                                            <?php echo form_close(); ?>
                                            </div>

                                            <div id="form_3" style="display: none;">
                                            <?php echo form_open_multipart(base_url().'admin/home_content_management/update_home_content/'.$home_why_choose_us_images['id'].'/'.$home_why_choose_us_images['choose_image_3'], array('class' => 'form-horizontal')); ?>
                                                <!-- Hidden input holds the table -->
                                                <input type="hidden" name="hidden_table" value="tbl_home_why_choose_us_images_and_shapes">
                                                <input type="hidden" name="hidden_image" value="3">
                                                <!-- Hidden input holds the table -->

                                                <div class="form-group">
                                                    <div class="col-sm-4">
                                                        <br>
                                                        <input type="file" name="userfile" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="" class="col-sm-2"></label>
                                                    <div class="col-sm-6">
                                                        <button type="submit" class="btn btn-success pull-left" name="form_home">Update</button>
                                                    </div>
                                                </div> 
                                            <?php echo form_close(); ?>
                                            </div>

                                        </div>
                                        <div class="col-sm-6">
                                            <blockquote class="blockquote">
                                                <header> <small class="text text-primary"> Current Images </small></header>
                                                <p>
                                                    <img src="<?php echo base_url();?>assets/site/img/why-choose-us/<?php echo $home_why_choose_us_images['choose_image_1']; ?>" alt="" width="90px" id="image_1">
                                                    <img src="<?php echo base_url();?>assets/site/img/why-choose-us/<?php echo $home_why_choose_us_images['choose_image_2']; ?>" alt="" width="90px" id="image_2">
                                                    <img src="<?php echo base_url();?>assets/site/img/why-choose-us/<?php echo $home_why_choose_us_images['choose_image_3']; ?>" alt="" width="90px" id="image_3">
                                                </p>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>





                            <!-- Home Content Management More Benefits start -->
                            <h3 class="sec_title">Home Content Management - More Benefits Section Headers</h3>
                            <?php echo form_open_multipart(base_url().'admin/home_content_management/update_home_content/'.$home_more_benefits_headers['id'], array('class' => 'form-horizontal')); ?>

                                <!-- Hidden input holds the table -->
                                <input type="hidden" name="hidden_table" value="tbl_home_more_benefits_headers">
                                <!-- Hidden input holds the table -->

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"> Top Header </label>
                                    <div class="col-sm-4">
                                        <input type="text" name="benefits_main_header" class="form-control" value="<?php echo $home_more_benefits_headers['benefits_main_header']; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <blockquote class="blockquote">
                                            <header> <small class="text text-primary"> Current Top Header </small></header>
                                            <p><?php echo $home_more_benefits_headers['benefits_main_header']; ?></p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"> Second Header </label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" name="benefits_second_header" style="height:60px;"><?php echo $home_more_benefits_headers['benefits_second_header']; ?></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <blockquote class="blockquote">
                                            <header> <small class="text text-primary"> Current Second Header </small></header>
                                            <p><?php echo $home_more_benefits_headers['benefits_second_header']; ?></p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home">Update</button>
                                    </div>
                                </div> 
                            <?php echo form_close(); ?>




                            <!-- Home Content Management More Benefits Content Start -->
                            <h3 class="sec_title">Home Content Management - More Benefits Content Section</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <table class="table table-striped" id="table">
                                        <?php foreach($home_more_benefits_content as $benefits): ?>
                                            <?php echo form_open_multipart(base_url().'admin/home_content_management/update_home_content/'.$benefits['id'], array('class' => 'form-horizontal')); ?>
                                                    
                                                    <!-- Hidden input holds the table -->
                                                    <input type="hidden" name="hidden_table" value="tbl_home_more_benefits_content">
                                                    <!-- Hidden input holds the table -->

                                                <tr class="table-header">
                                                    <td>
                                                        <div class="form-group">
                                                            <!-- <div class="col-sm-8"> -->
                                                                <input type="text" name="benefits_content_header" id="form_content_header" class="form-control" value="<?php echo $benefits['benefits_content_header']; ?>">
                                                            <!-- </div> -->
                                                        </div>
                                                    </td>
                                                    <td style="width: 500px;">
                                                        <div class="form-group">
                                                            <!-- <div class="col-sm-8"> -->
                                                                <textarea class="form-control" name="benefits_content_description" id="form_content_button_url" style="height:60px;"><?php echo $benefits['benefits_content_description']; ?></textarea>
                                                            <!-- </div> -->
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <!-- <div class="col-sm-8"> -->
                                                                <input type="text" name="benefits_content_icon" id="form_content_header" class="form-control" value="<?php echo $benefits['benefits_content_icon']; ?>" disabled>
                                                            <!-- </div> -->
                                                        </div>
                                                    </td>
    
                                                    <td><button class="btn btn-info btn-xs show-update-form">Update</button></td>
                                                    <td><a href="<?php echo base_url(); ?>admin/home_content_management/delete_home_content/<?php echo $benefits['id'].'/tbl_home_more_benefits_content'; ?>" class="btn btn-danger btn-xs">Delete</a></td>
                                                </tr>
                                            <?php echo form_close(); ?>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                            </div>



                            <!-- Home Content Management Our Review Headers Starts -->
                            <h3 class="sec_title">Home Content Management - Our Reviews Section Headers</h3>
                            <?php echo form_open_multipart(base_url().'admin/home_content_management/update_home_content/'.$home_our_review_headers['id'], array('class' => 'form-horizontal')); ?>

                                <!-- Hidden input holds the table -->
                                <input type="hidden" name="hidden_table" value="tbl_home_our_review_headers">
                                <!-- Hidden input holds the table -->

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"> Top Header </label>
                                    <div class="col-sm-4">
                                        <input type="text" name="our_review_main_header" class="form-control" value="<?php echo $home_our_review_headers['our_review_main_header']; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <blockquote class="blockquote">
                                            <header> <small class="text text-primary"> Current Top Header </small></header>
                                            <p><?php echo $home_our_review_headers['our_review_main_header']; ?></p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"> Second Header </label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" name="our_review_second_header" style="height:60px;"><?php echo $home_our_review_headers['our_review_second_header']; ?></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <blockquote class="blockquote">
                                            <header> <small class="text text-primary"> Current Second Header </small></header>
                                            <p><?php echo $home_our_review_headers['our_review_second_header']; ?></p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home">Update</button>
                                    </div>
                                </div> 
                            <?php echo form_close(); ?>




                            <!-- Home Content Management Our Reviews Content start -->
                            <h3 class="sec_title">Home Content Management - Our Reviews Section Comments</h3>
                            <div class="row">

                                <div class="col-lg-6"  id="add_form">
                                    <?php echo form_open_multipart(base_url().'admin/home_content_management/add_home_content/' ,array('class' => 'form-horizontal')); ?>

                                        <!-- Hidden input holds the table -->
                                        <input type="hidden" name="hidden_table" value="tbl_home_our_review_content">
                                        <input type="hidden" name="hidden_image" value="comment">
                                        <!-- Hidden input holds the table -->

                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label"> Client Name </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="our_review_client_name" class="form-control" value="" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label"> Reviews Comment </label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" name="our_review_client_comment" style="height:60px;" required></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label"> Client Roll </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="our_review_client_roll" class="form-control" value="" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label"> Section Icon </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="our_review_icon" class="form-control" value="" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label"> Client Image </label>
                                            <div class="col-sm-8">
                                                <input type="file" name="userfile" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-4"></label>
                                            <div class="col-sm-8">
                                                <button type="submit" class="btn btn-success pull-left" name="form_home">Add One</button>
                                            </div>
                                        </div> 
                                    <?php echo form_close(); ?>
                                </div>

                                <div class="col-lg-12">
                                    <table class="table table-striped" id="table">
                                        <?php foreach($home_our_review_content as $review): ?>
                                            <?php echo form_open_multipart(base_url().'admin/home_content_management/update_home_content/'.$review['id'].'/'.$review['our_review_client_image'], array('class' => 'form-horizontal')); ?>
                                                    
                                                    <!-- Hidden input holds the table -->
                                                    <input type="hidden" name="hidden_table" value="tbl_home_our_review_content">
                                                    <input type="hidden" name="hidden_image" value="testimonials">
                                                    <!-- Hidden input holds the table -->

                                                <tr class="table-header">
                                                    <td id="content_header">
                                                        <div class="form-group">
                                                            <!-- <div class="col-sm-8"> -->
                                                                <input type="text" name="our_review_client_name" id="form_content_header" class="form-control" value="<?php echo $review['our_review_client_name']; ?>">
                                                            <!-- </div> -->
                                                        </div>
                                                    </td>
                                                    <td id="content_description" style="width: 250px;">
                                                        <div class="form-group">
                                                            <!-- <div class="col-sm-8"> -->
                                                                <textarea class="form-control" name="our_review_client_comment" style="height:60px;"><?php echo $review['our_review_client_comment']; ?></textarea>
                                                            <!-- </div> -->
                                                        </div>
                                                    </td>
                                                    <td id="content_icon">
                                                        <div class="form-group">
                                                            <!-- <div class="col-sm-8"> -->
                                                                <input type="text" name="our_review_client_roll" id="form_content_header" class="form-control" value="<?php echo $review['our_review_client_roll']; ?>" width="30px">
                                                            <!-- </div> -->
                                                        </div>
                                                    </td>
                                                    <td id="content_button_text">
                                                        <div class="form-group">
                                                            <!-- <div class="col-sm-8"> -->
                                                                <input type="file" name="userfile" class="form-control" width="30px">
                                                            <!-- </div> -->
                                                        </div>
                                                    </td>
                                                    <td id="content_button_url">
                                                        <div class="form-group">
                                                            <!-- <div class="col-sm-8"> -->
                                                                <img src="<?php echo base_url(); ?>assets/site/img/testimonials/<?php echo $review['our_review_client_image']; ?>" alt="" width="40px">
                                                            <!-- </div> -->
                                                        </div>
                                                    </td>
                                                    <td><button data-content="<?php echo $review['id']; ?>" class="btn btn-info btn-xs show-update-form">Update</button></td>
                                                    <td><a href="<?php echo base_url(); ?>admin/home_content_management/delete_home_content/<?php echo $review['id'],'/tbl_home_our_review_content'; ?>" class="btn btn-danger btn-xs">Delete</a></td>
                                                </tr>
                                            <?php echo form_close(); ?>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                            </div>



                            
                            <!-- Home Content Management Our Partners Logos start -->
                            <h3 class="sec_title">Home Content Management - Our Partners Section</h3>
                            <div class="row">

                                <div class="col-lg-6"  id="add_form">
                                    <?php echo form_open_multipart(base_url().'admin/home_content_management/add_home_content/' ,array('class' => 'form-horizontal')); ?>

                                        <!-- Hidden input holds the table -->
                                        <input type="hidden" name="hidden_table" value="tbl_home_partners">
                                        <input type="hidden" name="hidden_image" value="partner">
                                        <!-- Hidden input holds the table -->

                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label"> Partner Name </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="partner_title" class="form-control" value="" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label"> Partner Description </label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" name="partner_description" style="height:60px;" required></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-4 control-label"> Partner Logo </label>
                                            <div class="col-sm-8">
                                                <input type="file" name="userfile" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="col-sm-4"></label>
                                            <div class="col-sm-8">
                                                <button type="submit" class="btn btn-success pull-left" name="form_home">Add One</button>
                                            </div>
                                        </div> 
                                    <?php echo form_close(); ?>
                                </div>

                                <div class="col-lg-12">
                                    <table class="table table-striped" id="table">
                                        <?php foreach($our_partners as $partner): ?>
                                            <?php echo form_open_multipart(base_url().'admin/home_content_management/update_home_content/'.$partner['id'].'/'.$partner['partner_logo'], array('class' => 'form-horizontal')); ?>
                                                    
                                                    <!-- Hidden input holds the table -->
                                                    <input type="hidden" name="hidden_table" value="tbl_home_partners">
                                                    <input type="hidden" name="hidden_image" value="partner">
                                                    <!-- Hidden input holds the table -->

                                                <tr class="table-header">
                                                    <td id="content_header">
                                                        <div class="form-group">
                                                            <!-- <div class="col-sm-8"> -->
                                                                <input type="text" name="partner_title" id="form_content_header" class="form-control" value="<?php echo $partner['partner_title']; ?>">
                                                            <!-- </div> -->
                                                        </div>
                                                    </td>
                                                    <td id="content_description">
                                                        <div class="form-group">
                                                            <!-- <div class="col-sm-8"> -->
                                                                <textarea class="form-control" name="partner_description" style="height:60px;"><?php echo $partner['partner_description']; ?></textarea>
                                                            <!-- </div> -->
                                                        </div>
                                                    </td>
                                                    <!-- <td id="content_icon">
                                                        <div class="form-group"> -->
                                                            <!-- <div class="col-sm-8"> -->
                                                                <!-- <input type="text" name="our_review_client_roll" id="form_content_header" class="form-control" value="<?php //echo $review['our_review_client_roll']; ?>" width="30px"> -->
                                                            <!-- </div> -->
                                                        <!-- </div>
                                                    </td> -->
                                                    <td id="content_button_text">
                                                        <div class="form-group">
                                                            <div class="col-sm-8">
                                                                <input type="file" name="userfile" class="form-control" width="30px">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td id="content_button_url">
                                                        <div class="form-group">
                                                            <!-- <div class="col-sm-8"> -->
                                                                <img src="<?php echo base_url(); ?>assets/site/img/partner/<?php echo $partner['partner_logo']; ?>" alt="" width="80px">
                                                            <!-- </div> -->
                                                        </div>
                                                    </td>
                                                    <td><button data-content="<?php echo $partner['id']; ?>" class="btn btn-info btn-xs show-update-form">Update</button></td>
                                                    <td><a href="<?php echo base_url(); ?>admin/home_content_management/delete_home_content/<?php echo $partner['id'],'/tbl_home_partners'; ?>" class="btn btn-danger btn-xs">Delete</a></td>
                                                </tr>
                                            <?php echo form_close(); ?>
                                        <?php endforeach; ?>
                                    </table>
                                </div>
                            </div>
















                        </div>
                    </div>
                </div>

                
        </div>
    </div>

</section>

<script>



    var choose_image = document.querySelector('#choose_image'); // Choose Image

    var image_1 = document.querySelector('#image_1'); // Choose Image 1
    var image_2 = document.querySelector('#image_2'); // Choose Image 2
    var image_3 = document.querySelector('#image_3'); // Choose Image 3

    var form_1 = document.querySelector('#form_1'); // form 1
    var form_2 = document.querySelector('#form_2'); // form 2
    var form_3 = document.querySelector('#form_3'); // form 3
        
        choose_image.onchange = function(){
            var values = this.value;
            if(values == 1){
                
                image_1.style.display = "unset";
                image_2.style.display = "none";
                image_3.style.display = "none";
                
                form_1.style.display = "unset";
                form_2.style.display = "none";
                form_3.style.display = "none";

            }else if(values == 2){
                image_1.style.display = "none";
                image_2.style.display = "unset";
                image_3.style.display = "none";
                
                form_1.style.display = "none";
                form_2.style.display = "unset";
                form_3.style.display = "none";

            }else if(values == 3){
                
                image_1.style.display = "none";
                image_2.style.display = "none";
                image_3.style.display = "unset";
                
                form_1.style.display = "none";
                form_2.style.display = "none";
                form_3.style.display = "unset";
                
                console.log(values);
            }else{

                image_1.style.display = "unset";
                image_2.style.display = "unset";
                image_3.style.display = "unset";
                
                form_1.style.display = "none";
                form_2.style.display = "none";
                form_3.style.display = "none";

            }
        }







    // var show_update_form = document.querySelectorAll('.show-update-form'); // Edit Button

    // var update_form = document.querySelector('#update_form'); // Update Form
    // var add_form = document.querySelector('#add_form'); // Add Form

    // var table = document.querySelector('#table'); // Table
    // var table_row = document.querySelector('#table_row'); // Table Row

    // var content_header = document.querySelector('#content_header'); // Table Data
    // var content_description = document.querySelector('#content_description'); // Table Data
    // var content_icon = document.querySelector('#content_icon'); // Table Data
    // var content_button_text = document.querySelector('#content_button_text'); // Table Data
    // var content_button_url = document.querySelector('#content_button_url'); // Table Data

    // var form_content_header = document.querySelector('#form_content_header'); // Input
    // var form_content_description = document.querySelector('#form_content_description'); // Input
    // var form_content_icon = document.querySelector('#form_content_icon'); // Input
    // var form_content_button_text = document.querySelector('#form_content_button_text'); // Input
    // var form_content_button_url = document.querySelector('#form_content_button_url'); // Input

    //     show_update_form.forEach(function(myBtn){

    //         myBtn.onclick = function(){

    //             var t = table[0];
    //             for(var r = 0; r < t.rows.length; r++){

    //                 alert(t.rows[r].cells[2].innerHTML);

    //             }

    //         }
    //     });

    //     var t = table[0];
    //     for(var r = 0; r < t.rows.length; r++){

    //         alert(t.rows[r].cells[2].innerHTML);

    //     }

</script>