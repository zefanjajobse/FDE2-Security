<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string("CU_code");
            $table->string("name");
            $table->decimal("credits", $precision = 3, $scale = 1); // ec replacement
            $table->date("passed_at")->nullable(); // Date that the grade was larger than or equal to the lowest passing grade
            $table->decimal("average", $precision = 3, $scale = 1)->nullable();
            // from grades table
            $table->decimal("school_year", $precision = 1, $scale = 0);
            $table->decimal("quarter", $precision = 1, $scale = 0); // a year has 4 quarter, 0th is put in extra
            $table->boolean("started");
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
        Schema::dropIfExists('courses');
    }
}
