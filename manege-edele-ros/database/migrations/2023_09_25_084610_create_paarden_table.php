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
        Schema::create('paarden', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->Date('geboortedatum');
            $table->enum('geslacht',['Man','Vrouw']);
            $table->enum('tamheid',['tam','gemiddeld','wild'])->default('gemiddeld');
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
        Schema::dropIfExists('paarden');
    }
};
