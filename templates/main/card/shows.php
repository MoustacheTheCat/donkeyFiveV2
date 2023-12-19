<?php var_dump($data['cards']);?>
<div class="container-fluid">
    <section class="gradient-custom">
        <div class="container py-5 ">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="row m-5">
                        <div class="col-12">
                            <h2 class="fw-bold m-2 text-uppercase text-center">Cards</h2>
                        </div>
                    </div> 
                    <?php if(!empty($_SESSION['card'])):?>
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4">
                                <div class="row d-flex ">
                                    <div class="row gy-2 gx-3">
                                    <div class="table-responsive-sm">
                                        <table class="table table-dark align-middle text-center" >
                                            <thead>
                                                <tr>
                                                    <th scope="col">Field Name</th>
                                                    <th scope="col">Total HT</th>
                                                    <th scope="col">Total TTC</th>
                                                    <th scope="col">View</th>
                                                    <th scope="col">Valider</th>
                                                    <th scope="col">Edit</th>
                                                    <th scope="col">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($data['cards'] as $key => $value):?>
                                                    <tr>
                                                        <td>
                                                            <?php foreach($data['cards'] as $dt) {
                                                                echo $dt['fieldName'];
                                                            }?></td>
                                                        <td><?= $value['totalHT'] ?> €</td>
                                                        <td><?= $value['totalHT']*1.2 ?> €</td>
                                                        <td><a href="?path=card&id=<?=$key?>" class="btn btn-light">View</a></td>
                                                        <td><a href="?path=cardcheck&id=<?=$key?>" class="btn btn-light">Valider</a></td>
                                                        <td><a href="?path=editcard&id=<?=$key?>" class="btn btn-light">Edit</a></td>
                                                        <td><a href="?path=deletecard&id=<?=$key?>" class="btn btn-light">Delete</a></td>
                                                    </tr>
                                                <?php endforeach;?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex ">
                                <div class="row gy-2 gx-3">
                                    <div class="table-responsive-sm">
                                        <table class="table table-dark align-middle text-center" >
                                            <thead>
                                                <tr>
                                                    <th scope="col">Total HT</th>
                                                    <th scope="col">Total TVA</th>
                                                    <th scope="col">Total TTC</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <?php 
                                                            $allTotalHT = 0;
                                                            foreach($data['cards'] as $key => $value){
                                                                $allTotalHT += $value['totalHT'];
                                                            };
                                                            echo $allTotalHT.' €';
                                                        ?>
                                                    </td>
                                                    <td><?= $allTotalHT*0.2 ?> €</td>
                                                    <td><?= $allTotalHT*1.2 ?> €</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php else:?>
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4">
                                <div class="row text-center ">
                                    <div class="alert alert-danger" role="alert">
                                        <h2>Card is empty</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </section>
</div>