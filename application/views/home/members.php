<section class="xs-banner-inner-section parallax-window" style="background-image:url('<?php echo base_url();?>assets/images/flex_mobile.jpg');">
<div class="xs-black-overlay"></div>
<div class="container">
<div class="color-white xs-inner-banner-content">
<h2>Our Team</h2>
<marquee onmouseover="stop()" onmouseleave="start()"><h3>एक कदम प्रगती की ओर, आओ मिलकर एक कदम बढ़ाये देश-प्रदेश समाज को सवर्णं बनाएं।</h3></marquee>
<ul class="xs-breadcumb">
<li class="badge badge-pill badge-primary"><a href="<?php echo base_url();?>" class="color-white"> Home /</a> Team</li>
</ul>
</div>
</div>
</section>

<main class="xs-main">

<section class="xs-children-section mt-5">
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
        <table class="table table-bordered" id="datatable">
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Joining Date</th>
            </tr>
            <?php $i=1;foreach ($users as $key): ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><a href="<?php echo base_url('home/member_info/'.$key['id']);?>"><?php echo $key['name']; ?></a></td>
                    <td><?php echo $key['created_at']; ?></td>
                </tr>
            <?php $i++;endforeach ?>
        </table>
        </div>
    </div>
</div>
</div>
</div>
</section> 
</main>