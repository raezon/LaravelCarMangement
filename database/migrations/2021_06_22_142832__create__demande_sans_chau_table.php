<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeSansChauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DemandeSansChau', function (Blueprint $table) {
            $table->increments('id',20);
            $table->String('num_référence');
            $table->String('nom');
            $table->String('prenom');
            $table->String('grade');
            $table->String('direction_attache');
            $table->String('lieu_demplacement');
            $table->Date('date');
            $table->Time('heure_depart');
            $table->String('motif');
            $table->String('Immatriculation');
            $table->String('type');
            $table->String('marque');
            $table->String('état_Véhicule');
            $table->Date('date_remise_véhicule');
            $table->String('service_demandeur');
            $table->String('sructure_donatrice');
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
        Schema::dropIfExists('DemandeSansChau');
    }
}