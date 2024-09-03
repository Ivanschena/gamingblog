<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('consoles', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('description')->nullable();
            //!tecnica della creazione della colonna user_id numero intero senza segno
            $table->foreign('user_id')->references('id')->on('users');
            //!tecnica della connessione della chiave esterna user_id all'id riferito a users
        });
    }
    public function down(): void
    {
        Schema::table('consoles', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            //!prima tecnica della dissoluzione del vincolo della chiave esterna
            $table->dropColumn('user_id');
            //!dopo tecnica dell'eliminazione della colonna user_id
        });
    }
};
