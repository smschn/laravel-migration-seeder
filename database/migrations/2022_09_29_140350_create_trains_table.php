<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 30); // colonna con dato di tipo varchar.
            $table->string('departure_station', 60);
            $table->string('arrival_station', 60);
            $table->time('departure_time', 0); // colonna con dato di tipo TIME (hh-mm-ss).
            $table->time('arrival_time', 0);
            $table->string('train_code', 5);
            $table->unsignedTinyInteger('carriage_number'); // numero carrozze in formato TINYINT, UNSIGNED: quindi da 0 a 255.
            $table->boolean('on_schedule');	// colonna di tipo BOOLEANO per sapere se il treno è in orario (true) o no (false).
            $table->boolean('cancelled'); // colonna di tipo BOOLEANO per sapere se il treno è cancellato (true) o no (false).
            $table->timestamps(); // crea in automatico le altre due colonne che laravel creerebbe quando contatta il database (trattasi di: created_at e updated_at).
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}