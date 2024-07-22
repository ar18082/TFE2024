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
        Schema::create('favorites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parentUser_id')->nullable()->constrained('parent_users');
            $table->foreignId('babysitterUser_id')->nullable()->constrained('babysitter_users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('favorites', function (Blueprint $table) {
            $table->dropForeign(['parentUser_id']);
            $table->dropForeign(['babysitterUser_id']);
        });
        Schema::dropIfExists('favorites');
    }
};
