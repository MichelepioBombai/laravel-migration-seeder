<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Trains', function (Blueprint $table) {
            $table->id();
            $table->text('azienda');
            $table->enum('stazione_di_partenza', ['Milano', 'Roma', 'Torino']);
            $table->enum('stazione_di_arrivo', ['Genova', 'Bologna', 'Lamezia']);
            $table->integer('orario_di_partenza');
            $table->integer('orario_di_arrivo');
            $table->integer('codice_treno')->unique();
            $table->integer('numero_carrozze');
            $table->string('in_orario');
            $table->string('cancellato');

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
        Schema::dropIfExists('Trains');
    }
};