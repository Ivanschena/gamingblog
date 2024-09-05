<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //! php artisan make:migration create_console_game_table 
    //! (singolare ed ordine alfabetico dei modelli da mixare)
    public function up(): void
    {
        Schema::create('console_game', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('console_id');//!riferisci simmetricamente
            $table->foreign('console_id')->references('id')->on('consoles');
            $table->unsignedBigInteger('game_id');//!riferisci simmetricamente
            $table->foreign('game_id')->references('id')->on('games');
            //! $table->timestamps(); puoi eliminarlo in quanto non occorre
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('console_game');
    }
};
