<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demande', function (Blueprint $table) {

            
            $table->increments('numero_demande',20);	
            $table->String('mission');
            $table->String('distination');
            $table->Date('date_depart');
            $table->Date('date_retour');
            $table->Date('date_demande');

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
        Schema::dropIfExists('demande');
    }
}
