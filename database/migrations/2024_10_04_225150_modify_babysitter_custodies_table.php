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
        Schema::table('babysitter_custodies', function (Blueprint $table) {
            // Supprimer la contrainte de clé étrangère s'il y en a une pour babysitter_id
            $table->dropForeign(['babysitter_user_id']);
            // Supprimer la colonne babysitter_id
            $table->dropColumn('babysitter_user_id');

            // Ajouter la colonne user_id et définir la clé étrangère vers la table users
            $table->unsignedBigInteger('user_id')->nullable()->after('id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
            // Supprimer la clé étrangère et la colonne user_id
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');

            // Ajouter à nouveau la colonne babysitter_id
            $table->unsignedBigInteger('babysitter_user_id')->nullable()->after('id');
            $table->foreign('babysitter_user_id')->references('id')->on('babysitter_users')->onDelete('cascade');
        });
    }
};
