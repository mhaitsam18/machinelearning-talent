<?= $this->extend('layout/templates') ?>

<!-- title -->
<?= $this->Section('title') ?>
<title>Dashboard &mdash; Team DPP</title>
<?= $this->endSection(); ?>

<!-- Content -->
<?= $this->Section('content') ?>
<section class="section mt-5">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Random Forest used</h4>
                    </div>
                    <div class="card-body">
                        <?= countalgo('randomforest'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Tree Boosting used</h4>
                    </div>
                    <div class="card-body">
                        <?= countalgo('treeboosting'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Neighbor used</h4>
                    </div>
                    <div class="card-body">
                        <?= countalgo('neighbors'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Used</h4>
                    </div>
                    <div class="card-body">
                        <?= countAll('predicts') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Label Dataset</h4>
                </div>
                <div class="card-body">
                    <canvas id="myChart2"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Prediction Report</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled list-unstyled-border">
                        <?php if (!empty(history('randomforest')->name)) : ?>
                            <li class="media">
                                <div class="media-body">
                                    <div class="media-title">
                                        <?= history('randomforest')->name ?>
                                    </div>
                                    <span class="text-medium text-muted">Algoritma Used <i><?= history('randomforest')->algoritma ?></i> </span>
                                    <div class="text-small"><?= history('randomforest')->created_at ?></div>
                                </div>
                            </li>
                        <?php endif; ?>
                        <?php if (!empty(history('neighbors')->name)) : ?>
                            <li class="media">
                                <div class="media-body">
                                    <div class="media-title">
                                        <?= history('neighbors')->name ?>
                                    </div>
                                    <span class="text-small text-muted">Algoritma Used <i><?= history('neighbors')->algoritma ?></i> </span>
                                    <div class="text-small"><?= history('neighbors')->created_at ?></div>
                                </div>
                            </li>
                        <?php endif; ?>
                        <?php if (!empty(history('treeboosting')->name)) : ?>
                            <li class="media">
                                <div class="media-body">
                                    <div class="media-title">
                                        <div class="media-title">
                                            <?= history('treeboosting')->name ?>
                                        </div>
                                    </div>
                                    <span class="text-small text-muted">Algoritma Used <i><?= history('treeboosting')->algoritma ?></i> </span>
                                    <div class="text-small"><?= history('treeboosting')->created_at ?></div>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
<!-- end Content -->