<section class="xs-banner-inner-section parallax-window" style="background-image:url('<?php echo base_url();?>assets/images/flex_mobile.jpg');">
<div class="xs-black-overlay"></div>
<div class="container">
<div class="color-white xs-inner-banner-content">
<h2>Team Info</h2>
<marquee onmouseover="stop()" onmouseleave="start()"><h3>एक कदम प्रगती की ओर, आओ मिलकर एक कदम बढ़ाये देश-प्रदेश समाज को सवर्णं बनाएं।</h3></marquee>
<ul class="xs-breadcumb">
<li class="badge badge-pill badge-primary"><a href="<?php echo base_url();?>" class="color-white"> Home /</a> Team</li>
</ul>
</div>
</div>
</section>

<main class="xs-main">

<section class="xs-children-section mt-5">
<div class="container">
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
        <table class="table table-bordered">
             <?php foreach ($members as $key): ?>
            <tr>
                <th>Name</th>
                <td><?php echo $key['name']; ?></td>
            </tr>
            <tr>
                <th>Mobile Number</th>
                <td><?php echo $key['mobno']; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $key['email']; ?></td>
            </tr>
            <tr>
                <th>Country</th>
                <td><?php echo $key['country']; ?></td>
            </tr>
            <tr>
                <th>State</th>
                <td><?php echo $key['state']; ?></td>
            </tr>
             <tr>
                <th>District</th>
                <td><?php echo $key['district']; ?></td>
            </tr>
             <tr>
                <th>Tehsil</th>
                <td><?php echo $key['tehsil']; ?></td>
            </tr>
             <tr>
                <th>Block</th>
                <td><?php echo $key['block']; ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo $key['address']; ?></td>
            </tr>
            <?php endforeach ?>
        </table>
        </div>
    </div>
</div>
</div>
</div>
</section> 
</main>