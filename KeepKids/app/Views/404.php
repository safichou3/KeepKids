<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/404.css" rel="stylesheet">
<?= $this->endSection() ?>


<?= $this->section('content') ?>

<!-- <div class="body-change"></div> -->

<!-- <div id="body-change"> -->

<!-- <div class="test-404"> -->
<!-- </div> -->

<!-- </div> -->



<div id="body-change">

  <div class="body-change">

    <?php
    if (empty(session('email'))) { ?>
      <!-- NON CONNECTE -->
      <img class="img-houda-404" src="<?= base_url(); ?>/img/KEEPKIDS_3_no-bg.png" alt="">

      <?php
    } else {

      if (session("idE") == 1 || session("idE") == 2) { ?>
        <style>
          .body-change {
            background-color: #F9C6C4;
          }
        </style>
        <!-- CRECHE - AM -->
        <img class="img-houda-404" src="<?= base_url(); ?>/img/KEEPKIDS_3_no-bg.png" alt="">

      <?php
      } else if (session("type") == "parent") { ?>
        <style>
          .body-change {
            background-color: #E4EAFF;
          }
        </style>
        <!-- CONNECTE PARENTS -->
        <img class="img-houda-404" src="<?= base_url(); ?>/img/KEEPKIDS_3_no-bg.png" alt="">

    <?php
      }
    }
    ?>
  </div>

</div>
<?= $this->endSection() ?>