<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/profil.css" rel="stylesheet">
<link href="<?= base_url(); ?>/css/profil_parents.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="body-parents">
  <div class="content-body-parents">

    <div class="top-empty">
      <div class="profil-top">
        <h3 class="mini-title-parents">Profil</h3>
        <img class="img-profil-parents" src="<?= base_url(); ?>/img/sammy.jpg" alt="">
      </div>
      <a class="link-mail-parents" href="mailto:addresse@duparent.com"><button class="mail-parents">parent@gmail.com</button></a>
    </div>

    <div class="middle-parents">
      <div class="middle-left-parents">
        <div class="middle-text-parents">
          <div class="kids">
            <h3 class="title-card-parents">Nom de l'utilisateur</h3>
            <img class="img-title-card-parents" src="<?= base_url(); ?>/img/infos-enfants.svg" alt="">
            <a class="link-btn-parents" href="<?= base_url(); ?>/espaces/parents/mesEnfants"><button class="access">Modifier le profil</button></a>
          </div>
        </div>
      </div>
      <div class="img-middle-right">
        <img class="img_parents" src="<?= base_url(); ?>/img/img-profil-parents.svg" alt="">
      </div>
    </div>


    <div class="bottom-parents">
      <div class="btn-parents">

        <div class="btn-param-parents btn-options">
          <a class="link-btn-options-parents" href="<?= base_url(); ?>/espaces/parents/mesEnfants">
            <button class="btn-parents-param btn-color-light btn-parents-bottom"><i class="fi fi-rs-settings icons-btn"></i>Paramètres</button>
          </a>
        </div>

        <div class="btn-theme-parents btn-options">
          <a class="link-btn-options-parents" href="<?= base_url(); ?>/espaces/parents/mesEnfants"><button class="btn-parents-theme btn-color-dark btn-parents-bottom"><i class="fi fi-rs-fill icons-btn"></i>Thème du site</button></a>
        </div>

        <div class="btn-contact-parents btn-options">
          <a class="link-btn-options-parents" href="<?= base_url(); ?>/espaces/parents/mesEnfants"><button class="btn-parents-contact btn-color-light btn-parents-bottom"><i class="fi fi-rs-headset icons-btn"></i>Nous contacter</button></a>
        </div>

        <div class="btn-tuto-parents btn-options">
          <a class="link-btn-options-parents" href="<?= base_url(); ?>/espaces/parents/mesEnfants"><button class="btn-parents-tuto btn-color-dark btn-parents-bottom"><i class="fi fi-rr-play-alt icons-btn"></i>Tutoriel</button></a>
        </div>

      </div>
    </div>

  </div>
</div>

<?= $this->endSection() ?>