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
                                        <!-- Create code diplay cards -->
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