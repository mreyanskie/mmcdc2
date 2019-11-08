<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');

            $table->string('last_name');

            $table->string('first_name');

            $table->string('contact')->nullable();

            $table->string('email')->unique();

            $table->string('gender');

            $table->longText('diagnosis')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
