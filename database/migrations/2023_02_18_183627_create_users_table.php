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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->comment('');
            $table->string('userInstitute', 100);
            $table->integer('instituteID');
            $table->string('userCNIC', 100);
            $table->string('userDesignation', 100);
            $table->string('userMobile', 100);
            $table->string('userOfficeNo', 100)->nullable();
            $table->string('userRole', 100);
            $table->string('userStatus', 50);
            $table->string('userDate', 100);
            $table->string('userLastModified', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
