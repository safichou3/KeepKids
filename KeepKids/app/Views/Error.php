<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/error.css" rel="stylesheet">
<?= $this->endSection() ?>


<?= $this->section('content') ?>

<!-- <div class="body-change"></div> -->





<div id="body-change">

  <div class="body-change">

    <?php
    if (empty(session('email'))) { ?>
      <!-- NON CONNECTE -->
      <img class="img-404" src="<?= base_url(); ?>/img/404.svg" alt="">

      <?php
    } else {

      if (session("idE") == 1 || session("idE") == 2) { ?>
        <style>
          .body-change {
            background-color: #F9C6C4;
          }
        </style>
        <!-- CRECHE - AM -->
        <img class="img-404" src="<?= base_url(); ?>/img/404.svg" alt="">

      <?php
      } else if (session("type") == "parent") { ?>
        <style>
          .body-change {
            background-color: #E4EAFF;
          }
        </style>
        <!-- CONNECTE PARENTS -->
        <img class="img-404" src="<?= base_url(); ?>/img/404.svg" alt="">

    <?php
      }
    }
    ?>
  </div>

</div>

<?= $this->endSection() ?>