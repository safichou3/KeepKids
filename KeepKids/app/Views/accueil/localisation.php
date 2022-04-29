<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/localisation.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div id="params">
  <p>
    lon départ:
    <input type="text" id="lon1" size="10" /> lat départ :
    <input type="text" id="lat1" size="10" />
  </p>
  <p>
    lon inter :
    <input type="text" id="lon2" size="10" /> lat inter :
    <input type="text" id="lat2" size="10" />
  </p>
  <p>
    lon arrivée:
    <input type="text" id="lon3" size="10" /> lat arrivée :
    <input type="text" id="lat3" size="10" />
  </p>
  <p> Eviter :
    <input type="checkbox" value="true" id="toll"> péages
    <input type="checkbox" value="true" id="bridge"> ponts
    <input type="checkbox" value="true" id="tunnel"> tunnels
  </p>
  <p>Graphe :
    <select id="graph">
      <option value="Pieton">Piéton</option>
      <option value="Voiture">Voiture</option>
    </select>
    Methode de calcul :
    <select id="method">
      <option value="fastest">le plus rapide</option>
      <option value="shortest">le plus court</option>
    </select>
  </p>
</div>
<div id="go">
  <input type="button" value="Itinéraire" onclick="go()" />
</div>
<div id="map"></div>
<div id="result"></div>
<div id="info"></div>

<?= $this->section('js') ?>
<script src="<?= base_url(); ?>/js/localisation.js"></script>
<?= $this->endSection() ?>