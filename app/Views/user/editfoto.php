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
                        <li class="breadcrumb-item active" aria-current="page">Edit Image Profile</li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-between mb-3">
                    <a href="<?= base_url('profile'); ?>">&laquo; Back</a>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="card col-5">
                        <div class="card-body">
                            <!-- form -->
                            <div class="text-center">
                                <img src="<?= base_url('assets/image/' . $user['profile']); ?>" class="rounded" width="200">
                                <form action="<?= base_url('user/update_image/' . $user['id']); ?>" method="POST" enctype="multipart/form-data">
                                    <?= csrf_field() ?>
                                    <div class=" row mt-4">
                                        <input type="file" name="Profile" class="form-control<?= ($validation->hasError('Profile')) ? 'is-invalid' : ''; ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('Profile'); ?>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center mt-4">
                                        <button type="submit" class="btn btn-success">Save Update</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>