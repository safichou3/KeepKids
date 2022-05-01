<?php

namespace App\Models;

use CodeIgniter\Model;

class planningModel extends Model
{
    protected $table          = 'planning';
    protected $allowedFields  = ['date', 'heureOuverture', 'heureFermeture', 'semaine', 'capacité', 'idPro'];

    public function lastMonday()
    {
        $semaine = $this->orderby("semaine", "desc")
            ->where(['idPro' => session("id")])
            ->first();
        if (!empty($semaine['semaine'])) {

            $date = $this->orderby("date", "asc")
                ->where(['idPro' => session("id")])
                ->where(['semaine' => $semaine['semaine']])
                ->first();

            return $date['date'] = $date['date'] + 604800;
        } else {
            return (strtotime("last Monday"));
        }
    }
}
