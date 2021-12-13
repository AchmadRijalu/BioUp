<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bio12_user_levels', function (Blueprint $table) {
            $table->id();
            $table->foreignId("level_id")->constrained("bio12_levels", 'id')->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId("character_id")->constrained("bio12_characters", 'id')->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId("user_id")->constrained("users", 'id')->onDelete("cascade")->onUpdate("cascade");
            $table->integer("score");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_levels');
    }
}
