<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UsersController extends BaseController
{

    protected $usersModel;

    public function __construct()
    {
        $this->usersModel = model(UsersModel::class);
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

            $user = $this->usersModel->findByEmail($emailPost);
            if (!empty($user)) {
                if (password_verify($passwordPost, $user["password"])) {
                    session()->set([
                        "email" => $user["email"],
                        "prenom" => $user["prenom"],
                        "id" => $user["id"]
                    ]);
                    return redirect()->to('/');
                } else {
                    echo 'Le mot de passe est invalide.';
                }
            } else {
                echo ("Cet email n'existe pas");
            }
        }
        echo view("users/connexion", [
            'validation' => $this->validator
        ]);
    }

    public function inscription()

    {
        if ($this->request->getMethod() === 'post' && $this->validate([
            'nom' => 'required|min_length[3]|max_length[255]',
            'prenom' => 'required|min_length[3]|max_length[255]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'tel' => 'required|min_length[10]|max_length[10]',
            'password' => 'required|min_length[6]|max_length[255]',
        ])) {

            $user = [
                "nom" => $this->request->getPost("nom"),
                "prenom" => $this->request->getPost("prenom"),
                "email" => $this->request->getPost("email"),
                "tel" => $this->request->getPost("tel"),
                "password" => password_hash($this->request->getPost("password"), PASSWORD_DEFAULT)
            ];

            $this->usersModel->insert($user);
            return redirect()->to('/');
        } else {
            echo view("users/inscription", [
                'validation' => $this->validator
            ]);
        }
    }
}
