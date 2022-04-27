<section class="xs-banner-inner-section parallax-window" style="background-image:url('<?php echo base_url();?>assets/images/flex_mobile.jpg')">
<div class="xs-black-overlay"></div>
<div class="container">
<div class="color-white xs-inner-banner-content">
<h2>What We Do</h2>
<marquee onmouseover="stop()" onmouseleave="start()"><h3>एक कदम प्रगती की ओर, आओ मिलकर एक कदम बढ़ाये देश-प्रदेश समाज को सवर्णं बनाएं। </h3></marquee>
<ul class="xs-breadcumb">
<li class="badge badge-pill badge-primary"><a href="<?php echo base_url();?>" class="color-white"> Home /</a> Service Info</li>
</ul>
</div>
</div>
</section>

<main class="xs-main">

<div class="xs-content-section-padding xs-blog-single">
<div class="container">
<div class="row">
<div class="col-md-12 col-lg-8">
<?php foreach ($service as $key): ?>
<article class="post format-standard hentry xs-blog-post-details">
<div class="post-media post-image">
<img src="<?php echo base_url($key->image);?>" class="img-responsive" alt="">
</div>
<div class="post-body xs-border xs-padding-40">
<div class="entry-header">
<div class="post-meta row">
<div class="col-md-2 xs-padding-0">
<span class="post-meta-date"><b><?php echo date('d',strtotime($key->created_at));?></b><?php echo date('M',strtotime($key->created_at));?></span>
</div>
<div class="col-md-10 d-flex align-items-end xs-post-meta-list">
<span class="post-cat">
<i class="fa fa-folder-open"></i><a href="#">CMJKPPA</a>
</span>
</div>
</div>
<h2 class="entry-title xs-post-entry-title">
<a href="#"><?php echo $key->title; ?></a>
</h2>
</div>
<div class="entry-content text-justify">
<p><?php echo $key->description; ?></p>

</div>
</div>
</article>
<?php endforeach ?>

</div>
<div class="col-md-12 col-lg-4">

<div class="sidebar sidebar-right">

<div class="widget widget_search">
<form class="xs-serachForm" method="get" action="https://demo.xpeedstudio.com/html/charitypress/GET">
<input type="search" name="search" placeholder="Type keywords...">
<input type="submit" value="">
</form>
</div>



<div class="widget widget_call_to_action">
<a href="<?php echo base_url('contact-us'); ?>" class="d-block">
<img src="<?php echo base_url();?>assets/images/side_add_baner.jpg" alt="">
</a>
</div>
<div class="widget widget_social_share xs-sidebar-widget">
<h3 class="widget-title">Social Share</h3>
<ul class="xs-social-list boxed">
<li><a href="https://www.facebook.com/cmjkyppa.co/" class="color-facebook" target="_blank"><i class="fa fa-facebook"></i>Facebook</a></li>
<li><a href="https://twitter.com/CMPrachar?s=08" class="color-twitter" target="_blank"><i class="fa fa-twitter"></i>twitter</a></li>
<li><a href="https://www.instagram.com/cmjkyppa/" class="color-instagram" target="_blank"><i class="fa fa-instagram"></i>Instagram</a></li>
<li><a href="https://api.whatsapp.com/send?phone=919455990001" class="color-linkedin"><i class="fa fa-whatsapp"></i>Whatsapp</a></li>
</ul>
</div>

</div> 
</div>
</div>
</div>
</div> 

</main>