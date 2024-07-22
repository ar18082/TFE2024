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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('babysitter_user_id')->constrained('babysitter_users')->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->text('price');
            $table->date('date_activity');
            $table->date('visible_start');
            $table->date('visible_end');
            $table->integer('nbr_children');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('activities', function (Blueprint $table) {
            $table->dropForeign(['babysitter_user_id']);
        });
        Schema::dropIfExists('activities');
    }
};
