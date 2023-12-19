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
                            <p class="card-text p-2 m-1 dateVar">Date start : <?=$data['card']['times']['dateStart']?> / Date end : <?=$data['card']['times']['dateEnd']?></p>
                            <p class="card-text p-2 m-1 hourVar">Hour start : <?=$data['card']['times']['hourStart']?> / Hour end : <?=$data['card']['times']['hourEnd']?></p>
                            <p class="card-text p-2 m-1">Total HT : <?=$data['card']['totalHT']?>€ / Total TTC : <?=$data['card']['totalHT']*1.2?>€</p>
                        </div>
                        <div class="row pb-5">
                            <div class="col-12 d-flex justify-content-around">
                                <button class="btn btn-light updateInfo" value="<?=$_GET['id']?>">Update Rend</button>
                            </div>
                        </div>
                        <div class="modalUpdateRentInfo"></div>
                       
                            <div class="table-responsive-sm">
                                <table class="table table-dark align-middle caption-top" >
                                <caption class="bg-white text-dark p-1 text-center"><h3 >Options</h3></caption>
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Option name</th>
                                            <th scope="col">Option cost HT</th>
                                            <th scope="col">Option cost TTC</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider bg-white text-dark">
                                        <?php if(!empty($data['card']['options'])):?>
                                            <?php foreach($data['card']['options'] as $key => $op):?>
                                                <tr >
                                                    <td class="bg-white text-dark""><?=$op['optionName']?></td>
                                                    <td class="bg-white text-dark""><?=$op['optionCostHT']?>€</td>
                                                    <td class="bg-white text-dark""><?=$op['optionCostHT']*1.2?>€</td>
                                                    <td class="bg-white text-dark""> <input type="checkbox" name="deleteOption" id="" class="deleteOption" value="<?=$key?>"> </td>
                                                </tr>
                                            <?php endforeach;?>
                                        <?php endif;?>
                                    </tbody>
                                    <tbody class="table-group-divider">
                                        <?php foreach($data['options'] as $option):?>
                                            <?php  if(!array_key_exists($option->getoptionId(),$data['card']['options'])):?>   
                                            <tr>
                                                <td><?=$option->getOptionName()?></td>
                                                <td><?=$option->getOptionCostHT()?>€</td>
                                                <td><?=$option->getOptionCostHT()*1.2?>€</td>
                                                <td><input type="checkbox" name="addOption" id="" class="addOption" value="<?=$option->getOptionId()?>"></td>
                                            </tr>
                                            <?php endif;?>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        
                    </div>
                    <div class="car-footer">
                        <div class="row pb-5">
                            <div class="col-12 d-flex justify-content-around">
                                <a href="?path=cardcheck&id=<?=$_GET['id']?>" class="btn btn-light">Valider</a>
                                <button class="btn btn-light updateOption" value="<?=$_GET['id']?>">Update Option</button>
                                <a href="?path=deletecard&id=<?=$_GET['id']?>" class="btn btn-light">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


                                                    