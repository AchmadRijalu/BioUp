<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('photo_path')->nullable()->after('password');
            $table->enum('role',['admin','user'])->default('user')->after('photo_path');
            $table->enum('is_login', ['0', '1'])->default('0')->after('role');
            $table->enum('is_active', ['0', '1'])->default('1')->after('is_login');
            $table->integer('total_score')->default('0')->after('is_active');
            $table->dropColumn('remember_token');
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
            //
        });
    }
}
