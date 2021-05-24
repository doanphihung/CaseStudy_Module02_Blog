
<!-- Page Content -->
<div class="page-heading about-heading header-text"
     style="background-image: url(./public/assets/images/heading-6-1920x500.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <!--                    <h4>Lorem ipsum dolor sit amet</h4>-->
                    <h2>Blog</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">

                    <?php foreach ($data['Posts'] as $key => $post): ?>

                        <div class="col-md-6">
                            <div class="service-item">
                                <a href="index.php?url=Post/postDetails/<?php echo $post['id'] ?>>"
                                   class="services-item-image"><img
                                            src="./public/assets/images/blog-1-370x270.jpg" class="img-fluid"
                                            alt=""></a>

                                <div class="down-content">
                                    <h4>
                                        <a href="index.php?url=Post/postDetails/<?php echo $post['id'] ?>"> <?php echo $post['title'] ?></a>
                                    </h4>

                                    <p style="margin: 0;"> <?php echo $post['username'] ?>
                                        &nbsp;&nbsp;|&nbsp;&nbsp; <?php echo date('M j H:m', strtotime($post['created_at'])) ?>
                                        &nbsp;&nbsp;|&nbsp;&nbsp;
                                    </p>
                                    <a class="btn btn-dark btn-sm" href="">Edit</a> <a class="btn btn-danger btn-sm" href="index.php?url=User/delete/<?php echo $post['id'] ?>">Delete</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>


                    <div class="col-md-12">
                        <ul class="pages">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-form">
                    <div class="form-group">
                        <h5>Blog Search</h5>
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <form action="./index.php?url=Post/search" method="post">
                                <input type="text" name="search" class="form-control" placeholder="Search"
                                       aria-label="Search"
                                       aria-describedby="basic-addon2">
                        </div>
                        <div class="col-4">
                            <button name="go" class="filled-button" type="submit"">Go</button>
                        </div>
                        </form>
                    </div>
                </div>

                <div class="form-group"></div>


            </div>
        </div>
    </div>
</div>

