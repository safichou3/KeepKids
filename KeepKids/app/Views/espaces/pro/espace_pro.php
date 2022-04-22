<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url(); ?>/css/espace_pro.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('title') ?>
<!-- <h1>ESPACE PRO</h1> -->
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="body-pro">
    <div class="content-body-pro">
        <div class="top-empty"></div>
        <div class="top-pro">
            <div class="top-left-pro">
                <div class="top-text-pro">
                    <h3 class="mini-title-pro">Vous avez la main sur votre planning</h3>
                    <h1 class="hello-pro">Bonjour Houda,</h1>
                    <p class="mini-text-pro">L'espace Professionnel NeedKids vous permet de gérer le planning, les factures clients, et les paiements en toute sérénité </p>
                </div>

                <div class="btn-pro">
                    <div class="btn-planning-pro">
                        <button class="btn-pro-plan"></i>Mon Planning de garde</button>
                    </div>
                    <div class="btn-add-kids-pro">
                        <button class="btn-pro-kids"><i class="fa-solid fa-calendar-days"></i>Créer une facture</button>
                    </div>
                </div>
            </div>
            <div class="img-top-right">
                <img class="img_pro" src="<?= base_url(); ?>/img/creche.svg" alt="">
            </div>
        </div>
        <div class="middle-pro">
            <div class="kids">
                <h3 class="title-card-pro">Enfants</h3>
                <img class="img-title-card-pro" src="<?= base_url(); ?>/img/kiddo.svg" alt="">
                <a class="link-btn-pro" href="<?= base_url(); ?>/espaces/espace_pro"><button class="access">Accéder</button></a>
            </div>
            <div class="justificatifs kids">
                <h3 class="title-card-pro">Justificatifs</h3>
                <img class="img-title-card-pro" src="<?= base_url(); ?>/img/justificatifs.svg" alt="">
                <a class="link-btn-pro" href="<?= base_url(); ?>/espaces/espace_pro"><button class="access">Accéder</button></a>
            </div>
            <div class="factures kids">
                <h3 class="title-card-pro">Factures</h3>
                <img class="img-title-card-pro" src="<?= base_url(); ?>/img/factures.svg" alt="">
                <a class="link-btn-pro" href="<?= base_url(); ?>/espaces/espace_pro"><button class="access">Accéder</button></a>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>