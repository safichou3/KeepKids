<?= $this->extend('master') ?>

<?= $this->section('title') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="rouge">
    <div class="center-div">

        <div class="wrap">
            <h1 class="title-accueil">KEEPKIDS, Tranquille le temps d'une balade</h1>
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

        <section class="text-accueil text-top-accueil">
            <em>A propos de nous</em>
            <h1 class="title">Nous sommes une jeune équipe qui mettons nos qualité a l'oeuvre pour votre confort</h1>
            <p>En imaginant ce site nous avons pensé aux jeunes parents dans le besoin qui ne savent pas ou ils peuvent faire garder leurs bout-de-choux. </p>
            <p>Pour cela nous avons mis en commun les compétences de 6 jeunes développeurs.</p>
            <p>La rigueur et l’exigence sont les qualités principales indispensables aux prestations de garde d’enfants : chez Kangourou Kids, le recrutement est sélectif et la formation et le contrôle de qualité sont permanents.</p>
            <p>La réglementation doit devenir plus précise et plus intransigeante pour limiter le développement des pratiques approximatives du secteur (notamment le travail au noir) qui présentent des risques, tant pour les enfants que pour leurs parents</p>
        </section>
        <section>
            <img src="<?= base_url(); ?>/img/kids-top-accueil.svg" alt="garçons">
        </section>
    </div>
</div>
<div class="section3">
    <section>
        <img src="<?= base_url(); ?>/img/baby-accueil.svg" alt="enfants" width="20px">
    </section>
    <section class="text-accueil text-middle-accueil">
        <em>Pourquoi Nous ?</em>
        <h1 class="title">Notre plateforme est sûr et vous permettra d'aller au travail en toute sérenité</h1>
        <p>En effet, chaque professionnel souhaitant s’inscrire doit fournir ses diplômes ainsi qu’une preuve de son identité.</p>
        <p>Le site vous indiqueras oû sont les professionels les plus proches afin de vous aider le mieux possible.</p>
        <p>Votre agence KEEPKIDS met à votre disposition des baby-sitters ou créche qui prendront en charge vos enfants depuis la sortie de l'école jusqu'à votre retour à la maison sur toute la France.

            Le trajet est assuré en toute sécurité par votre baby-sitter ou jusqu’à votre domicile. Selon vos besoins, nos nounous sont là pour donner le goûter, le bain ou la douche, aider aux devoirs, accompagner aux activités, jouer avec eux et préparer le repas. Vous partirez sereinement à votre travail et profiterez pleinement de vos enfants à votre retour.</p>
    </section>
</div>

<section>
    <div class="container-accueil-bottom">
        <div class="card">
            <h1 class="title">Une plateforme validé par TrustPilot</h1>
            <img src="http://calliope-consulting.fr/wp-content/uploads/2020/04/trustpilot-new-.png" width="150px" alt="">
            <p class="subtitle">Parce que les meilleurs nounous se trouvent sur notre site !</p>
            <a href="https://www.trustpilot.com/" target="_blank"><button class="btn-accueil-pilot">Nous noter sur TrustPilot.com</button></a>
        </div>
        <div class="blob"></div>
    </div>
</section>


<?= $this->endSection() ?>