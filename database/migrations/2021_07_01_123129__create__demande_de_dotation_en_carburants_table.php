<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeDeDotationEnCarburantsTable extends Migration
{

       /**
     * Run the migrations.
     *
     * @return void     */
    public function up()
    {
        Schema::create('demande_de_dotation_en_carburants', function (Blueprint $table)
        {
 /********date de creation de la demande *************************/
            $table->increments('id',20);
            $table->String('num_dot');
            $table->String('division');
            $table->String('direction');
            $table->String('réf');
            $table->enum('lieu',['Alger']);
            $table->date('date_jour');

 /************** renseignement du Demande******************** */ 

            $table->date('date_etab_dmnd');
            $table->date('date_dernier_app');
            $table->String('km_par');
            $table->String('index');
            $table->date('date');
          
  /************informations bénéficiaire*********** *****************/
            $table->String('nbr_bon');
            $table->String('nom');
            $table->String('prenom');
            $table->String('fonction');
            $table->String("strctr_attache");

 /************informations véhicule*********** *****************/
           $table->enum('type_véhicule',['Véhicule De Service "Essence"', 
                                         'Véhicule De Service "Diesel"',
                                         'Véhicule De Fonction "Essence"',
                                         'Véhicule De Fonction "Diesel"']);
           $table->String('immatriculation');
/********************accuse de receptionn************************** */
       
            
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
        Schema::dropIfExists('demande_de_dotation_en_carburants');
    }
    public function boot()
    {
        // Fix for MySQL < 5.7.7 and MariaDB < 10.2.2
        Schema::defaultStringLength(191); //Update defaultStringLength
    }
}