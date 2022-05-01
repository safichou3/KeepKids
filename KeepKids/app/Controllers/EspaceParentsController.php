<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EspaceParentsController extends BaseController
{
    protected $enfantsModel;
    protected $parentsModel;
    protected $accompagnantsModel;
    protected $reservationsModel;

    public function __construct()
    {
        $this->enfantsModel = model(EnfantsModel::class);
        $this->parentsModel = model(ParentsModel::class);
        $this->accompagnantsModel = model(AccompagnantModel::class);
        $this->reservationsModel = model(ReservationModel::class);
    }
    public function index()
    {
        return view("espaces/parents/espace_parents");
    }
    private function unlinkCarnetVaccinById(int $id)
    {
        $enfant = $this->enfantsModel->find($id);
        if (!empty($enfants)) {
            $imageName = $enfant["carnetVaccin"];
            @unlink(ROOTPATH . "/public/upload/carnetVaccin/" . $imageName);
        }
    }
    private function unlinkCertificatById(int $id)
    {
        $enfant = $this->enfantsModel->find($id);
        if (!empty($enfants)) {
            $imageName2 = $enfant["certificat"];
            @unlink(ROOTPATH . "/public/upload/certificat/" . $imageName2);
        }
    }
    private function moveVaccin(string $inputName)
    {
        $img = $this->request->getFile($inputName);

        if ($img->isValid() && !$img->hasMoved()) {
            $carnetVaccin = $img->getRandomName();
            $img->move(ROOTPATH . "/public/upload/carnetVaccin", $carnetVaccin);

            return $carnetVaccin;
        }
    }
    private function moveCertificat(string $inputName)
    {
        $img2 = $this->request->getFile($inputName);

        if ($img2->isValid() && !$img2->hasMoved()) {
            $certificat = $img2->getRandomName();
            $img2->move(ROOTPATH . "/public/upload/certificat", $certificat);

            return $certificat;
        }
    }
    private function generateEnfant(string $carnetVaccin, $certificat)
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
            "carnetVaccin" => $carnetVaccin,
            "certificat" => $certificat
        ];
    }
    function creerEnfant()
    {
        if ($this->request->getMethod() === 'post') {
            $carnetVaccin = $this->moveVaccin("carnetVaccin");
            $certificat = $this->moveCertificat("certificat");


            if (!empty($this->request->getPost('nom')) && !empty($this->request->getPost('prenom')) && !empty($this->request->getPost('dateDeNaissance'))) {
                $data = $this->generateEnfant($carnetVaccin, $certificat);
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
        $accompagnants = $this->accompagnantsModel->findAccompagnantsByParent(session("id"));

        $data = [
            "enfant" => $enfant,
            "accompagnant" => $accompagnants
        ];

        echo view("espaces/parents/mesEnfants", $data);
    }
    function delete(int $id)
    {
        $this->unlinkCarnetVaccinById($id);
        $this->unlinkCertificatById($id);
        $this->enfantsModel->delete($id);
        return redirect()->to('espaces/parents/mesEnfants');
    }

    function modifEnfants(int $id)
    {
        $accompagnant = $this->accompagnantsModel->findAccompagnantsByParent(session("id"));
        $enfant = $this->enfantsModel->findEnfantsByParent(session("id"));
        if ($this->request->getMethod() === 'post') {
            foreach ($enfant as $element) {
                if ($element["id"] == $id) {
                    $enfantAModif = $element;
                }
            }
            $img = $this->request->getFile('carnetVaccin');
            $img2 = $this->request->getFile('certificat');
            $carnetVaccin = $enfantAModif["carnetVaccin"];
            $certificat = $enfantAModif["certificat"];
            print_r($this->request->getFile('carnetVaccin'));

            if ($img2->isValid() && !$img2->hasMoved()) {
                @unlink(ROOTPATH . "/public/upload/certificat/" . $enfantAModif['certificat']);
                $certificat = $this->moveCertificat("certificat");
            }

            if ($img->isValid() && !$img->hasMoved()) {
                @unlink(ROOTPATH . "/public/upload/carnetVaccin/" . $enfantAModif['carnetVaccin']);
                $carnetVaccin = $this->moveVaccin("carnetVaccin");
            }
            $data = $this->generateEnfant($carnetVaccin, $certificat);

            $this->enfantsModel->update($id, $data);
            return redirect()->to('espaces/parents/mesEnfants');
        } else {
            echo view("espaces/parents/modifEnfants", [
                "enfant"       => $enfant,
                "accompagnant"       => $accompagnant,
                "parents" => $this->parentsModel->findAll()
            ]);
        }
    }

    // ACCOMPAGNATEURS

    private function generateAccompagnant()
    {
        return [
            "idParent" => session('id'),
            "nomAccompagnant" => $this->request->getPost('nomAccompagnant'),
            "prenomAccompagnant" => $this->request->getPost('prenomAccompagnant'),
            "relation" => $this->request->getPost('relation')
        ];
    }
    function creerAccompagnant()
    {
        if ($this->request->getMethod() === 'post') {

            if (!empty($this->request->getPost('nomAccompagnant')) && !empty($this->request->getPost('prenomAccompagnant')) && !empty($this->request->getPost('relation'))) {
                $data1 = $this->generateAccompagnant();
                $this->accompagnantsModel->insert($data1);
            }
            return redirect()->to('espaces/parents/mesEnfants');
        } else {
            echo view("espaces/parents/mesEnfants", [
                "idParent" => $this->accompagnantModel->findAll()
            ]);
        }
    }

    function deleteAccompagnant(int $id)
    {
        $this->accompagnantsModel->delete($id);
        return redirect()->to('espaces/parents/mesEnfants');
    }

    function modifAccompagnant(int $id)
    {
        $accompagnant = $this->accompagnantsModel->findAccompagnantsByParent(session("id"));

        if ($this->request->getMethod() === 'post') {

            $data = $this->generateAccompagnant();

            $this->accompagnantsModel->update($id, $data);
            return redirect()->to('espaces/parents/mesEnfants');
        } else {
            echo view("espaces/parents/modifAccompagnant", [
                "accompagnant"       => $accompagnant,
                "parents" => $this->parentsModel->findAll()
            ]);
        }
    }
    function generateReservations()
    {
        return [
            "idPro" => session('idPro'),
            "idEnfant" => $this->request->getPost('idEnfant'),
            "date" => $this->request->getPost('date'),
            "heure" => $this->request->getPost('heure'),
            "statut" => $this->request->getPost('statut'),
            "facture" => $this->request->getPost('facture')
        ];
    }
    // RESRVATION
    function creerReservation()
    {
        if ($this->request->getMethod() === 'post') {

            if (!empty($this->request->getPost('date')) && !empty($this->request->getPost('heure')) && !empty($this->request->getPost('statut'))) {
                $data2 = $this->generateReservations();
                $this->reservationsModel->insert($data2);
            }
            return redirect()->to('espaces/parents/reservations');
        } else {
            echo view("espaces/parents/reservations", [
                "idPro" => $this->reservationsModel->findAll(),
                "idEnfant" => $this->enfantsModel->findAll(),
                "enfant" => $this->reservationsModel->findAllByReservation()
            ]);
        }
    }
    // PAIEMENTS
    function paiements()
    {
        return view("espaces/parents/paiements");
    }
    // PROFIL
    function profil()
    {
        return view("espaces/parents/profil");
    }
    function generateProfil()
    {
        return [
            "nom" => session('nom'),
            "prenom" => $this->request->getPost('prenom'),
            "email" => $this->request->getPost('email'),
            "tel" => $this->request->getPost('tel'),
            "adresse" => $this->request->getPost('adresse')
        ];
    }
    function monProfil()
    {
        $profil = $this->parentsModel->generateProfil();

        $data = [
            "profil" => $profil
        ];

        echo view("espaces/parents/profil", $data);
    }
    function deleteAccount(int $id)
    {
        $this->accompagnantsModel->delete($id);
        return redirect()->to('espaces/parents/profil');
    }

    function modifProfil(int $id)
    {
        $accompagnant = $this->accompagnantsModel->findAccompagnantsByParent(session("id"));

        if ($this->request->getMethod() === 'post') {

            $data = $this->generateAccompagnant();

            $this->accompagnantsModel->update($id, $data);
            return redirect()->to('espaces/parents/mesEnfants');
        } else {
            echo view("espaces/parents/modifAccompagnant", [
                "accompagnant"       => $accompagnant,
                "parents" => $this->parentsModel->findAll()
            ]);
        }
    }
}
