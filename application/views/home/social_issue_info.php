<section class="xs-banner-inner-section parallax-window" style="background-image:url('<?php echo base_url();?>assets/images/flex_mobile.jpg')">
<div class="xs-black-overlay"></div>
<div class="container">
<div class="color-white xs-inner-banner-content">
<h2>Social Issue Details</h2>
<marquee onmouseover="stop()" onmouseleave="start()"><h3>एक कदम प्रगती की ओर, आओ मिलकर एक कदम बढ़ाये देश-प्रदेश समाज को सवर्णं बनाएं।</h3></marquee>
<ul class="xs-breadcumb">
<li class="badge badge-pill badge-primary"><a href="<?php echo base_url();?>" class="color-white"> Home /</a> Details</li>
</ul>
</div>
</div>
</section>

<main class="xs-main">

<div class="xs-content-section-padding xs-blog-single">
<div class="container">
<div class="row">
<div class="col-md-12 col-lg-12">
<?php foreach ($social_issue as $key): ?>
    
<?php endforeach ?>
<article class="post format-standard hentry xs-blog-post-details">
<div class="post-media post-image">
<img src="<?php echo base_url($key->photo);?>" class="img-responsive" alt="">
</div>
<div class="post-body xs-border xs-padding-40">
<div class="entry-header">
<div class="post-meta row">
<div class="col-md-2 xs-padding-0">
<span class="post-meta-date"><b><?php echo date('d',strtotime($key->created_at));?></b><?php echo date('M',strtotime($key->created_at));?></span>
</div>
<div class="col-md-10 d-flex align-items-end xs-post-meta-list">
<span class="post-cat">
<i class="fa fa-folder-open"></i><a href="#"><?php echo TITLE;?></a>
</span>
</div>
</div>
<h2 class="entry-title xs-post-entry-title">
<a href="#"><?php echo $key->problem_type; ?></a>
</h2>
</div>
<div class="entry-content text-justify">
<p><?php echo $key->info;?></p>

</div>
</div>
</article>
</div>
</div>
</div>
</div> 

</main>