<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EspaceProController extends BaseController
{
    public function index()
    {
        return view("espaces/pro/espace_pro");
    }
    protected $enfantsModel;
    protected $reservationsModel;
    protected $accompagnantsModel;
    protected $parentsModel;

    protected $proModel;
    protected $planningModel;


    public function __construct()
    {
        $this->enfantsModel = model(EnfantsModel::class);
        $this->reservationsModel = model(ReservationModel::class);
        $this->accompagnantsModel = model(AccompagnantModel::class);
        $this->parentsModel = model(ParentsModel::class);
        $this->proModel = model(ProModel::class);
        $this->planningModel = model(planningModel::class);
    }

    public function facturesPro()
    {
        $all = $this->reservationsModel->findAllByReservation();

        $data = [
            "all" => $all

        ];

        echo view("espaces/pro/facturesPro", $data);
    }
    public function relancesPro()
    {
        echo view("espaces/pro/relancesPro");
    }
    public function enfantsPro()
    {
        $enfant = $this->reservationsModel->findAllEnfantsByPro();

        $data = [
            "enfant" => $enfant,
            "accompagnant" => $this->accompagnantsModel->findAccompagnantByEnfant()
        ];

        echo view("espaces/pro/enfantsPro", $data);
    }

    public function profilPro()
    {
        echo view("espaces/pro/profilPro");
    }
    public function gestionHoraire($day, $date)
    {
        $day = ucfirst($day);

        if (null !== $this->request->getPost($day . 'checkbox')) {

            $ouverture = null;
            $fermeture = null;
            $capacite = null;
        } else {

            $ouverture = $this->request->getPost($day . "lower");
            $fermeture = $this->request->getPost($day . "upper");
            $capacite = $this->request->getPost($day . "capacite");
        }


        $planning = [
            "idPro" => session('id'),
            "date" => $date,
            "semaine" => date('W', $date),
            "heureOuverture" => $ouverture,
            "heureFermeture" => $fermeture,
            "capacité" => $capacite,
        ];
        // var_dump($planning);
        // die();
        $this->planningModel->insert($planning);
        $planning;
    }
    public function CreatePlanningPro()
    {
        if ($this->request->getMethod() === 'post') {







            echo "<pre>";
            $date = $this->planningModel->lastMonday();
            $dayweek = ['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'];

            for ($i = 0; $i <= 6; $i++) {

                $this->gestionHoraire($dayweek[$i], $date);
                $date = $date + 86400;
            }

            // $this->planningModel->insert();
            // print_r($_POST);
            // print_r($this->planningModel->findAll());
            // print_r($_SESSION);
            echo "</pre>";

            // echo view("espaces/pro/createPlanningPro", $data);
            unset($_POST);
        }

        $data = [
            'date' => $this->planningModel->lastMonday()
        ];
        echo view("espaces/pro/createPlanningPro", $data);
    }
    public function planningPro()
    {

        if ($this->request->getMethod() === 'post') {
            $semaine = $this->request->getPost('semaine');
            if ($this->planningModel->semaineExist($semaine) == false) {
                return redirect()->to('espaces/pro/create/planningPro');
            }
        } else {
            $semaine = date("W");
        }
        $capacite = [];
        $semaine = $this->planningModel->weekByPost($semaine);
        for ($y = 0; $y < 7; $y++) {
            $capaciteParHeureTemporaire = [];
            for ($i = 6; $i < 20; $i++) {
                array_push($capaciteParHeureTemporaire, $this->reservationsModel->findEnfantByDayAndHour(session('id'),$semaine[$y]['date'], $i));
            }
            array_push($capacite, $capaciteParHeureTemporaire);
        }

        $data = [
            'semaine' => $semaine,
            'capacite' => $capacite
        ];

        echo view("espaces/pro/planningPro", $data);
    }
    public function enfantsPlanning($date, $heure)
    {
        $data = [

            'liste' => $this->reservationsModel->findEnfantByDayAndHour(session('id'),$date, $heure),
            'date' => $date,

            
            "accompagnant" => $this->accompagnantsModel->findAccompagnantByEnfant()
        ];

        echo view("espaces/pro/enfantsPlanning", $data);
    }
}
