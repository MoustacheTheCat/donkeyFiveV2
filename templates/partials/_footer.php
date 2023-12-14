<footer class="bg-dark text-center text-white px-0">
    <div class="row logo-sponsor d-flex flex-row justify-content-evenly align-items-center p-5">
        <div class="col-lg-3 col-sm-12 col-xs-12">
            <a href="https://www.adidas.fr/football" target="_blank" class="lf-sponsor-logo"><img src="public/logo/footer/logo-adidas.svg" style="width:8rem;height:8rem;" alt="logo Adidas"></a> 
        </div>
        <div class="col-lg-3 col-sm-12 col-xs-12">
            <a href="https://www.betclic.fr/" target="_blank" class="lf-sponsor-logo"><img src="public/logo/footer/logo-betclic.svg" style="width:8rem;height:8rem;" alt="logo Betclic"></a> 
        </div>
        <div class="col-lg-3 col-sm-12 col-xs-12">
            <a href="https://www.fff.fr/" target="_blank" class="lf-sponsor-logo"><img src="public/logo/footer/logo-fff.svg" style="width:8rem;height:8rem;" alt="logo FFF"></a> 
        </div>
        <div class="col-lg-3 col-sm-12 col-xs-12">
            <a href="https://rmc.bfmtv.com/" target="_blank" class="lf-sponsor-logo"><img src="public/logo/footer/logo-rmc.svg" style="width:8rem;height:8rem;" alt="logo RMC"></a>
        </div>
    </div>
    <div class="text-center p-5" style="background-color: rgba(0, 0, 0, 0.2);">
        <?php if ((!empty($_SESSION['user']) && $_SESSION['role'] === 'user')|| empty($_SESSION['user'])) : ?>
            <span> © 2023 donkeyfive.com - <a href="/contact">Contact</a> - À propos - Paris</span>
        <?php else :?>
            <span> © 2023 donkeyfive.com - Paris</span>
        <?php endif; ?>
    </div>
</footer>