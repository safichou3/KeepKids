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

    public function planningPro()
    {
        echo view("espaces/pro/planningPro");
    }
    public function gestionHoraire($day, $date)
    {
        $day = strtolower($day);
        echo $this->request->getPost($day . "lower");
        if (null !== $this->request->getPost($day . 'checkbox')) {

            $ouverture = null;
            $fermeture = null;
        } else {

            $ouverture = $this->request->getPost($day . "lower");
            $fermeture = $this->request->getPost($day . "upper");
        }


        $planning = [
            "idPro" => session('id'),
            "heureOuverture" => $ouverture,
            "heureFermeture" => $fermeture,
            "capacité" => 20,
        ];
// var_dump($planning);
// die();
        $this->planningModel->insert($planning);
        return redirect()->to('/');
    }
    public function CreatePlanningPro()
    {
        if ($this->request->getMethod() === 'post') {




            $data = [
                'timestamp' => $this->planningModel->lastMonday()
            ];
            echo view("espaces/pro/createPlanningPro", $data);
            echo "<pre>";
            $date = $_POST['timestamp'];
            print_r($this->gestionHoraire('lundi', $date));
            $date = $date + 24 * 60 * 60;
            print_r($this->gestionHoraire('mardi', $date));
            $date = $date + 24 * 60 * 60;
            print_r($this->gestionHoraire('mercredi', $date));
            $date = $date + 24 * 60 * 60;
            print_r($this->gestionHoraire('jeudi', $date));
            $date = $date + 24 * 60 * 60;
            print_r($this->gestionHoraire('vendre', $date));
            $date = $date + 24 * 60 * 60;
            print_r($this->gestionHoraire('samedi', $date));
            $date = $date + 24 * 60 * 60;
            print_r($this->gestionHoraire('dimanche', $date));

            // $this->planningModel->insert();
            print_r($_POST);
            print_r($this->planningModel->findAll());
            print_r($_SESSION);
            echo "</pre>";
        } else {
            print_r("pas de post");
            $data = [
                'timestamp' => $this->planningModel->lastMonday()
            ];
            echo view("espaces/pro/createPlanningPro", $data);
        }
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
                $img->move(ROOTPATH . "/public/upload/carnetVaccin", $carteId);

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
                $img2->move(ROOTPATH . "/public/upload/certificat", $kbis);

                return $kbis;
            }
        }
    }

    public function inscription()
    {
        $carteId = $this->movecarteId("carteId");
        $kbis = $this->moveKbis("kbis");
        if ($this->request->getMethod() === 'post' && $this->validate([
            'nom' => 'required|min_length[3]|max_length[20]',
            'prenom' => 'required|min_length[3]|max_length[20]',
            'nomEntreprise' => 'min_length[3]|max_length[40]',
            'email' => 'required|valid_email|is_unique[pro.email]',
            'adresse' => 'required|min_length[3]|max_length[200]',
            'tel' => 'required|min_length[10]|max_length[10]',
            'siret' => 'required|min_length[14]|max_length[14]',
            'idEtablissement' => 'required',
            'carteId' => 'required',
            'kbis' => 'required',
            'password' => 'required|min_length[6]|max_length[255]',
        ])) {



            $data = [
                "nom" => $this->request->getPost("nom"),
                "prenom" => $this->request->getPost("prenom"),
                "nomEntreprise" => $this->request->getPost("nomEntreprise"),
                "email" => $this->request->getPost("email"),
                "adresse" => $this->request->getPost("adresse"),
                "tel" => $this->request->getPost("tel"),
                "siret" => $this->request->getPost("siret"),
                "idEtablissement" => $this->request->getPost("idEtablissement"),
                "password" => password_hash($this->request->getPost("password"), PASSWORD_DEFAULT),
                "carteId" => $carteId,
                "kbis" => $kbis
            ];
            if (!empty($this->request->getPost('nom')) && !empty($this->request->getPost('prenom'))) {

                $this->proModel->insert($data);
                return redirect()->to('/');
            }
        } else {
            echo view("espaces/pro/inscriptionPro", [
                'validation' => $this->validator
            ]);
        }
    }
}
