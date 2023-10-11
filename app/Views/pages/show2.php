<?= $this->extend('layout/templates') ?>

<!-- title -->
<?= $this->Section('title') ?>
<title>Show Result &mdash; Team DPP</title>
<?= $this->endSection(); ?>

<!-- Content -->
<?= $this->Section('content') ?>
<section class="section">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <!-- <div class="d-flex justify-content-end mt-3">
                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-download"> Download</i></a>
            </div> -->
            <div class="card mt-4">
                <div class="card-header">
                    <h4>Show Results</h4>
                </div>
                <div class="card-body">

                    <div class="section-title mt-0">Hasil prediksi Menggunakan Algoritma <i><?= $algo ?></i> dengan file <i><?= $nm; ?></i></div>

                    <!-- <p> <b></b>.</p> -->
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered table-hover text-center" id="table1">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NIP</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Label</th>
                                    <th scope="col">Hasil <?= $algo ?></th>
                                    <th scope="col">Hasil
                                        <?php if ($algo2 != null) : ?>
                                            <?= $algo2 ?></th>
                                <?php else : ?>
                                    <?= $algo3 ?>
                                <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($show as $key => $value) : ?>
                                    <?php if ($value[1] != 'NIP') : ?>
                                        <tr>
                                            <th scope="row"><?= $key; ?></th>
                                            <td><?= $value[1]; ?></td>
                                            <td><?= $value[2]; ?></td>
                                            <td><?= $value[3]; ?></td>
                                            <td><?= $value[4]; ?></td>
                                            <td><?= $value[5]; ?></td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</section>
<?= $this->endSection() ?>
<!-- end Content -->