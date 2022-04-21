<?= $this->extend('master') ?>


<?= $this->section('css') ?>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
<link href="<?= base_url(); ?>/css/espace_parents.css" rel="stylesheet">
<?= $this->endSection() ?>
<?= $this->section('title') ?>
<h2 class="section-title"><br></h2>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="body-parents">
  <div class="content-body-parents">
    <div class="top-empty"></div>
    <div class="top-parents">
      <div class="top-left-parents">
        <div class="top-text-parents">
          <h3 class="mini-title-parents">Vous avez la main sur votre planning</h3>
          <h1 class="hello-parents">Bonjour <?= session("prenom"); ?>,</h1>
          <p class="mini-text-parents">Votre espace parent KeepKids vous permet de gérer votre planning de garde et vos factures en toute sérénité</p>
        </div>

        <div class="btn-parents">
          <div class="btn-reservation-parents">
            <button class="btn-parents-res"><i class="fi fi-rs-calendar icons-btn"></i>Réserver</button>
          </div>
          <div class="btn-add-kids-parents">
            <a href="<?= base_url(); ?>/espaces/parents/mesEnfants"><button class="btn-parents-kids"><i class="fi fi-rs-child-head icons-btn"></i>Ajouter un enfant</button></a>
          </div>
        </div>
      </div>
      <div class="img-top-right">
        <img class="img_parents" src="<?= base_url(); ?>/img/booking.svg" alt="">
      </div>
    </div>
    <div class="middle-parents">
      <div class="kids">
        <h3 class="title-card-parents">Mes Enfants</h3>
        <img class="img-title-card-parents" src="<?= base_url(); ?>/img/kiddo.svg" alt="">
        <a class="link-btn-parents" href="<?= base_url(); ?>/espaces/parents/mesEnfants"><button class="access">Accéder</button></a>
      </div>
      <div class="justificatifs kids">
        <h3 class="title-card-parents">Justificatifs</h3>
        <img class="img-title-card-parents" src="<?= base_url(); ?>/img/justificatifs.svg" alt="">
        <a class="link-btn-parents" href="<?= base_url(); ?>/espaces/espace_pro"><button class="access">Accéder</button></a>
      </div>
      <div class="factures kids">
        <h3 class="title-card-parents">Mes Factures</h3>
        <img class="img-title-card-parents" src="<?= base_url(); ?>/img/factures.svg" alt="">
        <a class="link-btn-parents" href="<?= base_url(); ?>/espaces/espace_pro"><button class="access">Accéder</button></a>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>