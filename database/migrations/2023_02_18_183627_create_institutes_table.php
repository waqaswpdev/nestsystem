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
        Schema::create('institutes', function (Blueprint $table) {
            $table->comment('');
            $table->integer('instituteID', true);
            $table->string('instituteName', 100);
            $table->string('instituteProvince', 50);
            $table->string('instituteCity', 50);
            $table->string('instituteAddress', 100);
            $table->integer('instituteSlots');
            $table->integer('instituteSlotsConsumed');
            $table->integer('programID');
            $table->integer('programID2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutes');
    }
};
