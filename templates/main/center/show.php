<div class="container-fluid cont">
    <section class="gradient-custom">
        <div class="container py-5 ">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 ">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <h2 class="fw-bold mb-2 text-uppercase text-center m-5"><?= $data['center']->getCenterName() ?></h2>
                        <img src="<?= 'public/img/center/'.$data['center']->getCenterPicture(); ?>" class="card-img-top mt-5" alt="Image Field"> 
                        <div class="card-body p-5 text-center">
                            <p class="text-dark-50 mb-5 bg-white text-dark p-5"><?= $data['center']->getCenterDescription() ?></p>
                            <div class="row">
                                <div class="col-12">
                                    <p><?= $data['center']->getCenterEmail() ?> </p>
                                    <p><?= $data['center']->getCenterNumber() ?> </p>
                                    <p><?= $data['center']->getCenterAddress() ?> </p>
                                    <p><?= $data['center']->getCenterCity()?> - <?= $data['center']->getCenterZip()?></p>
                                    <p><?= $data['center']->getCenterCountry()?></p>
                                </div>
                            </div>
                        </div>
                        <?php if(!empty($_SESSION['role']) && $_SESSION['role'] === 'admin' ): ?>
                            <div class="car-footer">
                                <div class="row pb-5">
                                    <div class="col-12 d-flex justify-content-around">
                                        <a href="?path=editcenter&id=<?= $data['center']->getCenterId() ?>" class="btn btn-outline-light m-2">Edit</a>
                                        <a href="?path=deletecenter&id=<?= $data['center']->getCenterId() ?>" class="btn btn-outline-light m-2 delete">Delete</a>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php if(!empty($data['fields'])) { include 'templates/main/field/shows.php'; }?>