<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/profil_parents.css" rel="stylesheet">
<link href="<?= base_url(); ?>/css/profil.css" rel="stylesheet">
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
              <form method='POST' action="<?= base_url()?>/espaces/parents/ModifProfil/<?= session("id"); ?>" enctype='multipart/form-data'>
            <h3 class="title-card-parents">Modifier mon profil</h3><br>
            <label>Nom d'utilisateur</label><br>
            <input type="text" name="nom" value="<?=$profil[0]["nom"];?>"><br>
            <label>Prenom d'utilisateur</label><br>
            <input type="text" name="prenom" value="<?=$profil[0]["prenom"];?>"><br>
            <label>Adresse E-mail</label><br>
            <input type="email" name="email" value="<?=$profil[0]["email"];?>"><br>
            <label>Téléphone</label><br>
            <input type="text" name="tel" value="<?=$profil[0]["tel"];?>"><br>
            <label>Adresse</label><br>
            <input type="text" name="adresse" value="<?=$profil[0]["adresse"];?>"><br>

            <input type="submit" value="Valider mes modifications" class="access">
</form>
            
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
          <a class="link-btn-options-parents" href="<?= base_url(); ?>/espaces/parents/mesEnfants"><button class="btn-parents-tuto btn-color-dark btn-parents-bottom"><i class="fi fi-rs-interrogation icons-btn"></i>Tutoriel</button></a>
        </div>

      </div>
    </div>

  </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="<?= base_url(); ?>/js/main.js"></script>
<?= $this->endSection() ?>