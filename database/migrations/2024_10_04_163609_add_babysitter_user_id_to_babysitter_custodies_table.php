<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBabysitterUserIdToBabysitterCustodiesTable extends Migration
{
    public function up()
    {
        Schema::table('babysitter_custodies', function (Blueprint $table) {
            $table->unsignedBigInteger('babysitter_user_id')->after('id');
            $table->foreign('babysitter_user_id')->references('id')->on('babysitter_users')->onDelete('cascade');
            $table->unsignedBigInteger('criteria_id')->after('babysitter_user_id');
            $table->foreign('criteria_id')->references('id')->on('custody_criterias')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('babysitter_custodies', function (Blueprint $table) {
            $table->dropForeign(['babysitter_user_id']);
            $table->dropColumn('babysitter_user_id');
            $table->dropForeign(['criteria_id']);
            $table->dropColumn('criteria_id');
        });
    }
}
