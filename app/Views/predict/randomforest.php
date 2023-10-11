<?= $this->extend('layout/templates') ?>

<!-- title -->
<?= $this->Section('title') ?>
<title>Random Forest &mdash; Team DPP</title>
<?= $this->endSection(); ?>

<!-- Content -->
<?= $this->Section('content') ?>
<section class="section mt-5">
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Predict | Random Forest</h4>
            </div>
            <div class="card-body">
                <div class="card-content">
                    <div class="section-title mt-0">Algoritma Random Forest</div>
                    <p class="mr-5 "><i>Random Forest</i> merupakan salah satu metode dalam <i>Decision Tree</i> Atau Pohon pengambil keputusan yang berbentuk seperti pohon yang memilik sebuah <i>root node</i> yang digunakan untuk mengumpulkan data. <i>Decision Tree</i> dapat mengklasifikasikan suatu sample data yang belum diketahui kelasnya kedalam kelas-kelas yang ada. <i>Random Forest</i> sendiri terdiri dari kombinasi <i>tree</i> yang kemudian dikombinasikan kedalam suatu model</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="<?= base_url('predict'); ?>" class="btn btn-outline-secondary mr-3">Back</a>
                        <a href="<?= base_url('randomforest/upload'); ?>" class="btn btn-info">Next</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
<!-- end Content -->