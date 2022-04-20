<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/newsCreation.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('title') ?>
Création d'un compte
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<
<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form method="POST" action="<?= base_url(); ?>/news/create" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">nom</label>
        <input name="title" type="text" class="form-control" id="name" placeholder="nom">
    </div>
    <div class="form-group">
        <label for="title">prenom</label>
        <input name="title" type="text" class="form-control" id="firstname" placeholder="prenom">
    </div>

    <div>
        <label for="email">entrer votre email:</label>
        <input type="email" id="email" pattern=".+@mail\.com" size="30" required>
    </div>
    <div>
       <label for="title">adresse</label>
        <input name="title" type="text" class="form-control" id="name" placeholder="nom">
        

        <input type="tel" id="phone" name="phone" required>
    </div>
    <div class="form-group">
        <input type="file" name="newsImage" size="20" />
    </div>
   <div>
    <label for="pass">Password (8 characters minimum):</label>
    <input type="password" id="pass" name="password"
           minlength="8" required>
</div>
    <button type="submit" class="btn btn-primary">valider</button>
</form>
  </div>

</div>

<?= $this->endSection() ?>