<div class="container-fluid cont">
    <section class="gradient-custom">
        <div class="container py-5 ">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-9 col-lg-12 col-xl-12">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <?php if (!empty($error)) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $error ?>
                            </div>
                        <?php elseif (!empty($result)) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= $result ?>
                            </div>
                        <?php endif; ?>
                        <div class="row d.flex justify-content-around align-items-center m-5">
                            <div class="col-4">
                                <img src="<?= 'public/img/admin/'.$data['admin']->getAdminPicture() ?>" class="card-img-top" alt="User Image" style="width:20rem;border-radius: 50%;">
                            </div>
                            <div class="col-4">
                                <h2 class="card-title  text-start"><?=$data['admin']->getAdminFirstName().'  '.$data['admin']->getAdminLastName()?></h2>
                                <ul class="card-text  text-start" style="list-style:none">
                                    <li> Email: <?= $data['admin']->getAdminEmail() ?></li>
                                    <li>Phone: 0<?= $data['admin']->getAdminNumber() ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="modalDeleteProfil"></div>
                        <div class="row pb-5">
                            <div class="col-6 d-flex justify-content-around">
                                <a href="?path=editadmin&id=<?=$data['admin']->getAdminId()?>" class="btn btn-outline-light m-2">Edit</a>
                                <button class="btn btn-outline-light m-2 deleteProfile" value="admin">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

