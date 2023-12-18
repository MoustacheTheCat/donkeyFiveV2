<div class="container-fluid cont">
    <section class="gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center    ">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Create Center</h2>
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
                                <form action="?path=addcentercheck" method="POST" enctype="multipart/form-data">
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="centerName">Center Name</label>
                                        <input type="text" id="centerName" name="centerName" class="form-control form-control-lg" placeholder="center Name" required>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="centerEmail">Center Email</label>
                                        <input type="email" id="centerEmail" name="centerEmail" class="form-control form-control-lg" placeholder="Enter your email" required>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="centerNumber">Center Phone Number</label>
                                        <input type="tel" id="centerNumber" name="centerNumber" class="form-control form-control-lg" placeholder="Enter your phone number" required>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="centerAddress">Center Address</label>
                                        <input type="text" id="centerAddress" name="centerAddress" class="form-control form-control-lg" placeholder="Enter your address" required>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="centerZip">Center Zip Code</label>
                                        <input type="text" id="centerZip" name="centerZip" class="form-control form-control-lg" placeholder="Enter your zip code" required>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="centerCity">Center City</label>
                                        <input type="text" id="centerCity" name="centerCity" class="form-control form-control-lg" placeholder="Enter your city" required>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="centerDescription">Center Description</label>
                                        <textarea id="centerDescription" name="centerDescription" class="form-control form-control-lg" cols="30" rows="10" required>center description ...</textarea>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="centerCountry">Country</label>
                                        <select id="centerCountry" name="centerCountry" class="form-control form-control-lg" required>
                                            <option value="" disabled selected>Select your country</option>
                                            <?php foreach ($data['countrys'] as $pay) : ?>
                                                <option value="<?=$pay?>"><?=$pay?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="centerPicture">center Picture</label>
                                        <input type="file" id="centerPicture" name="centerPicture" class="form-control form-control-lg" placeholder="center picture" required>
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