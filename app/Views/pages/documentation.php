<?= $this->extend('layout/templates') ?>

<!-- title -->
<?= $this->Section('title') ?>
<title>Documentation &mdash; Team DPP</title>
<?= $this->endSection(); ?>

<!-- Content -->
<?= $this->Section('content') ?>
<section class="section">
    <div class="section-body">
        <!-- left -->
        <div class="row mt-5">
            <div class="col-12 col-md-6 col-lg-6">
                <!-- <div class="card">
                    <div class="card-header">
                        <h4>Simple</h4>
                    </div>
                    <div class="card-body">
                        <div class="media">
                            <img class="mr-3" src="<?= base_url(); ?>/assets/image/example.jpg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0">Media heading</h5>
                                <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="card">
                    <div class="card-header">
                        <h4>Google Colab</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="media">
                                <img class="mr-3" src="<?= base_url(); ?>/assets/documen/random.png" width="50" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">Random Forest</h5>
                                    <p>Link : <a href="#"> Random Forest</a></p>
                                </div>
                            </li>
                            <li class="media my-4">
                                <img class="mr-3" src="<?= base_url(); ?>/assets/documen/knn-1.png" width="50" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">k-Nearest Neighbor</h5>
                                    <p>Link : <a href="https://colab.research.google.com/drive/1eZkjolnqQbsTm6hFkuAY37X9iMrW3_0S#scrollTo=HRAL0XPWJKdo">k-Nearest Neighbor</a></p>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3" src="<?= base_url(); ?>/assets/documen/boosting.png" width="50" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">Gradinet Tree Boosting</h5>
                                    <p>Link : <a href="#">Gradinet Tree Boosting</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /left -->

            <!-- right -->
            <div class="col-12 col-md-6 col-lg-6">
                <!-- <div class="card">
                    <div class="card-header">
                        <h4>Nesting</h4>
                    </div>
                    <div class="card-body">
                        <div class="media">
                            <img class="mr-3" src="<?= base_url(); ?>/assets/image/example.jpg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0">Media heading</h5>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>

                                <div class="media mt-3">
                                    <a class="pr-3" href="#">
                                        <img src="<?= base_url(); ?>/assets/image/example.jpg" alt="Generic placeholder image">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="mt-0">Media heading</h5>
                                        <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="card">
                    <div class="card-body">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="<?= base_url(); ?>/template/assets/img/documen/dashboard.png" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block text-body">
                                        <h5>Dashboard Page</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?= base_url(); ?>/template/assets/img/documen/predict.png" alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block text-body">
                                        <h5>Predict Page</h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?= base_url(); ?>/template/assets/img/documen/result.png" alt="Third slide">
                                    <div class="carousel-caption d-none d-md-block text-body">
                                        <h5>Result Page</h5>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /right -->

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-center">
                        <h4>Developer & Mentor</h4>
                    </div>
                    <div class="row p-3 justify-content-center">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="d-flex justify-content-center">
                                <img src="<?= base_url('/assets/image/default.png'); ?>" alt="" class="rounded-circle border border-info m-3" width="120">
                            </div>
                            <div class="user-details text-center">
                                <div class="user-name">Siska Komala Sari, S.T., M.T.</div>
                                <div class="text-job text-muted">Mentor 1</div>
                                <div class="user-cta">
                                    <a href="#" class="btn btn-sm btn-info rounded-pill">Follow</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="d-flex justify-content-center">
                                <img src="<?= base_url('/assets/image/default.png'); ?>" alt="" class="rounded-circle border border-warning m-3" width="120">
                            </div>
                            <div class="user-details text-center">
                                <div class="user-name">Dr. Dedy Rahmat Wijaya, S.T., M.T.</div>
                                <div class="text-job text-muted">Mentor 2</div>
                                <div class="user-cta">
                                    <a href="#" class="btn btn-sm btn-warning rounded-pill">Follow</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class=" d-flex justify-content-center">
                                <img src="<?= base_url('template/assets/img/develop/jijah.jpeg'); ?>" alt="" class="rounded-circle border border-success m-3" width="120">
                            </div>
                            <div class="user-details text-center">
                                <div class="user-name">Siti Nurajijah</div>
                                <div class="text-job text-muted">Developer</div>
                                <div class="user-cta">
                                    <a href="#" class="btn btn-sm btn-success rounded-pill">Follow</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="d-flex justify-content-center">
                                <img src="<?= base_url('/template/assets/img/develop/moan.jpg'); ?>" alt="" class="rounded-circle border border-dark m-3" width="120">
                            </div>
                            <div class="user-details text-center">
                                <div class="user-name">Halomoan Filipus Simarmata</div>
                                <div class="text-job text-muted">Developer</div>
                                <div class="user-cta">
                                    <a href="#" class="btn btn-sm btn-dark rounded-pill">Follow</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class=" d-flex justify-content-center">
                                <img src="<?= base_url('template/assets/img/develop/adel.jpeg'); ?>" alt="" class="rounded-circle border border-danger m-3" width="120">
                            </div>
                            <div class="user-details text-center">
                                <div class="user-name">Putri Adelya Zhara</div>
                                <div class="text-job text-muted">Developer</div>
                                <div class="user-cta">
                                    <a href="#" class="btn btn-sm btn-danger rounded-pill">Follow</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<?= $this->endSection() ?>
<!-- end Content -->