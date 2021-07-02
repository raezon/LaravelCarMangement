<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeSansChau extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'demandesanschau';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [ 'id',
                            'num_référence',
                            'nom',
                            'prenom',
                            'grade',
                            'direction_attache',
                            'lieu_demplacement',
                            'date',
                            'heure_depart',
                            'motif',
                            'Immatriculation',
                            'type',
                            'marque',
                            'état_Véhicule',
                            'date_remise_véhicule',
                            'service_demandeur',
                            'sructure_donatrice',
                        ];
}