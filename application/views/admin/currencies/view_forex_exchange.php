<?php
if(!$this->session->userdata('id')) {
    redirect(base_url().'admin/login');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1><?= $title; ?></h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/Currencies/add_currencies_data" class="btn btn-primary btn-sm">Add New</a>
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

       <div class="box box-info">
        
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
			<thead>
			    <tr>
			        <th>#</th>
			        <th>Currency Name</th>
			        <th>Currency</th>
			        <th>Flag</th>
			        <th>Status</th>
			        <th>Action</th>
			    </tr>
			</thead>
            <tbody>
            	<?php
            	$i=0;
            	foreach ($forex_exchange as $row) {
            		$i++;
            		?>
                    <?php if($row['is_forex'] == 1): ?>
					<tr>
	                    <td><?php echo $i; ?></td>
	                    <td><?php echo $row['currency_name']; ?></td>
	                    <td><?php echo $row['currency']; ?></td>
	                    <td><img src="<?php echo base_url(); ?>assets/site/custom/flags/4x3/<?php echo $row['currency_icon']; ?>.svg" alt="flag" width="40px;" ></td>
                        <?php if($row['is_forex'] == 1): ?>
	                    <td><p class="badge">Forex Exchange</p></td>
                        <?php endif; ?>
	                    <td>
	                        <a href="<?php echo base_url(); ?>admin/portfolio_category/edit/<?php //echo $row['category_id']; ?>" class="btn btn-primary btn-xs">Edit</a>
                            <a href="<?php echo base_url(); ?>admin/portfolio_category/delete/<?php //echo $row['category_id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Delete</a>
	                    </td>
	                </tr>
                    <?php endif; ?>
            		<?php
            	}
            	?>
            </tbody>
          </table>
        </div>
      </div>
  

</section>