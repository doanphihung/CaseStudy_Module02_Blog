<!-- Page Content -->
<div class="page-heading contact-heading header-text"
     style="background-image: url(./public/assets/images/heading-4-1920x500.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <!--                    <h4>Lorem ipsum dolor</h4>-->
                    <h2>Register</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="find-us">
    <div class="container">
        <h3 style="color: red">
        <?php if (isset($data['result'])) {
            if ($data['result'] === true) {
                echo 'Bạn đã đăng ký thành công!';
            } else echo 'Đăng ký thất bại!';
        }
                ?>
        </h3>
    </div>
</div>


<div class="send-message">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Đăng ký tài khoản</h2>
                </div>
            </div>
            <div class="col-md-8">
                <div class="contact-form">
                    <form id="contact" action="index.php?url=User/register" method="post">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name"
                                           placeholder="User name" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email"
                                           placeholder="E-Mail Address" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="password" type="password" class="form-control" id="subject"
                                           placeholder="Password" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" name="register" id="form-submit" class="filled-button">Đăng ký</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>