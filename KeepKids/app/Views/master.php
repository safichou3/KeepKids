<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
    <link href="<?= base_url(); ?>/css/style.css" rel="stylesheet">
    <?= $this->renderSection('css') ?>
    <title>KeepKids | Garde d'enfants</title>
</head>

<body>
    <?php include_once("templates/header.php") ?>

    <h1><?= $this->renderSection('title') ?></h1>

    <?= $this->renderSection('content') ?>

    <?php include_once("templates/footer.php") ?>
    
    <script src="<?= base_url(); ?>/js/main.js"></script>

    <?= $this->renderSection('javascript') ?>

</body>

</html>