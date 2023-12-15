
<div class="col-12">
        <section class="my-4 text-center row d-flex justify-content-center flex-column px-5">
            <h3>Toi aussi montre tes plus beaux skills</h3>
            <iframe width="100%" height="600" src="https://www.youtube.com/embed/kF6tg5TnxbA?si=CLcQyrcjvTu5wWGo&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen  muted></iframe>
        </section>
        <section class="d-flex justify-content-center flex-column mx-5 ">
            <h2 class="text-center">Recherche</h2>
                <div  class="input-group d-flex justify-content-center bg-dark text-white p-5">
                    <label class="form-label" for="city"></label>
                    <select class="form-control " name="city">
                        <option value="city">--City--</option>
                        <?php foreach ($data['center'] as $value) : ?>
                            <option value="<?=$value->getCenterId()?>"><?= $value->getCenterCity() ?></option>
                        <?php endforeach; ?>
                    </select>
                    <input class="form-control " type="dateStart" name="dateStart" min="<?=date('Y-m-d')?>" value="<?=date('Y-m-d')?>" >
                    <label class="form-label" for="dateEnd"></label>
                    <input class="form-control" type="dateEnd" name="dateEnd" min="<?=date('Y-m-d')?>" value="<?=date('Y-m-d')?>" >
                    <label class="form-label" for="hourStart"></label>
                    <input class="form-control" type="time" name="hourStart" id="" value="<?=date('H:i')?>" >
                    <label class="form-label" for="hourEnd"></label>
                    <input class="form-control" type="time" name="hourEnd" id="" value="<?=date('H:i')?>" 
                </div>
                <button type="submit" class="btn btn-light" name="filterForRentalOrCountry" value="filter">🔎</button>
            </div>
            
        </section>
        <section>
            <?php if (!empty($error)) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $error ?>
                </div>
            <?php elseif(!empty($success)) : ?>
                <div class="alert alert-success" role="alert">
                    <?= $success ?>
                </div>
            <?php endif;?>
        </section>
        <section class="display-filter ">
            <h2 class="text-center">Your result</h2>
            <div class="table-responsive-sm">
                <table class="table table-dark align-middle text-center" >
                    <thead>
                        <tr>
                            <th scope="col">Field Name</th>
                            <th scope="col">fieldTarifHourHT</th>
                            <th scope="col">fieldTarifDayHT</th>
                            <th scope="col">View</th>
                            <th scope="col">Rent</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </section>
        <section>
            <div class="container mb-5 text-center">
                <h2>Le top du top</h2>
                <div class="row d-flex justify-content-between">
                    <?php foreach($data['cards'] as $key => $value):?>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="<?= 'public/homecards/'.$value['image'] ?>" alt="Card image cap">
                            <h5 class="card-title"><?= $value['title'] ?></h5>
                            <div class="card-body">
                                <p class="card-text"><?= $value['description'] ?></p>
                            </div>
                            <div class="card-footer ">
                                <a href="?path=card&name=<?= $key ?>" class="btn btn-dark">Go somewhere</a>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </section>
    </div>

    <?php
    //action="/?path=home" method="POST"
    //d-flex justify-content-center flex-column mx-5