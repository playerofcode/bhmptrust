<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Executive Body Designation</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card-header">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">+ Add EB Designation</button>
                        </div>
                        <div class="card">
                            <div class="card-body">
                        <?php if($this->session->flashdata('msg')): ?>
                     <div class="alert alert-success"><?php echo $this->session->flashdata('msg');?></div>
                    <?php endif;?>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S.No.</th>
                                                <th>EB DID</th>
                                                <th>EB SCID</th>
                                                <th>EB CID</th>
                                                <th>Designation</th>
                                                <th>Created At</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $i=1;
                                            foreach ($eb_designation as $key): ?>
                                              <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $key->eb_did; ?></td>
                                                <td><?php echo $key->eb_cid; ?></td>
                                                <td><?php echo $key->eb_scid; ?></td>
                                                <td><?php echo $key->eb_dname; ?></td>
                                                <td><?php echo $key->created_at; ?></td>
                                                <td><a href="<?php echo base_url('admin/editEBDesignation/'.$key->eb_did);?>">Edit</a></td>
                                                <td><a onclick="return confirm('Are you sure?');" href="<?php echo base_url('admin/deleteEBDesignation/'.$key->eb_did);?>">Delete</a></td>
                                            <?php $i++;endforeach ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add EB Designation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('admin/addEBDesignation');?>" method="post">
            <div class="form-group">
                <select name="eb_cid" id="eb_cid" class="form-control" required="">
                    <option disabled="" selected="">Select EB Category</option>
                    <?php foreach ($eb_category as $key): ?>
                        <option value="<?php echo $key->eb_cid;?>"><?php echo $key->eb_cname;?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <select name="eb_scid" id="eb_scid" class="form-control" required="">
                    <option disabled="" selected="">Select EB Sub Category</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" name="eb_dname" class="form-control" placeholder="Enter EB Designation" required/>
            </div>
            
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Add EB Designation</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
        