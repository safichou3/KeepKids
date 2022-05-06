<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/404.css" rel="stylesheet">
<?= $this->endSection() ?>


<?= $this->section('content') ?>


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

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>/js/bg-change.js"></script>
<?= $this->endSection() ?>