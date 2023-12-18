<div class="container-fluid cont">
    <section class="gradient-custom">
        <div class="container py-5 ">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 ">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <h2 class="fw-bold mb-2 text-uppercase text-center m-5"><?= $data['field']->getFieldName() ?></h2>
                        <img src="<?= 'public/img/field/'.$data['field']->getFieldPicture(); ?>" class="card-img-top mt-5" alt="Image Field"> 
                        <div class="card-body p-5 text-center">
                            <p class="text-dark-50 mb-5 bg-white text-dark p-5"><?= $data['field']->getFieldDescription() ?></p>
                            <div class="row">
                                <div class="col-12">
                                    <p>Tarif Hour (HT): <?= $data['field']->getFieldTarifHourHT() ?> € - Tarif Hour (TTC): <?= $data['field']->getFieldTarifHourHT()*1.2 ?> €</p>
                                    <p>Tarif Day (HT): <?= $data['field']->getFieldTarifDayHT() ?> €- Tarif Day (TTC): <?= $data['field']->getFieldTarifDayHT()*1.2 ?> €</p>
                                </div>
                            </div>
                        </div>
                        <?php if(!empty($_SESSION['role']) && $_SESSION['role'] === 'admin' ): ?>
                            <div class="car-footer">
                                <div class="row pb-5">
                                    <div class="col-12 d-flex justify-content-around">
                                        <a href="?path=editfield&id=<?= $data['field']->getFieldId() ?>" class="btn btn-outline-light m-2">Edit</a>
                                        <a href="?path=deletefield&id=<?= $data['field']->getFieldId() ?>" class="btn btn-outline-light m-2 delete">Delete</a>
                                    </div>
                                </div>
                            </div>
                        <?php elseif(empty($_SESSION['role']) || $_SESSION['role'] === "user"):?>
                            <div class="car-footer">
                                <div class="row pb-5">
                                    <div class="col-12 d-flex justify-content-around">
                                        <button class="btn btn-outline-light m-2 rent" value="<?= $data['field']->getFieldId() ?>">Rent</button>
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
<?php if(!empty($data['options'])) { include 'templates/main/option/shows.php'; }?>
