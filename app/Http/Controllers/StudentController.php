<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;


class StudentController extends Controller
{
    function index(){
        $s['students'] = Student::all();
        // return view('student.index',compact('students','admin'));
        // return view('student.index',['students'=>$students,]);
        return view('student.index',$s);
    }
    function create(){
        return view('student.create');
    }
    function store(Request $req){
        $rules = Validator::make($req->all(), [
            'name' => ['required', 'string', 'max:255'],
            'roll' => ['required', 'numeric'],
            'reg' => ['required', 'numeric'],
            'email' => ['required', 'email','unique:students,email'],
        ]);

        if ($rules->fails()) {
            return redirect()->back()->withErrors($rules)->withInput();
        }
        $insert = new Student();
        $insert->name = $req->name;
        $insert->roll = $req->roll;
        $insert->registration = $req->reg;
        $insert->email = $req->email;
        $insert->save();
        return redirect()->route('student.index')->with('success','Data Insert Successfully');
    }
    function edit($id){
        // $s['student'] = Student::find($id);
        $s['student'] = Student::findOrFail($id);
        // $s['student'] = Student::where('id',$id)->first();
        return view('student.edit',$s);
    }
    function update(Request $req, $id){
        $student = Student::findOrFail($id);
        $student->name = $req->name;
        $student->roll = $req->roll;
        $student->registration = $req->reg;
        $student->email = $req->email;
        // $student->updated_at = Carbon::now();
        $student->update();
        return redirect()->route('student.index');
    }
    function delete($id){
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->back();

    }
}
