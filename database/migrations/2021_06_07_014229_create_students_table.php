<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            // $table->foreignId('parent_id');
            $table->id();
            $table->string('name')->unique();
            $table->integer('age');
            $table->string('class', 3)->nulllable();
            $table->text('address');
            $table->enum('gender', ['P', 'W']);
            $table->enum('religion', ['Islam', 'Keristen', 'Katolik', 'Hindu', 'Ateis'])->default('islam');
            $table->boolean('status')->default(true);
            $table->timestamps();
            // $table->integer('no_absen');
            // $table->unique('email');
            // Updating Column Attributes
            // Renaming Columns
        });
        // Schema::table('students', function (Blueprint $table) {
        //     $table->renameColumn('age', 'umur');
        // });

        // Schema::rename('students', 'gagi');
        // Schema::update('students', function (Blueprint $table) {
        //     $table->renameColumn('name', 'nama');
        // });

        // Schema::update('students', function (Blueprint $table){
        //     $table->string('name', 16)->change(20);
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
        // Schema::drop('students');

    }
}
