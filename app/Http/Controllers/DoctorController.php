<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public $doctor;
    public function index(){
        $departments = Department::latest()->get();
        $doctors = Doctor::latest()->get();
        return view('doctor.doctor.index',compact('departments','doctors'));
    }

    public function create(Request $request){
        $this->doctor = new Doctor();
        $this->doctor->department_id = $request->department_id;
        $this->doctor->name = $request->name;
        $this->doctor->phone = $request->phone;
        $this->doctor->fee = $request->fee;
        $this->doctor->save();
        return redirect()->back();
    }
}
