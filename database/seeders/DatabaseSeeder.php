<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

use Illuminate\Support\Facades\DB;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $faker=Faker::create();

       foreach(range(1,100) as $index){
           DB::table('users') ->insert([
               'matricule'=>$faker->matricule,
               'email'=>$faker->unique()->safeEmail,
             
               'role_as'=>$faker->role_as,
               'created_as'=>$faker->dateTimeBetween('-6 month','+1 month') 
           ]);
       }

        // \App\Models\User::factory(10)->create();
    }
}
