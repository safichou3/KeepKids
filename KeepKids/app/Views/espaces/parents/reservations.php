<?= $this->extend('master') ?>


<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/espace_parents.css" rel="stylesheet">
<?= $this->endSection() ?>
<?= $this->section('title') ?>
<h2 class="section-title">Reservations</h2>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<body onload="initialize()">
    <div style="display: flex;justify-content:row; margin:20px;">
        <div class='card-add-reservation'>
            <form method="POST" action="<?= base_url(); ?>/espaces/parents/reservation" enctype="multipart/form-data">
                <select class="input-inscription" name="idEnfant">
                    <?php foreach ($enfant as $element) {
                        echo "<option value=>Selectionnez un enfant</option>";
                    }
                    ?>
                </select>
                <br>
                <select class="input-inscription" name="idEtablissement">
                    <option value="">Selectionnez votre type de garde</option>
                </select>
                <br>
                <div class="range-slider">
                    <input class="range-slider__range" type="range" value="25" min="0" max="150">
                    <span class="range-slider__value"></span>
                </div>
                <h4><button onclick="getLocation()" id="auto-lo">auto localisation</button>
                    <button type="button" id="auto-loc" onclick="getValue();">Récupérer la valeur</button>

                    <button type="button" id="auto-loc" onclick="get25km();">25km</button>
                    <button type="button" id="auto-loc" onclick="get10km();">10km</button><br>

                    <button class='continuer'>Continuer</button>
                </h4>
            </form>
            <div>
            </div>
        </div>
    </div>

    
</body>
<button type="button" class="btn btn-primary" onclick="getLocation()">
      Try It.
    </button>
    <p id="coordinate"></p>
    <pre id="json"></pre>

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="<?= base_url(); ?>/js/main.js"></script>
<script src="<?= base_url(); ?>/js/localisation.js"></script>
<?= $this->endSection() ?>