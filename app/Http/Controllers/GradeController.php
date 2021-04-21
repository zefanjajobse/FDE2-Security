<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $course = Course::find($request["course"]);
        return view('grades.create', ["course" => $course]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Grade::create($this->validateGrade($request));
        return redirect(route('courses.edit', $request["course_id"]))->with('status', 'Cijfer toegevoegd!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade)
    {
        //
        return view('grades.edit', ['grade' => $grade]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grade $grade)
    {
        //
        $result = $this->validateGrade($request);
        $grade->addResult($result["best_grade"]);
        unset($result["best_grade"]);
        $grade->update($result);
        return redirect(route('courses.edit', $request["course_id"]))->with('status', 'Cijfer bijgewerkt!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
        //
        $grade->delete();
        return redirect(route('courses.edit', $grade["course_id"]))->with('status', 'Cijfer verwijderd!');
    }

    private function validateGrade(Request $request) {
        return $request->validate([    // db restrictions:
            'course_id' => ['required', 'integer'],
           'test_name' => ['required', 'string', 'min:8', 'max:255'], // str
            'lowest_passing_grade' => ['nullable', 'numeric', 'min:0', 'max:10'], // int - 0 - 99 -- 5.5 == default
           'best_grade' => ['nullable', 'numeric', 'min:0', 'max:10'], // int - 0 - 10
        ]);
    }
}
