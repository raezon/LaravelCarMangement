<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voitures extends Model
{
  
/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'voitures';

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
                            'immatriculation',
                            'type',
                            'marque', 
                            'numero_assurance', 
                            'modele', 
                            'couleur',
                            ];




}
