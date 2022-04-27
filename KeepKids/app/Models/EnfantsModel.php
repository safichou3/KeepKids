<?php

namespace App\Models;

use CodeIgniter\Model;

class EnfantsModel extends Model
{
    protected $table          = 'enfant';
    protected $allowedFields  = ['idParent', 'nom', 'prenom', 'dateDeNaissance', 'allergies', 'maladies', 'traitement','description','carnetVaccin','certificat'];
    // protected $createdField   = 'created_at';
    // protected $updatedField   = 'updated_at';
    // protected $useSoftDeletes = true;
    // protected $deletedField   = 'deleted_at';

    public function findEnfantsByParent(int $idParent){
        return $this->select("enfant.*")
            ->where(['idParent' => $idParent])
            ->findAll();
    }
}
