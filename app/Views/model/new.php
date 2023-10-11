<?= $this->extend('layout/templates') ?>

<!-- title -->
<?= $this->Section('title') ?>
<title>Add Model &mdash; Team DPP</title>
<?= $this->endSection(); ?>

<!-- Content -->
<?= $this->Section('content') ?>

<!-- start list user -->
<section class="section mt-5">
    <div>
        <a href="<?= base_url('models'); ?>"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
    <br>
    <div class="card mb-4">
        <!-- header -->
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Add Model</h6>
        </div>

        <!-- form -->
        <div class="card-body">
            <!-- pesan error -->
            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">X</button>
                        <b>Error !</b>
                        <?= session()->getFlashdata('error'); ?>
                    </div>
                </div>
            <?php endif; ?>

            <form method="post" action="<?= base_url('model/create'); ?>" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <input type="file" class="form-control" id="customFile" name="model">
                    <!-- <label class="custom-file-label" for="customFile">Choose file</label> -->
                </div>
                <div class="form-group">
                    <select class="custom-select" name="type">
                        <option selected disabled>Choose Type</option>
                        <option value="randomforest">Random Forest</option>
                        <option value="neighbors">N-neighbors</option>
                        <option value="treeboosting">Gradient Tree Boosting</option>
                    </select>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
            </form>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
<!-- end content -->