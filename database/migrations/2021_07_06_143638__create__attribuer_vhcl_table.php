<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttribuerVhclTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AttribuerVhcl', function (Blueprint $table) 
        {
            $table->increments('id',20);
            $table->String('N_serie',17)->unique();
            $table->String('structure');
            $table->String('entité');
            $table->String('direction');
            $table->String('ser_expl');
            $table->String('nom');
            $table->String('prenom');
            $table->String('fonction');
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
        Schema::dropIfExists('AttribuerVhcl');
    }
}
