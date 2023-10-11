<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login | SDM Telkom</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/custom.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/components.css">

</head>

<body class="">
    <div id="app">
        <section class="section ">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

                        <div class="card card-primary">
                            <div class="header">
                                <h2 class="card-header">Change Password</h2>
                            </div>

                            <div class="card-body">
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

                                <form action="<?= base_url('auth/changepassword'); ?>" method="post">
                                    <?= csrf_field() ?>
                                    <div class="form-group">
                                        <label for="email">old Password</label>
                                        <input type="password" class="form-control" name="oldpass" placeholder="" autofocus required>
                                        <div class="invalid-feedback">

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="control-label">New Password</label>
                                        <input type="password" class="form-control " placeholder="" name="password" required>
                                        <div class="invalid-feedback">

                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->

    <script src="<?= base_url() ?>/template/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/stisla.js"></script>
    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="<?= base_url() ?>/template/assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/custom.js"></script>
</body>

</html>