
<div class="row text-center m-5">
    <h1><?= $data['card']['title'] ?></h1>
</div>
<section class="d-flex justify-content-center m-5" >
    <div class="card text-center bg-dark text-white">
        <p class="card-text m-5 "><?= $data['card']['description'] ?></p>
        <img class="card-img" src="<?= 'public/homecards/'.$data['card']['image'] ?>" alt="Card image cap">
    </div>
</section>
