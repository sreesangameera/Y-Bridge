<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentSocietiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_societies', function (Blueprint $table) {
            $table->id();
            $table->String('Link')->unique()->nullable();
            $table->String('Date')->nullable();
            $table->String('EName')->unique()->nullable();
            $table->String('Description',5000)->nullable();
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
        Schema::dropIfExists('student_societies');
    }
}
