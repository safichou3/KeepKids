<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservationModel extends Model
{
    protected $table = 'reservation';
    protected $allowedFields = ['idPro', 'idEnfant', 'date', 'heure', 'statut', 'facture'];
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
    public function findAllByReservation()
    {
        return $this->select("enfant.*, parent.*,reservation.*,pro.*")
            ->join('pro', 'reservation.idPro = pro.id')
            ->join('enfant', 'reservation.idEnfant = enfant.id')
            ->join('parent', 'enfant.idParent = parent.id')
            ->where(['idParent' => session("id")])
            ->findAll();
    }
    public function findById($id)
    {
        return $this->select("reservation.*")
            ->join('pro', 'reservation.idPro = pro.id')
            ->where(['idPro' => $id])
            ->findAll();
    }
}
