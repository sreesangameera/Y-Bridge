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
<<<<<<< HEAD
            $table->String('Date')->nullable();
=======
            $table->String('Date')->unique()->nullable();
>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95
            $table->String('EName')->unique()->nullable();
            $table->String('Description')->nullable();
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
