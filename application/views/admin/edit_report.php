<div class="page-wrapper">
			<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Update Report</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Update Report</li>
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
       					Update Report
       				</div>
       				<div class="card-body">
       					<?php foreach ($report as $key): ?>
       					<form action="<?php echo base_url('admin/update_report/'.$key->id);?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Title</label>
						<input type="text" name="title" class="form-control" value="<?php echo set_value('title',$key->title); ?>" placeholder="Enter Title" required>
						<?php echo form_error('title');?>
					</div>
					<div class="form-group">
						<center><img  src="<?php echo base_url($key->image);?>" style="height: 100px;width:100px;" alt="Image not found"/></center>
						<label>Image</label>
						<input type="file" name="image" class="form-control" >
						<?php if(isset($upload_error)){echo $upload_error; } ?>
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea name="description" id="ckeditor"  cols="30" rows="5" class="form-control" placeholder="Enter Description" required=""><?php echo set_value('description',$key->description); ?></textarea>
						<?php echo form_error('description');?>
					</div>
					<div class="form-group">
						<center><a href="<?php echo base_url($key->pdf);?>" target="blank">View PDF</a></center><br>
						<label>PDF</label>
						<input type="file" name="pdf" class="form-control" >
						<?php if(isset($upload_error)){echo $upload_error; } ?>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-success" value="Add Report">
					</div>
				</form>
				<?php endforeach ?>
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