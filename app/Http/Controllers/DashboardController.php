<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function view() {
        $courses = Course::all();
        $sortedCourses = [];

        // currently gathered EC's
        $currentEcs = 0;
        // sort year
        for ($i = 1; $i <= 4; $i++) {
            $currentYear = [];

            // sort quarter
            for ($j = 0; $j <= 4; $j++) {

                // append to quarter
                $currentQuarter = $courses->filter(function ($value, $key) use ($j, $i) {
                    return $value["quarter"] == $j && $value["school_year"] == $i;
                });
                // remove empty quarters
                if (sizeof($currentQuarter) != 0) {
                    array_push($currentYear, $currentQuarter);

                    foreach ($currentQuarter as $course) {
                        // add EC's if passed
                        if ($course->passed_at) {
                            $currentEcs += $course->credits;
                        }
                    }
                }
            }
            // remove empty years
            if (sizeof($currentYear) != 0) {
                array_push($sortedCourses, $currentYear);
            }
        }

        return view('dashboard', [
            "sortedCourses" => $sortedCourses,
            "currentEcs" => $currentEcs
            ]);
    }
}
