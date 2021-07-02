<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeAvecChauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DemandeAvecChau', function (Blueprint $table)
        {
            $table->increments('id',20);
            $table->String('num_référence');
            $table->String('nom');
            $table->String('prenom');
            $table->String('grade');	
            $table->String('lieu_deplacement');
            $table->Date('date');
            $table->Date('date_depart');
            $table->Time('heure_depart');
            $table->String('motif');
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
        Schema::dropIfExists('DemandeAvecChau');
    }
}