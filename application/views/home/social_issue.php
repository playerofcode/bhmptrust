<?php include "titleManager.php"; ?>
<section class="xs-banner-inner-section parallax-window" style="background-image:url('<?php echo base_url();?>assets/images/flex_mobile.jpg')">
<div class="xs-black-overlay"></div>
<div class="container">
<div class="color-white xs-inner-banner-content">
<h2>Social Issue</h2>
<marquee onmouseover="stop()" onmouseleave="start()"><h3>एक कदम प्रगती की ओर, आओ मिलकर एक कदम बढ़ाये देश-प्रदेश समाज को सवर्णं बनाएं। </h3></marquee>
<ul class="xs-breadcumb">
<li class="badge badge-pill badge-primary"><a href="<?php echo base_url();?>" class="color-white"> Home /</a> Blog</li>
</ul>
</div>
</div>
</section>

<main class="xs-main">
<section class="xs-content-section-padding">
    <div class="conatiner">
        <div class="row">
            <div class="col-sm-12">
                <?php if($this->session->flashdata('msg')): ?>
                     <div class="alert alert-success"><?php echo $this->session->flashdata('msg');?></div>
                    <?php endif;?>
                <center>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Share your problem with us</button>
                </center>
            </div>
        </div>  
    </div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Share your problem with us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('home/submitSocialProblem');?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required="" />
            </div>
            <div class="form-group">
                <label>Mobile Number</label>
                <input type="text" name="mobno" class="form-control" placeholder="Enter Your Mobile Number" required="" />
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control" placeholder="Enter Your Address" required="" />
            </div>
            <div class="form-group">
                <label>Photograph</label>
                <input type="file" name="photo" class="form-control" required="">
            </div>
            <div class="form-group">
                <label>Problem Type</label>
                <select name="problem_type" class="form-control" required="true">
                    <option values="Lack of Education">Lack of Education</option>
                    <option values="Lack of Water">Lack of Water</option>
                    <option values="Social Problem">Social Problem</option>
                    <option values="Travel Problem">Travel Problem</option>
                    <option values="Lack of Employment">Lack of Employment</option>
                    <option values="Health related Issues">Health related Issues</option>
                    <option values="Lack of Social Awareness">Lack of Social Awareness</option>
                    <option values="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label>Explain Your Problem in Detail</label>
                <textarea class="form-control" name="info" required="" placeholder="Write here..."></textarea>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
       </form>
    </div>
  </div>
</div>
 <section class="">
<div class="container">
<div class="row xs-mb-50">
    <?php foreach ($social_issue as $key): ?>
<div class="col-lg-4 col-md-6">
<div class="xs-box-shadow xs-single-journal xs-mb-30" style="
    height: 400px!important;">
<div class="entry-thumbnail ">
<img src="<?php echo base_url($key->photo);?>" alt="" style="height:200px;width:100%;">
<div class="post-author">
<span class="xs-round-avatar">
<img class="img-responsive" src="<?php echo base_url();?>assets/images/logo.jpg" alt="">
</span>
</div>
</div>
<div class="entry-header">
<div class="entry-meta">
<span class="date">
<a href="<?php echo base_url('home/social_issue_info/'.$key->id);?>" rel="bookmark" class="entry-date"> <?php echo date('d M Y',strtotime($key->created_at));?>
</a>
</span>
</div>
<h4 class="entry-title">
<a href="<?php echo base_url('home/social_issue_info/'.$key->id);?>"><?php titleManager($key->problem_type); ?></a>
</h4>
<p class="text-justify"><?php titleManager($key->info); ?></p>
</div>
</div>
</div>
 <?php endforeach ?>
</div>
</div>
</section>  
</main>
