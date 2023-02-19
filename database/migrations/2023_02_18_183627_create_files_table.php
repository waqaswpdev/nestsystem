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
        Schema::create('files', function (Blueprint $table) {
            $table->comment('');
            $table->integer('fileID', true);
            $table->string('notificationFilePath', 100);
            $table->string('minutesFilePath', 200);
            $table->string('slipsFilePath', 200);
            $table->string('invoiceFilePath', 200);
            $table->integer('instituteID');
            $table->string('instituteName', 100);
            $table->string('programYear', 50);
            $table->string('instituteDegree', 100);
            $table->string('Batch', 50);
            $table->string('Approved', 50)->default('0');
            $table->string('Status', 50);
            $table->string('Remarks', 200)->default('N/A');
            $table->string('noOfStudents', 50);
            $table->integer('userID');
            $table->string('userName', 50);
            $table->string('uploadTime', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
};
