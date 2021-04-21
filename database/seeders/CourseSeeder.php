<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // first quarter
        DB::table('courses')->insert([
            'CU_code' => "CU75001V2",
            'name' => "Opleidings- en beroepsorientatie",
            'school_year' => 1,
            'quarter' => 1,
            'credits' => 2.5,
            'started' => true,
            'updated_at' => now(),
            'created_at' => now(),
            'passed_at' => now()
        ]);
        DB::table('courses')->insert([
            'CU_code' => "CU75002V1",
            'name' => "Computer Science Basics",
            'school_year' => 1,
            'quarter' => 1,
            'credits' => 7.5,
            'started' => true,
            'updated_at' => now(),
            'created_at' => now(),
            'passed_at' => now()
        ]);
        DB::table('courses')->insert([
            'CU_code' => "CU75003V1",
            'name' => "Programming basics",
            'school_year' => 1,
            'quarter' => 1,
            'credits' => 5,
            'started' => true,
            'updated_at' => now(),
            'created_at' => now(),
            'passed_at' => now()
        ]);
        // second quarter
        DB::table('courses')->insert([
            'CU_code' => "CU75005V3",
            'name' => "Professionals skills 1",
            'school_year' => 1,
            'quarter' => 2,
            'credits' => 2.5,
            'started' => true,
            'updated_at' => now(),
            'created_at' => now(),
            'passed_at' => now()
        ]);
        DB::table('courses')->insert([
            'CU_code' => "CU75004V1",
            'name' => "Object-oriented programming",
            'school_year' => 1,
            'quarter' => 2,
            'credits' => 10,
            'started' => true,
            'updated_at' => now(),
            'created_at' => now(),
            'passed_at' => now()
        ]);
        // third quarter
        DB::table('courses')->insert([
            'CU_code' => "CU75006V2",
            'name' => "Professionele skills 2",
            'school_year' => 1,
            'quarter' => 3,
            'credits' => 2.5,
            'started' => true,
            'updated_at' => now(),
            'created_at' => now()
        ]);
        DB::table('courses')->insert([
            'CU_code' => "CU75007V2",
            'name' => "Professionele werkplek",
            'school_year' => 1,
            'quarter' => 3,
            'credits' => 2.5,
            'started' => true,
            'updated_at' => now(),
            'created_at' => now()
        ]);
        DB::table('courses')->insert([
            'CU_code' => "CU75008V1",
            'name' => "Framework development 1",
            'school_year' => 1,
            'quarter' => 3,
            'credits' => 5,
            'started' => true,
            'updated_at' => now(),
            'created_at' => now()
        ]);
        DB::table('courses')->insert([
            'CU_code' => "CU75009V2",
            'name' => "Framework project 1",
            'school_year' => 1,
            'quarter' => 3,
            'credits' => 5,
            'started' => true,
            'updated_at' => now(),
            'created_at' => now()
        ]);
        // fourth quarter
        DB::table('courses')->insert([
            'CU_code' => "CU75010V2",
            'name' => "Professionele skills 3",
            'school_year' => 1,
            'quarter' => 4,
            'credits' => 2.5,
            'started' => false,
            'updated_at' => now(),
            'created_at' => now()
        ]);
        DB::table('courses')->insert([
            'CU_code' => "CU75011V2",
            'name' => "Framework development 2",
            'school_year' => 1,
            'quarter' => 4,
            'credits' => 5,
            'started' => false,
            'updated_at' => now(),
            'created_at' => now()
        ]);
        DB::table('courses')->insert([
            'CU_code' => "CU75012V3",
            'name' => "Framework project 2",
            'school_year' => 1,
            'quarter' => 4,
            'credits' => 5,
            'started' => false,
            'updated_at' => now(),
            'created_at' => now()
        ]);
        // other
        DB::table('courses')->insert([
            'CU_code' => "CU20096V3",
            'name' => "IT personality 1",
            'school_year' => 1,
            'quarter' => 0,
            'credits' => 2.5,
            'started' => true,
            'updated_at' => now(),
            'created_at' => now()
        ]);
        DB::table('courses')->insert([
            'CU_code' => "CU22128V2",
            'name' => "HZ personality 1",
            'school_year' => 1,
            'quarter' => 0,
            'credits' => 2.5,
            'started' => false,
            'updated_at' => now(),
            'created_at' => now()
        ]);
        //
        $this->call([
            GradeSeeder::class,
        ]);
    }
}
