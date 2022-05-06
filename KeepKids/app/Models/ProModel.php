<?php

namespace App\Models;

use CodeIgniter\Model;

class ProModel extends Model
{
    protected $table          = 'pro';
    protected $allowedFields  = ['nom', 'prenom', 'email', 'nomEntreprise','tel', 'adresse','ville','cp','siret', 'password','idEtablissement','carteId','kbis','tauxHoraire','latLng'];
    // protected $createdField   = 'created_at';
    // protected $updatedField   = 'updated_at';
    // protected $useSoftDeletes = true;
    // protected $deletedField   = 'deleted_at';

    public function findByEmail(string $email) {
        return $this->where(['email' => $email])->first();
    }

    public function findByEntreprise(string $nomEntreprise) {
        return $this->where(['nomEntreprise' => $nomEntreprise])->first();
    }
}
