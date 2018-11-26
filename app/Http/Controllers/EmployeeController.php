<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Position;
use App\File;
use App\Record;
use Session;

class EmployeeController extends Controller
{
    function index() {
        $employee = Employee::first();
        $files = File::all();
        
        return view('Employee.index', compact('employee', 'files'));
    }

    function new() {
        $positions = Position::all();

        return View('Employee.new', compact('positions'));
    }

    function enroll(Request $request) {
        $employee = new Employee;
        $employee->Fullname = $request->Fullname;
        $employee->position_id = $request->position_id;
        $employee->Birthday = $request->Birthday;
        $employee->gender = $request->gender;
        if($request->hasFile('employee_image')){
			$extension = $request->employee_image->getClientOriginalExtension();
			$request->employee_image->move('employee_data/picture/', "$employee->Fullname.$extension");
			$employee->image = "employee_data/picture/$employee->Fullname.$extension";
        }
        $employee->save();

        Session::flash('entry', 'success');

        return redirect('/home/employee/new');
    }

    function search(Request $request) {
        $employees = Employee::where('Fullname','LIKE', '%'.$request->term.'%')->pluck('Fullname')->toArray();

        return $employees;
    }

    function searchResult(Request $request) {
        $employee = Employee::where('Fullname', $request->search_name)->first();
        $files = File::all();
        
        return view('Employee.index', compact('employee', 'files'));
    }

    function records(Request $request) {
        $file_id = $request->file_id;
        $emp_id = $request->emp_id;

        $employee = Employee::find($emp_id);


        if(!$employee->files->contains($file_id)) {
            $employee->files()->attach($file_id);
        }

        $files = $employee->files;

        if($files->find($file_id)) {
            $records = Record::where('employee_file_id', $employee->files->find($file_id)->pivot->id)->get();
        } else {
            $records = "";
        }
        
        return View('File.show', compact('records', 'file_id', 'emp_id'));
    }
}
