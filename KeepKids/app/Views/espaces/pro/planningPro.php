<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/espace_pro.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>


<?php

print_r($_POST);
if (isset($semaine)) {
    if (empty($semaine)) {
        
    }
    echo "<pre>";
    print_r($semaine);
    echo "</pre>";
};
function increaseWeek()
{
    $_POST['semaine'] = 1;
};
function decreaseWeek()
{
    $_POST['semaine'] = $_POST['semaine'] - 1;
};
?>

<form method="post">

    <input type="number" name="semaine" value="<?= $semaine[0]['semaine'] ?>">

</form>

<div id="planningBody">
    <?php
    $day = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
    for ($i = 6; $i < 20; $i++) {
        for ($y = -1; $y < 7; $y++) { //case en haut a gauche
            if ($y == -1 && $i == 6) {
                echo "<div class='dayCol' style='border:1px solid #F9C6C4'></div>";
            } else if ($i == 6) { //case en haut (jours)
                echo "<div class='dayCol'>" . $day[$y] . "</div>";
            } else if ($y == -1 && $i != 6) { //cases à gauche (heures)
                echo "<div class='dayCol'>" . $i . "H</div>";
            } else { //le reste
                echo "<div class='dayCol'>";
                // echo "i =" . $i . " y=" . $y;
                if ($i < $semaine[$y]['heureOuverture'] || $i >= $semaine[$y]['heureFermeture'] || $semaine[$y]['heureOuverture'] == NULL) {
                    echo "fermé";
                }
                echo "</div>";
            }
        }
        echo "<div class='break'></div>";
    }


    ?>
</div>

<style>
    footer {
        display: none;
    }

    body {
        padding-top: 100px;
    }



    #planningBody {
        display: flex;
        flex-wrap: wrap;
        width: 1800px;
        height: 1000px;
        /* --------------- */
        color: black;
        font-size: 20px;
    }

    .dayCol {
        width: 200px;
        height: 75px;
        border: 1px solid black;
    }

    .break {
        flex-basis: 100%;
        height: 0;
    }
</style>
<?= $this->endSection() ?>