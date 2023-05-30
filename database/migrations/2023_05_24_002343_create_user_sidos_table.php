<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_sidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('who_create')->nullable();
            $table->dateTime('data_create')->nullable();
            $table->string('who_update')->nullable();
            $table->dateTime('data_update')->nullable();

            $table->string('gender')->nullable();
            $table->enum('gender', ['M', 'F'])->nullable();

            $table->date('birth')->nullable();            
            $table->int('id_course_on_college')->nullable();
            $table->string('password');
            $table->string('cod_postal')->nullable();
            $table->string('num_address')->nullable();
            $table->string('street_address')->nullable();
            $table->string('complement_address')->nullable();
            $table->string('district')->nullable();
            $table->string('state')->nullable();
            $table->string('cidade')->nullable();
            $table->string('email')->unique();
            $table->string('phone_number')->nullable();
            $table->string('name')->nullable();
            $table->string('cpf')->unique();
            $table->int('functions')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_sidos');
    }
};
