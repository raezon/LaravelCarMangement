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
                            'N_serie',
                            'ancienne_immat',
                            'nouvelle_immat',
                            'numero_assurance',
                            'Energie',
                            'type',
                            'marque',
                            'modele',
                            'couleur',
                            'Genre',
                            'nbr_plc',
                            'nbr_chv',
                            'tonnage',
                            'dmc',
                            'etat',
                            'qualité',
                            ];




}





