<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <!-- title -->
    <title>Profile</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/custom.css">
    <!-- <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/components.css"> -->

</head>

<body>
    <div class="section-body">
        <div class="container">
            <div class="main-body">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb" class="main-breadcrumb ">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('pages'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-between mb-3">
                    <a href="<?= base_url('pages'); ?>">&laquo; Back</a>
                    <!-- <a href="<?= base_url('Auth/password'); ?>" class="btn btn-primary"><i class="fas fa-key"></i> Change Password</a> -->
                </div>
                <!-- /Breadcrumb -->
                <!-- flashData -->
                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible show fade m-3">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">X</button>
                            <b>Success !</b>
                            <?= session()->getFlashdata('success'); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- start profile -->
                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <a href="<?= base_url('user/edit_image/' . userLogin()->id); ?>">
                                        <img src="<?= base_url('/assets/image/' . userLogin()->profile); ?>" alt="" class="rounded-circle" width="160" height="160">
                                    </a>
                                    <div class="mt-3">
                                        <h4></h4>
                                        <p class="text-secondary mb-1"></p>
                                        <p class="text font-size-sm"><?= userLogin()->name ?></p>
                                        <p class="text-muted font-size-sm"><a href="<?= base_url('pages'); ?>">&oplus; Dashborad</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9">
                                        <?= userLogin()->name ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Username</h6>
                                    </div>
                                    <div class="col-sm-9">
                                        <?= userLogin()->username ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">email</h6>
                                    </div>
                                    <div class="col-sm-9">
                                        <?= userLogin()->email ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Last Update</h6>
                                    </div>
                                    <div class="col-sm-9">
                                        <?= userLogin()->updated_at ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <a href="<?= base_url('user/edit/' . userLogin()->id); ?>" class="btn btn-info btn-sm">Edit Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>