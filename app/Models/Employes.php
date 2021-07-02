<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Employes extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employes';

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
                            'matricule',
                            'nom', 
                            'prenom', 
                            'mobile', 
                            'email', 
                            'fonction',
                            'grade',
                            'structure',
                            'pc'];

    
}

