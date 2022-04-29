<?php

namespace App\Models;

use CodeIgniter\Model;

class AccompagnantModel extends Model
{
    protected $table          = 'accompagnant';
    protected $allowedFields  = ['idParent', 'prenomAccompagnant', 'nomAccompagnant', 'relation'];
    // protected $createdField   = 'created_at';
    // protected $updatedField   = 'updated_at';
    // protected $useSoftDeletes = true;
    // protected $deletedField   = 'deleted_at';

    public function findAccompagnantsByParent(int $idParent)
    {
        return $this->select("accompagnant.*")
            ->where(['idParent' => $idParent])
            ->findAll();
    }
    public function findAccompagnantByEnfant()
    {
        return $this->select("accompagnant.*,enfant.*")
            ->join('enfant', 'accompagnant.idParent = enfant.idParent')
            // ->where(['id' => $idParent])
            ->findAll();
    }
}
