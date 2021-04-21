<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $fillable = ['course_id', 'test_name', 'lowest_passing_grade', 'best_grade'];

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function addResult($grade, $request) {
        // check if bigger
        $course = $this->course;
        if($this->best_grade < $grade) {
            $this->best_grade = $grade;
            $course->setStarted(true); // if started, should be 1/true
        }
        // calculate average if higher than lowest passing grade
        if ($grade >= $this->lowest_passing_grade) {
            $course->calculateAverage();
        }
        $this->save();
    }

    // $course->grade == gives all grades it can find for that user
}
