<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewColoumCliniquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cliniques', function (Blueprint $table) {
            //
           
            $table->string('nom');
            $table->string('email');
            $table->string('tel');
            $table->string('adresse');
            $table->string('login');
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cliniques', function (Blueprint $table) {
            //
        });
    }
}
