<?= $this->extend('layout/templates') ?>

<!-- title -->
<?= $this->Section('title') ?>
<title>K-nearest neighbors &mdash; Team DPP</title>
<?= $this->endSection(); ?>

<!-- Content -->
<?= $this->Section('content') ?>
<section class="section mt-5">
    <div class="section-body">
        <!-- <div id="load"></div> -->
        <div class="card">
            <div class="card-header">
                <h4>Predict | Upload</h4>
            </div>
            <div class="card-body">
                <div class="card-content">
                    <div class="section-title mt-0">Upload File</div>
                    <p>unggah berkas yang akan diprediksi menggunakan Algoritma K-Neighbors dengan file save model <i><?= models('neighbors')->name ?></i>.</p>
                    <div class="custom-file mt-2">
                        <!-- pesan error -->
                        <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo session()->getFlashdata('error'); ?>
                            </div>
                        <?php endif; ?>

                        <form method="post" action="<?= base_url('neighbors/create'); ?>" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <input type="text" class="form-control" name="id_user" value="<?= userLogin()->id ?>" hidden>
                            <div class="form-group">
                                <label class="d-block">Pilih Jika Ingin Membandingkan Prediksi dari Dua atau Lebih Algoritma</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="prediksi" id="inlineCheckbox1" value="randomforest">
                                    <label class="form-check-label" for="inlineCheckbox1">Random Forest</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="prediksi2" id="inlineCheckbox2" value="treeboosting">boosting
                                    <label class="form-check-label" for="inlineCheckbox2">Gradint Tree Boosting</label>
                                </div>
                            </div>
                            <input type="file" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" id="data" name="data">
                            <!-- <label class="custom-file-label" for="customFile">Choose file</label> -->
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5">
                                <a href="<?= base_url('predict'); ?>" class="btn btn-outline-secondary mr-3">Back</a>
                                <button type="submit" class="btn btn-info">Predict</button>
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