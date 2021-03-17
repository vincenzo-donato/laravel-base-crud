<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dresses', function (Blueprint $table) {
            $table->id();
            $table->string('nome',50);
            $table->string('marca',50);
            $table->string('taglia',5);
            $table->float('prezzo',6,2);
            $table->text('descrizione');
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
        Schema::dropIfExists('dresses');
    }
}
