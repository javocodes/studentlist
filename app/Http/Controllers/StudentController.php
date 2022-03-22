<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Auth;

class StudentController extends Controller
{
    //

    public function Index()
    {
        return view('home');
    }

    public function Create()
    {
        return view('create-student');
    }

    public function Save(Request $request)
    {
        $request->validate([
            'fname'=>'required|string|max:255',
            'lname'=>'required|string|max:255',
            'address'=>'required|string|max:400',
            'phone_no',
            'parish'=>'required|string',
            'email'=>'required|email',
            'cohort'=>'required|integer'
        ]);

        $student = new Student;
        $student->fname = $request->fname;
        $student->lname = $request->lname;
        $student->address = $request->address;
        $student->phone_no = $request->phone_no;
        $student->parish = $request->parish;
        $student->email = $request->email;
        $student->cohort = $request->cohort;
        $student->save();

        return redirect()->back()->with('message', 'New Student Created');


        // return "Record Sucessfully Saved";
    }

    public function ViewStudent()
    {
        $students= Student::all();
        return view('view-student', ['students' => $students]);
    }

    public function EditStudent($id)
    {
        $student = Student::find($id);
        // dd($student);
        if(Auth::check())
        {
            return view('edit-student', ['student'=>$student]);
        }
        return redirect()->route('student.loginview');

    }

    public function UpdateStudent(Request $request, $id)
    {
        $request->validate([
            'fname'=>'required|string|max:255',
            'lname'=>'required|string|max:255',
            'address'=>'required|string|max:400',
            'phone_no',
            'parish'=>'required|string',
            'email'=>'required|email',
            'cohort'=>'required|integer'
        ]);
        // dd($request);
        $student = new Student;
        $data = $student->find($request->id);
        if ($data) {
            $data->fname = $request->fname;
            $data->lname = $request->lname;
            $data->address = $request->address;
            $data->phone_no = $request->phone_no;
            $data->parish = $request->parish;
            $data->email = $request->email;
            $data->cohort = $request->cohort;
            $data->save();
        }

        return back()->with('succes', 'Updated Completed');
    }
}
