<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttribuerVhcl extends Model
{
    use HasFactory;

    
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'AttribuerVhcl';

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
                            'N_serie',
                            'entité',
                            'direction',
                            'ser_expl',
                            'nom',
                            'prenom',
                            'fonction',
                        ];
}