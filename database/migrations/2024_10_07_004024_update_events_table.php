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
        Schema::table('events', function (Blueprint $table) {
            $table->dropForeign(['parent_user_id']);
            $table->dropForeign(['babysitter_user_id']);
            // Supprimer les colonnes existantes
            $table->dropColumn('parent_user_id');
            $table->dropColumn('babysitter_user_id');

            // Ajouter la nouvelle colonne user_id
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // Ajouter les colonnes time_start et time_end
            $table->dateTime('time_start')->nullable();
            $table->dateTime('time_end')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            // Restaurer les colonnes supprimées
            $table->unsignedBigInteger('parent_user_id')->nullable();
            $table->unsignedBigInteger('babysitter_user_id')->nullable();

            // Supprimer les colonnes ajoutées
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
            $table->dropColumn('time_start');
            $table->dropColumn('time_end');
        });
    }
};
