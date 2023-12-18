
<div class="container-fluid cont">
    <section class="gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center    ">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Create Field</h2>
                                <?php if (!empty($data['datas'])) : ?>
                                    <?php if(is_string($data['datas'])):?>
                                        <div class="alert alert-danger" role="alert">
                                            <?= $data['datas'] ?>
                                        </div>
                                    <?php else: ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?php foreach($data['datas'] as $data): ?>
                                                <?= $data ?>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <form action="?path=addfieldcheck" method="POST" enctype="multipart/form-data">
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="fieldName">Field Name</label>
                                        <input type="text" id="fieldName" name="fieldName" class="form-control form-control-lg" placeholder="Field Name" required>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="fieldTarifHourHT">Field tarif Hour HT</label>
                                        <input type="number" id="fieldTarifHourHT" name="fieldTarifHourHT" class="form-control form-control-lg" placeholder="field tarif hour HT" required>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="fieldTarifDayHT">Field tarif Day HT</label>
                                        <input type="number" id="fieldTarifDayHT" name="fieldTarifDayHT" class="form-control form-control-lg" placeholder="field tarif day HT" required>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="fieldDescription">Field Description</label>
                                        <textarea id="fieldDescription" name="fieldDescription" class="form-control form-control-lg" cols="30" rows="10" required>Field description ...</textarea>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="fieldPicture">Field Picture</label>
                                        <input type="file" id="fieldPicture" name="fieldPicture" class="form-control form-control-lg" placeholder="field picture" required>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="centerId">Center</label>
                                        <select name="centerId" class="form-control form-control-lg" required>
                                            <option value="" disabled selected>Select Center</option>
                                            <?php foreach ($data['centers'] as $center) : ?>
                                                <option value="<?=$center->getCenterId()?>"><?=$center->getCenterName()?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <button class="btn btn-outline-light btn-lg px-5" type="submit" name="register">Register</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>