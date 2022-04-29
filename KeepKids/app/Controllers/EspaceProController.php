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


    public function __construct()
    {
        $this->enfantsModel = model(EnfantsModel::class);
        $this->reservationsModel = model(ReservationModel::class);
        $this->accompagnantsModel = model(AccompagnantModel::class);
        $this->parentsModel = model(ParentsModel::class);
    }
    public function planningPro()
    {
        echo view("espaces/pro/planningPro");
    }
    public function facturesPro()
    {
        echo view("espaces/pro/facturesPro");
    }
    public function relancesPro()
    {
        echo view("espaces/pro/relancesPro");
    }
    public function enfantsPro()
    {
        $enfant = $this->reservationsModel->findAllEnfantsByPro();
        $accompagnants = $this->accompagnantsModel->findAccompagnantByEnfant();
        $data = [
            "enfant" => $enfant,
            "accompagnant" => $accompagnants
        ];

        echo view("espaces/pro/enfantsPro", $data);
    }

    public function profilPro()
    {
        echo view("espaces/pro/profilPro");
    }
    public function CreatePlanningPro()
    {
        echo view("espaces/pro/createPlanningPro");
    }
}
