<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ParentsController extends BaseController
{

    protected $parentsModel;

    public function __construct()
    {
        $this->parentsModel = model(ParentsModel::class);
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

            $user = $this->parentsModel->findByEmail($emailPost);
            if (!empty($user)) {
                if (password_verify($passwordPost, $user["password"])) {
                    session()->set([
                        "email" => $user["email"],
                        "prenom" => $user["prenom"],
                        "nom" => $user["nom"],
                        "id" => $user["id"]
                    ]);
                    return redirect()->to('espaces/parents/espace_parents');
                } else {
                    echo 'Le mot de passe est invalide.';
                }
            } else {
                echo ("Cet email n'existe pas");
            }
        }
        echo view("espaces/parents/connexionParents", [
            'validation' => $this->validator
        ]);
    }

    public function inscription()

    {
        if ($this->request->getMethod() === 'post' && $this->validate([
            'nom' => 'required|min_length[3]|max_length[255]',
            'prenom' => 'required|min_length[3]|max_length[255]',
            'email' => 'required|valid_email|is_unique[parent.email]',
            'adresse' => 'required|min_length[3]|max_length[255]',
            'tel' => 'required|min_length[10]|max_length[10]',
            'password' => 'required|min_length[6]|max_length[255]',
        ])) {

            $user = [
                "nom" => $this->request->getPost("nom"),
                "prenom" => $this->request->getPost("prenom"),
                "email" => $this->request->getPost("email"),
                "adresse" => $this->request->getPost("adresse"),
                "tel" => $this->request->getPost("tel"),
                "password" => password_hash($this->request->getPost("password"), PASSWORD_DEFAULT)
            ];

            $this->parentsModel->insert($user);
            return redirect()->to('/');
        } else {
            echo view("espaces/parents/inscriptionParents", [
                'validation' => $this->validator
            ]);
        }
    }
}
