<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EspaceParentsController extends BaseController
{
    protected $enfantsModel;
    protected $parentsModel;


    public function __construct()
    {
        $this->enfantsModel = model(EnfantsModel::class);
        $this->parentsModel = model(ParentsModel::class);
    }
    public function index()
    {
        return view("espaces/parents/espace_parents");
    }
    private function unlinkNewsImageById(int $id) {
        $enfant = $this->enfantsModel->find($id);
        if (!empty($enfants)) {
            $imageName = $enfant["carnetVaccin"];
            @unlink(ROOTPATH . "/public/upload/carnetVaccin/" . $imageName);
        }
    }

    private function moveImage(string $inputName) {
        $img = $this->request->getFile($inputName);

        if ($img->isValid() && ! $img->hasMoved()) {
            $carnetVaccin = $img->getRandomName();
            $img->move(ROOTPATH . "/public/upload/news", $carnetVaccin);

            return $carnetVaccin;
        }
    }

    private function generateEnfant(string $carnetVaccin)
    {
        return [
            "idParent" => session('id'),
            "nom" => $this->request->getPost('nom'),
            "prenom" => $this->request->getPost('prenom'),
            "dateDeNaissance" => $this->request->getPost('dateDeNaissance'),
            "allergies" => $this->request->getPost('allergies'),
            "maladies" => $this->request->getPost('maladies'),
            "traitement" => $this->request->getPost('traitement'),
            "description" => $this->request->getPost('description'),
            "carnetVaccin" => $carnetVaccin
        ];
    }

    function creerEnfant()
    {
        if ($this->request->getMethod() === 'post') {
            $carnetVaccin = $this->moveImage("carnetVaccin");

            if (!empty($this->request->getPost('nom')) && !empty($this->request->getPost('prenom')) && !empty($this->request->getPost('dateDeNaissance'))) {
                $data = $this->generateEnfant($carnetVaccin);
                $this->enfantsModel->insert($data);
            }
            return redirect()->to('espaces/parents/mesEnfants');
        } else {
            echo view("espaces/parents/mesEnfants", [
                "idParent" => $this->parentsModel->findAll()
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
        $this->unlinkNewsImageById($id);
        $this->enfantsModel->delete($id);
        return redirect()->to('espaces/parents/mesEnfants');
    }
    function modifEnfants(int $id)
    {
        $enfant = $this->enfantsModel->findEnfantsByParent(session("id"));
        if ($this->request->getMethod() === 'post') {
            $img = $this->request->getFile('carnetVaccin');

            if ($img->isValid() && !$img->hasMoved()) {
                $this->unlinkNewsImageById($id);
                $carnetVaccin = $this->moveImage("carnetVaccin");
            } else {
                $carnetVaccin = $enfant["carnetVaccin"];
            }

            $data = $this->generateEnfant($carnetVaccin);
            $this->enfantsModel->update($id, $data);
            return redirect()->to('espaces/parents/mesEnfants');
        } else {
            echo view("espaces/parents/modifEnfants", [
                "enfant"       => $enfant,
                "parents" => $this->parentsModel->findAll()
            ]);
        }
    }

    function reservations()
    {
        return view("espaces/parents/reservations");
    }

    function paiements()
    {
        return view("espaces/parents/paiements");
    }

    function profil()
    {
        return view("espaces/parents/profil");
    }
}
