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
        Schema::create('programs', function (Blueprint $table) {
            $table->comment('');
            $table->integer('programID', true);
            $table->string('programName', 100);
            $table->integer('programTotalSlots');
            $table->string('programYear', 50);
            $table->integer('programConsumedSlots');
            $table->integer('programCarryForwardSlots');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programs');
    }
};
