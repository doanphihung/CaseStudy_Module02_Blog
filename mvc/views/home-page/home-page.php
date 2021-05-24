<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="banner header-text">
    <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
            <div class="text-content">
                <!--                    <h4>Write your first blog now</h4>-->
                <h2>Write your first blog now</h2>
            </div>
        </div>
        <div class="banner-item-02">
            <div class="text-content">
                <!--                    <h4>Fugiat Aspernatur</h4>-->
                <!--                    <h2>Laboriosam reprehenderit ducimus</h2>-->
            </div>
        </div>
        <div class="banner-item-03">
            <div class="text-content">
                <!--                    <h4>Saepe Omnis</h4>-->
                <!--                    <h2>Quaerat suscipit unde minus dicta</h2>-->
            </div>
        </div>
    </div>
</div>
<!-- Banner Ends Here -->

<div class="best-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>About Us</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-content">
                    <p>Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit. Explicabo, esse
                        consequatur alias repellat in excepturi inventore ad <a href="#">asperiores</a> tempora
                        ipsa. Accusantium tenetur voluptate labore aperiam molestiae rerum excepturi minus in
                        pariatur praesentium, corporis, aliquid dicta.</p>
                    <ul class="featured-list">
                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Consectetur an adipisicing elit</a></li>
                        <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                        <li><a href="#">Corporis, omnis doloremque</a></li>
                    </ul>
                    <a href="about-us.html" class="filled-button">Read More</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-image">
                    <img src="./public/assets/images/imgDisplay.jpg" alt="rightImage">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="services" style="background-image: url(./public/assets/images/IMG_4301.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Latest blog posts</h2>

                    <a href="index.php?url=Post/listPost">read more <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <?php foreach ($data['posts'] as $key => $value): ?>
                <div class="col-lg-4 col-md-6">-->
                    <div class="service-item">
                        <a href="index.php?url=Post/postDetails/<?php echo $value['id']?>" class="services-item-image"><img src="./public/assets/images/blog-1-370x270.jpg"
                                                                                                                             class="img-fluid" alt=""></a>

                        <div class="down-content">
                            <h4><a href="index.php?url=Post/postDetails/<?php echo $value['id']?>"> <?php echo $value['title'] ?> </a></h4>

                            <p style="margin: 0;"> <?php echo $value['username'] ?> &nbsp;&nbsp;|&nbsp;&nbsp; <?php echo date('M j H:m', strtotime($value['created_at'])) ?> &nbsp;&nbsp;|&nbsp;&nbsp;</p>
                            <a class="btn btn-dark btn-sm" href="">Edit</a> <a class="btn btn-danger btn-sm" href="">Delete</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>