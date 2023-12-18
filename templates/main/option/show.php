
<?php $fieldOption = $data['option'] ?>
<div class="container-fluid">
    <section class="gradient-custom">
        <div class="container py-5 ">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <h2 class="fw-bold m-5 text-uppercase text-center"><?= $fieldOption->getOptionName(); ?></h2>
                    <img src="<?= 'public/img/option/'.$fieldOption->getOptionPicture(); ?>" class="card-img-top" alt="Image Placeholder"> 
                    <div class="card-body bg-white text-dark text-center m-5">
                        <p class="card-text"><?= $fieldOption->getOptionDescription(); ?></p> 
                    </div>
                    <?php if(!empty($_SESSION['role']) && $_SESSION['role'] === 'admin' ): ?>
                        <div class="car-footer">
                            <div class="row pb-5">
                                <div class="col-12 d-flex justify-content-around">
                                    <a href="?path=editoption&id=<?=$fieldOption->getOptionId()?>" class="btn btn-outline-light m-2">Edit</a>
                                    <a href="?path=deleteoption&id=<?=$fieldOption->getOptionId()?>" class="btn btn-outline-light m-2 delete">Delete</a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</div>