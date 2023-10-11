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
                        <li class="breadcrumb-item"><a href="<?= base_url('profile'); ?>">User Profile</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                    </ol>
                </nav>

                <div class="d-flex justify-content-between mb-3">
                    <a href="<?= base_url('profile'); ?>">&laquo; Back</a>
                </div>

                <!-- start profile -->
                <div class="row gutters-sm">
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <form action="<?= base_url('user/update/' . $user['id']); ?>" method="POST" enctype="multipart/form-data">
                                    <?= csrf_field() ?>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Full Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="Name" class="form-control <?= ($validation->hasError('Name')) ? 'is-invalid' : ''; ?>" value="<?= $user['name']; ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('Name'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Username</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="Username" class="form-control <?= ($validation->hasError('Username')) ? 'is-invalid' : ''; ?>" value="<?= $user['username']; ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('Username'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">email</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="email" name="Email" class="form-control <?= ($validation->hasError('Email')) ? 'is-invalid' : ''; ?> <?= ($validation->hasError('Email')) ? 'is-invalid' : ''; ?>" value="<?= $user['email']; ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('Email'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <!-- <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Profile</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" hidden name="profileOld" value="<?= $user['profile']; ?>">
                                            <input type="file" name="Profile" class="form-control">
                                            <div class="invalid-feedback">

                                            </div>
                                        </div>
                                    </div>
                                    <hr> -->
                                    <div class=" d-flex justify-content-end">
                                        <button type="submit" class="btn btn-info">Save Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>