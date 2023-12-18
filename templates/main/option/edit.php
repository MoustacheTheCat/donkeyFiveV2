<?php var_dump($data['option']); ?>
<div class="container-fluid cont">
    <section class="gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Update Option</h2>
                                <?php if (!empty($error)) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= $error ?>
                                    </div>
                                <?php elseif (!empty($result)) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <?= $result ?>
                                    </div>
                                <?php endif; ?>
                                <form action="?path=editoptioninfo&id=<?=$data['option']->getOptionId()?>" method="POST" enctype="multipart/form-data">
                                <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="optionName">Option Name</label>
                                        <input type="text" id="optionName" name="optionName" class="form-control form-control-lg" value="<?=$data['option']->getOptionName()?>">
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="optionCostHT">Option CostHT</label>
                                        <input type="number" id="optionCostHT" name="optionCostHT" class="form-control form-control-lg" value="<?=$data['option']->getOptionCostHT()?>">
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="optionDescription">Option Description</label>
                                        <textarea id="optionDescription" name="optionDescription" class="form-control form-control-lg" cols="30" rows="10" required><?=$data['option']->getOptionDescription()?></textarea>
                                    </div>
                                    <button class="btn btn-outline-light btn-lg px-5" type="submit" name="updateInfo">Update Option info</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Update Option Picture</h2>
                                <?php if (!empty($error)) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= $error ?>
                                    </div>
                                <?php elseif (!empty($result)) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <?= $result ?>
                                    </div>
                                <?php endif; ?>
                                <img src="<?= 'public/img/option/'.$data['option']->getOptionPicture() ?>" class="card-img-top" alt="option Image" style="width:20rem;border-radius: 50%;">
                                <form action="?path=editoptionpicture&id=<?=$data['option']->getOptionId()?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="optionPicture">Option Picture</label>
                                        <input type="file" id="optionPicture" name="optionPicture" class="form-control form-control-lg" placeholder="Option pciture" required>
                                    </div>
                                    <button class="btn btn-outline-light btn-lg px-5" type="submit" name="updatePicture">Update picture</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>