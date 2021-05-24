<!-- Page Content -->
<div class="page-heading contact-heading header-text"
     style="background-image: url(./public/assets/images/heading-4-1920x500.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <!--                    <h4>Lorem ipsum dolor</h4>-->
                    <h2>Create a blog</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="find-us">
    <div class="container">
        <?php if (isset($data['result'])) { ?>
            <h3 style="color: red"><?php
                if ($data['result'] === true) {
                    echo 'Bạn đã thêm blog thành công!';
                } else echo 'Thêm blog thất bại!';
                ?> </h3>
        <?php } ?>
    </div>
</div>


<div class="send-message">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Write your blog</h2>
                </div>
            </div>
            <div class="col-md-8">
                <div class="contact-form">
                    <form id="contact" action="index.php?url=User/createBlog" method="post">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="user-id" type="text" class="form-control" id="name"
                                           placeholder="Your id" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="title" type="text" class="form-control" id="email" placeholder="Title"
                                           required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="body" rows="6" class="form-control" id="message"
                                              placeholder="Content" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button name="add-blog" type="submit" id="form-submit" class="filled-button">Thêm
                                    </button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>



