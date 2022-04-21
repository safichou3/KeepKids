<?php

namespace App\Models;

use CodeIgniter\Model;

class EnfantsModel extends Model
{
    protected $table          = 'enfant';
    protected $allowedFields  = ['idParent', 'nom', 'prenom', 'dateDeNaissance', 'allergies', 'maladies', 'traitement','description'];
    // protected $createdField   = 'created_at';
    // protected $updatedField   = 'updated_at';
    // protected $useSoftDeletes = true;
    // protected $deletedField   = 'deleted_at';

    public function findByEmail(string $email) {
        return $this->where(['email' => $email])->first();
    }
}
