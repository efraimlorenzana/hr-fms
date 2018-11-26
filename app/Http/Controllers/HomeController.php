<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Record;
use App\Employee;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    function dashboard() {
        $employees = Employee::all()->count();
        $records = Record::all()->count();
        $users = User::all()->count();

        return View('dashboard', compact('employees', 'records', 'users'));
    }
}
