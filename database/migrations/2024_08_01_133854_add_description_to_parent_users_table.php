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
        Schema::table('parent_users', function (Blueprint $table) {
            $table->text('description')->default('je suis un parent')->after('Nbr_children');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parent_users', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }
};
