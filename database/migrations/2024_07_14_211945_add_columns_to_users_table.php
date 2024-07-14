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
        Schema::table('users', function (Blueprint $table) {
            $table->string('fistname')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->string('addressStreet')->nullable();
            $table->string('addressNumber')->nullable();
            $table->boolean('roleAdmin')->default(false);
            $table->boolean('roleSuperAdmin')->default(false);
            $table->boolean('roleParent')->default(false);
            $table->boolean('roleBabySitter')->default(false);
            $table->integer('unsucessefulAttempt')->default(0);
            $table->boolean('banned')->default(false);
            $table->boolean('inscriptConf')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'fistname',
                'phoneNumber',
                'addressStreet',
                'addressNumber',
                'roleAdmin',
                'roleSuperAdmin',
                'roleParent',
                'roleBabySitter',
                'unsucessefulAttempt',
                'banned',
                'inscriptConf'
            ]);
        });
    }
};
