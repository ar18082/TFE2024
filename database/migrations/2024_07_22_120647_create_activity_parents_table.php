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
        Schema::create('activity_parents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_user_id')->constrained('parent_users')->onDelete('cascade');
            $table->foreignId('activity_id')->constrained('activities')->onDelete('cascade');
            $table->integer('nbr_children');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('activity_parents', function (Blueprint $table) {
            $table->dropForeign(['parent_user_id']);
            $table->dropForeign(['activity_id']);
        });
        Schema::dropIfExists('activity_parents');
    }
};
