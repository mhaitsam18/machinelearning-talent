<?= $this->extend('layout/templates') ?>

<!-- title -->
<?= $this->Section('title') ?>
<title>Gradient Tree Boosting &mdash; Team DPP</title>
<?= $this->endSection(); ?>

<!-- Content -->
<?= $this->Section('content') ?>
<section class="section mt-5">
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Predict | Gradient Tree Boosting</h4>
            </div>
            <div class="card-body">
                <div class="card-content">
                    <div class="section-title">Algoritma Gradint Tree Boosting</div>
                    <p>Gradint Tree Boosting adalah teknik supervised learning berbasis decision tree. Algoritma dimulai dari menghasilkan pohon klasifikasi awal dan terus menyesuaikan pohon baru melalui minimalisasi fungsi kerugian</p>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="<?= base_url('predict'); ?>" class="btn btn-outline-secondary mr-3">Back</a>
                        <a href="<?= base_url('treeboosting/upload'); ?>" class="btn btn-info">Next</a>
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