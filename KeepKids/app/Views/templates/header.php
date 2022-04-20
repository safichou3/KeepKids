<div class="header">
    <div class="nav-menu">

        <div class="menu">
            <ul>
                <li><a href="<?= base_url(); ?>/">Accueil</a></li>

                <?php
                if (empty(session('email'))) { ?>
                    <li><a href="<?= base_url(); ?>#apropos">A propos</a></li>
                    <li><a href="<?= base_url(); ?>/accueil/mentions_legales">Mentions Legales</a></li>
                    <div class="menu">
                        <div class="logo">KEEPKIDS</div>
                    </div>
                    <li><a href="<?= base_url(); ?>/espaces/espace_pro">Espace Pro</a></li>
                    <li><a href="<?= base_url(); ?>/espaces/espace_parents">Espace Parents</a></li>
                    <!-- <li><a href="<?= base_url(); ?>/connexion"><span class="glyphicon glyphicon-user"></span> Connexion</a></li> -->
                    <li><a href="<?= base_url(); ?>/users/inscription"><span class="glyphicon glyphicon-log-in green"></span> Inscription</a></li>
                <?php } else { ?>
                    <li><a href="<?= base_url(); ?>/profil"><img class="img-profil" src="<?= base_url(); ?>/upload/users/<?= session("imageName"); ?>"> <?= session("email"); ?></a></li>
                    <li><a href="<?= base_url(); ?>/deconnexion"><span class="glyphicon glyphicon-log-out red"></span> Déconnexion</a></li>
                <?php }
                ?>
            </ul>
        </div>
    </div>
</div>

<?= session('nom'); ?>