<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecuBonDotation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'RecuBonDotation';

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
    protected $fillable = ['id',
                            'réf',
                            'lieu', 
                            'date_jour',
                            'remis_le', 
                            'num_dot', 
                            'du',
                            'nbr_bon', 
                            'debut_ser',
                            'fin_ser',
                            'nom',
                            'prenom',
                            'fonction',
                            'structure_attache',
                            'N_serie',
                             ];
                            
                           

    
}

