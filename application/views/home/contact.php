<section class="xs-banner-inner-section parallax-window" style="background-image:url('<?php echo base_url();?>assets/images/flex_mobile.jpg')">
<div class="xs-black-overlay"></div>
<div class="container">
<div class="color-white xs-inner-banner-content">
<h2>Contact Us</h2>
<marquee onmouseover="stop()" onmouseleave="start()"><h3>एक कदम प्रगती की ओर, आओ मिलकर एक कदम बढ़ाये देश-प्रदेश समाज को सवर्णं बनाएं।</h3></marquee>
<ul class="xs-breadcumb">
<li class="badge badge-pill badge-primary"><a href="<?php echo base_url();?>" class="color-white"> Home /</a> Contact</li>
</ul>
</div>
</div>
</section>

<main class="xs-main">

<section class="xs-contact-section-v2">
<div class="container">
<div class="xs-contact-container">
<div class="row">
<div class="col-lg-6">
<div class="xs-contact-form-wraper">
<h4>Drop us a line</h4>
<form action="<?php echo base_url('home/collectInfo');?>" method="POST" class="xs-contact-form contact-form-v2">
<div class="input-group">
<input type="text" name="name" class="form-control" placeholder="Enter Your Name....." required="">
<div class="input-group-append">
<div class="input-group-text"><i class="fa fa-user"></i></div>
</div>
</div>
<div class="input-group">
<input type="email" name="email"class="form-control" placeholder="Enter Your Email....." required="">
<div class="input-group-append">
<div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
</div>
</div>
<div class="input-group massage-group">
<textarea name="message" placeholder="Enter Your Message....." class="form-control" cols="30" rows="10" required=""></textarea>
<div class="input-group-append">
<div class="input-group-text"><i class="fa fa-pencil"></i></div>
</div>
</div>
<button class="btn btn-success" type="submit">submit</button>
</form>
</div>
</div>
<div class="col-lg-6">
<div class="xs-maps-wraper map-wraper-v2">
<div id="xs-map" class="xs-box-shadow-2"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3558.285023497213!2d80.94310400000002!3d26.894448000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd91c53f5af51c68c!2sMahalaxmi%20Sweets!5e0!3m2!1sen!2sin!4v1626239738729!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
</div>
</div>
</div>
</div>
</div>

<section class="xs-contact-details">
<div class="container">
<div class="row">
<div class="col-md-6 col-lg-4">
<div class="xs-contact-details">
<!-- <div class="xs-widnow-wraper">
<div class="xs-window-top">
<img src="<?php echo base_url();?>assets/images/contact/contact-info-img-1.png" alt="">
</div>
<div class="xs-window-back">
<div id="xs-multiple-map-1" class="xs-map"></div>
</div>
<div class="xs-window-nav">
<a href="#" class="xs-window-opener">
<i class="fa fa-angle-right"></i>
</a>
</div>
</div> -->

<ul class="xs-unorder-list">
<!--<li><i class="fa fa-phone color-green"></i>+91 945 599 0001</li>-->
<li><i class="fa fa-phone color-green"></i><a href="tel:<?php echo MOBNO1;?>" class="__cf_email__"><?php echo MOBNO1;?></a></li>
<li><i class="fa fa-phone color-green"></i><a href="tel:<?php echo MOBNO2;?>" class="__cf_email__"><?php echo MOBNO2;?></a></li>
<li><i class="fa fa-phone color-green"></i><a href="tel:<?php echo MOBNO3;?>" class="__cf_email__"><?php echo MOBNO3;?></a></li>
<li><i class="fa fa-envelope-o color-green"></i><a href="mailto:<?php echo EMAIL1;?>" class="__cf_email__"><?php echo EMAIL1;?></a></li>
<li><i class="fa fa-envelope-o color-green"></i><a href="mailto:<?php echo EMAIL2;?>" class="__cf_email__"><?php echo EMAIL2;?></a></li>
<li><i class="fa fa-map-marker color-green"></i><?php echo ADDRESS;?></li>
</ul>
</div>

</div>
</div>
</div>
</section> 
</section> 
</main>