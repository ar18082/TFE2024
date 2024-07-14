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
        Schema::table('postal_code__localites', function (Blueprint $table) {
            $table->foreignId('city_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('postal_code_localites', function (Blueprint $table) {
            $table->dropForeign(['city_id']); // Supprime la contrainte de clé étrangère
            $table->dropColumn('city_id'); // Supprime la colonne
        });
    }
};
