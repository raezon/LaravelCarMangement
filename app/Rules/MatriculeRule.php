<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use  App\Models\Employe;
use Illuminate\Support\Facades\DB;

class MatriculeRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $employe = DB::table('employes')->where('matricule', $value)->first();
       

        if($employe)// employe n est pas vid( est que l9ina la de matricule )
           // if($employe->matricule) //
                return true;
        
        return false;

      
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Le Matricule doit figurer dans la liste des matricule déja existant.';
    }
}
