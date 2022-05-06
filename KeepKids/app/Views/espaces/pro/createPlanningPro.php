<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/espace_pro.css" rel="stylesheet">
<link rel="stylesheet/less" type="text/css" href="<?= base_url(); ?>/css/styles.less" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<main>
    <h1>Modifier la SEMAINE N°</h1>
    <?php

    // echo "<pre>";
    // if (isset($date)) {
    //     // print_r("




    //     ");
    //     // print_r($date);
    //     if (is_int($date)) {
    //         $timestamp = $date;
    //         $date = [$timestamp];
    //         $timestampPost = $date[0];
    //         $i = 1;
    //         while ($i <= 6) {
    //             $timestamp = $timestamp + 24 * 60 * 60;
    //             array_push($date, $timestamp);
    //             $i++;
    //         }
    //     } else {
    //         $datetemporaire = [];
    //         foreach ($date as $element) {
    //             array_push($datetemporaire, $element['date']);
    //         }
    //         $date = $datetemporaire;
    //         // print_r($date);
    //         $timestampPost = "";
    //     }
    // }





    echo "</pre>";
    // die();
    $timestampPost = "";
    ?>
    <?php function formPlanning($day, $timestamp)
    {
        ob_start(); ?>

        <div class="day dayCol dayCase">
            <span><?= $day ?> <?= date("d", $timestamp) ?> <?= date("M", $timestamp) ?></span>

        </div>

        <div class="horaire">
            <span id="<?= $day ?>fermé" style="display:none;color:red">FERMÉ</span>
            <span id="<?= $day ?>ouvert"><span id='<?= $day ?>ouverture'></span><span>-</span><span id='<?= $day ?>fermeture'></span></span>
        </div>
        <div class="checkbox">
            <input type="checkbox" id="<?= $day ?>checkbox" onchange="doalert(this)" name="<?= $day ?>checkbox">
        </div>
        <div class="range">
            <span class="multi-range">
                <input type="range" min="6" max="20" value="8" id="<?= $day ?>lower" name="<?= $day ?>lower">
                <input type="range" min="6" max="20" value="18" id="<?= $day ?>upper" name="<?= $day ?>upper">
            </span>

        </div>


        <div class="capacite">
            <input type="number" placeholder="Capacité d'accueil" id="<?= $day ?>capacite" name="<?= $day ?>capacite">
        </div>
        <div class="break"></div>
        <?php

        ?>
        <script>
            var <?= $day ?>lowerSlider = document.querySelector('#<?= $day ?>lower'),
                <?= $day ?>upperSlider = document.querySelector('#<?= $day ?>upper'),
                <?= $day ?>ouverture = document.querySelector('#<?= $day ?>ouverture'),
                <?= $day ?>fermeture = document.querySelector('#<?= $day ?>fermeture'),
                <?= $day ?>fermé = document.querySelector('#<?= $day ?>fermé')
            <?= $day ?>lowerVal = parseInt(<?= $day ?>lowerSlider.value);
            <?= $day ?>upperVal = parseInt(<?= $day ?>upperSlider.value);

            <?= $day ?>ouverture.innerHTML = <?= $day ?>lowerVal + 'H'
            <?= $day ?>fermeture.innerHTML = <?= $day ?>upperVal + 'H'

            // bouton fermé


            function doalert(element) {


                <?= $day ?>fermé = document.getElementById(element.id.replace('checkbox', "") + "fermé")
                <?= $day ?>ouvert = document.getElementById(element.id.replace('checkbox', "") + "ouvert")

                if (element.checked == true) {

                    <?= $day ?>fermé.style.display = "block"
                    <?= $day ?>ouvert.style.display = "none"
                } else if (element.checked == false) {

                    <?= $day ?>fermé.style.display = "none"
                    <?= $day ?>ouvert.style.display = "block"
                }
            }

            <?= $day ?>upperSlider.oninput = function() {
                <?= $day ?>lowerVal = parseInt(<?= $day ?>lowerSlider.value);
                <?= $day ?>upperVal = parseInt(<?= $day ?>upperSlider.value);

                <?= $day ?>ouverture.innerHTML = <?= $day ?>lowerVal + 'H'
                <?= $day ?>fermeture.innerHTML = <?= $day ?>upperVal + 'H'

                if (<?= $day ?>upperVal < <?= $day ?>lowerVal + 2) {
                    <?= $day ?>lowerSlider.value = <?= $day ?>upperVal - 2;

                    if (<?= $day ?>lowerVal == <?= $day ?>lowerSlider.min) {
                        <?= $day ?>upperSlider.value = 2;
                    }
                }
            };


            <?= $day ?>lowerSlider.oninput = function() {
                <?= $day ?>lowerVal = parseInt(<?= $day ?>lowerSlider.value);
                <?= $day ?>upperVal = parseInt(<?= $day ?>upperSlider.value);

                <?= $day ?>ouverture.innerHTML = <?= $day ?>lowerVal + 'H'
                <?= $day ?>fermeture.innerHTML = <?= $day ?>upperVal + 'H'

                if (<?= $day ?>lowerVal > <?= $day ?>upperVal - 2) {
                    <?= $day ?>upperSlider.value = <?= $day ?>lowerVal + 2;

                    if (<?= $day ?>upperVal == <?= $day ?>upperSlider.max) {
                        <?= $day ?>lowerSlider.value = parseInt(<?= $day ?>upperSlider.max) - 2;
                    }

                }
            };

            <?= $day ?>ouverture.oninput = function() {
                <?= $day ?>ouverture.innerHTML = <?= $day ?>lowerVal
            }
            <?= $day ?>fermeture.oninput = function() {
                <?= $day ?>fermeture.innerHTML = <?= $day ?>upperVal
            }
        </script>
    <?php

        return ob_get_clean();
    } ?>

    <form method="POST" action="<?= base_url(); ?>/espaces/pro/create/planningPro" enctype="multipart/form-data">
        <div id="formulaireCreate">
            <div id='formContainer'>
                <?php

                for ($i = 0; $i <= 6; $i++) {

                    echo formPlanning(date('D', $date), $date);
                    $date = $date + 86400;
                }

                ?>

            </div>
            <!-- <input style="visibility:hidden" value="" name="timestamp"> -->
        </div>
        <input class="inscription boutonCreate" type="submit" value="Je valide mon planning de la semaine" name="inscriptionPro">
    </form>
    <?php

    ?>

    <style>
        footer {
            display: none;
        }

        body {
            padding: 100px 0;
        }

        .boutonCreate {
            border: none;
            padding: 10px;
            border-radius: 15px;
            margin: 20px;
            cursor: pointer;
        }

        #formulaireCreate {
            padding-left: 5px;
            justify-content: center;
            display: flex;
            padding: 0px 50px 0px 50px;
        }

        input[type=range] {
            box-sizing: border-box;
            appearance: none;
            width: 400px;
            margin: 0;
            padding: 0 2px;
            overflow: hidden;
            border: 0;
            border-radius: 1px;
            outline: none;
            /* background: linear-gradient(grey, grey) no-repeat center; */
            background-size: 100% 2px;
            pointer-events: none;
            border-radius: 24px;
            background-color: darkgrey;
        }

        input[type='checkbox'] {
            cursor: pointer;
        }

        #Satcapacite,
        #Fricapacite,
        #Wedcapacite,
        #Thucapacite,
        #Suncapacite,
        #Tuecapacite,
        #Moncapacite {
            border: none;
            border-radius: 20px;
            width: auto;
            text-align: center;
            padding: 5px;
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

        main {
            margin: 0% 10% 0% 10%;
        }

        .dayCase {
            background-color: #ff7a7a;
            font-weight: bold;
            text-align: center;
            color: white;
            font-size: 65%;
            color: white;
            margin-right: 3%;
        }

        .break {
            flex-basis: 100%;
            height: 0;
        }

        .horaire {
            width: 10%;
            color: black;
            padding-top: 1%;
        }
    </style>
    <?= $this->endSection() ?>


    <?= $this->section('js') ?>
    <script src="<?= base_url(); ?>/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/less@4"></script>
    <?= $this->endSection() ?>