<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/espace_pro.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- <center>
    <div id="title">
        <div id="back"></div>
        <p id="month"></p>
        <div id="forward"></div>
    </div>

    <table id="days">
        <tr>
            <td class="test2" id="sunday">Sunday</td>
            <td class="test2" id="monday">Monday</td>
            <td class="test2" id="tuesday">Tuesday</td>
            <td class="test2" id="wednesday">Wednesday</td>
            <td class="test2" id="thursday">Thursday</td>
            <td class="test2" id="friday">Friday</td>
            <td class="test2" id="saturday">Saturday</td>
        </tr>
        <tr>
            <td class="test" id="d1" onClick="openMod(0)">4</td>
            <td class="test" id="d2" onClick="openMod(1)">5</td>
            <td class="test" id="d3" onClick="openMod(2)">6</td>
            <td class="test" id="d4" onClick="openMod(3)">7</td>
            <td class="test" id="d5" onClick="openMod(4)">8</td>
            <td class="test" id="d6" onClick="openMod(5)">9</td>
            <td class="test" id="d7" onClick="openMod(6)">10</td>
        </tr>
    </table>

    <div id="modalBox">
        <div id="number">4</div>
        <div id="close">X</div>
        <div id="reminders">
            <ul>
                <li class="check">Pick up package from UPS</li>
                <li class="uncheck">Meeting @ 2:00</li>
                <li class="uncheck">Dinner with the Francs</li>
            </ul>
        </div>
    </div>
</center> -->

<link rel="stylesheet/less" type="text/css" href="<?= base_url(); ?>/css/styles.less" />
<form method="POST" action="<?= base_url(); ?>/espaces/pro/inscriptionPro" enctype="multipart/form-data">
    <label>lundi</label><br>
    <label>horaire</label><br>
    <span class="multi-range">
        <input type="range" min="0" max="50" value="5" id="lower">
        <input type="range" min="0" max="50" value="45" id="upper">
    </span><br>
    <span class="multi-range">
        <input type="range" min="0" max="50" value="5" id="lundilower">
        <input type="range" min="0" max="50" value="45" id="lundiupper">
    </span>
    <br>

    <input class="inscription" type="submit" value="Je m'inscris" name="inscriptionPro">
</form>
<script src="https://cdn.jsdelivr.net/npm/less@4"></script>
<script>
    var lowerSlider = document.querySelector('#lundilower'),
        upperSlider = document.querySelector('#lundiupper'),
        lowerVal = parseInt(lowerSlider.value);
    upperVal = parseInt(upperSlider.value);

    upperSlider.oninput = function() {
        lowerVal = parseInt(lowerSlider.value);
        upperVal = parseInt(upperSlider.value);

        if (upperVal < lowerVal + 4) {
            lowerSlider.value = upperVal - 4;

            if (lowerVal == lowerSlider.min) {
                upperSlider.value = 4;
            }
        }
    };


    lowerSlider.oninput = function() {
        lowerVal = parseInt(lowerSlider.value);
        upperVal = parseInt(upperSlider.value);

        if (lowerVal > upperVal - 4) {
            upperSlider.value = lowerVal + 4;

            if (upperVal == upperSlider.max) {
                lowerSlider.value = parseInt(upperSlider.max) - 4;
            }

        }
    };
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