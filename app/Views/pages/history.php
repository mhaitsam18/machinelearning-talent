<?= $this->extend('layout/templates') ?>

<!-- title -->
<?= $this->Section('title') ?>
<title>History Predict &mdash; Team DPP</title>
<?= $this->endSection(); ?>

<!-- content -->
<?= $this->Section('content') ?>
<section class="section mt-5">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <!-- title -->
                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"></i>History Predict</h6>
                    <p>Halaman ini memuat tentang history dari berkas yang telah diprediksi</p>

                    <div class="table-responsive">
                        <!-- flash data -->
                        <?php if (session()->getFlashdata('message')) : ?>
                            <div class="alert alert-warning alert-dismissible show fade m-3">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">X</button>
                                    <b>Message !</b>
                                    <?= session()->getFlashdata('message'); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <table class="table table-hover table-bordered table-hover text-center" id="table1">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Result</th>
                                    <th scope="col">Algoritma</th>
                                    <th scope="col">Perbandingan 1</th>
                                    <th scope="col">Perbandingan 2</th>
                                    <th scope="col">Predict By</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($berkas as $key => $value) : ?>
                                    <tr>
                                        <td class="text-center"><?= $key + 1; ?></td>
                                        <td><?= $value->resu ?></td>
                                        <td><?= $value->algoritma ?></td>
                                        <?php if ($value->banding != null) : ?>
                                            <td><?= $value->banding ?></td>
                                        <?php else : ?>
                                            <td style="color: red;">Tidak Digunakan</td>
                                        <?php endif; ?>
                                        <?php if ($value->banding2 != null) : ?>
                                            <td><?= $value->banding2 ?></td>
                                        <?php else : ?>
                                            <td style="color: red;">Tidak Digunakan</td>
                                        <?php endif; ?>
                                        <td><?= $value->user ?></td>

                                        <td>
                                            <a href="<?= base_url('result/show/' . $value->idp); ?>" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                            <a href="<?= base_url('result/download/' . $value->idp); ?>" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a>
                                            <form action="<?= site_url('result/' . $value->idp); ?>" method="post" class="d-inline" id="del-<?= $value->idp; ?>">
                                                <?= csrf_field() ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-sm btn-danger" data-confirm="Delete History Predict!! | Are you sure!" data-confirm-yes="submitDel(<?= $value->idp; ?>)"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
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