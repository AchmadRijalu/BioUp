<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevelSoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bio12_level_soals', function (Blueprint $table) {
            $table->id("levelsoalID");
            $table->foreignId("levelID")->constrained("bio12_levels", 'levelID')->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId("soalID")->constrained("bio12_soals", 'soalID')->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('level_soals');
    }
}
