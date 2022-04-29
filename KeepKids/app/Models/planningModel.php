<?php

namespace App\Models;

use CodeIgniter\Model;

class planningModel extends Model
{
    protected $table          = 'planning';
    protected $allowedFields  = ['date', 'heureOuverture', 'heureFermeture', 'capacité', 'idPro'];

    public function lastMonday()
    {
        $timestamp = $this->orderby("date", "desc")
            ->where(['idPro' => session("id")])
            ->findAll();
        $timestamp = $timestamp[0];
        foreach ($timestamp as $element) {
            if (date('D', $element) === 'Mon') {
                return ($element + (24 * 60 * 60 * 7));
            }
        }
    }
}
