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
                                        <label class="form-label" for="userFirstName">First Name</label>
                                        <input type="text" id="userFirstName" name="userFirstName" class="form-control form-control-lg" value="<?=$data['user']->getUserFirstName()?>">
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="userLastName">Last Name</label>
                                        <input type="text" id="userLastName" name="userLastName" class="form-control form-control-lg" value="<?=$data['user']->getUserLastName()?>">
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="userBirthDay">Birthdate</label>
                                        <input type="date" id="userBirthDay" name="userBirthDay" class="form-control form-control-lg" value="<?=$data['user']->getUserBirthDay()?>">
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="userEmail">Email</label>
                                        <input type="email" id="userEmail" name="userEmail" class="form-control form-control-lg" value="<?=$data['user']->getUserEmail()?>">
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="userNumber">Phone Number</label>
                                        <input type="tel" id="userNumber" name="userNumber" class="form-control form-control-lg" value="0<?=$data['user']->getUserNumber()?>">
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="userAddress">Address</label>
                                        <input type="text" id="userAddress" name="userAddress" class="form-control form-control-lg" value="<?=$data['user']->getUserAddress()?>">
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="userZip">Zip Code</label>
                                        <input type="text" id="userZip" name="userZip" class="form-control form-control-lg" value="<?=$data['user']->getUserZip()?>">
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="userCity">City</label>
                                        <input type="text" id="userCity" name="userCity" class="form-control form-control-lg" value="<?=$data['user']->getUserCity()?>">
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="userCountry">Country</label>
                                        <select id="userCountry" name="userCountry" class="form-control form-control-lg">
                                            <option value="<?=$data['user']->getUserCountry()?>"><?=$data['user']->getUserCountry()?></option>
                                            <?php foreach ($data['countrys'] as $pay) : ?>
                                                <option value="<?=$pay?>"><?=$pay?></option>
                                            <?php endforeach; ?>
                                        </select>
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
                                        <label class="form-label" for="newUserPassword">New Password</label>
                                        <input type="password" id="newUserPassword" name="newUserPassword" class="form-control form-control-lg" placeholder="Enter new your password">
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="newUserPasswordConfirm">New Password Confirm</label>
                                        <input type="password" id="newUserPasswordConfirm" name="newUserPasswordConfirm" class="form-control form-control-lg" placeholder="Enter your new password confirm ">
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
                                <img src="<?= 'public/img/user/'.$data['user']->getUserPicture() ?>" class="card-img-top" alt="User Image" style="width:20rem;border-radius: 50%;">
                                <form action="?path=edituserpicture" method="POST" enctype="multipart/form-data">
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="userPicture">Profile Picture</label>
                                        <input type="file" id="userPicture" name="userPicture" class="form-control form-control-lg" placeholder="<?=$data['user']->getUserPicture()?>">
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