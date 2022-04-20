<?php

namespace App\Models;

use CodeIgniter\Model;

class ParentsModel extends Model
{
    protected $table          = 'parent';
    protected $allowedFields  = ['nom', 'prenom', 'email', 'tel', 'adresse', 'password'];
    // protected $createdField   = 'created_at';
    // protected $updatedField   = 'updated_at';
    // protected $useSoftDeletes = true;
    // protected $deletedField   = 'deleted_at';

    public function findByEmail(string $email) {
        return $this->where(['email' => $email])->first();
    }
}
