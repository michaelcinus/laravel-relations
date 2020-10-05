<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {

        $emps = Employee::all();

        return view('home', compact('emps'));
    }

    public function show($id) {

        $emp = Employee::findOrFail($id);
        return view('partials.show', compact('emp'));

        
    }

    public function create() {
        return view ('home');
    }

    public function store(request $request){

        $data = $request -> all();

        Employee::create($data);
    
        return redirect() -> route('home');
    
     }

     public function delete($id) {

        $emp = Employee::findOrFail($id);
        $emp -> delete();
        return redirect() -> route('home');

     }
}


