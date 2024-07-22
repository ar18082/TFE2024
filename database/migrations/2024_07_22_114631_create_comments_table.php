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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_user_id')->constrained('parent_users')->onDelete('cascade');
            $table->foreignId('babysitter_user_id')->constrained('babysitter_users')->onDelete('cascade');
            $table->text('content');
            $table->integer('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign(['parent_user_id']);
            $table->dropForeign(['babysitter_user_id']);
        });

        Schema::dropIfExists('comments');
    }
};
