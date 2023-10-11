<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login | SDM Telkom</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <style>
        .login,
        .image {
            min-height: 80vh;
        }

        .bg-image {
            background-image: url('/assets/image/login.jpg');
            background-size: cover;
            background-position: center center;
        }

        .rounded {
            border-radius: 20%;
        }
    </style>
</head>

<body>
    <div class="container-fluid mt-5">
        <div class="d-flex justify-content-center">
            <div class="col-10 col-md-10 col-lg-10">
                <div class="row no-gutter">
                    <!-- The image half -->
                    <div class="col-md-6 d-none d-md-flex bg-image">
                    </div>
                    <!-- The content half -->
                    <div class="col-md-6 bg-light">
                        <div class="login d-flex align-items-center py-5">
                            <!-- form -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-xl-8 mx-auto">
                                        <h3 class="display-4 mb-4">Sign In</h3>
                                        <!-- flash data -->
                                        <?php if (session()->getFlashdata('error')) : ?>
                                            <div class="alert alert-danger alert-dismissible show fade">
                                                <div class="alert-body">
                                                    <button class="close" data-dismiss="alert">X</button>
                                                    <b>Error !</b>
                                                    <?= session()->getFlashdata('error'); ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <!-- /flash data -->
                                        <form method="POST" action="<?= base_url('auth'); ?>">
                                            <?= csrf_field() ?>
                                            <div class="form-group mb-3">
                                                <input id="inputEmail" type="text" name="username" placeholder="username" required autofocus class="form-control rounded-pill border-0 shadow-sm px-4">
                                            </div>
                                            <div class="form-group mb-3">
                                                <input id="inputPassword" type="password" name="password" placeholder="password" class="form-control rounded-pill border-0 shadow-sm px-4" required>
                                                <span class="d-flex justify-content-end mt-2"><a href="#">forgot password?</a></span>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input id="customCheck1" type="checkbox" class="custom-control-input">
                                                <label for="customCheck1" class="custom-control-label">Remember password</label>
                                            </div>
                                            <button type="submit" class="btn btn-danger btn-block text-uppercase mb-2 rounded-pill shadow-sm">Sign in</button>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- End -->
                        </div>
                    </div><!-- End -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>