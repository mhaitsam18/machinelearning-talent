<?= $this->extend('layout/templates') ?>

<!-- title -->
<?= $this->Section('title') ?>
<title>Template Dataset &mdash; Team DPP</title>
<?= $this->endSection(); ?>

<!-- Content -->
<?= $this->Section('content') ?>
<section class="section mt-5">
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Predict | Upload</h4>
            </div>
            <div class="card-body">
                <div class="card-content">
                    <div class="section-title mt-0">Upload File</div>
                    <p>unggah berkas yang akan diprediksi</p>
                    <div class="custom-file mt-2">

                        <form method="post" action="<?= base_url('/predict/save'); ?>" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <input type="file" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" id="data" name="data">
                            <!-- <label class="custom-file-label" for="customFile">Choose file</label> -->
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5">
                                <!-- <a href="<?= base_url('predict'); ?>" class="btn btn-outline-secondary mr-3">Back</a> -->
                                <a href="<?= base_url('predict/upload'); ?>" class="btn btn-info">Predict</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- <div class="card-footer bg-whitesmoke">
                This is card footer
            </div> -->
        </div>
    </div>
</section>
<?= $this->endSection() ?>
<!-- end Content -->