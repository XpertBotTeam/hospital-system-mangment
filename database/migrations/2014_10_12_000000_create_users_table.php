<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('national_id')->nullable();
            $table->string('email');
            $table->string('password')->nullable();
            $table->string('address')->nullable();
            $table->string('picture')->nullable();
            $table->date('birth_date')->nullable();
            $table->enum('gender',['male','female'])->nullable();
            $table->bigInteger('phone')->nullable();
            $table->bigInteger('mobile')->nullable();
            $table->bigInteger('emergency')->nullable();
            $table->string('type');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('medical_degree')->nullable();
            $table->string('specialist')->nullable();
            $table->string('biography')->nullable();
            $table->string('educational_qualification')->nullable();
            $table->string('blood_group')->nullable();
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
}
