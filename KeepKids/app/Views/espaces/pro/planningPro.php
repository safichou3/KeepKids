<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/espace_pro.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<center>
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
</center>

<style>
    footer{
        display: none;
    }
</style>
<?= $this->endSection() ?>