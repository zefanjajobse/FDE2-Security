<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
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
    public function create()
    {
        //
        return view('courses.create');
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
        Course::create($this->validateCourse($request));
        return redirect(route('dashboard'))->with('status', 'Studie toegevoegd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
        return view('courses.edit', ['course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
        $course->update($this->validateCourse($request));

        return redirect(route('dashboard'))->with('status', 'Studie bijgewerkt!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
        $course->delete();
        return redirect(route('dashboard'))->with('status', 'Studie verwijderd!');
    }

    private function validateCourse(Request $request) {
        if($request->has('started')){ // change checkbox to boolean
            //Checkbox checked
            $request['started'] = true;
        }else{
            //Checkbox not checked
            $request['started'] = false;
        }
        return $request->validate([    // db restrictions:
            'CU_code' => ['required', 'string', 'min:3', 'max:255'], // str
            'name' => ['required', 'string', 'min:8', 'max:255'], // str
            'credits' => ['required', 'numeric', 'min:0', 'max:99'], // int - 0 - 99 -- numeric to allow .1 precision
            'passed_at' => ['nullable', 'date'], // date object
            'school_year' => ['required', 'integer', 'min:1', 'max:4'], // int - 1 - 4
            'quarter' => ['required', 'integer', 'min:0', 'max:4'], // int - 0 - 4 -- 0 == global
            'started' => ['required', 'boolean'], // boolean
        ]);
    }
}
