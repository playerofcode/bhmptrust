<section class="xs-banner-inner-section parallax-window" style="background-image:url('<?php echo base_url();?>assets/images/flex_mobile.jpg')">
<div class="xs-black-overlay"></div>
<div class="container">
<div class="color-white xs-inner-banner-content">
<h2>What We Do</h2>
<marquee onmouseover="stop()" onmouseleave="start()"><h3>मुएक कदम प्रगती की ओर, आओ मिलकर एक कदम बढ़ाये देश-प्रदेश समाज को सवर्णं बनाएं।</h3></marquee>
<ul class="xs-breadcumb">
<li class="badge badge-pill badge-primary"><a href="<?php echo base_url();?>" class="color-white"> Home /</a> Team</li>
</ul>
</div>
</div>
</section>

<main class="xs-main">

<section class="xs-children-section mt-5 text-justify">
<div class="container">
<div class="row">
<?php foreach ($services as $key): ?>
<div class="col-lg-3 col-md-6">
<div class="xs-single-children m-2">
 <img src="<?php echo base_url($key->image);?>" style="height: 250px;">
<div class="xs-children-details" style="padding:10px;text-align: justify;">
<a href="<?php echo base_url('home/service_info/'.$key->id);?>" class="text-center"><?php echo $key->title; ?></a><br>
<?php 
 $string = strip_tags($key->description);
if (strlen($string) > 200) {
    $stringCut = substr($string, 0, 200);
    $endPoint = strrpos($stringCut, ' ');
    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
    $string .= '<a style="font-size:14px;" href="'.base_url('home/service_info/').$key->id.'">...Read More</a>';
}
echo $string;
 ?>
</div>
</div>
</div>
<?php endforeach ?>
</div>
</div>
</div>
</section> 
</main>