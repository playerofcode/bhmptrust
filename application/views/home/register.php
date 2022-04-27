<section class="xs-banner-inner-section parallax-window" style="background-image:url('<?php echo base_url();?>assets/images/flex_mobile.jpg')">
<div class="xs-black-overlay"></div>
<div class="container">
<div class="color-white xs-inner-banner-content">
<h2>Registration Form</h2>
<marquee onmouseover="stop()" onmouseleave="start()"><h3>एक कदम प्रगती की ओर, आओ मिलकर एक कदम बढ़ाये देश-प्रदेश समाज को सवर्णं बनाएं। </h3></marquee>
<ul class="xs-breadcumb">
<li class="badge badge-pill badge-primary"><a href="<?php echo base_url();?>" class="color-white"> Home /</a> Registration Form</li>
</ul>
</div>
</div>
</section>

<main class="xs-main">

<section class="xs-contact-section-v2">
<section class="xs-contact-details">
<div class="container">
<div class="row">
	<div class="col-md-12">
		<?php if($this->session->flashdata('msg')): ?>
                     <div class="alert alert-success"><?php echo $this->session->flashdata('msg');?></div>
                    <?php endif;?>
		<form action="<?php echo base_url('home/registerUser');?>" method="post" enctype="multipart/form-data">
			<div class="row">
			<!-- <div class="form-group col-md-12 mt-3">
				<label>उपयोगकर्ता प्रकार : &nbsp;&nbsp;</label>
				<label for="user_type1"><input type="radio" name="user_type" value="1" id="user_type1">&nbsp;&nbsp;कार्य कारिणी</label> &nbsp;&nbsp;&nbsp;
				<label for="user_type2"><input type="radio" name="user_type" value="2" id="user_type2">&nbsp;&nbsp;Member</label>
			</div> -->
			<input type="hidden" name="user_type" value="2">
			<div class="form-group col-md-6">
				<label>Name <span class="text-danger">*</span></label>
				<input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="<?php echo set_value('name');?>"/>
				<span><?php echo form_error('name'); ?></span>
			</div>
			<div class="form-group col-md-6">
				<label>Mobile Number <span class="text-danger">*</span></label>
				<input type="text" name="mobno" class="form-control" placeholder="Enter Your Mobile Number" value="<?php echo set_value('mobno');?>"/>
				<span><?php echo form_error('mobno'); ?></span>
			</div>
			</div>
			<div class="row">
			<div class="form-group col-md-6">
				<label>Email </label>
				<input type="text" name="email" class="form-control" placeholder="Enter Your Email" value="<?php echo set_value('email');?>"/>
				<span><?php echo form_error('email'); ?></span>
			</div>
			<div class="form-group col-md-6">
				<label>Country <span class="text-danger">*</span></label>
				<select name="country_id" id="country_id" class="form-control">
					<option disabled="" selected="">Select Country</option>
					<?php foreach ($country as $key): ?>
					<option value="<?php echo $key->country_id;?>"><?php echo $key->country_name; ?></option>
					<?php endforeach ?>
				</select>
				<span><?php echo form_error('country_id'); ?></span>
			</div>
			</div>
			<div class="row">
			<div class="form-group col-md-6">
				<label>State <span class="text-danger">*</span></label>
				<select name="state_id" id="state_id" class="form-control" >
					<option disabled="" selected="">Select State</option>
				</select>
				<span><?php echo form_error('state_id'); ?></span>
			</div>
			<div class="form-group col-md-6">
				<label>District <span class="text-danger">*</span></label>
				<select name="district_id" id="district_id" class="form-control">
					<option disabled="" selected="">Select District</option>
				</select>
				<span><?php echo form_error('district_id'); ?></span>
			</div>
			</div>
			<div class="row">
			<div class="form-group col-md-6">
				<label>Tehsil <span class="text-danger"></span></label>
				<input type="text" name="tehsil" class="form-control" placeholder="Enter Tehsil Name"/>
				<!--<select name="tehsil_id" id="tehsil_id" class="form-control" r>
					<option disabled="" selected="">Select Tehsil</option>
				</select>
				<span><?php echo form_error('tehsil'); ?></span>-->
			</div>
			<div class="form-group col-md-6">
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="bw_type"  id="block_selection" value="block">
				  <label class="form-check-label" for="block_selection">
				    Block
				  </label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" value="ward" name="bw_type"  id="ward_selection">
				  <label class="form-check-label" for="ward_selection">
				    Ward
				  </label>
				</div>
				<select name="block_id" id="block_id" class="form-control">
					<option disabled="" selected="">Select Block</option>
				</select>
				<span><?php echo form_error('block_id'); ?></span>
				<input type="text" name="ward" id="ward" class="form-control" placeholder="Enter Your Ward">
			</div>
			</div>
			<div class="row">
				<div class="form-group col-md-6">
				<label>Address <span class="text-danger">*</span></label>
				<input type="text" name="address" class="form-control" placeholder="Enter Your Address"  value="<?php echo set_value('address');?>"/>
				<span><?php echo form_error('address'); ?></span>
				</div>
				<div class="form-group col-md-6">
				<label>Upload Adhar/Photo </label>
				<input type="file" name="resume" class="form-control"/>
				</div>
			</div>
			<div class="form-group text-center">
				<input type="submit" class="btn btn-primary" value="Register Now"/>
			</div>
		</form>
	</div>
</div>
</div>
</section> 
</section> 
</main>