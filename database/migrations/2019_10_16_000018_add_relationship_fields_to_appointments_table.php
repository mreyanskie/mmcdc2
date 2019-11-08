<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->unsignedInteger('patient_id');

            $table->foreign('patient_id', 'patient_fk_476584')->references('id')->on('patients');

            $table->unsignedInteger('employee_id')->nullable();

            $table->foreign('employee_id', 'employee_fk_476742')->references('id')->on('employees');

            $table->unsignedInteger('created_by_id')->nullable();

            $table->foreign('created_by_id', 'created_by_fk_572424')->references('id')->on('users');
        });
    }
}
