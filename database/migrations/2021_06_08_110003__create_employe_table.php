<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employe', function (Blueprint $table) {
            $table->increments('id',20);
            $table->String('matricule','250')->unique();
            $table->String('nom');
            $table->String('prenom');
            $table->String('mobile',10);
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
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employe');
    }
    public function boot()
    {
        // Fix for MySQL < 5.7.7 and MariaDB < 10.2.2
        Schema::defaultStringLength(191); //Update defaultStringLength
    }
}