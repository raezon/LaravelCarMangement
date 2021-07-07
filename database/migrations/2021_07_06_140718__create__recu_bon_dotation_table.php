<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecuBonDotationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('RecuBonDotation', function (Blueprint $table)
        {
 
            $table->increments('id',20);
            $table->String('réf');
            $table->enum('lieu',['Alger']);
            $table->date('date_jour');
 /************** reçu de bon de dotation en carburants******************** */ 
            $table->date('remis_le');           
            $table->String('num_dot');
            $table->String('du');
            $table->String('nbr_bon');
            $table->String('debut_ser');
            $table->String('fin_ser');   
            $table->String('nom');
            $table->String('prenom');
            $table->String('fonction');
            $table->String('structure_attache');
            $table->String('N_serie',17)->unique();
            
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
        Schema::dropIfExists('RecuBonDotation');
    }
    public function boot()
    {
        // Fix for MySQL < 5.7.7 and MariaDB < 10.2.2
        Schema::defaultStringLength(191); //Update defaultStringLength
    }
}