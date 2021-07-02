<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    
                Schema::create('employes', function (Blueprint $table) 
                {
                    $table->increments('id',20);
                    $table->String('matricule',250)->unique();
                    $table->String('nom');
                    $table->String('prenom');
                    $table->String('mobile',11);
                    $table->String('email');
                    $table->String('fonction');
                    $table->String('grade');
                    $table->String('structure');
                    $table->enum('pc',['Oui', 'Non']);
                    $table->timestamps();
                });
     }

    






        /**
         * Reverse the migrations.
         *
        
    




     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employes');
    }
    public function boot()
    {
        // Fix for MySQL < 5.7.7 and MariaDB < 10.2.2
        Schema::defaultStringLength(191); //Update defaultStringLength
    }
}
