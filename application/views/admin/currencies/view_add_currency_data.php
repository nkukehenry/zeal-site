	<!-- Hakim Modifications -->
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/custom/css/best.css"> -->
	<!-- Hakim Modifications -->


<?php

if(!$this->session->userdata('id')) {
    redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1><?= $title; ?></h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/currencies/currency_sending" class="btn btn-primary btn-sm">View Currencies Sending</a>
		<a href="<?php echo base_url(); ?>admin/currencies/forex_exchange" class="btn btn-primary btn-sm">View Forex Exchange</a>
	</div>
</section>


<section class="content">

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

			<?php echo form_open_multipart(base_url().'admin/Currencies/add_currencies_data',array('class' => 'form-horizontal')); ?>
				<div class="box box-info">
					<div class="box-body">

					<?php echo validation_errors(); ?>

						<div class="form-group" style="display: none;">
				            <label for="" class="col-sm-2 control-label"> Choose Currency <span>*</span></label>
								<div class="col-sm-3">
									<input id="insert_icon" type="text" name="insert_icon" value="">
									<input id="is_forex" type="number" name="is_forex" value="">
									<input id="country_id" type="number" name="country_id" value="">
								</div>
				        </div>

						<div class="form-group">
				            <label for="" class="col-sm-2 control-label"> Choose Currency <span>*</span></label>
				            <div class="col-sm-3">
									<div class="dropdown">
									<Select class="btn btn-success
											dropdown-toggle" type="button"
											id="dropdownMenuButton"
											data-toggle="dropdown"
											aria-haspopup="true"
											aria-expanded="false">
										<option value="" id="dropdownL"> Choose Currency </option>
									</Select>

									<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style=" height: 300px; overflow-y: scroll;">
										<?php foreach($countries as $country): ?>
											<li data-content="<?php echo strtolower($country['country_name_abriviated']); ?>" class="dropdown-item" value="<?php echo $country['country_id']; ?>" style="padding-left: 16px; padding-right: 16px; padding-top: 10px;"> <img src="<?php echo base_url(); ?>public/admin/custom/flags/4x3/<?php echo $country['country_name_abriviated']; ?>.svg" width="20" height="15"> -- <?php echo $country['currency']; ?>  <?php //echo $country['currency_name']; ?> </li>
										<?php endforeach; ?>
									</ul>

								</div>
				            </div>
				        </div>


                        <!-- <div class="form-group">
				            <label for="" class="col-sm-2 control-label"> <i class="fi fi-ug"></i> Choose Currency <span>*</span></label>
				            <div class="col-sm-6">
				            	<select class="form-control select2" name="choose_currency">
									<option selected disabled>Options</option>
                                    <?php //foreach($countries as $country): ?>
									<option value="<?php //echo $country['country_id']; ?>"><?php //echo $country['country_name_abriviated']; ?> -- <?php //echo $country['country_name']; ?></option>
                                    <?php //endforeach; ?>
								</select>
				            </div>
				        </div> -->

						<div class="form-group">
				            <label for="" class="col-sm-2 control-label"> Choose an Option <span>*</span></label>
				            <div class="col-sm-3">
				            	<select class="form-control select2" name="currency_options" id="check_is_forex">
									<option selected disabled>Options</option>
									<option value="0">Send Currency</option>
									<option value="1">Forex Exchange</option>
								</select>
				            </div>
				        </div>

						

						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
							</div>
						</div>
					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>

</section>



	<!-- Hakim Modifications -->
	<script src="<?php echo base_url(); ?>public/admin/custom/js/best.js"></script>
	<!-- <script src="<?php echo base_url(); ?>public/admin/custom/js/bootstrap.min.js"></script> -->
	<script src="<?php echo base_url(); ?>public/admin/custom/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/custom/js/custom.js"></script>
	<!-- Hakim Modifications -->