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
            $table->id();
            $table->foreignId("level_id")->constrained("bio12_levels", 'id')->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId("soal_id")->constrained("bio12_soals", 'id')->onDelete("cascade")->onUpdate("cascade");
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
