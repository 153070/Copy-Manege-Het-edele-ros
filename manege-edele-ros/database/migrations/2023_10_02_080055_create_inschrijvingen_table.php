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
        Schema::create('inschrijvingen', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->Date('leeftijd');
            $table->enum('geslacht',['Man','Vrouw']);
            $table->string('adres');
            $table->string('woonplaats');
            $table->string('email')->unique();
            $table->string('telefoonnummer');
            $table->enum('lespakket',['Pakket 1','Pakket 2','Pakket 3']);
            $table->string('opmerking')->nullable();
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
        Schema::dropIfExists('inschrijvingen');
    }
};
