<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicprojectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academicprojects', function (Blueprint $table) {
            $table->id();
            $table->String('Destination')->default('Lecturer');
            $table->String('LecturerID');
            $table->String('ProjectID');
            $table->String('Titleoftheproject')->nullable();
            $table->String('Description');
           
            $table->String('ProjectType');
            $table->string('StudentID')->nullable();
            $table->string('CompanyPersonalEmailID')->nullable();
            //$table->String('ProjectStatus');
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
        Schema::dropIfExists('academicprojects');
    }
}