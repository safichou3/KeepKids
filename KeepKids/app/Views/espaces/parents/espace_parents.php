<?= $this->extend('master') ?>


<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/espace_commun.css" rel="stylesheet">
<link href="<?= base_url(); ?>/css/espace_parents.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="body-parents">
  <div class="content-body content-body-parents">
    <div class="top-empty"></div>
    <div class="top-espaces top-parents">
      <div class="top-left-espaces top-left-parents">
        <div class="top-text-parents">
          <h3 class="mini-title mini-title-parents">Vous avez la main sur votre planning</h3>
          <h1 class="hello hello-parents">Bonjour <?= session("prenom"); ?>,</h1>
          <p class="mini-text mini-text-parents">Votre espace parent KeepKids vous permet de gérer votre planning de garde et vos factures en toute sérénité</p>
        </div>

        <div class="btn-espaces btn-parents">
          <div class="btn-reservation-parents">
            <a href="<?= base_url(); ?>/espaces/parents/reservations">
              <button class="btn-top-espaces btn-parents-res btn-espaces-margin"><i class="fi fi-rs-calendar icons-btn"></i>Réserver</button>
            </a>
          </div>
          <div class="btn-add-kids-parents">
            <a href="<?= base_url(); ?>/espaces/parents/mesEnfants"><button class="btn-top-espaces btn-parents-kids"><i class="fi fi-rs-child-head icons-btn"></i>Ajouter un enfant</button></a>
          </div>
        </div>
      </div>
      <div class="img-top-right">
        <img class="img-top img_parents" src="<?= base_url(); ?>/img/booking.svg" alt="">
      </div>
    </div>
    <div class="middle-espaces middle-parents">
      <div class="kids kids-parents">
        <h3 class="title-card title-card-parents">Mes Enfants</h3>
        <img class="img-title-card img-title-card-parents" src="<?= base_url(); ?>/img/kiddo.svg" alt="">
        <a class="link-btn link-btn-parents" href="<?= base_url(); ?>/espaces/parents/mesEnfants"><button class="access">Accéder</button></a>
      </div>
      <div class="justificatifs kids kids-parents">
        <h3 class="title-card title-card-parents">Mon Profil</h3>
        <img class="img-title-card img-title-card-parents" src="<?= base_url(); ?>/img/profil-pro-avatar.svg" alt="">
        <a class="link-btn link-btn-parents" href="<?= base_url(); ?>/espaces/parents/profil"><button class="access">Accéder</button></a>
      </div>
      <div class="factures kids kids-parents">
        <h3 class="title-card title-card-parents">Mes Factures</h3>
        <img class="img-title-card img-title-card-parents" src="<?= base_url(); ?>/img/justificatifs.svg" alt="">
        <a class="link-btn link-btn-parents" href="<?= base_url(); ?>/espaces/parents/paiements"><button class="access">Accéder</button></a>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="<?= base_url(); ?>/js/main.js"></script>
<?= $this->endSection() ?>