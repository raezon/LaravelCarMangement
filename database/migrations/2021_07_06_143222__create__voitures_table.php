<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voitures', function (Blueprint $table) {

            $table->increments('id',20);
            $table->String('N_serie',17)->unique();
            $table->String('ancienne_immat');
            $table->String('nouvelle_immat');
            $table->String('numero_assurance');
            $table->enum('Energie',['ESS', 'DIESEL', 'GPLc']);
            $table->String('type');
            $table->String('marque');
            $table->String('modele');
            $table->String('couleur');
            $table->enum('Genre',['UTILITAIRE', 'TOURISTIQUE']);
            $table->String('nbr_plc');
            $table->String('nbr_chv');
            $table->String('tonnage');
            $table->Date('dmc');
            $table->enum('etat',['En Exploitation', 'A larrêt']);
            $table->enum('qualité',['Bon', 'Moyen', 'Mauvais']);
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
        Schema::dropIfExists('voitures');
    }
}
