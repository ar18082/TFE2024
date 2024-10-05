<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('babysitter_custodies', function (Blueprint $table) {
            // Supprimer la contrainte de clé étrangère
            $table->dropForeign(['user_id']);
            // Ensuite, supprimer la colonne
            $table->dropColumn('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('babysitter_custodies', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            // Restauration de la clé étrangère si nécessaire
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
};
