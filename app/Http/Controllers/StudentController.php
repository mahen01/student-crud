<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
public function index() {
$students = Student::all();
    return view("students.index", compact('students'));
}

public function create() {
    return view("students.add");
}

public function store(Request $request){
    $student = new Student();
    $student->name = $request->name;
    $student->address = $request->address;
    $student->email = $request->email;
    $student->save();
    return redirect("/students")->with('status', "Badu Added");

// dd($request);
}

public function edit($id) {
    $student = Student::find($id);
    return view("students.edit", compact('student'));
    // dd($id);
}

public function update(Request $request, $id) {
    $student = Student::find($id);
    $student->name = $request->name;
    $student->address = $request->address;
    $student->email = $request->email;
    $student->save();
    return redirect("/students")->with('status', "Badu Updated");
}

public function delete($id) {
    $student = Student::find($id);
    $student->delete();
    return redirect("/students")->with('status', "Badu Deleted");
}
}
