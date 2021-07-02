<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeAvecChau extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'demandeavecchau';

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
                            'lieu_deplacement',
                            'date',
                            'date_depart',
                            'heure_depart',
                            'motif',
                        ];
}