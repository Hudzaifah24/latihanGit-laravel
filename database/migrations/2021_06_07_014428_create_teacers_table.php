<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

class CreateTeacersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->text('address');
            $table->enum('gender', ['P', 'W']);
            $table->enum('religion', ['Islam', 'Keristen', 'Katolik', 'Hindu', 'Ateis'])->default('islam');
            $table->string('phone');
            $table->string('email')->unique();
            $table->date('birth_date');
            $table->text('description');
            $table->timestamps();
        });

        // Schema::rename('teacers', 'teachers');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacers');
    }
}
