<div class="container-fluid">
    <section class="gradient-custom">
        <div class="container py-5 ">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <h2 class="fw-bold m-5 text-uppercase text-center">Rental order</h2>
                    
                    <div class="card-body  text-center m-5">
                        <div class="bg-white text-dark p-3">
                            <h3 ><?=$data['card']['fieldName']?></h3>
                        </div>
                        <div class="p-5">
                            <p class="card-text p-2 m-1">Date start : <?=$data['card']['times']['dateStart']?> / Date end : <?=$data['card']['times']['dateEnd']?></p>
                            <p class="card-text p-2 m-1">Hour start : <?=$data['card']['times']['hourStart']?> / Hour end : <?=$data['card']['times']['hourEnd']?></p>
                            <p class="card-text p-2 m-1">Total HT : <?=$data['card']['totalHT']?>€ / Total TTC : <?=$data['card']['totalHT']*1.2?>€</p>
                        </div>
                        <?php if(!empty($data['card']['options'])):?>
                            <div class="bg-white text-dark p-1">
                                <h3 >Options</h3>
                            </div>
                            <div class="table-responsive-sm">
                                <table class="table table-dark align-middle text-center" >
                                    <thead>
                                        <tr>
                                            <th scope="col">Option name</th>
                                            <th scope="col">Option cost HT</th>
                                            <th scope="col">Option cost TTC</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($data['card']['options'] as $key => $option):?>
                                            <tr>
                                                <td><?=$option['optionName']?></td>
                                                <td><?=$option['optionCostHT']?>€</td>
                                                <td><?=$option['optionCostHT']*1.2?>€</td>
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
                                <td><a href="?path=cardcheck&id=<?=$_GET['id']?>" class="btn btn-light">Valider</a></td>
                                <td><a href="?path=editcard&id=<?=$_GET['id']?>" class="btn btn-light">Edit</a></td>
                                <td><a href="?path=deletecard&id=<?=$_GET['id']?>" class="btn btn-light">Delete</a></td>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>