<?= $this->extend('layout/templates') ?>

<!-- title -->
<?= $this->Section('title') ?>
<title>User List &mdash; Team DPP</title>
<?= $this->endSection(); ?>

<!-- Content -->
<?= $this->Section('content') ?>

<!-- start list user -->
<section class="section mt-5">
    <div>
        <a href="<?= base_url('admin'); ?>"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
    <br>
    <div class="card mb-4">
        <!-- header -->
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Pegawai</h6>
        </div>

        <!-- form -->
        <div class="card-body">
            <form action="<?= base_url('admin/save'); ?>" method="post" autocomplete="off">
                <?= csrf_field() ?>
                <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" name="Name" id="name" value="<?= old('Name') ?>" class="form-control <?= ($validation->hasError('Name')) ? 'is-invalid' : ''; ?>" autofocus>
                    <div class="invalid-feedback">
                        <?= $validation->getError('Name'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="user">Username *</label>
                    <input type="text" name="Username" id="user" value="<?= old('Username') ?>" class="form-control <?= ($validation->hasError('Username')) ? 'is-invalid' : ''; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('Username'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mail">Email *</label>
                    <input type="email" name="Email" id="mail" value="<?= old('Email') ?>" class="form-control <?= ($validation->hasError('Email')) ? 'is-invalid' : ''; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('Email'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="psw">Password *</label>
                    <input type="password" name="Password" id="psw" class="form-control <?= ($validation->hasError('Password')) ? 'is-invalid' : ''; ?>">
                </div>
                <div class="invalid-feedback">
                    <?= $validation->getError('Password'); ?>
                </div>
                <div>
                    <button type="submit" class="btn btn-success btn-block"><i class="fas fa-paper-plane "></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
<!-- end content -->