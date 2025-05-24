<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('pseudo');
            $table->date('date_of_birth');
            $table->string('sex');
            $table->string('email');
            $table->string('game_type');
            $table->string('protection_type');
            $table->integer('magazine_count');
            $table->date('game_date');
            $table->time('game_time');
            $table->integer('game_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations'); // Supprime la table si elle existe
    }
};