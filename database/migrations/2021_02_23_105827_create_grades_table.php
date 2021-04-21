<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("course_name");
            $table->string("test_name");
            $table->decimal("lowest_passing_grade", $precision = 3, $scale = 1)->default(5.5); // Lowest grade to pass so average calculations can be applied
            $table->decimal("best_grade", $precision = 3, $scale = 1)->nullable();
            $table->date("passed_at")->nullable(); // Date that the grade was larger than or equal to the lowest passing grade
            $table->decimal("school_year", $precision = 1, $scale = 0);
            $table->decimal("quarter", $precision = 1, $scale = 0); // a year has 4 quarter, 0th is put in extra
            $table->decimal("ec", $precision = 3, $scale = 1);
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
        Schema::dropIfExists('grades');
    }
}
