<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoitureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voiture', function (Blueprint $table) {

            $table->increments('id_voiture',50);
            $table->String('matricule',50);
            $table->String('marque',50);
            $table->String('numero_assurance',50);
            $table->String('modele',50);
            $table->String('couleur',50);
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
        Schema::dropIfExists('voiture');
    }
}
