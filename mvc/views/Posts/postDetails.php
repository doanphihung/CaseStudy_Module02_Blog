

<!-- Page Content -->
<div class="page-heading about-heading header-text"
     style="background-image: url(./public/assets/images/heading-6-1920x500.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4><i class="fa fa-user"></i> <?php echo $data['Post']['username'] ?> &nbsp;&nbsp;&nbsp;&nbsp; <i
                                class="fa fa-calendar"></i> <?php echo date('M j H:m', strtotime($data['Post']['created_at'])) ?>
                        &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-eye"></i> 114</h4>
                    <h2><?php echo $data['Post']['title'] ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">

                </div>
            </div>

            <div class="col-md-8">


                <br>

                <h5><?php echo $data['Post']['title'] ?> </h5>

                <br>

                <p> <?php echo $data['Post']['body'] ?>

                </p>
            </div>


        </div>

        <br>

        <div>
            <img src="./public/assets/images/blog-image-fullscren-1-1920x700.jpg" class="img-fluid" alt="">
        </div>
    </div>
</div>



