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
        Schema::create('degreeinfo', function (Blueprint $table) {
            $table->comment('');
            $table->integer('degreeID', true);
            $table->integer('instituteID');
            $table->integer('programID');
            $table->string('degreeName', 100);
            $table->integer('degreeSlots');
            $table->integer('degreeConsumedSlots')->default(0);
            $table->integer('degreeDuration');
            $table->string('degreeDurationFrom', 50);
            $table->string('degreeDurationTo', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('degreeinfo');
    }
};
