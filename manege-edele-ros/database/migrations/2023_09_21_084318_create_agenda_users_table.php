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
        Schema::create('agenda_users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('agenda_id');
            $table->foreignId('user_id');
            
            // Voeg een foreign key-constraint toe en stel onDelete in op 'cascade'
            $table->foreign('agenda_id')->references('id')->on('agendas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agenda_users');
    }
};
