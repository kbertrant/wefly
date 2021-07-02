<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vols', function (Blueprint $table) {
            $table->id();
            $table->string('numeroVol')->unique();
            $table->date('jourDepart');
            $table->date('jourArrivee');
            $table->string('heureDepart');
            $table->string('heureArrivee');
            $table->integer('idAirportDepart');
            $table->integer('idAirportArrivee');
            $table->string('nbrePassagers');
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
        Schema::dropIfExists('vols');
    }
}
