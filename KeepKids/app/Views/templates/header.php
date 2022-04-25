<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>

<div class="header">
    <div class="nav-menu">

        <div class="menu">
            <ul>
                <li><a href="<?= base_url(); ?>/">Accueil</a></li>

                <?php
                // print_r(session("type"));
                // print_r(session("idE"));
                if (empty(session('email'))) { ?>
                    <!-- NON connecté -->
                    <li><a href="<?= base_url(); ?>#apropos">A propos</a></li>
                    <!-- <li><a href="<?= base_url(); ?>/accueil/mentions_legales">Mentions Legales</a></li> -->
                    <div class="menu">
                        <div class="logo">KEEPKIDS</div>
                    </div>
                    <li><a href="<?= base_url(); ?>/espaces/pro/connexionPro">ESPACE PRO</a></li>
                    <li><a href="<?= base_url(); ?>/espaces/parents/connexionParents">ESPACE PARENTS</a></li>
                    <?php
                } else {

                    if (session("idE") == 1) { ?>
                        <!-- CRECHE -->
                        <li><a href="<?= base_url(); ?>/espaces/pro/planningPro">PLANNING</a></li>
                        <li><a href="<?= base_url(); ?>/espaces/pro/relancesPro">PAIEMENTS & RELANCES</a></li>
                        <div class="menu">
                            <div class="logo"><a style="color: red;text-decoration:none;" href="<?= base_url(); ?>/espaces/pro/espace_pro">ESPACE PRO</a></div>
                        </div>
                        <li><a href="<?= base_url(); ?>/espaces/pro/enfantsPro">LES ENFANTS</a></li>
                        <li><a href="<?= base_url(); ?>/espaces/pro/facturesPro">FACTURES</a></li>
                        
                        <li><a href="<?= base_url(); ?>/espaces/pro/profilPro"><?= session("email"); ?></a></li>
                        <li><a href="<?= base_url(); ?>/deconnexion"><i class="fi fi-rs-sign-out"></i></a></li>
                    <?php
                    } else if (session("idE") == 2) { ?>
                        <!-- AM -->
                        <li><a href="<?= base_url(); ?>/espaces/pro/planningPro">PLANNING AM</a></li>
                        <li><a href="<?= base_url(); ?>/espaces/pro/relancesPro">PAIEMENTS & RELANCES</a></li>
                        <div class="menu">
                            <div class="logo"><a style="color: red;text-decoration:none;" href="<?= base_url(); ?>/espaces/pro/espace_pro">ESPACE PRO</a></div>
                        </div>
                        <li><a href="<?= base_url(); ?>/espaces/pro/facturesPro">FACTURES</a></li>
                        <li><a href="<?= base_url(); ?>/espaces/pro/profilPro"><?= session("email"); ?></a></li>
                        <li><a href="<?= base_url(); ?>/deconnexion"><i class="fi fi-rs-sign-out"></i></a></li>
                    <?php
                    } else if (session("type") == "parent") { ?>
                        <li><a href="<?= base_url(); ?>/espaces/parents/paiements">PAIEMENTS & FACTURES</a></li>
                        <li><a href="<?= base_url(); ?>/espaces/parents/reservations">RESERVATIONS</a></li>
                        <div class="menu">
                            <div class="logo"><a style="color: #3D63F3;text-decoration:none;" href="<?= base_url(); ?>/espaces/parents/espace_parents">ESPACE PARENTS</a></div>
                        </div>
                        <li><a href="<?= base_url(); ?>/espaces/parents/mesEnfants">MES ENFANTS</a></li>
                        <li><a href="<?= base_url(); ?>/espaces/parents/profil"><?= session("email"); ?></a></li>
                        <li><a href="<?= base_url(); ?>/deconnexion"><i class="fi fi-rs-sign-out"></i></a></li>
                <?php
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</div>