<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_employe')->nullable();
            $table->string('matricule')->nullable();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('fonction')->nullable();
            $table->string('grade')->nullable();
            $table->string('structure')->nullable();
            $table->string('pc')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees');
    }
}
