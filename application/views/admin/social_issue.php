<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard');?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Social Issues</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
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
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Mobile Number</th>
                                                <th>Address</th>
                                                <th>Problem Type</th>
                                                <th>Info</th>
                                                <th>Created At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $i=1;
                                            foreach ($social_issue as $key): ?>
                                              <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><img src="<?php echo base_url($key->photo); ?>" style="height: 100px;width:120px;border-radius:10px;border:1px dashed orange;box-shadow: 0 5px 10px rgba(0,0,0,0.4);"></td>
                                                <td><?php echo $key->name; ?></td>
                                                <td><?php echo $key->mobno; ?></td>
                                                <td><?php echo $key->address; ?></td>
                                                <td><?php echo $key->problem_type; ?></td>
                                                <td><?php echo $key->info; ?></td>
                                                <td><?php echo $key->created_at; ?></td>
                                            </tr>  
                                            <?php $i++;endforeach ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        