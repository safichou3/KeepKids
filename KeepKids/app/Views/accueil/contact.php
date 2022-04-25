<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/contact.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('title') ?>
<?= $this->endSection() ?>


<?= $this->section('content') ?>

<img class="img-vector-top img-vector" src="<?= base_url(); ?>/img/contact_vector_top.png" alt="">
<section id="formulaire" class="fourth">
  <img class="img-vector-bottom img-vector" src="<?= base_url(); ?>/img/contact_vector_bottom.png" alt="">
  <div class="wrap-sheet">
    <div id="sheet" class="sheet-one">
      <div class="contact">
        <h3 class="contact-title">Contactez-nous</h3>
        <p class="contact-para">Si vous avez des questions concernant l’application ou le site,
          n’hésitez pas à utiliser le formulaire ci-dessous.
          Nous vous répondrons dans les plus brefs délais.</p>
        <div class="sheet-two">
          <div class="formcontainer">
            <form id="formcontact" action="">
              <!-- NOM -->
              <div class="input-area input-area-contact">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom">
              </div>
              <!-- PRENOM -->
              <div class="input-area input-area-contact">
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom">
              </div>
              <!-- CODE POSTAL -->
              <div class="input-area input-area-contact">
                <label for="code">Code Postal</label>
                <input type="text" name="code" id="cp">
              </div>
              <!-- EMAIL -->
              <div class="input-area input-area-contact">
                <label for="mail">Email</label>
                <input type="mail" name="mail" id="mail">
              </div>
              <!-- TELEPHONE -->
              <div class="input-area input-area-contact">
                <label for="telephone">Téléphone</label>
                <input type="text" name="telephone" id="telephone">
              </div>
              <!-- MESSAGE -->
              <div class="input-area input-area-contact">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
              </div>
              <!-- ENVOYER -->
              <div class="submitButtonContact">
                <input type="submit" name="envoyer" id="envoyer">
              </div>
          </div>
        </div>
      </div>
    </div>
</section>

<?= $this->endSection() ?>