<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('grades', function (Blueprint $table) {
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')
                ->references('id')
                ->on('courses')
                ->onDelete('cascade');
            $table->dropColumn(['course_name', 'school_year', 'quarter', 'ec', 'started', 'passed_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('grades', function (Blueprint $table) {
            $table->dropForeign('grades_course_id_foreign');
            $table->dropColumn(["course_id"]);
// readd removed items
            $table->string("course_name");
            $table->date("passed_at")->nullable();
            $table->decimal("school_year", $precision = 1, $scale = 0);
            $table->decimal("quarter", $precision = 1, $scale = 0); // a year has 4 quarter, 0th is put in extra
            $table->decimal("ec", $precision = 3, $scale = 1);
            $table->boolean("started");
        });
    }
}
