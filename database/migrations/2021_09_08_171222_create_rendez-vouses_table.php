<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRendezVousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendez-vouses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('passe_sanitaires_id');
            $table->date("date");
            $table->time("heure");
            $table->longText("observation");
    
            $table->foreign('passe_sanitaires_id')->references('id')->on('passe_sanitaires');
         
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
        Schema::dropIfExists('rendez-vouses');
    }
}
