<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Add Team Member</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Team Member</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row wizard-content">
                    <div class="col-sm-12">
                         <?php if($responce = $this->session->flashdata('msg')): ?>
                     <div class="alert alert-warning"><?php echo $responce;?></div>
            <?php endif;?>
                <div class="card ">
                    <div class="card-header bg-success text-white">
                        Add Service
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('admin/add_team_member');?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                    	<div class="form-group">
                        <label>Team Category</label>
                        <div>
                            <select name="team_id" class="form-control" required="">
                                <option value="" disabled="">Choose Category</option>
                                <?php foreach ($team_category as $key): ?>
                                <option value="<?php echo $key->team_id;?>" ><?php echo $key->team_name;?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo set_value('name'); ?>" placeholder="Enter Team Member Name">
                        <?php echo form_error('name');?>
                    </div>
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="text" name="mobno" class="form-control" value="<?php echo set_value('mobno'); ?>" placeholder="Enter Mobile Number">
                        <?php echo form_error('mobno');?>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="<?php echo set_value('email'); ?>" placeholder="Enter Email Address">
                        <?php echo form_error('email');?>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" >
                        <?php if(isset($upload_error)){echo $upload_error; } ?>
                    </div>
                    <div class="form-group">
                        <label>Designation</label>
                        <input type="text" name="designation" class="form-control" value="<?php echo set_value('designation'); ?>" placeholder="Enter Designation">
                        <?php echo form_error('designation');?>
                    </div>
                  
                    <div class="form-group">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
                    </div>
                </div>
                </div>
            </div>
            </div>
</div>
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
     <script>
         CKEDITOR.replace( 'ckeditor' );
    </script>