<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservationModel extends Model
{
    protected $table          = 'reservation';
    protected $allowedFields  = ['idPro', 'idEnfant', 'date', 'heure', 'statut'];
    // protected $createdField   = 'created_at';
    // protected $updatedField   = 'updated_at';
    // protected $useSoftDeletes = true;
    // protected $deletedField   = 'deleted_at';

    public function findAllEnfantsByPro()
    {
        return $this->select("reservation.*, enfant.*")
            ->join('enfant', 'reservation.idEnfant = enfant.id')
            ->where(['idPro' => session("id")])
            ->findAll();
    }
}
