<?php

namespace Adrija\StudentCrud\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Adrija\StudentCrud\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->paginate(10);
        return view('student-crud::index', compact('students'));
    }

    public function create()
    {
        $errors = session('errors') ?: new \Illuminate\Support\MessageBag;
        return view('student-crud::create', compact('errors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:students',
            'phone' => 'nullable|string|max:20',
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Student created!');
    }

    public function show(Student $student) 
    {
        return redirect()->route('students.index');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('student-crud::edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $id,
            'phone' => 'nullable|string|max:20',
        ]);

        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Student updated!');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted!');
    }
}