<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndustrialistprojectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industrialistprojects', function (Blueprint $table) {
            $table->id();
            $table->string('Destination')->default('Industrialist');
            $table->Text('CompanyPersonalEmailID');
            $table->String('Titleoftheproject')->nullable();
            $table->String('Description');
            $table->String('ProjectID');
            
            $table->string('StudentID')->nullable();
            $table->string('LecturerID')->nullable();
            
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
        Schema::dropIfExists('industrialistprojects');
    }
}