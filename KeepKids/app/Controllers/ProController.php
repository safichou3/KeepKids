<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProController extends BaseController
{

    protected $proModel;
    protected $planningModel;

    public function __construct()
    {
        $this->proModel = model(ProModel::class);
        $this->planningModel = model(planningModel::class);
    }

    public function deconnexion()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    public function connexion()
    {
        if ($this->request->getMethod() === 'post' && $this->validate([
            'email' => 'required|valid_email',
            'password' => 'required',
        ])) {

            $emailPost = $this->request->getPost("email");
            $passwordPost = $this->request->getPost("password");

            $pro = $this->proModel->findByEmail($emailPost);
            if (!empty($pro)) {
                if (password_verify($passwordPost, $pro["password"])) {
                    session()->set([
                        "email" => $pro["email"],
                        "prenom" => $pro["prenom"],
                        "id" => $pro["id"],
                        "type" => "pro",
                        "idE" => $pro["idEtablissement"]
                    ]);
                    return redirect()->to('espaces/pro/espace_pro');
                } else {
                    echo 'Le mot de passe est invalide.';
                }
            } else {
                echo ("Cet email n'existe pas");
            }
        }
        echo view("espaces/pro/connexionPro", [
            'validation' => $this->validator
        ]);
    }

    

    private function unlinkCarteIdById(int $id)
    {
        $pro = $this->proModel->find($id);
        if (!empty($enfants)) {
            $imageName = $pro["carteId"];
            @unlink(ROOTPATH . "/public/upload/carnetVaccin/" . $imageName);
        }
    }
    private function unlinkKbisById(int $id)
    {
        $pro = $this->proModel->find($id);
        if (!empty($enfants)) {
            $imageName2 = $pro["kbis"];
            @unlink(ROOTPATH . "/public/upload/certificat/" . $imageName2);
        }
    }
    private function movecarteId(string $inputName)
    {
        $img = $this->request->getFile($inputName);
        if (!empty($img)) {
            if ($img->isValid() && !$img->hasMoved()) {
                $carteId = $img->getRandomName();
                $img->move(ROOTPATH . "/public/upload/carteId", $carteId);

                return $carteId;
            }
        }
    }
    private function moveKbis(string $inputName)
    {
        if (!empty($img2)) {
            $img2 = $this->request->getFile($inputName);

            if ($img2->isValid() && !$img2->hasMoved()) {
                $kbis = $img2->getRandomName();
                $img2->move(ROOTPATH . "/public/upload/kbis", $kbis);

                return $kbis;
            }
        }
    }

    public function inscription()
    {
        $erreurfiles = false;
        $img = $this->request->getFile('carteId');
        $img2 = $this->request->getFile('kbis');
        // $carteId = $this->movecarteId("carteId");
        // $kbis = $this->moveKbis("kbis");
        if ($this->request->getMethod() === 'post' && $this->validate([
            'nom' => 'required|min_length[3]|max_length[20]',
            'prenom' => 'required|min_length[3]|max_length[20]',
            'nomEntreprise' => 'min_length[3]|max_length[40]',
            'email' => 'required|valid_email|is_unique[pro.email]',
            'adresse' => 'required|min_length[3]|max_length[200]',
            'ville' => 'required|min_length[3]|max_length[200]',
            'cp' => 'required|min_length[5]|max_length[10]',
            'tauxHoraire' => 'required|min_length[0]|max_length[500]',
            'tel' => 'required|min_length[10]|max_length[10]',
            'siret' => 'required|min_length[14]|max_length[14]',
            'idEtablissement' => 'required',
            'password' => 'required|min_length[6]|max_length[255]'
        ])) {


            if (empty($_FILES['carteId']['name']) || empty($_FILES['kbis']['name'])) {
                $erreurfiles = true;
            } else {
                if ($img->isValid() && !$img->hasMoved()) {
                    $carteId = $img2->getRandomName();
                    $img->move(ROOTPATH . "/public/upload/carteId", $carteId);
                }
                if ($img2->isValid() && !$img2->hasMoved()) {
                    $kbis = $img2->getRandomName();
                    $img2->move(ROOTPATH . "/public/upload/kbis", $kbis);
                }
                $data = [
                    "nom" => $this->request->getPost("nom"),
                    "prenom" => $this->request->getPost("prenom"),
                    "nomEntreprise" => $this->request->getPost("nomEntreprise"),
                    "email" => $this->request->getPost("email"),
                    "adresse" => $this->request->getPost("adresse"),
                    "ville" => $this->request->getPost("ville"),
                    "cp" => $this->request->getPost("cp"),
                    "tel" => $this->request->getPost("tel"),
                    "tauxHoraire" => $this->request->getPost("tauxHoraire"),
                    "latLng" => $this->request->getPost("latLng"),
                    "siret" => $this->request->getPost("siret"),
                    "idEtablissement" => $this->request->getPost("idEtablissement"),
                    "password" => password_hash($this->request->getPost("password"), PASSWORD_DEFAULT),
                    "carteId" => $carteId,
                    "kbis" => $kbis
                ];
                $this->proModel->insert($data);
                return redirect()->to('/');
            }

            // $data = [
            //     'erreur' => true

            // ]
            // return view("espaces/pro/inscriptionPro", $data );

            // if (!empty($this->request->getPost('nom')) && !empty($this->request->getPost('prenom'))) {


            //     $this->proModel->insert($data);
            //     return redirect()->to('/');
            // }
        } else {
            echo view("espaces/pro/inscriptionPro", [
                'validation' => $this->validator
            ]);
        }
    }
}
