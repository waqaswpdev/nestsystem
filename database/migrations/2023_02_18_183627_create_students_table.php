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
        Schema::create('students', function (Blueprint $table) {
            $table->comment('');
            $table->integer('studentID', true);
            $table->string('studentGender', 50);
            $table->string('studentName', 50);
            $table->string('studentFatherName', 50);
            $table->string('studentCNIC', 50);
            $table->string('studentMobile', 50);
            $table->string('studentContact', 50);
            $table->string('studentEmail', 50);
            $table->string('Domicile', 50);
            $table->string('domicileProvince', 100);
            $table->string('maritalStatus', 50);
            $table->string('Religion', 50);
            $table->date('DOB');
            $table->string('fatherStatus', 50);
            $table->string('admissionFee', 50);
            $table->string('totalFee', 50);
            $table->string('studentDisable', 50);
            $table->string('studentDisability', 100);
            $table->string('studentIncome', 100);
            $table->string('Orphan', 50);
            $table->string('orphanType', 50);
            $table->string('divorcedParents', 50);
            $table->string('separatedParents', 50);
            $table->string('instituteID', 50);
            $table->string('instituteName', 50);
            $table->string('programID', 50);
            $table->string('programYear', 50);
            $table->string('degreeName', 50);
            $table->string('studentDiscipline', 50);
            $table->string('studentHostelite', 50);
            $table->string('tutionFee', 50);
            $table->string('amountDuration', 50);
            $table->string('studentAccountTitle', 100);
            $table->string('studentIBAN', 100);
            $table->string('studentBankName', 100);
            $table->string('validatedBy', 100);
            $table->string('sessionYear', 50);
            $table->string('sessionID', 100);
            $table->string('dataEntryOperator', 100);
            $table->integer('studentAdded')->default(1);
            $table->string('studentSubmitted', 50);
            $table->string('studentNotClear', 50);
            $table->string('studentNotClearReason', 200);
            $table->string('studentClear', 50);
            $table->string('submittedToNEST', 50)->default('0');
            $table->string('approvedByNEST', 50)->default('0');
            $table->string('docsApproved', 50)->default('0');
            $table->string('rejectedByNEST', 50)->default('0');
            $table->string('rejectedByNESTReason', 200);
            $table->string('NESTApprovedDate', 50);
            $table->integer('Batch');
            $table->string('paymentDone', 50);
            $table->string('Beneficiary', 50);
            $table->string('1stPONumber', 50);
            $table->string('1stPOAmount', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
