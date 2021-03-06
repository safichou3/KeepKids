<?= $this->extend('master') ?>

<?= $this->section('title') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- <div id="overlay"> -->
<!-- <div class="rouge"> -->
<div class="center-div">
    <img class="img-header" src="<?= base_url(); ?>/img/bebe2.jpg" alt="">
    <img class="img-header-bis" src="<?= base_url(); ?>/img/bebeVertical.jpg" alt="">

    <div class="wrap">
        <div class="tt-accueil-bg"></div>
        <h1 class="title-accueil">
            <div id=container3>
                KEEPKIDS,
                <div id=flip>
                    <div>
                        <div>LIBERTE</div>
                    </div>
                    <div>
                        <div>TRANQUILLITE</div>
                    </div>
                    <div>
                        <div>CONFIANCE</div>
                    </div>
                </div>
                POUR LA JOURNEE
            </div>
        </h1>
        <p class="title-accueil">Plateforme 100% gratuite de mise en relation de parents avec des professionnels de la garde d'enfants.</p>
        <div class="search">
            <input type="text" class="searchTerm">
            <button class="searchButton"><a class="btn-search-icon" href="<?= base_url(); ?>/espaces/parents/inscriptionParents">
                <i class="fi fi-br-search"></i>
            </button>
        </div>
        <p class="text-input">Sécurisé & créer juste pour votre confort.</p>
        <a class="link-btn-ins-accueil" href="<?= base_url(); ?>/espaces/parents/inscriptionParents">
            <button class="btn-ins-accueil">S'inscrire maintenant</button></a>
    </div>
    <div class="wrap2">
        <h1 class="wrap-style">La plateforme sécurisé qui permets aux parents de gagner du temps dans leurs réservations, leurs factures et leurs paiements.</h1>
    </div>
    <div class="wrap3">
        <h1 class="wrap-style">Un espace professionnel pour les Crèches et les assistantes Maternelles </h1>
    </div>
    <!-- </div> -->
    <div class="wrap4">
        <h1 class="title-accueil1" style="border-radius: 5px;padding: 2%;">Faites nous confiance, inscrivez-vous, c'est gratuit à vie ! </h1>
        <button class="bouton-accueil">Je m'inscris maintenant</button>
    </div>
</div>
<!-- </div> -->
<!-- </div> -->

<div id="apropos">
    <div class="section2">

        <section class="text-accueil text-top-accueil">
            <em class="em em-apropos">A propos de nous</em>
            <h1 class="title title-text">Nous sommes une jeune équipe qui mettons nos qualité a l'oeuvre pour votre confort</h1>
            <p>En imaginant ce site nous avons pensé aux jeunes parents dans le besoin qui ne savent pas ou ils peuvent faire garder leurs bout-de-choux. </p>
            <p>Pour cela nous avons mis en commun les compétences de 6 jeunes développeurs.</p>
            <p>La rigueur et l’exigence sont les qualités principales indispensables aux prestations de garde d’enfants : chez Kangourou Kids, le recrutement est sélectif et la formation et le contrôle de qualité sont permanents.</p>
            <p>La réglementation doit devenir plus précise et plus intransigeante pour limiter le développement des pratiques approximatives du secteur (notamment le travail au noir) qui présentent des risques, tant pour les enfants que pour leurs parents</p>
        </section>
        <section class="section-img">
            <img src="<?= base_url(); ?>/img/kids-top-accueil.svg" alt="garçons">
        </section>
    </div>
</div>
<div class="section3">
    <section class="section-img">
        <img src="<?= base_url(); ?>/img/baby-accueil.svg" alt="enfants" width="20px">
    </section>
    <section class="text-accueil text-middle-accueil">
        <em class="em em-pourquoi">Pourquoi Nous ?</em>
        <h1 class="title title-text">Notre plateforme est sûr et vous permettra d'aller au travail en toute sérenité</h1>
        <p>En effet, chaque professionnel souhaitant s’inscrire doit fournir ses diplômes ainsi qu’une preuve de son identité.</p>
        <p>Le site vous indiqueras oû sont les professionels les plus proches afin de vous aider le mieux possible.</p>
        <p>Votre agence KEEPKIDS met à votre disposition des baby-sitters ou créche qui prendront en charge vos enfants depuis la sortie de l'école jusqu'à votre retour à la maison sur toute la France.

            Le trajet est assuré en toute sécurité par votre baby-sitter ou jusqu’à votre domicile. Selon vos besoins, nos nounous sont là pour donner le goûter, le bain ou la douche, aider aux devoirs, accompagner aux activités, jouer avec eux et préparer le repas. Vous partirez sereinement à votre travail et profiterez pleinement de vos enfants à votre retour.</p>
    </section>
</div>

<section class="card-review">
    <!-- <div class="card-responsive"> -->
    <div class="card">
        <div class="wrapCard">
            <div class="infoCard">
                <img src="<?= base_url(); ?>/img/steve.svg" alt="">
                <div class="detailInfo">
                    <p>Guillaume C.</p>
                    <p>
                        <i class="fi fi-ss-star star-color"></i><i class="fi fi-ss-star star-color"></i><i class="fi fi-ss-star star-color"></i><i class="fi fi-ss-star star-color"></i><i class="fi fi-ss-star star-color"></i>
                    </p>
                </div>
            </div>
            <div class="contentCard">
                <span class="hideContent1">
                    <p>Application bien faite et ergonomique. Au top pour des jeunes parents... <a type="" class="showMore1">plus</a></p>
                </span>
                <span class="showContent1">
                    <p>Application bien faite et ergonomique. Au top pour des jeunes parents comme nous. <a type="" class="hideMore1">moins</a></p>
                </span>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="wrapCard">
            <div class="infoCard">
                <img src="<?= base_url(); ?>/img/pp2.svg" alt="">
                <div class="detailInfo">
                    <p>Pierre A.</p>
                    <p><i class="fi fi-ss-star star-color"></i><i class="fi fi-ss-star star-color"></i><i class="fi fi-ss-star star-color"></i><i class="fi fi-ss-star star-color"></i><i class="fi fi-rs-star star-color"></i></p>
                </div>
            </div>
            <div class="contentCard">
                <span class="hideContent2">
                    <p>Supper appli, avec la géolocalisation j'ai trouvé une Baby-sitter... <a type="" class="showMore2">plus</a></p>
                </span>
                <span class="showContent2">
                    <p>Supper appli, avec la géolocalisation j'ai trouvé une Baby-sitter près de chez nous en 5 minutes. <a type="" class="hideMore2">moins</a></p>
                </span>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="wrapCard">
            <div class="infoCard">
                <img src="<?= base_url(); ?>/img/pp3.svg" alt="">
                <div class="detailInfo">
                    <p>Justine F.</p>
                    <p><i class="fi fi-ss-star star-color"></i><i class="fi fi-ss-star star-color"></i><i class="fi fi-ss-star star-color"></i><i class="fi fi-ss-star star-color"></i><i class="fi fi-ss-star star-color"></i></p>
                </div>
            </div>
            <div class="contentCard">
                <span class="hideContent3">
                    <p>Grâce à l'équipe de KeepKids nous avons trouvé une solution de garde pour... <a type="" class="showMore3">plus</a></p>
                </span>
                <span class="showContent3">
                    <p>Grâce à l'équipe de Kids'Nap nous avons trouvé une solution de garde pour Arthur en 1 semaine. L'équipe est disponible et à l'écoute, l'application est simple d'utilisation et fluide. <a type="" class="hideMore3">moins</a></p>
                </span>
            </div>
        </div>
        <!-- </div> -->
    </div>
</section>

<section class="section-pilot">
    <div class="container-accueil-bottom">
        <div class="card-pilot">
            <h1 class="title title-pilot">Une plateforme validé par TrustPilot</h1>
            <img src="http://calliope-consulting.fr/wp-content/uploads/2020/04/trustpilot-new-.png" width="150px" alt="">
            <p class="subtitle">Parce que les meilleurs nounous se trouvent sur notre site !</p>
            <a href="https://www.trustpilot.com/" target="_blank"><button class="btn-accueil-pilot">Nous noter sur TrustPilot.com</button></a>
        </div>
        <div class="blob"></div>
    </div>
</section>


<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="<?= base_url(); ?>/js/main.js"></script>
<script src="<?= base_url(); ?>/js/animations.js"></script>
<?= $this->endSection() ?>