<div class="container-fluid">
    <section class="gradient-custom">
        <div class="container py-5 ">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="row m-5">
                        <div class="col-12">
                            <h2 class="fw-bold m-2 text-uppercase text-center">Options</h2>
                        </div>
                    </div> 
                    <div class="modalRent"></div>
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4">
                            <div class="row d-flex ">
                                <div class="row gy-2 gx-3">
                                    <?php foreach ($data['options'] as $fieldOption) : ?>
                                        <div class="col-md-3 mb-5 align-items-center">
                                            <div class="card card-options" style="width: 80%; height:100%;">
                                                <a href="?path=option&id=<?=$fieldOption->getOptionId()?>">
                                                    <img src="<?= 'public/img/option/'.$fieldOption->getOptionPicture(); ?>" class="card-img-top" alt="Image Placeholder" style="height:10rem"> 
                                                </a>
                                                <h5 class="card-title bg-dark text-white"><?= $fieldOption->getOptionName(); ?></h5>
                                                <div class="card-body">
                                                    <p class="card-text p-2"><?= $fieldOption->getOptionDescription(); ?></p> 
                                                </div>                                           
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>