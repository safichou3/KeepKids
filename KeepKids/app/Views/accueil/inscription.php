<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/newsCreation.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('title') ?>
Création d'une news
<?= $this->endSection() ?>

<?= $this->section('content') ?>
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
        <label for="phone">entrer votre numéro de tel:</label>

        <input type="tel" id="phone" name="phone" required>
    </div>
    <div class="form-group">
        <input type="file" name="newsImage" size="20" />
    </div>
    <div>
        <label for="pet-select">Choose a pet:</label>

        <select name="pets" id="pet-select">
            <option value="">--Please choose an option--</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="hamster">Hamster</option>
            <option value="parrot">Parrot</option>
            <option value="spider">Spider</option>
            <option value="goldfish">Goldfish</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">valider</button>
</form>
<?= $this->endSection() ?>