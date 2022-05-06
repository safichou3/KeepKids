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
// print_r(date("D.F.Y", 1654252934));
// print_r($_POST);
// if (isset($semaine)) {
//     if (empty($semaine)) {
//     }

//     echo "<pre>";
//     print_r($semaine);
//     print_r($capacite);
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
<div class="body-planning">
    <h1 class="text-align">Mon Planning</h1>
    <a class="link-modify-planning" href="<?= base_url(); ?>/espaces/pro/create/planningPro">
        <p class="text-align">Modifier les horaires de la semaine</p>
    </a>
    <div class="box_planning">
        <div class="legend_box">
            <div class="legend-planning red-planning"></div>
            <p>Etablissement fermé</p>
        </div>
        <div class="legend_box">
            <div class="legend-planning green-planning"></div>
            <p>Etablissement ouvert</p>
        </div>
        <div class="legend_box">
            <div class="legend-planning orange-planning"></div>
            <p>Bientôt complet</p>
        </div>
    </div>
    <!-- <table id="example" class="table User-Table flexy"> -->
        <div id="planningBody">
            <?php
            $day = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
            for ($i = 6; $i < 20; $i++) {
                for ($y = -1; $y < 7; $y++) { //case en haut a gauche
                    if ($y == -1 && $i == 6) {
                        echo "<div class='dayCol SemaineN border-style-planning'>SEMAINE N° <form method='POST'><input id='nombreCase' type='number' name='semaine' value=" . $semaine[0]['semaine'] . "></form></div>";
                    } else if ($i == 6) { //case en haut (jours)
                        echo "<div class='dayCol dayCase btn-co'>" . $day[$y] . " " . date('d M', $semaine[$y]['date']) . "</div>";
                    } else if ($y == -1 && $i != 6) { //cases à gauche (heures)
                        echo "<div class='dayCol dayCase'>" . $i . "H00</div>";
                    } else { //le reste
                        echo "<div class='dayCol'>";
                        // echo "i =" . $i . " y=" . $y;
                        if ($i < $semaine[$y]['heureOuverture'] || $i >= $semaine[$y]['heureFermeture'] || $semaine[$y]['heureOuverture'] == NULL) {
                            echo "<div class='legend-planning red-planning'></div>";
                        } else {
                            if (count($capacite[$y][$i - 6]) / $semaine[$y]['capacité'] > 0.85 ||  $semaine[$y]['capacité'] - count($capacite[$y][$i - 6]) > 2) {
                                echo "<div class='legend-planning green-planning'></div>";
                            } else {
                                echo "<div class='legend-planning orange-planning'></div>";
                            }
                            if (count($capacite[$y][$i - 6]) != 0) {
                                echo "<span>" . count($capacite[$y][$i - 6]) . "/" . $semaine[$y]['capacité'] . "</span>";
                            }
                            echo "<a href='" . base_url() . "/espaces/pro/enfantsPlanning/" . $semaine[$y]["date"] . "/" . $i . "'><i class='fi fi-rs-eye'></i></a>";
                            // echo "x = " . $i - 6 . "y = " . $y;
                        }
                        echo "</div>";
                    }
                }
                echo "<div class='break'></div>";
            }


            ?>
        </div>
    <!-- </table> -->
</div>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="<?= base_url(); ?>/js/main.js"></script>
<?= $this->endSection() ?>