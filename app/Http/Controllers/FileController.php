<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\File;
use App\Employee;
use App\Record;
use Illuminate\Support\Facades\Storage;
use Session;

class FileController extends Controller
{
    function upload(Request $request) {
        $today = Carbon::now()->toDateTimeString();
        $filename_prefix = str_replace('/', '', $today);
        $filename_prefix = str_replace(':', '', $filename_prefix);
        $filename_prefix = str_replace(' ', '', $filename_prefix);

        $files = File::all();

        $employee = Employee::find($request->emp_id);
        $file = $files->find($request->file_id);
        
        $filename = $request->file->getClientOriginalName();

        Session::flash('upload', "success");
        Session::flash('message', "$filename successfully Added to $file->file_category Folder");
        
        $record = new Record;
        $record->file_name = $filename;

        $filename = $filename_prefix.'_'.$employee->id.'_'.$filename;

        $record->employee_file_id = $employee->files->find($request->file_id)->pivot->id;
        if($request->hasFile('file')){
			// $extension = $request->files->getClientOriginalExtension();
            $request->file->move($file->path,$filename);
            
			$record->file_path = $file->path.'/'.$filename;
        }
        
        $record->save();
        
        return view('Employee.index', compact('employee', 'files'));
    }

    function confirm_delete(Request $request) {
        $record_to_delete = Record::find($request->id);

        $emp_file = DB::table('employee_file')->where('id', $record_to_delete->employee_file_id)->first();

        // $employee = Employee::find($emp_file->employee_id);
        // $files = File::all();
        // $record_to_delete->delete();

        return View('File.delete', compact('record_to_delete', 'emp_file'));
    }

    function delete($id) {
        $record_to_delete = Record::find($id);

        $emp_file = DB::table('employee_file')->where('id', $record_to_delete->employee_file_id)->first();

        $employee = Employee::find($emp_file->employee_id);
        $files = File::all();
        
        unlink($record_to_delete->file_path);
        $record_to_delete->delete();

        return View('Employee.index', compact('employee', 'files'));
    }

    function download(Request $request) {
        $record = Record::find($request->id);

        return response()->download($record->file_path);
    }

    function open(Request $request) {
        $record = Record::find($request->id);

        return response()->file($record->file_path);
    }
}
