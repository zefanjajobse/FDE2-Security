<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // first quarter
        DB::table('grades')->insert([
            'course_id' => DB::table('courses')->where('CU_code', 'CU75001V2')->first()->id,
            'test_name' => "Assassment dossier",
            'best_grade' => 6.2,
        ]);
        DB::table('grades')->insert([
            'course_id' => DB::table('courses')->where('CU_code', 'CU75002V1')->first()->id,
            'test_name' => "Geschreven examen",
            'best_grade' => 8,
        ]);
        DB::table('grades')->insert([
            'course_id' => DB::table('courses')->where('CU_code', 'CU75003V1')->first()->id,
            'test_name' => "Case study examen",
            'best_grade' => 10,
        ]);
        // second quarter
        DB::table('grades')->insert([
            'course_id' => DB::table('courses')->where('CU_code', 'CU75004V1')->first()->id,
            'test_name' => "Casustoets",
            'best_grade' => 10,
        ]);
        DB::table('grades')->insert([
            'course_id' => DB::table('courses')->where('CU_code', 'CU75004V1')->first()->id,
            'test_name' => "groepopdracht",
            'best_grade' => 8,
        ]);
        DB::table('grades')->insert([
            'course_id' => DB::table('courses')->where('CU_code', 'CU75005V3')->first()->id,
            'test_name' => "Portfolio",
            'best_grade' => 8,
        ]);
        DB::table('grades')->insert([
            'course_id' => DB::table('courses')->where('CU_code', 'CU75005V3')->first()->id,
            'test_name' => "Taaltoets Nederlands",
            'best_grade' => 5.3,
        ]);
        // third quarter
        DB::table('grades')->insert([
            'course_id' => DB::table('courses')->where('CU_code', 'CU75006V2')->first()->id,
            'test_name' => "Portfolio examen",
        ]);
        DB::table('grades')->insert([
            'course_id' => DB::table('courses')->where('CU_code', 'CU75006V2')->first()->id,
            'test_name' => "Portfolio examen",
        ]);

        DB::table('grades')->insert([
            'course_id' => DB::table('courses')->where('CU_code', 'CU75007V2')->first()->id,
            'test_name' => "Assessment dossier",
        ]);

        DB::table('grades')->insert([
            'course_id' => DB::table('courses')->where('CU_code', 'CU75008V1')->first()->id,
            'test_name' => "Case study",
        ]);

        DB::table('grades')->insert([
            'course_id' => DB::table('courses')->where('CU_code', 'CU75009V2')->first()->id,
            'test_name' => "Portfolio examen",
        ]);
        DB::table('grades')->insert([
            'course_id' => DB::table('courses')->where('CU_code', 'CU75009V2')->first()->id,
            'test_name' => "Geschreven examen",
        ]);
        DB::table('grades')->insert([
            'course_id' => DB::table('courses')->where('CU_code', 'CU75009V2')->first()->id,
            'test_name' => "Geschreven examen",
        ]);
        // fourth quarter
        DB::table('grades')->insert([
            'course_id' => DB::table('courses')->where('CU_code', 'CU75010V2')->first()->id,
            'test_name' => "Portfolio examen",
        ]);
        DB::table('grades')->insert([
            'course_id' => DB::table('courses')->where('CU_code', 'CU75010V2')->first()->id,
            'test_name' => "Geschreven examen",
        ]);
        DB::table('grades')->insert([
            'course_id' => DB::table('courses')->where('CU_code', 'CU75010V2')->first()->id,
            'test_name' => "Geschreven examen",
        ]);

        DB::table('grades')->insert([
            'course_id' => DB::table('courses')->where('CU_code', 'CU75011V2')->first()->id,
            'test_name' => "Portfolio examen",
        ]);

        DB::table('grades')->insert([
            'course_id' => DB::table('courses')->where('CU_code', 'CU75012V3')->first()->id,
            'test_name' => "Portfolio examen",
        ]);

        // overig
        DB::table('grades')->insert([
            'course_id' => DB::table('courses')->where('CU_code', 'CU20096V3')->first()->id,
            'test_name' => "Portfolio examen",
        ]);

        DB::table('grades')->insert([
            'course_id' => DB::table('courses')->where('CU_code', 'CU22128V2')->first()->id,
            'test_name' => "Portfolio examen",
        ]);
    }
}
