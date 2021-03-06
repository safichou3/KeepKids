<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override(function () {
    echo view('404.php');
});
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// ACCUEIL------------------------------------------------------------------------------------------------------------
$routes->get('/', 'AccueilController::index');
$routes->get('accueil/mentions_legales', 'AccueilController::mentionsL');
$routes->get('accueil/contact', 'AccueilController::contact');
$routes->get('Error', 'Error404Controller::Error404');
$routes->get('404', 'Error404Controller::Error');

// BOTH
$routes->get('deconnexion', 'ParentsController::deconnexion');


// ESPACE PARENTS -----------------------------------------------------------------------------------------------------
$routes->get('espaces/parents/espace_parents', 'EspaceParentsController::index');

// mes enfants
$routes->get('espaces/parents/mesEnfants', 'EspaceParentsController::mesEnfants');
$routes->match(['get', 'post'], 'espaces/parents/mesEnfants', 'EspaceParentsController::creerEnfant');
$routes->get('espaces/parents/mesEnfants/delete/(:num)', 'EspaceParentsController::delete/$1');
$routes->match(['get', 'post'], 'espaces/parents/modifEnfants/(:num)', 'EspaceParentsController::modifEnfants/$1');

$routes->match(['get', 'post'], 'espaces/parents/accompagnateur', 'EspaceParentsController::creerAccompagnant');
$routes->get('espaces/parents/mesEnfants/deleteAccompagnant/(:num)', 'EspaceParentsController::deleteAccompagnant/$1');
$routes->match(['get', 'post'], 'espaces/parents/modifAccompagnant/(:num)', 'EspaceParentsController::modifAccompagnant/$1');


// reservations
$routes->match(['get', 'post'], 'espaces/parents/reservations', 'EspaceParentsController::creerReservation');
$routes->get('espaces/parents/reservations/(:any)', 'EspaceParentsController::showReservation/$1');

$routes->match(['get', 'post'], 'espaces/parents/reservations1/(:num)', 'EspaceParentsController::reservations1/$1');
$routes->match(['get', 'post'], 'espaces/parents/reservations2', 'EspaceParentsController::reservations2');

//paiements & factures
$routes->match(['get', 'post'], 'espaces/parents/paiements', 'EspaceParentsController::paiements');

// profil parents
$routes->match(['get', 'post'], 'espaces/parents/profil', 'EspaceParentsController::profil');
$routes->get('espaces/parents/profil/delete/(:num)', 'EspaceParentsController::delete/$1');
$routes->match(['get', 'post'], 'espaces/parents/ModifProfil/(:num)', 'EspaceParentsController::modifProfil/$1');

// connexion/inscription
$routes->match(['get', 'post'], 'espaces/parents/connexionParents', 'ParentsController::connexion');
$routes->match(['get', 'post'], 'espaces/parents/inscriptionParents', 'ParentsController::inscription');


// ESPACE PRO -----------------------------------------------------------------------------------------------------------
$routes->get('espaces/pro/espace_pro', 'EspaceProController::index');
$routes->match(['get', 'post'], 'espaces/pro/connexionPro', 'ProController::connexion');
$routes->match(['get', 'post'], 'espaces/pro/inscriptionPro', 'ProController::inscription');


// planning creche
$routes->match(['get', 'post'], 'espaces/pro/planningPro', 'EspaceProController::planningPro');
$routes->match(['get', 'post'], 'espaces/pro/create/planningPro', 'EspaceProController::createPlanningPro');
$routes->match(['get', 'post'], 'espaces/pro/enfantsPlanning/(:num)/(:num)', 'EspaceProController::enfantsPlanning/$1/$2');

// paiement & relances
$routes->match(['get', 'post'], 'espaces/pro/relancesPro', 'EspaceProController::relancesPro');
// factures
$routes->match(['get', 'post'], 'espaces/pro/facturesPro', 'EspaceProController::facturesPro');
// les enfants
$routes->match(['get', 'post'], 'espaces/pro/enfantsPro', 'EspaceProController::enfantsPro');
// profil pro
$routes->match(['get', 'post'], 'espaces/pro/profilPro', 'EspaceProController::profilPro');

// PAIEMENT -----------------------------------------------------------------------------------------------------------
$routes->get('paiement/index_paiement', 'PaiementController::indexPaiement');
$routes->get('paiement/paiement', 'PaiementController::paiement');


// ESPACE ADMINISTRATEUR------------------------------------------------------------------------------------------------
$routes->get('espaces/administrateurs/espace_admin', 'AdminController::index');
$routes->get('espaces/administrateurs/connexionAdmin', 'AdminController::connexion');


// ------------------------------------------------------------------------------------------------------------------------

/*
* --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
