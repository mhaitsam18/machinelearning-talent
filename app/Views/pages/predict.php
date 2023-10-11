<?= $this->extend('layout/templates') ?>

<!-- title -->
<?= $this->Section('title') ?>
<title>Predict &mdash; Team DPP</title>
<?= $this->endSection(); ?>

<!-- content -->
<?= $this->Section('content') ?>
<section class="section mt-5">
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Predict</h4>
            </div>
            <div class="card-body">
                <div class="card-content">
                    <div class="section-title mt-0">Algoritma Machine Learning</div>
                    <p>Pada Web ini tersedia tiga Algoritma yang dapat mengklasifikasikan data yang akan diunggah!</p>
                    <!-- pesan error -->
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <form action="<?= base_url('/option'); ?>" method="post">
                        <?= csrf_field(); ?>
                        <div class="form-group">

                            <select class="custom-select" name="model">
                                <option selected disabled>Pilih Algoritma</option>
                                <option value="randomforest">Random Forest</option>
                                <option value="neighbors">N-neighbors</option>
                                <option value="treeboosting">Gradient Tree Boosting</option>

                            </select>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <input class="btn btn-info text-white ml-4" type="submit" value="Next">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?= $this->endSection() ?>
<!-- end Content -->