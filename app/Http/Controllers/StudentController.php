<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $term = $request->search_term;
        if ($term) {
            $students = Student::where("name", "LIKE", "%$term%")->get();
        } else {
            $students = Student::all();
        }
        return view('students.index', compact('students', "term"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        //View Form
        return view("students.create",);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'name' => 'string|max:255|required',
            'surname' => 'string|max:255|required',
        ]);

        $new_student = new Student();
        $new_student->name = $request->name;
        $new_student->surname = $request->surname;
        $new_student->save();
        return to_route("students.index")->with('type', 'create')->with('message', 'Studente creato con successo')->with('alert', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)

    {
        //$data = $request->all();

        $student->name = $request->name;
        $student->surname = $request->surname;
        $student->save();
        return to_route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Student::destroy($id);

        return to_route('students.index')->with('type', 'delete')->with('message', 'Studente cancellato con successo')->with('alert', 'success');
    }
}
