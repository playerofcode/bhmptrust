<section class="xs-banner-inner-section parallax-window" style="background-image:url('<?php echo base_url();?>assets/images/flex_mobile.jpg')">
<div class="xs-black-overlay"></div>
<div class="container">
<div class="color-white xs-inner-banner-content">
<h2>Blog Details</h2>
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
<div class="col-md-12 col-lg-8">
<?php foreach ($blog as $key): ?>
    
<?php endforeach ?>
<article class="post format-standard hentry xs-blog-post-details">
<div class="post-media post-image">
<img src="<?php echo base_url($key->image);?>" class="img-responsive" alt="">
</div>
<div class="post-body xs-border xs-padding-40">
<div class="entry-header">
<div class="post-meta row">
<div class="col-md-2 xs-padding-0">
<span class="post-meta-date"><b><?php echo date('d',strtotime($key->datetime));?></b><?php echo date('M',strtotime($key->datetime));?></span>
</div>
<div class="col-md-10 d-flex align-items-end xs-post-meta-list">
<span class="post-cat">
<i class="fa fa-folder-open"></i><a href="javascript:void(0);"><?php echo TITLE;?></a>
</span>
</div>
</div>
<h2 class="entry-title xs-post-entry-title">
<a href="#"><?php echo $key->title; ?></a>
</h2>
</div>
<div class="entry-content text-justify">
<p><?php echo $key->description; ?></p>
<!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
</div>
</div>
</article>

</div>
<div class="col-md-12 col-lg-4">

<div class="sidebar sidebar-right">

<div class="widget widget_search">
<form class="xs-serachForm" method="get" action="https://demo.xpeedstudio.com/html/charitypress/GET">
<input type="search" name="search" placeholder="Type keywords...">
<input type="submit" value="">
</form>
</div>


<div class="widget recent-posts xs-sidebar-widget">
<h3 class="widget-title">Recent Post</h3>
<ul class="xs-recent-post-widget">
<?php foreach ($recent_blog as $key): ?>
<li>
<div class="posts-thumb float-left">
<a href="<?php echo base_url('blog-single/'.$key->id);?>">
<img alt="img" class="img-responsive" src="<?php echo base_url($key->image);?>" style="wdith:100%;">
<div class="xs-entry-date">
<span class="entry-date d-block"><?php echo date('d',strtotime($key->datetime));?></span>
<span class="entry-month d-block"><?php echo date('m',strtotime($key->datetime));?></span>
</div>
<div class="xs-black-overlay bg-aqua"></div>
</a>
</div>
<div class="post-info">
<h4 class="entry-title text-center">
<a href="<?php echo base_url('blog-single/'.$key->id);?>"><?php echo $key->title; ?></a>
</h4>
<!-- <div class="post-meta">
<span class="comments-link">
<i class="fa fa-comments-o"></i>
<a href="#">300 Comments</a>
</span>
</div> -->
</div>
<div class="clearfix"></div>
</li>
<?php endforeach ?>
</ul>
</div>
<div class="widget widget_call_to_action">
<a href="<?php echo base_url('contact-us'); ?>" class="d-block">
<img src="<?php echo base_url();?>assets/images/side_add_baner.jpg" alt="">
</a>
</div>
<div class="widget widget_social_share xs-sidebar-widget">
<h3 class="widget-title">Social Share</h3>
<ul class="xs-social-list boxed">
<li><a href="https://www.facebook.com/profile.php?id=100048463091596" class="color-facebook" class="color-facebook" target="_blank"><i class="fa fa-facebook"></i>Facebook</a></li>
<li><a href="https://twitter.com/NeelamS32931470?t=39OQif9ZdQNHrhHenl5hmg&s=08" class="color-twitter" target="_blank"><i class="fa fa-twitter"></i>twitter</a></li>
<li><a href="#" class="color-instagram" target="_blank"><i class="fa fa-instagram"></i>Instagram</a></li>
<li><a href="https://api.whatsapp.com/send?phone=919721785638" class="color-linkedin"><i class="fa fa-whatsapp"></i>Whatsapp</a></li>
</ul>
</div>

</div> 
</div>
</div>
</div>
</div> 

</main>