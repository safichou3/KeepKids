<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/profil_pro.css" rel="stylesheet">
<link href="<?= base_url(); ?>/css/profil.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="body-parents">
  <div class="content-body-parents">

    <div class="top-empty">
      <div class="profil-top">
        <h3 class="mini-title-parents">Profil</h3>
        <img class="img-profil-parents" src="<?= base_url(); ?>/img/profil-pro-avatar.svg" alt="">
      </div>
      <a class="link-mail-parents" href="mailto:professionnel@gmail.com"><button class="mail-parents"><i class="fi fi-rs-envelope"></i> professionnel@gmail.com</button></a>
    </div>
    <div class="middle-parents">
      <div class="middle-left-parents">
        <div class="middle-text-parents">
          <div class="kids">
            <h3 class="title-card-parents">Profil de <?=$profilPro["nom"];?> <?=$profilPro["prenom"];?> </h3>
            <h5>Mon nom: <?=$profilPro["nom"];?></h5>
            <h5>Mon Prénom: <?=$profilPro["prenom"];?></h5>
            <h5>Mon adresse e-mail: <?=$profilPro["email"];?></h5>
            <h5>Mon numéro de téléphone: <?=$profilPro["tel"];?></h5>
            <h5>Mon adresse: <?=$profilPro["adresse"];?></h5>
            <a class="link-btn-parents" href="<?= base_url(); ?>/espaces/parents/ModifProfilPro/<?=$profilPro["id"];?>"><button class="access">Modifier mon profil</button></a>
          </div>
        </div>
      </div>
      <div class="img-middle-right">
        <img class="img_parents" src="<?= base_url(); ?>/img/img-profil-pro-bis.svg" alt="">
      </div>
    </div>


    <div class="bottom-parents">
      <div class="btn-parents">

        <div class="btn-group">

          <div class="btn-param-parents btn-options">
            <a class="link-btn-options-parents" href="<?= base_url(); ?>/espaces/parents/mesEnfants">
              <button class="btn-parents-param btn-color-light btn-color btn-parents-bottom"><i class="fi fi-rs-settings icons-btn"></i>Paramètres</button>
            </a>
          </div>

          <div class="btn-theme-parents btn-options">
            <a class="link-btn-options-parents" href="<?= base_url(); ?>/espaces/parents/mesEnfants"><button class="btn-parents-theme btn-color-dark btn-color btn-parents-bottom"><i class="fi fi-rs-fill icons-btn"></i>Thème du site</button></a>
          </div>
        </div>

        <div class="btn-group">
          <div class="btn-contact-parents btn-options">
            <a class="link-btn-options-parents" href="<?= base_url(); ?>/espaces/parents/mesEnfants"><button class="btn-parents-contact btn-color-light btn-color btn-parents-bottom"><i class="fi fi-rs-headset icons-btn"></i>Nous contacter</button></a>
          </div>

          <div class="btn-tuto-parents btn-options">
            <a class="link-btn-options-parents" href="<?= base_url(); ?>/espaces/parents/mesEnfants"><button class="btn-parents-tuto btn-color-dark btn-color btn-parents-bottom"><i class="fi fi-rs-interrogation icons-btn"></i>Tutoriel</button></a>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="<?= base_url(); ?>/js/main.js"></script>
<?= $this->endSection() ?>