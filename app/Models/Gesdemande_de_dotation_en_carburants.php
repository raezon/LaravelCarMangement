<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gesdemande_de_dotation_en_carburants extends Model
{

     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'demande_de_dotation_en_carburants';

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
    protected $fillable = [
        
                                 'id',
                                 'num_dot',
                                 'division',
                                 'direction',
                                 'réf',
                                 'lieu',
                                 'date_jour',
                                 'date_etab_dmnd',
                                 'date_dernier_app',
                                 'km_par',
                                 'index',
                                 'date',
                                 'nbr_bon',
                                 'nom',
                                 'prenom',
                                 'fonction',
                                 'strctr_attache',
                                 'type_véhicule',
                                 'immatriculation',
                 
                             ];
}