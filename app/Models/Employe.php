<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
protected $table ="employes";
protected $fillable =['id_employe','matricule','nom','prenom','mobile','email','fonction','grade','structure','pc'];

}
