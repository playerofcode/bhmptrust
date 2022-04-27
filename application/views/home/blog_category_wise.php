<?php include "titleManager.php"; ?>
<section class="xs-banner-inner-section parallax-window" style="background-image:url('<?php echo base_url();?>assets/images/flex_mobile.jpg')">
<div class="xs-black-overlay"></div>
<div class="container">
<div class="color-white xs-inner-banner-content">
<h2>Blog</h2>
<marquee onmouseover="stop()" onmouseleave="start()"><h3>एक कदम प्रगती की ओर, आओ मिलकर एक कदम बढ़ाये देश-प्रदेश समाज को सवर्णं बनाएं।</h3></marquee>
<ul class="xs-breadcumb">
<li class="badge badge-pill badge-primary"><a href="<?php echo base_url();?>" class="color-white"> Home /</a> Blog</li>
</ul>
</div>
</div>
</section>

<main class="xs-main">

<section class="xs-content-section-padding">
<div class="container">
<div class="row xs-mb-50">
<div class="col-lg-8 col-12">
    <div class="container-fluid">
        <div class="row">
            <?php foreach ($blog as $key): ?>
<div class="col-lg-6 col-12">
<div class="xs-box-shadow xs-single-journal xs-mb-30" style="
    height: 400px!important;">
<div class="entry-thumbnail ">
<img src="<?php echo base_url($key->image);?>" alt="" style="height:200px;width:100%;">
<div class="post-author">
<span class="xs-round-avatar">
<img class="img-responsive" src="<?php echo base_url();?>assets/images/logo.jpg" alt="">
</span>
</div>
</div>
<div class="entry-header">
<div class="entry-meta">
<span class="date">
<a href="<?php echo base_url('blog-single/'.$key->id);?>" rel="bookmark" class="entry-date"> <?php echo date('d M Y',strtotime($key->datetime));?>
</a>
</span>
</div>
<h4 class="entry-title text-center">
<a href="<?php echo base_url('blog-single/'.$key->id);?>"><?php titleManager($key->title); ?></a>
</h4>
</div>
</div>
</div>
 <?php endforeach ?>
        </div>
    </div>

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
<h3 class="widget-title">Blog Category </h3>
<ul class="xs-recent-post-widget">
<?php foreach ($blog_category as $key): ?>
<li>
<h4 class="entry-title text-center">
<a href="<?php echo base_url('home/blog_category_wise/'.$key->cat_id);?>"><?php echo $key->cat_name; ?></a>
</h4>
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
</section> 
</main>