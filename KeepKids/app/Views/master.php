<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzxENNPcTCk87jZFDBewTmpbJNZXqPl0I&callback=initMap"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="<?= base_url(); ?>/css/style.css" rel="stylesheet">
    <?= $this->renderSection('css') ?>
    <title>KeepKids | Garde d'enfants</title>
</head>

<body>
    <?php include_once("templates/header.php") ?>


    <?= $this->renderSection('title') ?>

    <?= $this->renderSection('content') ?>

    <?php include_once("templates/footer.php") ?>

    <?= $this->renderSection('js') ?>
</body>

</html>