<div class="header">
    <div class="nav-menu">

        <div class="menu">
            <ul>
                <li><a href="<?= base_url(); ?>/">Accueil</a></li>

                <?php
                if (empty(session('email'))) { ?>
                    <li><a href="<?= base_url(); ?>#apropos">A propos</a></li>
                    <!-- <li><a href="<?= base_url(); ?>/accueil/mentions_legales">Mentions Legales</a></li> -->
                    <div class="menu">
                        <div class="logo">KEEPKIDS</div>
                    </div>
                    <li><a href="<?= base_url(); ?>/espaces/pro/connexionPro">ESPACE PRO</a></li>
                    <li><a href="<?= base_url(); ?>/espaces/parents/connexionParents">ESPACE PARENTS</a></li>
                <?php } else { ?>
                    <li><a href="<?= base_url(); ?>/profil">JUSTIFICATIFS</a></li>
                    <li><a href="<?= base_url(); ?>/profil">RESERVATIONS</a></li>
                    <div class="menu">
                        <div class="logo"><a style="color: #3D63F3;text-decoration:none;" href="<?= base_url(); ?>/espaces/parents/espace_parents">ESPACE PARENTS</a></div>
                    </div>
                    <li><a href="<?= base_url(); ?>/espaces/parents/mesEnfants">MES ENFANTS</a></li>
                    <li><a href="<?= base_url(); ?>/profil"><?= session("email"); ?></a></li>
                    <li><a href="<?= base_url(); ?>/deconnexion"><span class="glyphicon glyphicon-log-out red"></span> Déconnexion</a></li>
                <?php }
                ?>
            </ul>
        </div>
    </div>
</div>
