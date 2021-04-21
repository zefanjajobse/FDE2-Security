<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['CU_code', 'name', 'credits', 'passed_at', 'school_year', 'quarter', 'started', 'average'];

    public function grades(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Grade::class);
    }

    public function calculateAverage() {
        $total = 0;
        $array = [];
        $grades = $this->grades;
        $lowest_passing_grade = 0;
        foreach($grades as $key) {
            $total += $key->best_grade;
            $lowest_passing_grade = $key->lowest_passing_grade;
            array_push($array, $key["best_grade"]);
        }
        if($total/$grades->count() >= $lowest_passing_grade) {
            $this->average = $total/$grades->count();

            if(empty($this->passed_at) && $this->average >= $lowest_passing_grade) {
                $this->passed_at = now();
            }
        }
        $this->save();
        return $total/$grades->count();
    }

    public function setStarted($boolean) {
        $this->started($boolean);
        $this->save();
    }

    // $course = User::find(1);
    // $course->grades; // select * from grades where course_if = $course_id
}
