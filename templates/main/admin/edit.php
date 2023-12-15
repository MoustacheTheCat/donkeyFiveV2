<div class="container-fluid cont">
    <section class="gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Update your profil</h2>
                                <p class="text-white-50 mb-5">Please enter your details to create an account!</p>
                                <?php if (!empty($error)) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= $error ?>
                                    </div>
                                <?php elseif (!empty($result)) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <?= $result ?>
                                    </div>
                                <?php endif; ?>
                                <form action="?path=edituserinfo" method="POST" enctype="multipart/form-data">
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="adminFirstName">First Name</label>
                                        <input type="text" id="adminFirstName" name="adminFirstName" class="form-control form-control-lg" value="<?=$data['admin']->getAdminFirstName()?>">
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="adminLastName">Last Name</label>
                                        <input type="text" id="adminLastName" name="adminLastName" class="form-control form-control-lg" value="<?=$data['admin']->getAdminLastName()?>">
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="adminEmail">Email</label>
                                        <input type="email" id="adminEmail" name="adminEmail" class="form-control form-control-lg" value="<?=$data['admin']->getAdminEmail()?>">
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="adminNumber">Phone Number</label>
                                        <input type="tel" id="adminNumber" name="adminNumber" class="form-control form-control-lg" value="0<?=$data['admin']->getAdminNumber()?>">
                                    </div>
                                    <button class="btn btn-outline-light btn-lg px-5" type="submit" name="updateInfo">Update info</button>
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
                                <h2 class="fw-bold mb-2 text-uppercase">Update your Password</h2>
                                <p class="text-white-50 mb-5">Please enter your details to create an account!</p>
                                <?php if (!empty($error)) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= $error ?>
                                    </div>
                                <?php elseif (!empty($result)) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <?= $result ?>
                                    </div>
                                <?php endif; ?>
                                <form action="?path=edituserpassword" method="POST" enctype="multipart/form-data">
                                <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Enter your password">
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="newAdminPassword">New Password</label>
                                        <input type="password" id="newAdminPassword" name="newAdminPassword" class="form-control form-control-lg" placeholder="Enter new your password">
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="newAdminPasswordConfirm">New Password Confirm</label>
                                        <input type="password" id="newAdminPasswordConfirm" name="newAdminPasswordConfirm" class="form-control form-control-lg" placeholder="Enter your new password confirm ">
                                    </div>
                                    <button class="btn btn-outline-light btn-lg px-5" type="submit" name="updatePassword">Update your password</button>
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
                                <h2 class="fw-bold mb-2 text-uppercase">Update your Picture</h2>
                                <?php if (!empty($error)) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= $error ?>
                                    </div>
                                <?php elseif (!empty($result)) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <?= $result ?>
                                    </div>
                                <?php endif; ?>
                                <img src="<?= 'public/img/admin/'.$data['admin']->getAdminPicture() ?>" class="card-img-top" alt="admin Image" style="width:20rem;border-radius: 50%;">
                                <form action="?path=edituserpicture" method="POST" enctype="multipart/form-data">
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="adminPicture">Profile Picture</label>
                                        <input type="file" id="adminPicture" name="adminPicture" class="form-control form-control-lg" placeholder="<?=$data['admin']->getAdminPicture()?>">
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