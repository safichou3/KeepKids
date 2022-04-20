<?= $this->extend('master') ?>

<?= $this->section('title') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="rouge">
    <div class="center-div">

        <div class="wrap">
            <h1>KEEPKIDS, Tranquille le temps d'une balade</h1>
            <div class="search">
                <input type="text" class="searchTerm" placeholder="Rechercher des creches à proximité">
                <button type="submit" class="searchButton">
                    <i class="fi fi-br-search"></i>
                </button>
            </div>
        </div>

        </form>
    </div>
</div>

<div id="apropos">
    <div class="section2">

        <section>
            <em>A propos de nous</em>
            <h1 class="title">Nous sommes une jeune équipe qui mettons nos qualité a l'oeuvre pour votre confort</h1>
            <p>En imaginant ce site nous avons pensé aux jeunes parents dans le besoin qui ne savent pas ou ils peuvent faire garder leurs bout-de-choux. </p>
            <p>Pour cela nous avons mis en commun les compétences de 6 jeunes développeurs.</p>
        </section>
        <section>
            <img src="/img/garcon_joue.png" alt="garçons">
        </section>
    </div>
</div>
<div class="section3">
    <section>
        <img src="/img/famille_danse.png" alt="enfants" width="20px">
    </section>
    <section>
        <em>Why Us</em>
        <h1 class="title">Notre plateforme est sûr et vous permettra d'aller au travail en toute sérenité</h1>
        <p>En effet, chacun des professionels pouvant garder des enfants nous aura donner une preuve de sa capacité a garder des enfants.</p>
        <p>Le site vous indiqueras oû sont les professionels les plus proches afin de vous aider le mieux possible </p>
    </section>
</div>
<section>
    <div class="container">
        <div class="card">
            <h1 class="title">Une plateforme validé par TrustPilot</h1>
            <img src="http://calliope-consulting.fr/wp-content/uploads/2020/04/trustpilot-new-.png" width="150px" alt="">
            <p class="subtitle">Parce que nous avons les meilleurs nounous sur notre site !</p>
            <button class="btn">Nous noter sur TrustPilot.com</button>
        </div>
        <div class="blob"></div>
    </div>
</section>


<?= $this->endSection() ?>