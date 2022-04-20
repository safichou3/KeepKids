<?= $this->extend('master') ?>


<?= $this->section('css') ?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url(); ?>/css/espace_parents.css" rel="stylesheet">
<?= $this->endSection() ?>
<?= $this->section('title') ?>
<h2>ESPACE PARENTS</h2>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="body-parents">
  <div class="content-body-parents">
    <!-- <div class="top-parents">
      <h2 class="parents-title">Mon espace</h2>
      <ul>
        <li>Justificatifs</li>
        <li>Réservations</li>
        <li>Enfants</li>
        <li>Factures</li>
      </ul>
    </div> -->
    <div class="top-parents">
      <div class="top-left-parents">
        <div class="top-text-parents">
          <h3>Vous avez la main sur votre santé</h3>
          <h1>Bonjour Houda,</h1>
          <p>Mon espace santé vous permet de conserver et partager vos données et documents de santé en toute confidentialité</p>
        </div>

        <div class="btn-parents">
          <div class="btn-reservation-parents">
            <button class="btn-parents-res"><i class="fa-solid fa-calendar-days"></i>Réserver</button>
          </div>
          <div class="btn-add-kids-parents">
            <button class="btn-parents-kids"><i class="fa-solid fa-calendar-days"></i>Ajouter un enfant</button>
          </div>
        </div>
      </div>
      <div class="img-top-right">
        <img src="<?= base_url(); ?>/img/booking.svg" alt="">
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>