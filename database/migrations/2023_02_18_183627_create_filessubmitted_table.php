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
        Schema::create('filessubmitted', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->integer('instituteID');
            $table->string('degreeName', 50);
            $table->string('degreeYear', 50);
            $table->string('status', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filessubmitted');
    }
};
