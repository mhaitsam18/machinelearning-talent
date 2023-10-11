<?= $this->extend('layout/templates') ?>

<!-- title -->
<?= $this->Section('title') ?>
<title>K-nearest neighbors &mdash; Team DPP</title>
<?= $this->endSection(); ?>

<!-- Content -->
<?= $this->Section('content') ?>
<section class="section mt-5">
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Predict | K-nearest neighbors</h4>
            </div>
            <div class="card-body">
                <div class="card-content">
                    <div class="section-title mt-0">Algoritma N-neighbors</div>
                    <p>K-Nearest neighbors melakukan klasifikasi dengan proyeksi data pembelajaran pada ruang berdimensi banyak. Ruang ini dibagi menjadi bagian-bagian yang merepresentasikan kriteria data pembelajaran. KKN dapat mengklasifikasi suatu data berdasarkan data pembelajaran yang diambil dari k tetangga terdekatnya. Dengan k merupakan banyaknya tetangga terdekat.</p>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="<?= base_url('predict'); ?>" class="btn btn-outline-secondary mr-3">Back</a>
                        <a href="<?= base_url('neighbors/upload'); ?>" class="btn btn-info">Next</a>
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