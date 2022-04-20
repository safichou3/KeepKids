<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UsersController extends BaseController
{
    public function inscription()
    {
        if ($this->request->getMethod() === 'post' && $this->validate([
                'nom' => 'required|min_length[3]|max_length[255]',
                'prenom' => 'required|min_length[3]|max_length[255]',
                'email' => 'required|valid_email|is_unique[users.email]',
                'dateNaissance' => 'required',
                'password' => 'required|min_length[6]|max_length[255]',
            ])) {

            $user = [
                "nom" => $this->request->getPost("nom"),
                "prenom" => $this->request->getPost("prenom"),
                "email" => $this->request->getPost("email"),
                "dateNaissance" => $this->request->getPost("dateNaissance"),
                "password" => password_hash($this->request->getPost("password"), PASSWORD_DEFAULT)
            ];

            $this->usersModel->insert($user);
            return redirect()->to('connexion');
        } else {
            echo view("users/inscription", [
                'validation' => $this->validator
            ]);
        }
    }
}
