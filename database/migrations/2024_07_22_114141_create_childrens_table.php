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
        Schema::create('childrens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parentUser_id')->constrained('users');
            $table->foreignId('secondParentUser_id')->nullable()->constrained('users');
            $table->string('name', 50);
            $table->string('firstname', 50);
            $table->date('Date_of_birth');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('childrens', function (Blueprint $table) {
            $table->dropForeign(['parentUser_id']);
            $table->dropColumn('parentUser_id');
            $table->dropForeign(['secondParentUser_id']);
            $table->dropColumn('secondParentUser_id');
        });
        Schema::dropIfExists('childrens');

    }
};
