<div class="container-fluid">
    <section class="gradient-custom">
        <div class="container py-5 ">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <h2 class="fw-bold m-5 text-uppercase text-center">Rental Order</h2>
                    
                    <div class="card-body text-center m-5">
                        <div class="bg-white text-dark p-3">
                            <h3><?=$data['rental']->fieldId ?></h3>
                        </div>
                        <div class="p-5">
                            <?php
                            $rentalDataTimes = json_decode($data['rental']->rentalDataTimes);
                            ?>
                            <p class="card-text p-2 m-1">Date start: <?=$rentalDataTimes->dateStart ?> / Date end: <?=$rentalDataTimes->dateEnd ?></p>
                            <p class="card-text p-2 m-1">Hour start: <?=$rentalDataTimes->hourStart ?> / Hour end: <?=$rentalDataTimes->hourEnd ?></p>
                            <p class="card-text p-2 m-1">Total HT: <?=$data['rental']->rentalTotalHT ?>€ / Total TTC: <?=$data['rental']->rentalTotalHT * 1.2 ?>€</p>
                        </div>
                        <?php if(!empty($data['rental']->rentalDataOptions)):?>
                            <?php
                            $options = json_decode($data['rental']->rentalDataOptions, true);
                            ?>
                            <div class="bg-white text-dark p-1">
                                <h3>Options</h3>
                            </div>
                            <div class="table-responsive-sm">
                                <table class="table table-dark align-middle text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">Option name</th>
                                            <th scope="col">Option cost HT</th>
                                            <th scope="col">Option cost TTC</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($options as $option):?>
                                            <tr>
                                                <td><?=$option['optionName'] ?></td>
                                                <td><?=$option['optionCostHT'] ?>€</td>
                                                <td><?=$option['optionCostHT'] * 1.2 ?>€</td>
                                            </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        <?php endif;?>
                    </div>
                    <div class="car-footer">
                        <div class="row pb-5">
                            <div class="col-12 d-flex justify-content-around">
                                <?php if($data['rental']->rentalStatus == 1): ?>
                                    <td> <a href="?path=rentalcheck&id=<?=$data['rental']->rentalId?>&status=2" class="btn btn-light" >Valider</a></td>
                                    <td> <a href="?path=rentalcheck&id=<?=$data['rental']->rentalId?>&status=0"class="btn btn-light" >Refuser</a></td>
                                <?php elseif($data['rental']->rentalStatus == 2): ?>
                                    <td> <button class="btn btn-success" disabled>Valider</button></td>
                                <?php elseif($data['rental']->rentalStatus == 0): ?>
                                    <td><td> <button class="btn btn-danger"disabled>Refuser</button></td>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
