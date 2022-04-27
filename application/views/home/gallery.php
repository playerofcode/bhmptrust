<section class="xs-banner-inner-section parallax-window" style="background-image:url('<?php echo base_url();?>assets/images/flex_mobile.jpg')">
<div class="xs-black-overlay"></div>
<div class="container">
<div class="color-white xs-inner-banner-content">
<h2>Photo Gallery</h2>
<marquee onmouseover="stop()" onmouseleave="start()"><h3>एक कदम प्रगती की ओर, आओ मिलकर एक कदम बढ़ाये देश-प्रदेश समाज को सवर्णं बनाएं।</h3></marquee>
<ul class="xs-breadcumb">
<li class="badge badge-pill badge-primary"><a href="<?php echo base_url(); ?>" class="color-white"> Home /</a> Gallery</li>
</ul>
</div>
</div>
</section>

<main class="xs-main">

<div class="xs-content-section-padding">
<div class="container">
<div class="xs-portfolio-grid">
<?php foreach ($gallery as $key): ?>
<div class="xs-portfolio-grid-item">
<a href="<?php echo base_url($key->image);?>" class="xs-single-portfolio-item xs-image-popup">
<img src="<?php echo base_url($key->image);?>" style="width:100%;height: 250px;">
<div class="xs-portfolio-content">
<span class="icon-plus-button"></span>
</div>
</a>
</div>
<?php endforeach ?>

</div>
</div>
</div> 
</main>