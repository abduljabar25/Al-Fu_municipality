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
    {        Schema::dropIfExists('forms');

        Schema::create('forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->date('BirthDate');
            $table->string('gender');
            $table->string('maritalStatus');

            $table->string('MotherName');
            $table->string('wifeName');
            $table->string('Birthplace');

            $table->string('ResidAddress');
            $table->string('NationalCard');
            $table->integer('numcard');

            $table->integer('Residcard');
            $table->date('Dateissue');
            $table->string('slides');
            $table->integer('phonenum');

            $table->string('filepath');
            $table->string('status')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
