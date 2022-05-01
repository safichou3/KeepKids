<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/espace_pro.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>


<?php function formPlanning($day)
{
    ob_start(); ?>
    <div class="day">
        <span><?= $day ?></span>
        <!-- <input style="visiblity:hidden" name="" -->
    </div>

    <div class="horaires">
        <label>horaires</label>
    </div>

    <div class="range">
        <span class="multi-range">
            <input type="range" min="6" max="20" value="8" id="<?= $day ?>lower" name="<?= $day ?>lower">
            <input type="range" min="6" max="20" value="18" id="<?= $day ?>upper" name="<?= $day ?>upper">
        </span>

    </div>
    <div class="horaire">
        <span id="<?= $day ?>fermé" style="display:none">fermé</span>
        <span id="<?= $day ?>ouvert"><span id='<?= $day ?>ouverture'></span><span>-</span><span id='<?= $day ?>fermeture'></span></span>
    </div>
    <div class="checkbox">
        <input type="checkbox" id="<?= $day ?>checkbox" onchange="doalert(this)" name="<?= $day ?>checkbox">
    </div>
    <div class="break"></div>
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
<link rel="stylesheet/less" type="text/css" href="<?= base_url(); ?>/css/styles.less" />
<form method="POST" action="<?= base_url(); ?>/espaces/pro/create/planningPro" enctype="multipart/form-data">
    <div id='formContainer'>
        <?php

        echo formPlanning('lundi');
        echo formPlanning('mardi');
        echo formPlanning('mercredi');
        echo formPlanning('jeudi');
        echo formPlanning('vendredi');
        echo formPlanning('samedi');
        echo formPlanning('dimanche');
        ?>
    </div>
    <input class="inscription" type="submit" value="Je m'inscris" name="inscriptionPro">
</form>

<script src="https://cdn.jsdelivr.net/npm/less@4">

</script>

<style>
    footer {
        display: none;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="<?= base_url(); ?>/js/main.js"></script>
<?= $this->endSection() ?>