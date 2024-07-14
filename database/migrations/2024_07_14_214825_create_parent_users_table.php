<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('parent_users', function (Blueprint $table) {
            $table->id();
            $table->integer('Nbr_children');
            $table->ForeignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('parent_users', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // Supprime la contrainte de clé étrangère
            $table->dropColumn('user_id'); // Supprime la colonne
        });
    }
};
