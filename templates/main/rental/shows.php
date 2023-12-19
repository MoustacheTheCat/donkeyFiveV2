
<div class="container-fluid">
    <section class="gradient-custom">
        <div class="container py-5 ">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="row m-5">
                        <div class="col-12">
                            <h2 class="fw-bold m-2 text-uppercase text-center">Rental</h2>
                        </div>
                    </div> 
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4">
                            <div class="row d-flex ">
                                <div class="row gy-2 gx-3">
                                <div class="table-responsive-sm">
                                    <table class="table table-dark align-middle text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">User ID</th>
                                                <th scope="col">Total HT</th>
                                                <th scope="col">Total TTC</th>
                                                <th scope="col">View</th>
                                                <th scope="col2" colspan="4">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($data['rentals'] as $key => $rental): ?>
                                                <tr>
                                                    <td><?=$rental->userId ?></td>
                                                    <td><?=$rental->rentalTotalHT ?> €</td>
                                                    <td><?=$rental->rentalTotalHT * 1.2 ?> €</td>
                                                    <td><a href="?path=rental&id=<?=$rental->rentalId ?>" class="btn btn-light">View</a></td>
                                                    <?php if($rental->rentalStatus == 1): ?>
                                                        <td> <a href="?path=rentalcheck&id=<?=$rental->rentalId?>&status=2" class="btn btn-light" >Valider</a></td>
                                                        <td> <a href="?path=rentalcheck&id=<?=$rental->rentalId?>&status=0"class="btn btn-light" >Refuser</a></td>
                                                    <?php elseif($rental->rentalStatus == 2): ?>
                                                        <td> <button class="btn btn-success" disabled>Valider</button></td>
                                                    <?php elseif($rental->rentalStatus == 0): ?>
                                                        <td><td> <button class="btn btn-danger"disabled>Refuser</button></td>
                                                    <?php endif; ?>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>