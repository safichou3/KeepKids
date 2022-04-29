<?php

namespace App\Models;

use CodeIgniter\Model;

class planningModel extends Model
{
    protected $table          = 'planning';
    protected $allowedFields  = ['date', 'heureOuverture', 'heureFermeture', 'capacité'];

    public function lastMonday()
    {
            $timestamp = $this->select("planning.date")
            ->orderby("date", "desc")
            ->where(['idPro' => session("id")]);
        return $timestamp;
        foreach ($timestamp as $element) {
            if (date('D', $element) === 'Mon') {
                return ($element + (24 * 60 * 60 * 7));
            }
        }
    }
}
