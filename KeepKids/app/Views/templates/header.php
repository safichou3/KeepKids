<nav>
    <div class="logo">
        <img src="<?= base_url(); ?>/img/logo_noir.svg" alt="Logo Image">
    </div>
    <div class="hamburger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
    <ul class="nav-links">
        <li><a href="<?= base_url(); ?>/">Accueil</a></li>
        <?php
        if (empty(session('email'))) { ?>
            <li><a href="<?= base_url(); ?>#apropos">A propos</a></li>
            <li><a class="login-button" href="<?= base_url(); ?>/espaces/pro/connexionPro">ESPACE PRO</a></li>
            <li><a class="join-button" href="<?= base_url(); ?>/espaces/parents/connexionParents">ESPACE PARENTS</a></li>
            <?php
        } else {
            if (session("idE") == 1) { ?>
                <style>
                    .nav-menu {
                        background-color: #FE938C;
                    }
                    footer {
                        background-color: #F9C6C4;
                    }
                </style>
                <!-- CRECHE -->
                <li><a href="<?= base_url(); ?>/espaces/pro/espace_pro">MON ESPACE PRO</a></li>
                <li><a href="<?= base_url(); ?>/espaces/pro/planningPro">PLANNING</a></li>
                <li><a href="<?= base_url(); ?>/espaces/pro/relancesPro">PAIEMENTS & RELANCES</a></li>
                <li><a href="<?= base_url(); ?>/espaces/pro/enfantsPro">LES ENFANTS</a></li>
                <li><a href="<?= base_url(); ?>/espaces/pro/facturesPro">FACTURES</a></li>
                <li><a href="<?= base_url(); ?>/espaces/pro/profilPro"><?= session("email"); ?></a></li>
                <li><a href="<?= base_url(); ?>/deconnexion"><i class="fi fi-rs-sign-out"></i></a></li>
            <?php
            } else if (session("idE") == 2) { ?>
                <style>
                    .nav-menu {
                        background-color: pink;
                    }
                </style>
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
                <style>
                    .nav-menu {
                        background-color: #C6D2FF;
                    }
                    footer {
                        background-color: #E4EAFF;
                    }
                </style>
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
</nav>