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
            $table->string('firstName');
            $table->string('surname');
            $table->string('dob');
            $table->string('fatherName');
            $table->string('motherName');
            $table->string('email')->unique();
            $table->string('position');
            $table->string('tel');
            $table->string('telOfSpouse')->nullable();
            $table->string('nameOfTheBankUsed');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('cell');
            $table->string('sector');
            $table->string('district');
            $table->string('province');
            $table->string('country');
            $table->string('residenceVillage');
            $table->string('residenceCell');
            $table->string('residenceSector');
            $table->string('residenceDistrict');
            $table->string('residenceProvince');
            $table->string('martialStatus');
            $table->string('dependants')->nullable();
            $table->string('university')->nullable();
            $table->string('field')->nullable();
            $table->string('secondary');
            $table->string('option');
            $table->string('primary');
            $table->string('training');
            $table->string('languages');
            $table->string('computerskills');
            $table->string('drivingskills')->nullable();
            $table->string('heritierFirstName');
            $table->string('heritierLastName');
            $table->string('heritierAddress');
            $table->string('heritierRelation');
            $table->string('employerName')->nullable();
            $table->string('employerAddress')->nullable();
            $table->string('employerTel')->nullable();
            $table->string('employerPosition')->nullable();
            $table->string('reason')->nullable();
            $table->string('prohibitedDrugs');
            $table->string('disabilities');
            $table->string('contactFirstName');
            $table->string('contactLastName');
            $table->string('contactAddress');
            $table->string('contactRelation');
            $table->string('contactTel');
            $table->string('contactEmail');
            $table->string('staffName')->nullable();
            $table->string('staffRelationship')->nullable();
            $table->string('otherStaffName')->nullable();
            $table->string('otherStaffRelationship')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
