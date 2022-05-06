<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/espace_commun.css" rel="stylesheet">
<link href="<?= base_url(); ?>/css/espace_pro.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('title') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<?php // print_r(session("prenom")); 
?>

<div class="body-pro">
    <div class="content-body content-body-pro">
        <div class="top-empty"></div>
        <div class="top-espaces top-pro">
            <div class="top-left-espaces top-left-pro">
                <div class="top-text-pro">
                    <h3 class="mini-title mini-title-pro">Vous avez la main sur votre planning</h3>
                    <h1 class="hello hello-pro">Bonjour, <?= session("prenom") ?></h1>
                    <p class="mini-text mini-text-pro">L'espace Professionnel KeepKids vous permet de gérer le planning, les factures clients, et les paiements en toute sérénité </p>
                </div>

                <div class="btn-espaces btn-pro">
                    <div class="btn-planning-pro">
                        <a href="<?= base_url(); ?>/espaces/pro/planningPro">
                            <button class="btn-top-espaces btn-pro-plan btn-espaces-margin"><i class="fi fi-rs-calendar fi-pro fi-plan"></i>Mon Planning de garde</button>
                        </a>
                    </div>
                    <div class="btn-add-fact-pro">
                        <a href="<?= base_url(); ?>/espaces/pro/facturesPro">
                            <button class="btn-top-espaces btn-pro-fact"><i class="fi fi-rs-receipt fi-pro fi-fact"></i>Créer une facture</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="img-top-right">
                <img class="img-top img_pro" src="<?= base_url(); ?>/img/creche.svg" alt="">
            </div>
        </div>
        <div class="middle-espaces middle-pro">
            <div class="kids kids-pro">
                <h3 class="title-card-pro">Enfants</h3>
                <img class="img-title-card img-title-card-pro" src="<?= base_url(); ?>/img/kiddo.svg" alt="">
                <a class="link-btn link-btn-pro" href="<?= base_url(); ?>/espaces/pro/enfantsPro"><button class="access">Accéder</button></a>
            </div>
            <div class="justificatifs kids kids-pro">
                <h3 class="title-card-pro">Mon profil</h3>
                <img class="img-title-card img-title-card-pro" src="<?= base_url(); ?>/img/profil-pro-avatar.svg" alt="">
                <a class="link-btn link-btn-pro" href="<?= base_url(); ?>/espaces/pro/profilPro"><button class="access">Accéder</button></a>
            </div>
            <div class="factures kids kids-pro">
                <h3 class="title-card-pro">Factures</h3>
                <img class="img-title-card-pro" src="<?= base_url(); ?>/img/justificatifs.svg" alt="">
                <a class="link-btn link-btn-pro" href="<?= base_url(); ?>/espaces/pro/facturesPro"><button class="access">Accéder</button></a>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="<?= base_url(); ?>/js/main.js"></script>
<?= $this->endSection() ?>