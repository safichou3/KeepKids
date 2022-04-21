<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EspaceParentsController extends BaseController
{
    protected $enfantsModel;

    public function __construct()
    {
        $this->enfantsModel = model(EnfantsModel::class);
    }
    public function index()
    {
        return view("espaces/parents/espace_parents");
    }

    function create() {
        if ($this->request->getMethod() === 'post') {
            $newName = $this->moveImage("newsImage");

            if (!empty($this->request->getPost('title')) && !empty($this->request->getPost('body'))) {
                $data = $this->generateNewsDataFromPost($newName);
                $this->newsModel->insert($data);
            }
            return redirect()->to('/');

        } else {
            echo view("news/create", [
                "categories" => $this->categoriesModel->findAll()
            ]);
        }
    }

    function mesEnfants()
    {
        $enfant = $this->enfantsModel->findEnfantsByParent(session("id"));
        $data = [
            "enfant" => $enfant
        ];

        echo view("espaces/parents/mesEnfants", $data);
    }
    function delete(int $id)
    {
        $this->enfantsModel->delete($id);
        return redirect()->to('espaces/parents/mesEnfants');
    }

    function reservations()
    {
        return view("espaces/parents/reservations");
    }
}
