<?php

namespace Database\Factories;

use App\Models\Employe;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
        'id_employe'=>$this->faker->id_employe,
        'matricule'=>$this->faker->matricule,
        'nom'=>$this->faker->nom,
        'prenom'=>$this->faker->prenom,
        'mobile'=>$this->faker->mobile,
        'email'=>$this->faker->email,
        'fonction'=>$this->faker->fonction,
        'grade'=>$this->faker->grade,
        'structure'=>$this->faker->structure,
        'pc'=>$this->faker->pc,


            

        ];
    }
}
