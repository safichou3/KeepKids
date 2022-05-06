<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/espace_pro.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<style>
    footer {
        display: none;
    }
</style>
<?php
// // print_r(date("D.F.Y", 1654252934));
// // print_r($_POST);
// if (isset($semaine)) {
//     if (empty($semaine)) {
//     }

//     echo "<pre>";
//     // print_r($semaine);
//     // print_r($capacite);
//     echo "</pre>";
// };
// function increaseWeek()
// {
//     $_POST['semaine'] = 1;
// };
// function decreaseWeek()
// {
//     $_POST['semaine'] = $_POST['semaine'] - 1;
// };

?>
<h1 style="text-align:center;">Mon Planning</h1> <a href="<?= base_url(); ?>/espaces/pro/create/planningPro">Modifier les horaires de la semaine</a>
<div style="display:flex;justify-content:center;align-items:center;">
    <div style='width:15px;height:15px;background-color:red; margin:5px;border-radius:20px'></div>
    <p>Etablissement fermé</p>
    <div style='width:15px;height:15px;background-color:green; margin:5px;border-radius:20px'></div>
    <p>Etablissement ouvert</p>
    <div style='width:15px;height:15px;background-color:orange; margin:5px;border-radius:20px'></div>
    <p>Bientôt complet</p>
</div>
<div id="planningBody">
    <?php
    $day = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
    for ($i = 6; $i < 20; $i++) {
        for ($y = -1; $y < 7; $y++) { //case en haut a gauche
            if ($y == -1 && $i == 6) {
                echo "<div class='dayCol SemaineN' style='border:1px solid #F9C6C4'>SEMAINE N° <form method='POST'><input id='nombreCase' type='number' name='semaine' value=" . $semaine[0]['semaine'] . "></form></div>";
            } else if ($i == 6) { //case en haut (jours)
                echo "<div class='dayCol dayCase'>" . $day[$y] . " " . date('d M', $semaine[$y]['date']) . "</div>";
            } else if ($y == -1 && $i != 6) { //cases à gauche (heures)
                echo "<div class='dayCol dayCase'>" . $i . "H00</div>";
            } else { //le reste
                echo "<div class='dayCol'>";
                // echo "i =" . $i . " y=" . $y;
                if ($i < $semaine[$y]['heureOuverture'] || $i >= $semaine[$y]['heureFermeture'] || $semaine[$y]['heureOuverture'] == NULL) {
                    echo "<div style='width:15px;height:15px;background-color:red; margin:5px;border-radius:20px'></div>";
                } else {
                    if (count($capacite[$y][$i - 6]) / $semaine[$y]['capacité'] > 0.85 ||  $semaine[$y]['capacité'] - count($capacite[$y][$i - 6]) > 2) {
                        echo "<div style='width:15px;height:15px;background-color:green; margin:5px;border-radius:20px'></div>";
                    } else {
                        echo "<div style='width:15px;height:15px;background-color:#ffa24f; margin:5px;border-radius:20px'></div>";
                    }
                }
                echo "<div class='break'></div>";
            }


            ?>
        </div>
    <!-- </table> -->
</div>
<?= $this->endSection() ?>

<style>
    footer {
        display: none;
    }

    body {
        padding: 100px 0;
    }

    #nombreCase {
        width: 100%;
        border: none;
        background-color: #ff000000;
        font-size: inherit;
    }

    #planningBody {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        height: auto;
        color: black;
        font-size: 20px;
        justify-content: center;
    }

    .dayCol {
        width: 123px;
        height: 28px;
        border: none;
        margin: 3px;
        background-color: #ffffff70;
        border-radius: 5px;
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding: 8px;
        box-shadow: rgb(0 0 0 / 16%) 0px 3px 6px, rgb(0 0 0 / 23%) 0px 3px 6px;
    }

    .dayCol a {
        text-decoration: none;
        color: grey;
        justify-content: center;

    }

    .SemaineN {
        background-color: #ffffff;
        border: none;
        text-align: center;
        font-size: 85%;
    }


    .dayCase {
        background-color: #ff7a7a;
        font-weight: bold;
        text-align: center;
        color: white;
        font-size: 65%;
        color: white;
    }

    .break {
        flex-basis: 100%;
        height: 0;
    }
</style>
<?= $this->endSection() ?>